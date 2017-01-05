<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class MMKC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'MMKC {name=false}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'chenrong make controller ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(!$this->argument('name')){
            exit('error empty name');
        }
        $base_path = './app/Http/Controllers/';
        $base_namespace = 'App\Http\Controllers';

        // 获取传来的名称
        $name = $this->argument('name');

        // 获取文件名
        if( strripos($name, '/') ){
            $file_name = substr($name, strripos($name, '/')+1, strlen($name));
        } else {
            $file_name = $name;
        }

        // 定义文件路径
        $path = $base_path.$this->argument('name').'Controller.php';
        if ( file_exists($path) ) {
            $status = $this->choice('FILE EXISTS ', ['YES', 'NO']);
            if ($status == 'NO') {
                $this->comment("quit");
                exit();
            }
        }

        // 文件夹路径
        $dir_path = strripos($name, '/');
        if($dir_path){

            // 获取后缀
            $dir_path = substr($name, 0, $dir_path);

            // 组装命名空间
            $base_namespace = $base_namespace.'\\'.$dir_path;

            // 组装路径
            $dir_path = $base_path.$dir_path;

            // 不存在就创建
            if(!is_dir($dir_path) && !mkdir($dir_path, true)){
                $this->error('ERROR mkdir failed');
                exit;
            }
        }

        // 替换
        $str = file_get_contents('./chenrong/base_controller.php');
        $str = str_replace('{VAR_NAME}', $file_name, $str);
        $str = str_replace('{VAR_DATE}', date('Y-m-d H:i:s'), $str);
        $str = str_replace('{VAR_NAMESPACE}', $base_namespace, $str);

        // 写文件
        $status = file_put_contents($path, $str);
        if ($status) {
            $this->comment('SUCCESS NAME:  '.$file_name. '    PATH:  '.$path);
        } else {
            $this->error('ERROR File creation failed ');
        }
    }
}

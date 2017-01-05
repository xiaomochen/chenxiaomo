<?php
/**
 * 后台用户登录控制器
 * @author 陈荣
 * @date 2016-12-26 06:35:53
 */
namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session('admin')) {
            return redirect('admin/login');
        }
        return $next($request);
    }
}

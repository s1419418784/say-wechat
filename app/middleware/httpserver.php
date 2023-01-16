<?php
declare (strict_types = 1);

namespace app\middleware;

class httpserver
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        header('Access-Control-Allow-Origin: *');

        header('Access-Control-Max-Age: 1800');

        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE');

        header('Access-Control-Allow-Headers: Authorization,Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-CSRF-TOKEN, X-Requested-With, Token');

//        if (strtoupper($Request->method()) == "OPTIONS") {
//
//            return $next($request);
//
//        }



        return $next($request);
    }
}

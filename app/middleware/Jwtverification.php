<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2023/1/15
 * Time: 16:59
 */

namespace app\middleware;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Webman\MiddlewareInterface;
use Webman\Http\Response;
use Webman\Http\Request;

class Jwtverification implements MiddlewareInterface
{
    public function process(Request $request, callable $next): Response
    {
//        $jwt = $requests->get('token');
//        $key='sucanying';
//        JWT::$leeway = 60;
//        $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
//        $username = $decoded->username;
//        $roleid = new Admin();
//        $result = $roleid->adminroleid($username);
//        if (empty($result)) {
//            return jsonStatus(false,'您没有该权限');
//        }
//        $roleassoci = new Roleassocition();
//        $res = $roleassoci->roleassoci($result);
//        if ($res[0]['permissionscontroller'] == "*") {
//            return $next($request);
//        }
//        $controller = Request::controller();
//        $function = Request::action();
//        for ($j = 0; $j < count($res); $j++) {
//            $data[$j] = explode('_',$res[$j]['permissionscontroller']);
//
//            for ($i = 0; $i< count($data[$j]); $i++) {
//                $aa = explode('/', $data[$j][$i]);
//                $dataone =$aa[0];
//                $datatwo =$aa[1];
//                if ($controller == $dataone && $function == $datatwo){
//                    return $next($request);
//                }
//            }
//        }
//        return jsonStatus(false,$username);
        return jsonStatus(false,"dfljusdojsdo");
    }
}
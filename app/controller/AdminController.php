<?php
namespace app\controller;

use app\middleware\Jwtverification;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use support\Request;

class AdminController
{
    public function AdminLogin(Request $request)
    {
        $username=$request->post('username');
        $password=$request->post('password');
        if (empty($username) || empty($password)) {
            return jsonStatus(false,'登入失败');
        }
//        $model=new Admin();
        $password = md5($username.$password);
//        $result = $model->login($username,$password);
        $key='sucanying';
        $payload=[
            'username'=>$username,
            'password'=>$password,
        ];
//        if ($result == false) {
//            return jsonStatus(false,'登入失败');
//        }
        $jwt = JWT::encode($payload, $key, 'HS256');
        return jsonStatus(true,'登入成功',['token'=>$jwt]);
    }
}
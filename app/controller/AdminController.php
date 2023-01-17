<?php
namespace app\controller;

use app\middleware\Jwtverification;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use support\Request;
use support\Db;

class AdminController
{
    public function AdminLogin(Request $request)
    {
        Db::connection('mongodb')->collection('test')->insert([1,2,3]);
        return json(Db::connection('mongodb')->collection('test')->get());
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

    public function db(Request $request)
    {

    }
}
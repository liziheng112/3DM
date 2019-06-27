<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
	//注册
    public function reg()
    {
        return view('login.reg');
    }

     //注册执行
    public function regdo(Request $request)
    {
        $data = request()->all();
        // $name=request()->name;
        // $email=request()->email;
        // $pwd=request()->pwd;
        $data['pwd']=md5($data['pwd']);
        // dd($post['pwd']);
        $res=DB::table('user')->insert($data);
        if ($res) {
          echo json_encode(['code'=>1,'font'=>'注册成功']);
        }else{
            echo json_encode(['code'=>2,'font'=>'注册失败']);
        } 
    }

    //登录
    public function login()
    {
        return view('login.login');
    }

    public function logindo(Request $request)
    {
         // echo 1111;
        $name = request()->name;
        $pwd = request()->pwd;
        $pwd=md5($pwd);
        // dump($name);
        // dd($pwd);
        // $res=Login::where('name',$name)->where('pwd',$pwd)->first();
        $res=DB::table('user')->where('name','=',$name)->where('pwd','=',$pwd)->first();
        if(!empty($res)){
            session(['name'=>$name]);
            // dd($request->session()->all());
            
            echo json_encode(['code'=>1,'font'=>'登录成功']);
        }else{
            echo json_encode(['code'=>2,'font'=>'登录失败']);
        } 
    }

}

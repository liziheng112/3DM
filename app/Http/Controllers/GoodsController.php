<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagesize=config('app.pageSize');
        $data=DB::table('goods')->paginate($pagesize);
        return view('/goods/list',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('goods.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except(['_token']);
        //文件上传
        if ($request->hasFile('goods_big_pic')) {
            $res=$this->upload($request,'goods_big_pic');
            // dd($res);
            if ($res['code']) {
                $data['goods_big_pic']= $res['imgurl'];
            }
        }
       $res=DB::table('goods')->insert($data);
       // dd($res);
       if ($res) {
           return redirect('/goods/list');
       }else{
           return error('添加失败','/goods/add');
       }
    }

    //文件上传
    public function upload(Request $request,$file)
    {
        // dd($file);
        if ($request->file($file)->isValid()) {
            $photo=$request->file($file);
            // dump($photo);exit;

            // $extension = $photo->extension();
            $store_result = $photo->store(date('Ymd'));

            // dump($store_result);exit;
            // $store_result = $photo->storeAs('photo', 'test.jpg');

            return ['code'=>1,'imgurl'=>$store_result];
        }else{
            return ['code'=>0,'message'=>'上传过程出错'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DB::table('goods')->where(['goods_id'=>$id])->first();
        // dd($data);
        return view('goods.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data=$request->except(['_token']);
        //修改图片
        if ($request->hasFile('goods_big_pic')) {
            $res=$this->upload($request,'goods_big_pic');
            // dd($res);
            if ($res['code']) {
                $data['goods_big_pic']= $res['imgurl'];
            }
        }
        $goods_id=$request->goods_id;
        // echo $li_id;exit;
        $res=DB::table('goods')->where(['goods_id'=>$goods_id])->update($data);
        if ($res) {
            return redirect('/goods/list');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

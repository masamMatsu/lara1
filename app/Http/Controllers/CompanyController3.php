<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Goods; /*PersonをGoodsにする*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController3 extends Controller
{

    public function index(Request $request)
    {
        $items = DB::table('goods')->Paginate(15);
        return view('company.index3', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('company.add');
    }
    
    public function create(Request $request)
    {
        $post_data = $request->except('imagefile');
        $goods_image = $request->file('imagefile');
        var_dump($goods_image);
        /*$temp_path = $goods_image->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        $goods_id = $post_data['goods_id'];
        $goods_name = $post_data['goods_name'];
        $price = $post_data['price'];
        $category1 = $post_data['category1'];
        $category2 = $post_data['category2'];
        $size = $post_data['size'];
        $sex = $post_data['sex'];
        $color = $post_data['color'];
        $company_id = $post_data['company_id'];
    
        $data = array(
            'temp_path' => $temp_path,
            'goods_id' => $goods_id,
            'read_temp_path' => $read_temp_path,
            'goods_name' => $goods_name,
            'price' => $price,
            'category1' => $category1,
            'category2' => $category2,
            'size' => $size,
            'sex' => $sex,
            'color' => $color,
            'company_id' => $company_id,
                    );
        $request->session()->put('data', $data);
        return view('company.create', compact('data') );
    }
    public function confirm(Request $request) 
    {
        $data = $request->session()->get('data');
        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];
        $filename = str_replace('public/temp/', '', $temp_path);
        $storage_path = 'public/productimage/'.$filename;
        $request->session()->forget('data');
        Storage::move($temp_path, $storage_path);
        $read_path = str_replace('public/', 'storage/', $storage_path);
        $goods_id = $data['goods_id'];
        $goods_name = $data['goods_name'];
        $price = $data['price'];
        $category1 = $data['category1'];
        $category2 = $data['category2'];
        $size = $data['size'];
        $sex = $data['sex'];
        $color = $data['color'];
        $company_id = $data['company_id'];
        $param = [
            'temp_path' => $temp_path,
            'goods_id' => $goods_id,
            'read_temp_path' => $read_temp_path,
            'goods_name' => $goods_name,
            'price' => $price,
            'category1' => $category1,
            'category2' => $category2,
            'size' => $size,
            'sex' => $sex,
            'color' => $color,
            'company_id' => $company_id,
                ];
        DB::table('goods')->insert($param);
        return redirect('/compnay3');
        /*$this->validate($request, Goods::$rules);
        $goods = new Goods;
        $form = $request->all();
        unset($form['_token']);
        $goods->timestamps = false;
        $goods->fill($form)->save();
        return redirect('/company3');*/
    }
    public function edit(Request $request)
    {
        $item = DB::table('goods')
            ->where('goods_id',$request->goods_id)->first();
        return view('company.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'goods_name' => $request->goods_name,
            'category1' => $request->category1,
            'category2' => $request->category2,
            'size' => $request->size,
            'color' => $request->color,
            'sex' => $request->sex,
            'company_id' => $request->company_id,
        ];
        DB::table('goods')
            ->where('goods_id',$request->goods_id)
            ->update($param);
        return redirect('/company3');
    }

    public function del(Request $request)
    {
        $item = DB::table('goods')
        ->where('goods_id',$request->goods_id)->first();
        return view('company.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Db::table('goods')
        ->where('goods_id',$request->goods_id)->delete();
        return redirect('/company3');
    }

}
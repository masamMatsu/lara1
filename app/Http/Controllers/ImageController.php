<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //追加
use Illuminate\Support\Facades\DB; //追加


class ImageController extends Controller
{
    public function getImageInput(){
        //降順に並べ替え
        $items = DB::select('select * from products order by product_id desc');
        
//        return view('gazo.image_input', ['items' => $items]);
        
        $test_1 = 123;
        return view('gazo.image_input')->with(['items' => $items,'test_1'=>$test_1]);

//        return view('gazo.image_input');
    }
    
//    public function postImageConfirm(ImageUploadRequest $request){
    public function postImageConfirm(Request $request){
        $post_data = $request->except('imagefile');
        $imagefile = $request->file('imagefile');
    
        $temp_path = $imagefile->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path); //追加    
        $product_name = $post_data['product_name'];
    
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, //追加
            'product_name' => $product_name,
        );
        $request->session()->put('data', $data);
    
        return view('gazo.image_confirm', compact('data') );
    }

//    public function getImageComplete(Request $request) {
    public function postImageComplete(Request $request) {
        $data = $request->session()->get('data');
        $temp_path = $data['temp_path'];
        $read_temp_path = $data['read_temp_path'];
    
        $filename = str_replace('public/temp/', '', $temp_path);
        //ファイル名は$temp_pathから"public/temp/"を除いたもの
        $storage_path = 'public/productimage/'.$filename;
        //画像を保存するパスは"public/productimage/xxx.jpeg"
    
        $request->session()->forget('data');
    
        Storage::move($temp_path, $storage_path);
        //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
    
        $read_path = str_replace('public/', 'storage/', $storage_path);
        //商品一覧画面から画像を読み込むときのパスはstorage/productimage/xxx.jpeg"
        $product_name = $data['product_name'];
    
//        $this->productcontroller->path = $read_path;
//        $this->productcontroller->product_name = $product_name;
//        $this->productcontroller->save();

        $param = [
            'path' => $read_path,
            'product_name' => $product_name
        ];
        DB::table('products')->insert($param);

//        return view('image_complete');
        return redirect('/image_input');
    }

//    public function viewImage(Request $request)
//    {
//       $items = DB::select('select * from products');
//       return view('gazo.image_complete', ['items' => $items]);
//    }



    public function edit(Request $request)
    {
        $item = DB::table('products')
        ->where('product_id', $request->product_id)->first();
        return view('gazo.image_edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'product_id' => $request->product_id,
            'path' => $request->path,
        ];
        DB::table('products')
            ->where('product_id', $request->product_id)
            ->update($param);
        return redirect('/image_input');
    }

    public function del(Request $request)
    {
        $item = DB::table('products')
            ->where('product_id', $request->product_id)->first();
        return view('gazo.image_del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('products')
        ->where('product_id', $request->product_id)->delete();
        return redirect('/image_input');
    }
}

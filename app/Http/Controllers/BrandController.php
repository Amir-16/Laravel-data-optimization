<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        //dd('ok');

        $data['allData']=Brand::where('deleted','No')->orderBy('id','desc')->get();
        return view('brands.view-brands',$data);
        //dd($data->toArray());
      }

      public function add(){
       // dd('ok');
        return view('brands.add-brands');
      }

      public function store(Request $request){
      //  dd('ok');
       $request->validate([
                'name' => 'required|max:255|unique:brands,name'
              ]);
              $data =new Brand();
            if($request->hasFile('image')){
                $request->validate([
                    'image'   =>  'image|max:2048'
                  ]);
              $brandImage = $request->file('image');
                $name = $brandImage->getClientOriginalName();
                $uploadPath = 'upload/brand_images/';
                $imageUrl = $uploadPath.$name;
                $imageName = time().$name;
                $brandImage->move($uploadPath, $imageName);
                $data->image =$imageName;

            }

            $data->name= $request->name;
            $data->deleted='No';
            $data->save();
            $notification=array(
                                  'message'=>'Brand Successfully Added',
                                  'alert-type'=>'success'
                                   );
                                   return redirect()->route('brands.view')->with($notification);

      }


      public function edit($id){

       // dd('ok');
        $data['editData']=Brand::find($id);
        return view('brands.add-brands',$data);

      }

      public function update(Request $request,$id){
       //   dd('ok');
        $request->validate([
              'name' => 'required|max:255|regex:/(^([a-zA-z]+)(\d+)?$)/u|unique:brands,name,'.$request->id
              ]);

            $data =Brand::find($id);
            $data->name= $request->name;

            if($request->hasFile('image')){
                $request->validate([
                    'image'   =>  'image|max:1024'
                  ]);
              $brandImage = $request->file('image');
                $name = $brandImage->getClientOriginalName();
                $uploadPath = 'upload/brand_images/';
                $imageUrl = $uploadPath.$name;
                $imageName = time().$name;
                $brandImage->move($uploadPath, $imageName);
                $data->image =$imageName;
            }

            $data->deleted='No';
            $data->update();
            $notification=array(
                                  'message'=>'Brand Successfully Updated',
                                  'alert-type'=>'success'
                                   );
                                   return redirect()->route('brands.view')->with($notification);

      }

      public function delete(Request $request,$id){
        $brand =Brand::find($id);
        $brand->deleted='Yes';
        $brand->name =$brand->name.'-Deleted-'.$request->id;
        $brand->deleted_date =date('Y-m-d H-i-s');
        $brand->save();
        $notification=array(
                              'message'=>'Brand  Deleted',
                              'alert-type'=>'danger'
                               );
                               return redirect()->route('brands.view')->with($notification);
      }
}

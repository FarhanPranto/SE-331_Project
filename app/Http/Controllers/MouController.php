<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\MouModel;
use Auth;
Use Str;

class MouController extends Controller
{
    public function mou(){
        $data['getRecord']= MouModel::getRecord();
        return view('backend.mou.list' ,$data);
    }

    public function add_mou(){
        $data['getCategory'] = CategoryModel::getCategory();
        return view('backend.mou.add',$data);
    }

    public function insert_mou(Request $request){

        $save = new MouModel;
        $save->user_id     = Auth::user()->id;
        $save->title       = trim($request->title);
        $save->category_id = trim($request->category_id);
        $save->description = trim($request->description);
        $save->status      = trim($request->status);
        $save->save();

        $slug = Str::slug($request->title);

        $checkSlug = MouModel::where('slug','=',$slug)->first();
        if(!empty($checkSlug))
        {
            $dbslug = $slug.'-'.$save->id;
        }
        else
        {
            $dbslug = $slug;
        }
        $save->slug = $dbslug;

        if(!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $randomStr = date('Ymdhis').Str::random(10);
            $filename = $dbslug.'.'.$ext;
            $file->move('upload/blog/',$filename);

            $save->image_file = $filename;
        }
        $save->save();

        return redirect('panel/mou/list')->with('success','Blog successfully created');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;



class BlogController extends Controller
{
    public function create()
    {
        return view('admin.layouts.blog.create');
    }
    public function store(Request $request)
    {
        
        if(!file_exists(public_path('images/blog')))
        {
            mkdir(public_path('images/blog'),0777,true);
        }

        if(!empty($request->image))
        {
            $image=$request->image;
            $name=$image->getClientOriginalName();
            $imagename=time()."_".$name;
            $destination=public_path('images/blog');
            $image->move($destination,$imagename);
            
        }
        $data['image']='images/blog/'.$imagename;
        $data['tag']=$request->tag;
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['author_name']=$request->author_name;


        Blog::create($data);
        Alert::success('Success', 'Successfully created a new blog');

        return redirect()->back();
    }
}

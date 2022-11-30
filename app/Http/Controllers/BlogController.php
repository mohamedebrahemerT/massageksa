<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newes;
use App\comment;

class BlogController extends Controller
{
    public function Blog()
    {
        $newess= newes::paginate(3);
        $randomNewess= newes::inrandomOrder()->take(3)->get();
        $randomNewess1= newes::inrandomOrder()->take(1)->get();
        return view('forentend.Blog.Blog',compact('newess','randomNewess','randomNewess1'));
    }

    public function addComment(Request $request,$id){
        $comment=comment::create($request->only('comment')+['user_id'=>auth()->id(),'newes_id'=>$id]);
        return redirect()->back();
    }

    public function editComment(Request $request,$id){
        $comment=comment::where('id',$id)->where('user_id',auth()->id())->firstOrFail();
        return view('forentend.blog-single.edit-comment',['comment'=>$comment]);
    }

    public function updateComment(Request $request,$id){
        $comment=comment::where('id',$id)->where('user_id',auth()->id())->firstOrFail();
        $comment->update($request->only('comment'));
        return redirect()->back();
    }
    public function deleteComment($id)
    {
        $comment=comment::where('id',$id)->where('user_id',auth()->id())->firstOrFail();
        $comment->delete();
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\CommentModel;
use App\Models\User;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function abc(PostRequest $request)
    {
        $data = new PostModel;             
        $data->username = $request->username;
        $data->gender = $request->gender;
        $data->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PostModel;             
        $data->user_login_name = $request->user_login_name;
        $data->post_msg = $request->post_msg;
        $data->save();
        return redirect()->back();
    }

    public function addfriend($id)
    { 
        $data = User::all();
        $data = PostModel::all();
        return view('pages.people',compact('data','data'));
    }
    public function addthepost()
    { 
        $data = PostModel::all();
        $comment = CommentModel::all();
        return view('pages.index',compact('data','comment'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}

<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isEditor() || Auth::user()->isAuthor() ){
           return redirect('/admin/');
        }
        
        $photos = Photo::whereIn('name', ['home', 'event'])->get();
        return view('admin.media.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->isEditor() || Auth::user()->isAuthor() ){
           return redirect('/admin/');
        }
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $filename = $request["name"];
        if($filename == 'home'){


            $file = $request->file('file');

            $name = $filename.time().".".$file->getClientOriginalExtension();
            $file->move('images', $name);

            Photo::create(['path'=>$name, 'name'=>$filename]);
        }
        if($filename == 'event'){

            $file = $request->file('file');

            $name = $filename.time().".".$file->getClientOriginalExtension();
            $file->move('images', $name);

            Photo::create(['path'=>$name, 'name'=>$filename]);
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
    public function destroy($id)
    {
        //
        $photo = Photo::findOrFail($id);

        unlink(public_path() . $photo->path);

        $photo->delete();

        Session::flash('deleted_media', 'Photo has been deleted');

        return redirect('/admin/media');
    }
}

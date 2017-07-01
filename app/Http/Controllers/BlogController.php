<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;
use Session;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $blogs = Blog::all();
        return view('blogs.index',array('blogs' => $blogs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'title' => 'required',
        'content' => 'required'
        ]);

        $input = $request->all();

        Blog::create($input);

        Session::flash('flash_message', 'Blog successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->blog = Blog::find($id);
        return view('blogs.show')
            ->with('blog', $this->blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('blogs.edit')->with('blog', $this->blog);
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
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $blogData = $request->all();
        
        //update post data
        Blog::find($id)->update($blogData);
        
        //store status message
        Session::flash('success_msg', 'blog updated successfully!');

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Blog deleted successfully!');

        return redirect()->route('blogs.index');
    }
}

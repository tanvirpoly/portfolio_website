<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Main;

class MainPagesController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function admin(){
        return view('backend.admin');
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $main = Main::first();
        return view('backend.main', compact('main'));
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',

        ]);

        $main = Main::first();
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

 // background image

        if($request->file('bc_img')){
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/bc_img/','bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/bc_img/bc_img.' . $img_file->getClientOriginalExtension();
        }
        

// Logo
       
        if($request->file('logo')){
            $logo_file = $request->file('logo');
            $logo_file->storeAs('public/logo/','logo.' . $logo_file->getClientOriginalExtension());
            $main->logo = 'storage/logo/logo.' . $logo_file->getClientOriginalExtension();
        }

// Pdf/Resume

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf_resume/','resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf_resume/resume.' . $pdf_file->getClientOriginalExtension();
        }

// favicon Icon


        if($request->file('favicon')){
            $favicon_file = $request->file('favicon');
            $favicon_file->storeAs('public/favicon/','favicon.' . $favicon_file->getClientOriginalExtension());
            $main->favicon = 'storage/favicon/favicon.' . $favicon_file->getClientOriginalExtension();
        }






        $main->save();

        return redirect()->route('admin.main')->with('success', "Main Page data has been updated successfully");



    }


}

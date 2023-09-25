<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Portfolio;

class PortfolioPagesController extends Controller
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
    
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $portfolios = Portfolio::all();
        return view('backend.portfolios.list', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'big_image' => 'required|image',
            'small_image' => 'required|image',
            'description' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',

        ]);

        $portfolios = new Portfolio;
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;

        $big_file = $request->file('big_image');
        Storage::putFile('public/big_image/', $big_file);
        $portfolios->big_image = "storage/big_image/".$big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putFile('public/small_image/', $small_file);
        $portfolios->small_image = "storage/small_image/".$small_file->hashName();



        $portfolios->save();

        return redirect()->route('admin.portfolios.create')->with('success', "New Portfolio create successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::find($id);
        return view('backend.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'description' => 'required|string',
            'client' => 'required|string',
            'category' => 'required|string',

        ]);

        $portfolios = Portfolio::find($id);
        $portfolios->title = $request->title;
        $portfolios->sub_title = $request->sub_title;
        $portfolios->description = $request->description;
        $portfolios->client = $request->client;
        $portfolios->category = $request->category;

        if($request->file('big_image')){

            $big_file = $request->file('big_image');
            Storage::putFile('public/big_image/', $big_file);
            $portfolios->big_image = "storage/big_image/".$big_file->hashName();

        }

        if($request->file('small_image')){

            $small_file = $request->file('small_image');
            Storage::putFile('public/small_image/', $small_file);
            $portfolios->small_image = "storage/small_image/".$small_file->hashName();

        }



        $portfolios->save();

        return redirect()->route('admin.portfolios.list')->with('success', "Portfolio Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);
        @unlink(public_path($portfolio->big_image));
        @unlink(public_path($portfolio->small_image));
        $portfolio->delete();

        return redirect()->route('admin.portfolios.list')->with('success','Portfolio Deleteed Successfully');
    }
}

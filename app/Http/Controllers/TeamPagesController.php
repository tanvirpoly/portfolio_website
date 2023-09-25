<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Team;

class TeamPagesController extends Controller
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
        $teams = Team::all();
        return view('backend.teams.list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            'team_image' => 'required|image',
            

        ]);

        $teams = new Team;
        $teams->title = $request->title;
        $teams->sub_title = $request->sub_title;
        $teams->linkedin = $request->linkedin;
        $teams->facebook = $request->facebook;
        $teams->twitter = $request->twitter;

        $team_image_file = $request->file('team_image');
        Storage::putFile('public/team_image/', $team_image_file);
        $teams->team_image = "storage/team_image/".$team_image_file->hashName();

        $teams->save();

        return redirect()->route('admin.teams.create')->with('success', "New Team create successfully");
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
        $team = Team::find($id);
        return view('backend.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',

        ]);

        $teams = Team::find($id);
        $teams->title = $request->title;
        $teams->sub_title = $request->sub_title;

        if($request->file('linkedin')){
            $teams->linkedin = $request->linkedin;
        }

        if($request->file('facebook')){
            $teams->facebook = $request->facebook;
        }

        if($request->file('twitter')){
            $teams->twitter = $request->twitter;
        }


        if($request->file('team_image')){

            $team_image_file = $request->file('team_image');
            Storage::putFile('public/team_image/', $team_image_file);
            $teams->team_image = "storage/team_image/".$team_image_file->hashName();

        }



        $teams->save();

        return redirect()->route('admin.teams.list')->with('success', "Team Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        @unlink(public_path($team->team_image));
      
        $team->delete();

        return redirect()->route('admin.teams.list')->with('success','Team Deleteed Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\About;
use App\Models\Team;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\View\View;

class PagesController extends Controller
{

    
    
    public function index(){
        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $abouts = About::all();
        $teams = Team::all();
        return view('frontend.index', compact('main','services','portfolios','abouts','teams'));
    }

    // public function main(){
    //     return view('backend.main');
    // }


}

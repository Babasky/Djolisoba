<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Infirmier;
use App\Models\Technicien;
use App\Models\Assistant;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if($user->statut == 'assistant')
        {
            $assistant = Assistant::where ('userId', $user->id)->first();
            return view ('assistants.dashboard',compact('assistant'));
        }

        elseif($user->statut == 'infirmier')
        {
            $infirmier = Infirmier::where ('userId', $user->id)->first();

            return view ('infirmiers.dashboard',compact('infirmier'));

        }

        elseif($user->statut == 'technicien')
        {
            $technicien = Technicien::where ('userId', $user->id)->first();

            return view ('techniciens.dashboard',compact('technicien'));

        }

        else
        {
          return view('home');  
        }
        
    
    }

}


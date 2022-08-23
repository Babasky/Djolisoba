<?php

namespace App\Http\Controllers;

use App\Models\Technicien;
use App\Models\User;
use Illuminate\Http\Request;

class TechnicienController extends Controller
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

    public function dashboard(){
        return view ('techniciens.dashboard');
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
        return view('techniciens.technicienStore');
    }

    public function TechnicienStore(Request $request){
        $verification = $request->validate([
            'nom'=>['required','string','max:100'],
            'prenom'=>['required','string','max:100'],
            'email'=>['required','string','max:200'],
            'contact'=>['required','string','max:30'],
            'fonction'=>['required','string','max:255'],
            'password'=>['required','string','min:8','max:20'],
        ]);
        
        if($verification){
            $user = User::create([
                'nom'=>$request['nom'],
                'prenom'=>$request['prenom'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['password']),
                'statut'=>'technicien'
            ]);
        }


        if($user){
            $technicien = Technicien::create([
                'nom'=>$request['nom'],
                'prenom'=>$request['prenom'],
                'email'=>$request['email'],
                'fonction'=>$request['fonction'],
                'contact'=>$request['contact'],
                'password'=>bcrypt($request['password']),
                'userId'=>$user->id,
            ]);

            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function show(Technicien $technicien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function edit(Technicien $technicien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technicien $technicien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technicien  $technicien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technicien $technicien)
    {
        //
    }
}

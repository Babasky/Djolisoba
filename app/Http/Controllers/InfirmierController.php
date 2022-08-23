<?php

namespace App\Http\Controllers;

use App\Models\Infirmier;
use App\Models\User;
use Illuminate\Http\Request;

class InfirmierController extends Controller
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
        return view ('infirmiers.dashboard');
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
        return view('infirmiers.infirmierStore');
    }
    
    public function InfirmierStore(Request $request){
        $verification = $request->validate([
            'nom'=>['required','string','max:100'],
            'prenom'=>['required','string','max:100'],
            'email'=>['required','string','max:200'],
            'contact'=>['required','string','max:30'],
            'fonction'=>['required','string','max:200'],
            'password'=>['required','string','min:8','max:20','confirmed']
        ]);

        if($verification){
            $user = User::create([
                'nom'=>$request['nom'],
                'prenom'=>$request['prenom'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['password']),
                'statut'=>'infirmier',
            ]);
        }
        
        if($user){
            $infirmier = Infirmier::create([
                'nom'=>$request['nom'],
                'prenom'=>$request['prenom'],
                'email'=>$request['email'],
                'fonction'=>$request['email'],
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
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function show(Infirmier $infirmier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function edit(Infirmier $infirmier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infirmier $infirmier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infirmier  $infirmier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infirmier $infirmier)
    {
        //
    }
}

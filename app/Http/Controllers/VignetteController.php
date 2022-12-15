<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vignette;

class VignetteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vignettes = Vignette::all();
        return view('welcome', ['vignettes' => $vignettes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vignettes = Vignette::all();
        return view('add', ['vignettes' => $vignettes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vignette = new Vignette;
        $vignette->legende = $request->set_legende;
        $vignette->url = $request->set_url;
        $vignette->description = $request->set_description;
        $vignette->statut = $request->statut_number;
        $vignette->save();
        return redirect ('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vignette = Vignette::findOrFail($id);
        return view('show', ['vignette' => $vignette]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vignette = Vignette::findOrFail($id);
        return view('edit', ['vignette' => $vignette]);
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
        $vignette = Vignette::findOrFail($id);
        $vignette->legende = $request->set_legende;
        $vignette->url = $request->set_url;
        $vignette->description = $request->set_description;
        $vignette->statut = $request->statut_number;
        $vignette->save();
        return redirect ('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Vignette::destroy($request->id);
        return redirect('/home');
    }
}

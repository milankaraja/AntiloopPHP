<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Authors;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        #return view('blogarticles');

        $articles = Aticles::all();
        

            return view('blogarticles',[
                'articles'=>$articles
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $articles = new Articles();
        $authors = new Authors();

        $articles -> title = $request ->title;
        $articles -> content = $request ->content;

        var_dump($request);


        $authors -> firstName  = $request ->author -> firstName;
        $authors -> lastName = $request ->author -> lastName;

        $articles -> save();
        $authors-> save();

        

        return redirect('/blogarticles');



        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->author()->articles()->create($request);
        #$request->user()->trades()->create($validated);
        #dd($modifiedRequest);
 
        return redirect(route('blogarticles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articles $articles)
    {
        //
    }
}

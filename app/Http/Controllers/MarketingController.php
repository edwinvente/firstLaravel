<?php

namespace App\Http\Controllers;

use App\marketing;
use Illuminate\Http\Request;

class MarketingController extends Controller
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
        $status = false;
        $post = new marketing;

        
        $correo = $post->where('mail', $request->get('mail'));

        return json_encode($correo);

        //$existe = $post::where('mail', '=', $request->get('mail'))->firstOrfail();

       /* $post->mail = $request->get('mail');


        if ($post->save()) {
            $status = true;
        }
        return json_encode($status);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function show(marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function edit(marketing $marketing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, marketing $marketing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(marketing $marketing)
    {
        //
    }
}

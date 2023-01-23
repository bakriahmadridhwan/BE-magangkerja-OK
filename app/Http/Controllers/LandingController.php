<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use App\Notifications\sendEmail;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        return view('landing.home.index', [
            'footers' => $footers,
        ]);

        // $user = 'bahridhwan@gmail.com';

        // $details = [
        //     'greeting' => 'Hai',
        //     'body' => 'Email',
        //     'actiontext' => 'ok',
        //     'actionurl' => '/',
        //     'lastline' => 'last',
        // ];

        // Notification::route('mail', $user)->notify(new sendEmail($details));
        // Mail::to($user)->send(new testMail());
        // dd('done');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

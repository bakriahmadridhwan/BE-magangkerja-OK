<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Mentor;
use App\Models\Peserta;
use App\Models\Question;
use App\Models\Tachievement;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Question $question, Testimoni $testimoni, Event $event, Mentor $mentor, Achievement $achievement, Peserta $peserta,)
    {
        $title = 'Dashboard Admin';
        $Users = User::where('email', $request->email)->first();
        return view('admin.index', [
            'question' => $question->count(),
            'testimoni' => $testimoni->count(),
            'softDeleted' => Question::onlyTrashed()->count(),
            'event' => $event->count(),
            'mentor' => $mentor->count(),
            'achievement' => $achievement->count(),
            'peserta' => $peserta->count(),
            'events' => Event::latest()->take(3)->get(),
            'questions' => Question::latest()->take(3)->get(),
            'footers' => Footer::where('id', 1)->get(),
            'tachievements' => Tachievement::where('id', 1)->get(),
            'headers' => Header::where('id', 1)->get(),
            'title' => $title,
        ]);
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

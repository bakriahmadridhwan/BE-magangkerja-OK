<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admincomponent.about.intro', [
            'intros' => Intro::where('id', 1)->get(),
            // 'intros' => Intro::latest()->get(),
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
    public function show(Intro $intro)
    {
        return view('admincomponent.about.introShow', [
            'intro' => $intro,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Intro $intro)
    {
        return view('admincomponent.about.introEdit', [
            'intro' => $intro,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intro $intro)
    {
        // return $request->file('image')->store('intro-images');
        $rules = [
            'image' => 'image|file|max:1024',
            'tagline' => 'required|max:25',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('intro-images');
        }

        Intro::where('id', $intro->id)->update($validatedData);
        return redirect('/dashboard/intros')->with('success', 'berhasil diubah!');
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

<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admincomponent.pencapaian.achievement', [
            'achievements' => Achievement::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincomponent.pencapaian.achievementCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'judul' => 'required',
            'partisipan' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('achievement-images');
        }

        Achievement::create($validatedData);
        return redirect('/dashboard/achievements')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        return view('admincomponent.pencapaian.achievementShow', [
            'achievement' => $achievement,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        return view('admincomponent.pencapaian.achievementEdit', [
            'achievement' => $achievement,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        $rules = [
            'image' => 'image|file|max:1024',
            'judul' => 'required',
            'partisipan' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('achievement-images');
        }

        Achievement::where('id', $achievement->id)->update($validatedData);
        return redirect('/dashboard/achievements')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        Achievement::destroy($achievement->id);
        return redirect('dashboard/achievements')->with('success', 'berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tachievement;
use Illuminate\Http\Request;

class TachievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admincomponent.pencapaian.tachievement', [
            'tachievements' => Tachievement::latest()->get(),
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
    public function show(Tachievement $tachievement)
    {
        return view('admincomponent.pencapaian.tachievementShow', [
            'tachievement' => $tachievement,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tachievement $tachievement)
    {
        return view('admincomponent.pencapaian.tachievementEdit', [
            'tachievement' => $tachievement,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tachievement $tachievement)
    {
        $validatedData = $request->validate([
            'tEvent' => 'required|numeric',
            'tPartisipan' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        Tachievement::where('id', $tachievement->id)->update($validatedData);
        return redirect('/dashboard/tachievements')->with('success', 'berhasil diubah!');
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

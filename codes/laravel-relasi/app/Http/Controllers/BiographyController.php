<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biography;
use Illuminate\Support\Facades\Auth;

class BiographyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biography = Biography::where('user_id', Auth::id())->first();
        return view('biographies.index', compact('biography'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $biography = Biography::where('user_id', Auth::id())->first();
        return view('biographies.create', compact('biography'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['content' => 'required',]);

        $biography = Biography::updateOrCreate(
            ['user_id' => Auth::id()],
            ['content' => $request->content]
        );

        return redirect()->route('biographies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biography $biography)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biography $biography)
    {
        return view('biographies.edit', compact('biography'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biography $biography)
    {
        $request->validate(['content' => 'required',]);
        $biography->update($request->all());
        return redirect()->route('biographies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuruRequest;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $gurus = Guru::all();
        if ($request->has('search')) {
            $gurus = Guru::where('nama', 'like', "%{$request->search}%")->get();
        }
        return view('gurus.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gurus = Guru::all();
        return view('gurus.create', compact('gurus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuruRequest $request)
    {
        Guru::create($request->validated());

        return redirect()->route('gurus.index')->with('message', 'Guru Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('gurus.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuruRequest $request, Guru $guru)
    {
        $guru->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('gurus.index')->with('message', 'Guru Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('gurus.index')->with('message', 'Guru Deleted Successfully');
    }
}

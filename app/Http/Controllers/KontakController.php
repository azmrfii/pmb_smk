<?php

namespace App\Http\Controllers;

use App\Http\Requests\KontakRequest;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
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
        $kontaks = Kontak::all();
        if ($request->has('search')) {
            $kontaks = Kontak::where('lokasi', 'like', "%{$request->search}%")->get();
        }
        return view('kontaks.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontaks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KontakRequest $request)
    {
        Kontak::create($request->validated());

        return redirect()->route('kontaks.index')->with('message', 'Kontak Created Successfully');
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
    public function edit(Kontak $kontak)
    {
        return view('kontaks.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KontakRequest $request, Kontak $kontak)
    {
        $kontak->update([
            'map' => $request->map,
            'lokasi' => $request->lokasi,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('kontaks.index')->with('message', 'Kontak Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();

        return redirect()->route('kontaks.index')->with('message', 'Kontak Deleted Successfully');
    }
}

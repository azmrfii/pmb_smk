<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
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
        $profils = Profil::all();
        if ($request->has('search')) {
            $profils = Profil::where('judul', 'like', "%{$request->search}%")->get();
        }
        return view('profils.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfilRequest $request)
    {
        Profil::create($request->validated());

        return redirect()->route('profils.index')->with('message', 'Profil Created Successfully');
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
    public function edit(Profil $profil)
    {
        return view('profils.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfilRequest $request, Profil $profil)
    {
        $profil->update([
            'judul' => $request->judul,
            'teks' => $request->teks,
        ]);

        return redirect()->route('profils.index')->with('message', 'Profil Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();

        return redirect()->route('profils.index')->with('message', 'Profil Deleted Successfully');
    }
}

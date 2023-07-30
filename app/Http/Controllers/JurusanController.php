<?php

namespace App\Http\Controllers;

use App\Http\Requests\JurusanRequest;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
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
        $jurusans = Jurusan::all();
        if ($request->has('search')) {
            $jurusans = Jurusan::where('jurusan', 'like', "%{$request->search}%")->get();
        }
        return view('jurusans.index', compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JurusanRequest $request)
    {
        Jurusan::create($request->validated());

        return redirect()->route('jurusans.index')->with('message', 'Jurusan Created Successfully');
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
    public function edit(Jurusan $jurusan)
    {
        return view('jurusans.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JurusanRequest $request, Jurusan $jurusan)
    {
        $jurusan->update([
            'jurusan' => $request->jurusan,
            'teks' => $request->teks,
            'icon' => $request->icon,
        ]);

        return redirect()->route('jurusans.index')->with('message', 'Jurusan Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()->route('jurusans.index')->with('message', 'Jurusan Deleted Successfully');
    }
}

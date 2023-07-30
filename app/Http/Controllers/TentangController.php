<?php

namespace App\Http\Controllers;

use App\Http\Requests\JurusanRequest;
use App\Http\Requests\TentangRequest;
use App\Models\Jurusan;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
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
        $tentangs =Tentang::all();
        if ($request->has('search')) {
            $tentangs =Tentang::where('judul', 'like', "%{$request->search}%")->get();
        }
        return view('tentangs.index', compact('tentangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tentangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TentangRequest $request)
    {
        Tentang::create($request->validated());

        return redirect()->route('tentangs.index')->with('message', 'tentang Created Successfully');
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
    public function edit(Tentang $tentang)
    {
        return view('tentangs.edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TentangRequest $request, Tentang $tentang)
    {
        $tentang->update([
            'judul' => $request->judul,
            'teks' => $request->teks,
        ]);

        return redirect()->route('tentangs.index')->with('message', 'Tentang Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tentang $tentang)
    {
        $tentang->delete();

        return redirect()->route('tentangs.index')->with('message', 'Tentang Deleted Successfully');
    }
}

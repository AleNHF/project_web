<?php

namespace App\Http\Controllers;

use App\Models\Modo;
use Illuminate\Http\Request;

/**
 * Class ModoController
 * @package App\Http\Controllers
 */
class ModoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modos = Modo::paginate();

        return view('modo.index', compact('modos'))
            ->with('i', (request()->input('page', 1) - 1) * $modos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modo = new Modo();
        return view('modo.create', compact('modo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modo::$rules);

        $modo = Modo::create($request->all());

        return redirect()->route('modos.index')
            ->with('success', 'Modo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modo = Modo::find($id);

        return view('modo.show', compact('modo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modo = Modo::find($id);

        return view('modo.edit', compact('modo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modo $modo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modo $modo)
    {
        request()->validate(Modo::$rules);

        $modo->update($request->all());

        return redirect()->route('modos.index')
            ->with('success', 'Modo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modo = Modo::find($id)->delete();

        return redirect()->route('modos.index')
            ->with('success', 'Modo deleted successfully');
    }
}

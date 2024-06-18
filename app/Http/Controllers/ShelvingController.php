<?php

namespace App\Http\Controllers;

use App\Models\Shelving;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ShelvingRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ShelvingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $shelvings = Shelving::paginate();

        return view('shelving.index', compact('shelvings'))
            ->with('i', ($request->input('page', 1) - 1) * $shelvings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $shelving = new Shelving();

        return view('shelving.create', compact('shelving'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShelvingRequest $request): RedirectResponse
    {
        Shelving::create($request->validated());

        return Redirect::route('shelvings.index')
            ->with('success', 'Shelving created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $shelving = Shelving::find($id);

        return view('shelving.show', compact('shelving'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $shelving = Shelving::find($id);

        return view('shelving.edit', compact('shelving'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShelvingRequest $request, Shelving $shelving): RedirectResponse
    {
        $shelving->update($request->validated());

        return Redirect::route('shelvings.index')
            ->with('success', 'Shelving updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Shelving::find($id)->delete();

        return Redirect::route('shelvings.index')
            ->with('success', 'Shelving deleted successfully');
    }
}

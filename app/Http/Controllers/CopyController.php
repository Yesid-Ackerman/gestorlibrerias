<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CopyRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $copies = Copy::paginate();

        return view('copy.index', compact('copies'))
            ->with('i', ($request->input('page', 1) - 1) * $copies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $copy = new Copy();

        return view('copy.create', compact('copy'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CopyRequest $request): RedirectResponse
    {
        Copy::create($request->validated());

        return Redirect::route('copies.index')
            ->with('success', 'Copy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $copy = Copy::find($id);

        return view('copy.show', compact('copy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $copy = Copy::find($id);

        return view('copy.edit', compact('copy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CopyRequest $request, Copy $copy): RedirectResponse
    {
        $copy->update($request->validated());

        return Redirect::route('copies.index')
            ->with('success', 'Copy updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Copy::find($id)->delete();

        return Redirect::route('copies.index')
            ->with('success', 'Copy deleted successfully');
    }
}

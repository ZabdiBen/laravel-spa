<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Portfolio extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $portfolio = [
						['title' => 'Proyecto #1'],
						['title' => 'Proyecto #2'],
						['title' => 'Proyecto #3'],
						['title' => 'Proyecto #4'],
						['title' => 'Proyecto #5'],
						['title' => 'Proyecto #6']
				];
				
				return response()->view('portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HabitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create(): View
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->habits()->create($validated);

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if ($habit->user_id !== auth()->user()->id) {
            abort(403,'Esse hábito não te pertence');
        }

        $habit->update($request->all());

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== auth()->user()->id) {
            abort(403,'Esse hábito não te pertence');
        }

        $habit->delete();

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito atualizado com sucesso');
    }

    public function edit(Habit $habit): View
    {
        return view('habits.edit', compact('habit'));
    }
}

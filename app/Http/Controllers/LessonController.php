<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Level;


class LessonController extends Controller
{
    const NUMBER_OF_ITEMS_PER_PAGE = 25;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Lessons/Index', ['lessons' => $lessons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $levels = Level::all();
        return inertia('Lessons/Create', ['categories' => $categories, 'levels' => $levels]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

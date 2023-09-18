<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categories::all();
        // dd($categories);
        return view('categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'detail' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'name.required' => 'name không được rỗng',
            'name.min' => 'name phải lơn hơn 5 ký tự',
            'detail.required' => 'detail không được rỗng',
            'detail.min' => 'detail phải lơn hơn 10 ký tự',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $path = 'image/';
            $profileImage = date('YdmHis') . "." . $image->getClientOriginalExtension();
            $image->move($path, $profileImage);
            $input['image'] = $profileImage;
            categories::create($input);
            return redirect()->route('categories.index')->with('msg', 'Categories created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        //
    }
}

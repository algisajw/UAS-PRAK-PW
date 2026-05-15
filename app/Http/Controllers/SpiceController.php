<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spice;
use App\Models\Category;

class SpiceController extends Controller {
    public function index() {
        $spices = Spice::with('category')->get();
        return view('spices.index', compact('spices'));
    }

    public function create() {
        $categories = Category::all();
        return view('spices.create', compact('categories'));
    }

    public function store(Request $request) {
        Spice::create($request->all());
        return redirect('/spices');
    }

    public function edit(Spice $spice) {
        $categories = Category::all();
        return view('spices.edit', compact('spice', 'categories'));
    }

    public function update(Request $request, Spice $spice) {
        $spice->update($request->all());
        return redirect('/spices');
    }

    public function destroy(Spice $spice) {
        $spice->delete();
        return redirect('/spices');
    }
}

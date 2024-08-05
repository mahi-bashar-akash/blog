<?php

namespace App\Http\Controllers\UserController;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{

    // Display a listing of the resource.
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()], 422);
        }

        // Create the category
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    // Display the specified resource.
    public function show($id)
    {
        $category = Category::find($id);

        if ($category) {
            return response()->json($category);
        }

        return response()->json(['status' => 404, 'message' => 'Category not found'], 404);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validate request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()], 422);
        }

        // Find and update the category
        $category = Category::find($id);

        if ($category) {
            $category->update($request->all());
            return response()->json($category);
        }

        return response()->json(['status' => 404, 'message' => 'Category not found'], 404);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            return response()->json(null, 204);
        }

        return response()->json(['status' => 404, 'message' => 'Category not found'], 404);
    }

}

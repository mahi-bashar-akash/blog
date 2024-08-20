<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request): JsonResponse
    {
        $filter = [
            'limit' => $request->get('limit', 20),
            'keyword' => $request->get('keyword', ''),
            'orderBy' => $request->get('orderBy', 'dsc'),
        ];

        $categories = $this->categoryService->getAll($filter);
        return response()->json($categories, 200);

    }

    public function show($id): JsonResponse
    {
        try {
            $category = $this->categoryService->getById($id);
            return response()->json($category, 200);
        } catch ( \Exception $e ) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
    }

    public function store(CategoryRequest $request): JsonResponse
    {
        $data = $request->validated();
        $category = $this->categoryService->create($data);
        return response()->json($category, 201);
    }

    public function update(CategoryRequest $request, $id): JsonResponse
    {
        $data = $request->validated();
        try {
            $category = $this->categoryService->getById($id);
            $category = $this->categoryService->update($category, $data);
            return response()->json($category, 200);
        } catch ( \Exception $e ) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $category = $this->categoryService->getById($id);
            $this->categoryService->delete($category);
            return response()->json(['message' => 'Category deleted successfully'], 200);
        } catch ( \Exception $e ) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }

}

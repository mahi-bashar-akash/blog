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
        $validator = Validator::make($request->all(), [
            'limit' => 'nullable|integer',
            'keyword' => 'nullable|string',
            'orderBy' => 'nullable|string',
            'order' => 'nullable|in:asc,desc',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $filter = [
                'limit' => $request->limit ?? 20,
                'keyword' => $request->keyword ?? '',
                'orderBy' => $request->orderBy ?? 'name',
                'order' => $request->order ?? 'asc',
            ];

            $categories = $this->categoryService->getAll($filter);
            return response()->json($categories, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
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

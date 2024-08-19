<?php

namespace App\Http\Controllers\UserController;

use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends BaseController
{
    private BlogService $BlogService;

    public function __construct(BlogService $BlogService)
    {
        $this->BlogService = $BlogService;
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

            $categories = $this->BlogService->getAll($filter);
            return response()->json($categories, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
    }

    public function show($id): JsonResponse
    {
        try {
            $category = $this->BlogService->getById($id);
            return response()->json($category, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
    }

    public function store(BlogRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        try {
            $category = $this->BlogService->create($data);
            return response()->json($category, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
    }

    public function update(BlogRequest $request, $id): JsonResponse
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        try {
            $category = $this->BlogService->getById($id);

            if (Auth::id() !== $category->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            $category = $this->BlogService->update($category, $data);
            return response()->json($category, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $category = $this->BlogService->getById($id);

            if (Auth::id() !== $category->user_id) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }

            $this->BlogService->delete($category);
            return response()->json(['message' => 'Category deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    }
}

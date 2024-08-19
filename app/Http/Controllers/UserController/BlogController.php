<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    private BlogService $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(Request $request): JsonResponse
    {
        $filter = [
            'limit' => $request->get('limit', 20),
            'keyword' => $request->get('keyword', ''),
            'orderBy' => $request->get('orderBy', 'id'),
            'order' => $request->get('order', 'asc'),
        ];

        $blogs = $this->blogService->getAll($filter);
        return response()->json($blogs, 200);
    }

    public function show($id): JsonResponse
    {
        $blog = $this->blogService->getById($id);
        if ($blog) {
            $blog->increment('views_count');
            return response()->json($blog, 200);
        }
        return response()->json(['message' => 'Blog not found'], 404);
    }

    public function store(BlogRequest $request): JsonResponse
    {
        try {
            $authenticatedUser = Auth::guard('users')->user();
            if (!$authenticatedUser) {
                return response()->json(['status' => 401, 'message' => 'Unauthorized'], 401);
            }
            $data = $request->validated();
            $data['user_id'] = $authenticatedUser->id;
            $data['views_count'] = 0;
            if ($data['status'] === 'published') {
                $data['published_at'] = now();
            }
            $blog = $this->blogService->create($data);
            return response()->json(['message' => 'Blog created successfully', 'data' => $blog], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'errors' => $e->getMessage(), 'line' => $e->getLine()], 500);
        }
    }

    public function update(BlogRequest $request, $id): JsonResponse
    {
        $data = $request->validated();
        $blog = $this->blogService->getById($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $data['user_id'] = $blog->user_id;

        if ($data['status'] === 'published' && $blog->status !== 'published') {
            $data['published_at'] = now();
        } elseif ($data['status'] !== 'published' && $blog->status === 'published') {
            $data['published_at'] = null;
        }

        $blog = $this->blogService->update($blog, $data);
        return response()->json($blog, 200);
    }

    public function destroy($id): JsonResponse
    {
        $blog = $this->blogService->getById($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $this->blogService->delete($blog);
        return response()->json(['message' => 'Blog has been deleted successfully'], 200);
    }
}

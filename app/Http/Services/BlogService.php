<?php

namespace App\Http\Services;

use App\Models\Blog;

class BlogService
{

    public function create(array $data)
    {
        return Blog::create($data);
    }

    public function update(Blog $blog, array $data)
    {
        $blog->update($data);
        return $blog;
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
    }

    public static function getAll(array $filter)
    {
        $query = Blog::with(['author_info','category_info'])->orderBy('id', 'dsc');
        if (!empty($filter['keyword'])) {
            $query->where(function($q) use ($filter) {
                $q->where('name', 'LIKE', '%'.$filter['keyword'].'%');
            });
        }
        return $query->paginate($filter['limit']);
    }

    public function getById($id)
    {
        return Blog::findOrFail($id);
    }

}

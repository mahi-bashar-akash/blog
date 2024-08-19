<?php

namespace App\Http\Services;

use App\Models\Blog;

class BlogService
{

    public function create(array $data)
    {
        return Blog::create($data);
    }

    public function update(Blog $category, array $data)
    {
        $category->update($data);
        return $category;
    }

    public function delete(Blog $category)
    {
        $category->delete();
    }

    public static function getAll(array $filter)
    {
        $query = Blog::orderBy($filter['orderBy'], $filter['order']);
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

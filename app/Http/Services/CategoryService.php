<?php

namespace App\Http\Services;

use App\Models\Category;

class CategoryService
{

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(Category $category, array $data)
    {
        $category->update($data);
        return $category;
    }

    public function delete(Category $category)
    {
        $category->delete();
    }

    public static function getAll(array $filter)
    {
        $query = Category::orderBy($filter['orderBy'], $filter['order']);
        if (!empty($filter['keyword'])) {
            $query->where(function($q) use ($filter) {
                $q->where('name', 'LIKE', '%'.$filter['keyword'].'%');
            });
        }
        return $query->paginate($filter['limit']);
    }

    public function getById($id)
    {
        return Category::findOrFail($id);
    }

}

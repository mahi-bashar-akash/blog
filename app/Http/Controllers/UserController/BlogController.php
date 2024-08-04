<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

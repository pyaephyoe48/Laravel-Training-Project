<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [["id" => 1, "title" => "First Article"], ["id" => 2, "title" => "Second Article"],];
        return view('index', ['articles' => $data]);
    }

    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    }
}

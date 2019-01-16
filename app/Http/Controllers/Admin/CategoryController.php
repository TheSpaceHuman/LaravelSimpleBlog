<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //Category
    public function index() {
      $categories = Category::all();
      return view('admin.category.index', ['categories' => $categories]);
    }
  public function create() {
    $categories = Category::all();
    return view('admin.category.create');
  }
}

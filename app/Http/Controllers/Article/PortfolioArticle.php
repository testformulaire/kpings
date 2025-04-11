<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioArticle extends Controller
{
    public function index (){
        return view("Article.portfolio"); 
    }
}

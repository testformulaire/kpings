<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioControlleur extends Controller
{
    public function page_Acceuil(){
        return view('PageWeb.Acceuil');
    }

    public function page_Apropos(){
        return view('PageWeb.Apropos');
    }

    public function page_portfolio(){
        return view('PageWeb.Portfolio');
    }

    public function page_service(){
        return view('PageWeb.Service');
    }

    public function page_blog(){
        return view('PageWeb.Blog');
    }

    public function page_contacte(){
        return view('PageWeb.Contacte');
    }
}

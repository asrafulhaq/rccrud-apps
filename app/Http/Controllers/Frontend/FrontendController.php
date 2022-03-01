<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    /**
     * Show Home Page 
     */
    public function showHomePage()
    {
        return view('frontend.home');
    }

    /**
     * Show Home Page 
     */
    public function showMenuPage()
    {
        return view('frontend.menu');
    }


    /**
     * Show Home Page 
     */
    public function showBlogPage()
    {
        return view('frontend.blog');
    }

    /**
     * Show Home Page 
     */
    public function showStaffPage()
    {
        return view('frontend.staff');
    }
    




}

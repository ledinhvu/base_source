<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class HomeController extends AppBaseController
{
    public function index()
    {
        return view('welcome');
    }
}

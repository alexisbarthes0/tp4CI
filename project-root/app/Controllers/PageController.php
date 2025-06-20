<?php 

namespace App\Controllers;

use CodeIgniter\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('page_view');
    }
}
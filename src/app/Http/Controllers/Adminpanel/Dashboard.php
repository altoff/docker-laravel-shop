<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function index() {
        return 'This is the dashboard';
    }
}
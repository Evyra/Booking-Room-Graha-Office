<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('customers.packages.index', [
            'title' => 'Packages',
            'nvb' => 'packages'
        ]);
    }
}

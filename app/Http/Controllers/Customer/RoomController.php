<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('customers.rooms.index', [
            'title' => 'Rooms',
            'nvb' => 'rooms'
        ]);
    }
}

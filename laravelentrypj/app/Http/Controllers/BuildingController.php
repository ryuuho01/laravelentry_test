<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index_01()
        {
            return "建物です";
        }
    public function index_02($room)
        {
            return "部屋番号は{$room}です";
        }
}
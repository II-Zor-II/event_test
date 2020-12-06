<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    function getUser()
    {
        return response()->json(['user' => Auth::user()->toArray()]);
    }

    function getEvents()
    {
        return response()->json(
            [
                ['id' => 1, 'title' => 'Birthday', 'daysOfWeek' => ['0', '1', '5'], 'startRecur' => '2020-12-04', 'endRecur' => '2020-12-30'],
                ['id' => 2, 'title' => 'Covid', 'daysOfWeek' => ['2'], 'startRecur' => '2021-01-01', 'endRecur' => '2021-01-30']
            ]
        );
    }
}

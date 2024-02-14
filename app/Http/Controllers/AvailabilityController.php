<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvailabilityRequest;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function store(AvailabilityRequest $request)
    {
        dd($request->all());
    }
}

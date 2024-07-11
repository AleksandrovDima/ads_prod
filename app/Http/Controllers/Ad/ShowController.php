<?php

namespace App\Http\Controllers\Ad;


use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;

use App\Http\Requests\Ad\StoreRequest;
use App\Models\Ad;
use App\Models\Category;


use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(Ad $ad)
    {

        return view('ad.show', compact('ad'));
    }

}

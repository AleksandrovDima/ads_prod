<?php

namespace App\Http\Controllers\Ad;


use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;

use App\Http\Requests\Ad\StoreRequest;
use App\Models\Ad;
use App\Models\Category;


use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $request->user()->ads()->create($data);

        return redirect()->route('ad.index');
    }

}

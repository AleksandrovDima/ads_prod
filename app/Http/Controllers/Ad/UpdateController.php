<?php

namespace App\Http\Controllers\Ad;


use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;

use App\Http\Requests\Ad\UpdateRequest;
use App\Models\Ad;
use App\Models\Category;


use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(Ad $ad, UpdateRequest $request)
    {
        $data = $request->validated();

        $ad->update($data);
        return redirect()->route('ad.show', $ad->id);
    }

}

<?php

namespace App\Http\Controllers\Ad;


use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;

use App\Http\Requests\Ad\StoreRequest;
use App\Models\Ad;
use App\Models\Category;


use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(Ad $ad)
    {
        $this->authorize('delete', $ad);
        $ad->delete();
        return redirect()->route('ad.index');
    }

}

<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;
use App\Http\Requests\Ad\StoreRequest;
use App\Http\Requests\Ad\UpdateRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __invoke()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('ad.create', compact('categories', 'types'));
    }

}

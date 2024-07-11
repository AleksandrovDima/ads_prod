<?php

namespace App\Http\Controllers\Ad;


use App\Http\Controllers\Controller;
use App\Http\Controllers\FilterController;
use App\Http\Requests\Ad\FilterRequest;

use App\Models\Ad;
use App\Models\Category;


use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IndexController extends FilterController
{

    public function __invoke(FilterRequest $request)
    {

        $ads = $this->service->filter($request)->latest()->paginate(10);
        $categories = Category::all();
        $types = Type::all();

        return view('ad.index', compact('ads', 'categories', 'types', 'request'));

    }

}

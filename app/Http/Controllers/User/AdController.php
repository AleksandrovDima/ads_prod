<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;

use App\Models\Ad;
use App\Models\User;
use App\Models\Category;


use App\Models\Type;
use Illuminate\Http\Request;

class AdController extends Controller
{

    public function __invoke()
    {
        $ads = Ad::where('user_id', auth()->id())->latest()->paginate(10);


        $categories = Category::all();
        $types = Type::all();

        return view('ad.index', compact('ads', 'categories', 'types'));

    }

}

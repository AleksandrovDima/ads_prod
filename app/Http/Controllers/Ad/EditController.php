<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ad\FilterRequest;
use App\Http\Requests\Ad\StoreRequest;
use App\Http\Requests\Ad\UpdateRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Ad $ad)
    {
        $this->authorize('update', $ad);
        $categories = Category::all();
        $types = Type::all();
        return view('ad.edit', compact('ad', 'categories', 'types'));
    }

}

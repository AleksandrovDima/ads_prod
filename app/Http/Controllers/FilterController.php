<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Ad\IndexController;
use App\Http\Requests\Ad\FilterRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Type;
use App\Services\Filter\Service;


class FilterController extends Controller
{

    public $service;


    public function __construct(Service $service)
    {
        return $this->service = $service;

    }

}

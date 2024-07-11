<?php

namespace App\Services\Filter;

use App\Http\Requests\Ad\FilterRequest;
use App\Models\Ad;

class Service
{
    public function filter($request)
    {
        $data = $request->validated();

        $query = Ad::query();

        if (isset($data['category_id'])) {
            $query->where('category_id', $data['category_id']);
        }

        if (isset($data['type_id'])) {
            $query->where('type_id', $data['type_id']);
        }

        if (isset($data['subject'])) {
            $query->where('subject', 'like', "%{$data['subject']}%");
        }

        return $query;

    }
}

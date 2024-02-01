<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelRequest;
use App\Http\Resources\TravelResoruce;
use App\Models\Travel;

class TravelController extends Controller
{
    public function store(TravelRequest $request)
    {
        $travel = Travel::create($request->validated());

        return new TravelResoruce($travel);
    }

    public function update(Travel $travel, TravelRequest $request)
    {
        $travel->update($request->validated());

        return new TravelResoruce($travel);
    }
}

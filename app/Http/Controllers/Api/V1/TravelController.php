<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravelResoruce;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travel = Travel::where('is_public', true)->paginate();

        return TravelResoruce::collection($travel);
    }
}

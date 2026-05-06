<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ApiSpmb;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class ApiSpmbController extends Controller
{
    public function index() {

        $data = DB::table("tb_person")->limit(10)->get();
        return new ApiSpmb(true, 'List Data Products', $data);
        
    }
}

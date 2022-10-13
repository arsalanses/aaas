<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function azizam($name=null, $from=null)
    {
        if (($name != null || $name != '') && ($from != null || $from != '')) {
            return response()->json("$name Azizami. - $from");
        } else {
            return response()->json('Azizam');
        }
    }
}

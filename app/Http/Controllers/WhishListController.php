<?php

namespace App\Http\Controllers;

use App\Models\TblWhishList;
use Illuminate\Http\Request;

use App\Http\Requests;

class WhishListController extends Controller
{
    public function index(Request $request)
    {
        $tblWishList = new TblWhishList();
        $data["src_usr_id"] = $request->input("src_usr_id");
        $data["tgt_usr_id"] = $request->input("tgt_usr_id");
        $data["dt_update"] = date("Y-m-d H:i:s");
        $data["dt_added"] = date("Y-m-d H:i:s");
        $tblWishList->insert($data);
        $data["error"] = false;
        echo json_encode($data);
    }
}

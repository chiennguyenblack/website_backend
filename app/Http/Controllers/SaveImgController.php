<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveImgRequest;
use Illuminate\Support\Facades\Log;

class SaveImgController extends \App\Http\BaseController
{
    public function index(SaveImgRequest $req)
    {
        $img = $req->imgPre.$req->imgNex;
        // Log::info('Res img111------- '.$img);
        // return $img;
        $imageData = base64_decode($img);
        $filename = $req->username. '_' . date("Y-m-d"). '_' . date("H:i:s") . '.png';
        $path = public_path('img/' . $filename);
        file_put_contents($path, $imageData);
        return $this->success('Thành công');
    }
}

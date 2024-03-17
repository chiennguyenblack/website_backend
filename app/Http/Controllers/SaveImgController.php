<?php

namespace App\Http\Controllers;
use App\Http\Requests\SaveImgRequest;
use Illuminate\Support\Facades\Log;

class SaveImgController extends \App\Http\BaseController
{
    public function index(SaveImgRequest $req)
    {
        $img = $req->imgPre.$req->imgNex;
        $imageData = base64_decode($img);
        $fileName = $req->username. '_' . date("Y-m-d"). '_' . date("H-i-s") . '.png';
        // Log::info('Res img----');
        $filePath = 'D:/website_backend/public/img/'.$fileName;
        $fileHandle = fopen($filePath, 'w');
        if ($fileHandle !== false) {
            fwrite($fileHandle, $imageData);
            fclose($fileHandle);
            $result = file_put_contents($filePath, $imageData);
        }
        
        return $this->success('Thành công');
    }
}

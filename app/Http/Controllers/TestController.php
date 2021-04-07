<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use BaconQrCode\Renderer\ImageRenderer;
// use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
// use BaconQrCode\Renderer\RendererStyle\RendererStyle;
// use BaconQrCode\Writer;

class TestController extends Controller
{
    public function test()
    {
        echo phpinfo();

        // $renderer = new ImageRenderer(
        //     new RendererStyle(400),
        //     new ImagickImageBackEnd()
        // );
        // $writer = new Writer($renderer);
        // $writer->writeFile('Hello World!', 'qrcode.png');
        // return 'done';

        // \QrCode::size(500)
        //     ->format('png')
        //     ->generate('https://initsng.com', public_path('images/qrcode.png'));
        //
        // return view('qrCode');

    }
}

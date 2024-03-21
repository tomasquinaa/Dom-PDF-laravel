<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SiteController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to OnlineWebTutorBlog.com',
            'author' => "Quinanga"
        ];

        $pdf = PDF::loadView('my-pdf-file', $data);

        return $pdf->download('onlinewebtutorblog.pdf');
    }
}

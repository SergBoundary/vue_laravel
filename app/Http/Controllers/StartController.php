<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller {
    
    public function index() {
        $url_data = [
            [
                'title' => 'GitHub',
                'url' => 'https://github.com/SergBoundary'
            ],
            [
                'title' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/sergij-bondarenko-analityk/'
            ]
        ];
        
        return view('start', ['url_data' => $url_data]);
    }
}

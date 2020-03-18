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
    
    public function getJson() {
        
        $get_json = [
            [
                'title' => 'GitHub',
                'url' => 'https://github.com/SergBoundary'
            ],
            [
                'title' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/sergij-bondarenko-analityk/'
            ]
        ];
        
        return $get_json;
    }
    
    public function chartData() {
        
        $chart_data = [
            'labels' => ['april', 'may', 'june', 'july'],
            'datasets' => array(
                [
                    'label' => 'Sales',
                    'backgroundColor' => ['#D01919', '#F26202', '#EAAE00', '#B5CC18'],
                    'data' => [15000, 50000, 10000, 8000],
                ]
            )
        ];
        
        return $chart_data;
    }
    
    public function chartRandom() {
        
        $chart_random = [
            'labels' => ['april', 'may', 'june', 'july'],
            'datasets' => array(
                [
                    'label' => 'Gold',
                    'backgroundColor' => ['#16AB39'],
                    'data' => [rand(0, 40000), rand(0, 40000), rand(0, 40000), rand(0, 40000)],
                ],
                [
                    'label' => 'Ssilver',
                    'backgroundColor' => ['#B5CC18'],
                    'data' => [rand(0, 40000), rand(0, 40000), rand(0, 40000), rand(0, 40000)],
                ]
            )
        ];
        
        return $chart_random;
    }
}

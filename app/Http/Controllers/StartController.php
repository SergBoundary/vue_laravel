<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewEvent;
use App\Events\NewMessage;

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
    
    public function newEvent(Request $request) {
        
        $result = [
            'labels' => ['april', 'may', 'june', 'july'],
            'datasets' => array(
                [
                    'label' => 'Sales',
                    'backgroundColor' => ['#F26202'],
                    'data' => [15000, 50000, 10000, 30000],
                ]
            )
        ];
        
        if($request->has('label')) {
            $result['labels'][] = $request->input('label');
            $result['datasets'][0]['data'][] = (integer)$request->input('sale');
            
            if($request->has('realtime')) {
                if(filter_var($request->input('realtime'), FILTER_VALIDATE_BOOLEAN)) {
                    event(new NewEvent($result));
                }
            }
        }
        return $result;
    }
    
    public function sendMessage(Request $request) {
        
        event(new NewMessage($request->input('message')));
    }
}

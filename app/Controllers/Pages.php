<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web Nine Sites',
            'tes' => ["satu", "dua", "tiga", "empat"]
        ];
        // echo view('layout/header');
        return view('pages/home', $data);
        // echo view('layout/footer');
    }
    public function about()
    {
        $data = [
            'title' => 'About | Web Nine Sites'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Web Nine Sites',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Abc No. 123',
                    'kota' => 'Bondowoso'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Kademangan No. 378',
                    'kota' => 'Jember'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}

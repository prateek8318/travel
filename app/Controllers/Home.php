<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'tours' => [
                [
                    'title' => 'Himalayan Adventure',
                    'description' => 'Explore the majestic Himalayas with guided treks and stunning views.',
                    'price' => '₹25,000',
                    'image' => base_url('assets/images/tour1.jpg')
                ],
                [
                    'title' => 'Goa Beach Getaway',
                    'description' => 'Relax on the sunny beaches of Goa with our all-inclusive package.',
                    'price' => '₹15,000',
                    'image' => base_url('assets/images/tour2.jpg')
                ],
                [
                    'title' => 'Kerala Backwaters',
                    'description' => 'Cruise through the serene backwaters of Kerala in a luxury houseboat.',
                    'price' => '₹20,000',
                    'image' => base_url('assets/images/tour3.jpg')
                ]
            ]
        ];
        return view('landing_page', $data);
    }
}
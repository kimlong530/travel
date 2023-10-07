<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        return view('travel-front');
    }
    public function about(){
        $data['title']='About Us';
        return view('about-front',$data);
    }
    public function services(){
        $data['title']='Services';
        return view('services-front',$data);
    }
    public function packages(){
        $data['title']='Packages';
        return view('packages-front',$data);
    }
    public function desitination(){
        $data['title']='Our desitination';
        return view('desitination-front',$data);
    }
    public function booking(){
        $data['title']='Booking';
        return view('booking-front',$data);
    }
    public function our_guid(){
        $data['title']='Our Guid';
        return view('our_guid-front',$data);
    }
    public function testimonials(){
        $data['title']='Testimonials';
        return view('testimonials-front',$data);
    }
}

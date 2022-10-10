<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Slider;
use App\HomePageBanner;
use App\Poster;

class HomepageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage() {
        $slider = Slider::all();
        $homepagebanner = HomePageBanner::all();
        $poster = Poster::all();
        return view('backend.homepage.homepage', compact('slider', 'homepagebanner', 'poster'));
    }

    // add slider
    public function addSlider(Request $request) {
        $this->validate($request,[
            'sliderImage' => 'required | mimes:jpeg,bmp,png,jpg,svg,JPEG,JPG,PNG,bmp,gif',
        ]);

        $slider = new Slider();
        $slider->sliderText = $request->sliderText;
        $slider->sliderBtn = $request->sliderBtn;
        $slider->sliderBtnUrl = $request->sliderBtnUrl;

        $img1 = $request->sliderImage;
        $upload_path = 'frontend/images/slider/';
        $img1_name = str_random(5);
        $ext1 = strtolower($img1->getClientOriginalExtension());
        $img1_full_name = $img1_name.'.'.$ext1;
        $img1_url = $upload_path.$img1_full_name;
        $success1 = $img1->move($upload_path, $img1_full_name);
        $slider->sliderImage = $img1_url;

        $slider->save();
        return redirect()->back();
    }
    public function updateSlider(Request $request, $id) {
        $slider = Slider::findorfail($id);
        $slider->sliderText = $request->sliderText;
        $slider->sliderBtn = $request->sliderBtn;
        $slider->sliderBtnUrl = $request->sliderBtnUrl;

        $img1 = $request->sliderImage;
        if($img1) {
            $upload_path = 'frontend/images/slider/';
            $img1_name = str_random(5);
            $ext1 = strtolower($img1->getClientOriginalExtension());
            $img1_full_name = $img1_name.'.'.$ext1;
            $img1_url = $upload_path.$img1_full_name;
            $success1 = $img1->move($upload_path, $img1_full_name);
            $slider->sliderImage = $img1_url;
        }
        
        $slider->update();
        return redirect()->back();
    }
    public function deleteSlider($id) {
        $slider = Slider::findorfail($id);
        $sliderImg = $slider->sliderImage;
        @unlink($sliderImg);
        $slider->delete();
        return redirect()->back();
    }

    // home page banner
    public function addLeftBanner(Request $request, $id) {
        $this->validate($request,[
            'leftBannerImage' => 'required | mimes:jpeg,bmp,png,jpg,svg,JPEG,JPG,PNG,bmp,gif',
        ]);
        $leftBanner = HomePageBanner::find($id);

        $img1 = $request->leftBannerImage;
        $upload_path = 'frontend/images/banner/';
        $img1_name = str_random(5);
        $ext1 = strtolower($img1->getClientOriginalExtension());
        $img1_full_name = $img1_name.'.'.$ext1;
        $img1_url = $upload_path.$img1_full_name;
        $success1 = $img1->move($upload_path, $img1_full_name);

        $leftBanner->left_banner = $img1_url;
        $leftBanner->update();
        return redirect()->back();
    }
    public function addRightBanner(Request $request, $id) {
        $this->validate($request,[
            'rightBannerImage' => 'required | mimes:jpeg,bmp,png,jpg,svg,JPEG,JPG,PNG,bmp,gif',
        ]);
        $rightBanner = HomePageBanner::find($id);

        $img1 = $request->rightBannerImage;
        $upload_path = 'frontend/images/banner/';
        $img1_name = str_random(5);
        $ext1 = strtolower($img1->getClientOriginalExtension());
        $img1_full_name = $img1_name.'.'.$ext1;
        $img1_url = $upload_path.$img1_full_name;
        $success1 = $img1->move($upload_path, $img1_full_name);

        $rightBanner->right_banner = $img1_url;
        $rightBanner->update();
        return redirect()->back();
    }
    // home page poster
    public function addPoster(Request $request) {
        $this->validate($request,[
            'poster' => 'required | mimes:jpeg,bmp,png,jpg,svg,JPEG,JPG,PNG,bmp,gif',
        ]);
        $poster = Poster::find(1);
        $img1 = $request->poster;
        $upload_path = 'frontend/images/banner/';
        $img1_name = str_random(5);
        $ext1 = strtolower($img1->getClientOriginalExtension());
        $img1_full_name = $img1_name.'.'.$ext1;
        $img1_url = $upload_path.$img1_full_name;
        $success1 = $img1->move($upload_path, $img1_full_name);

        $poster->poster = $img1_url;
        $poster->update();
        return redirect()->back();
    }
}

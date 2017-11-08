<?php

namespace App\Http\Controllers\BackEnd;

use App\CustomerReview;
use App\Gallery;
use App\GiftCard;
use App\HomeImage;
use App\PolishBrand;
use App\Service;
use App\Contact;
use App\ServiceDetail;
use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //count service
        $service_count = Service::count();

        //count service-detail
        $serviceDetail_count = ServiceDetail::count();

        //count gallery images
        $gallery_count = Gallery::count();

        //count Polish brands
        $polishBrand_count = PolishBrand::count();

        //Count GiftCard
        $giftCard_count = GiftCard::count();

        //count review
        $review_count = CustomerReview::count();

        //Count unreply contacts
        $contact_count = Contact::where('reply','=',0)
            ->count();

        //Count image slider
        $image_count = HomeImage::count();

        //dem so nguoi dung hien tai
        $user_count = User::count();

        //dem user,admin
        $countUsers = User::where('isAdmin', 0)->count();
        $countAdmins = User::where('isAdmin', 1)->count();

        return view('backend.home.index',compact('service_count', 'serviceDetail_count',
            'gallery_count', 'polishBrand_count', 'giftCard_count',
            'review_count', 'contact_count', 'image_count', 'user_count', 'countUsers', 'countAdmins'));
    }
}

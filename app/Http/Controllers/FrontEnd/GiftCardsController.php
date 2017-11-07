<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\GiftCard;
use App\Information;

class GiftCardsController extends Controller
{
    public function index()
    {
        $giftCards = GiftCard::paginate(8);
        $information = Information::findOrFail(1);
        return view('frontend.giftcards', compact('giftCards', 'information'));
    }
}

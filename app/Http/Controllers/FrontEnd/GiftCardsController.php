<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\GiftCard;

class GiftCardsController extends Controller
{
    public function index()
    {
        $giftCards = GiftCard::paginate(8);
        return view('frontend.giftcards', compact('giftCards'));
    }
}

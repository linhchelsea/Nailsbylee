@extends('frontend.layout.frontendapp')

@section('content')
    <!------ light-box-script ----->
    <script src="{{asset("frontend/js/jquery.chocolat.js")}}"></script>
    <link rel="stylesheet" href="{{asset("frontend/css/chocolat.css")}}" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.about-grid a').Chocolat({linkImages:true});
        });
    </script>

    <!------ light-box-script ----->
    <div class="grid_4" style="margin-top: 90px;">
        <h3 class="motiveColor">Gift Cards</h3>
        <h4 class="motiveColor1">Give the gift of beauty with our gift cards!</h4>
        <div class="container">
            <div class="row row-eq-height">
                @if(count($giftCards) > 0)
                    <?php $i = 1; ?>
                    @foreach($giftCards as $giftcard)
                            <div class="col-md-3 about-grid">
                                <a href="{{(empty($giftcard->image)) ? asset('images/noimage-public.png') : asset('storage/gift-card/'.$giftcard->image)}}" title="{{$giftcard->title}}">
                                    <div class="view view-first">
                                        @if(empty($giftcard->image))
                                            <img src="{{asset('images/noimage-public.png')}}" class="img-responsive" alt="noImage"/>
                                        @else
                                            <img src="{{asset('storage/gift-card/'.$giftcard->image)}}" class="img-responsive" alt=""/>
                                        @endif
                                        <div class="mask">
                                            <div class="info"></div>
                                        </div>
                                    </div>
                                </a>
                                <h3>{{$giftcard->title}}</h3>
                            </div>
                            @if ($i%4 == 0)
                                <div class="clearfix"> </div>
                            @endif
                    @endforeach
                @else
                    <div class="container">
                        <h3 style="font-family: 'Tangerine', cursive; font-size: 3em;">No papers here!!</h3>
                    </div>
                @endif
            </div>
        </div>
        <div class="container clearfix">
            <div class="pagination-sm no-margin pull-right">
                {{ $giftCards->links() }}
            </div>
        </div>
    </div>
@endsection
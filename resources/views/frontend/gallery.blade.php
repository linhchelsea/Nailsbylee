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
    <div style="margin-top: 90px;"></div>
    <div class="grid_4">
        <h3 class="motiveColor">Gallery</h3>
        <h4 class="motiveColor1">You wanna get a new look from us</h4>
        <div class="container">
            <div class="about-grids">
                @if(count($galleries) > 0)
                    <?php $i = 1; ?>
                    @foreach($galleries as $gallery)
                        <div class="col-md-3 about-grid gallery">
                            <a href="{{(empty($gallery->image)) ? asset('images/noimage-public.png')  : asset('storage/gallery/'.$gallery->image)}}" title="{{$gallery->title}}">
                                <div class="view view-first">
                                    @if(empty($gallery->image))
                                        <img src="{{asset('images/noimage-public.png')}}" class="img-responsive" alt="noImage"/>
                                    @else
                                        <img src="{{asset('storage/gallery/'.$gallery->image)}}" class="img-responsive" alt=""/>
                                    @endif
                                    <div class="mask">
                                        <div class="info"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @if ($i%4 == 0)
                            <div class="clearfix"> </div>
                        @endif
                    @endforeach
                @else
                    <div class="container">
                        <h3 style="font-family: 'Tangerine', cursive; font-size: 3em;">No Images here!!</h3>
                    </div>
                @endif
            </div>
        </div>
        <div class="container clearfix">
            <div class="pagination-sm no-margin pull-right">
                {{ $galleries->links() }}
            </div>
        </div>
    </div>


@endsection
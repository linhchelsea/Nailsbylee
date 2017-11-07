@extends('frontend.layout.frontendapp')

@section('content')
    <div class="grid_4" style="margin-top: 90px;">
        <h3 class="motiveColor">Services</h3>
        <h4 class="motiveColor1">You wanna get a new look from us</h4>
        <div class="container">
            <div class="row row-eq-height">
                @if(count($services) > 0)
                    <?php $i = 1; ?>
                    @foreach($services as $service)
                        <div class="col-md-3  about-grid">
                            <a href="{{ route('servicedetail', $service->id) }}" title="{{$service->name}}">
                                <div class="view view-first">
                                    @if(empty($service->image))
                                        <img src="{{asset('images/noimage-public.png')}}" class="img-responsive" alt="noImage"/>
                                    @else
                                        <img src="{{asset('storage/service/'.$service->image)}}" class="img-responsive" alt="{{$service->name}}"/>
                                    @endif
                                    <div class="mask">
                                        <div class="info"></div>
                                    </div>
                                </div>
                            </a>
                            <h3 style="text-align: center;"><a href="{{ route('servicedetail', $service->id) }}">{{$service->name}}</a></h3>
                            <p style="text-align: center;" class="service_desc">{{$service->preview}}</p>
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
    </div>
    @include('frontend.layout.contact')
@endsection
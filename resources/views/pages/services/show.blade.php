@extends('layouts.layout')

@section('title'){{ (isset($service->meta_title) && !empty($service->meta_title)) ? $service->meta_title : $service->title }} @endsection

@section('shortDesc'){!! isset($service->shortDesc) ? $service->shortDesc : $service->meta_description !!} @endsection

@section('description'){{ (isset($service->meta_description) && !empty($service->meta_description)) ? $service->meta_description : strip_tags($service->shortDesc) }} @endsection

@section('section-bg', asset($service->getImage(1903,700,80,1,'full')))

@section('content')
    @include('inc.first-section')

    <div id="page">
        <div id="service-page" class="{{ $service->slug == 'car-transport-service' ? 'car-transport-service' :
           ($service->slug == 'motorcycle-shipping' ? 'motorcycle-shipping' :
             ($service->slug == 'heavy-equipment-shipment' ? 'heavy-equipment-shipment' :
               ($service->slug == 'boat-shipping' ? 'boat-shipping' :
                 ($service->slug == 'door-to-door-auto-transport-service' ? 'door-to-door-auto-transport-service' :
                   ($service->slug == 'expedited-car-shipping' ? 'expedited-car-shipping' :
                     ($service->slug == 'enclosed-car-shipping' ? 'enclosed-car-shipping' :
                       'open-transport-car-shipping'
                     )
                   )
                 )
               )
             )
           )
        }}">

            @if ($service->slug == 'car-transport-service')
                @include('pages.services.inc.car-transport-service')
            @elseif ($service->slug == 'motorcycle-shipping')
                @include('pages.services.inc.motorcycle-shipping')
            @elseif ($service->slug == 'heavy-equipment-shipment')
                @include('pages.services.inc.heavy-equipment-shipment')
            @elseif ($service->slug == 'boat-shipping')
                @include('pages.services.inc.boat-shipping')
            @elseif ($service->slug == 'door-to-door-auto-transport-service')
                @include('pages.services.inc.door-to-door-auto-transport-service')
            @elseif ($service->slug == 'expedited-car-shipping')
                @include('pages.services.inc.expedited-car-shipping')
            @elseif ($service->slug == 'enclosed-car-shipping')
                @include('pages.services.inc.enclosed-car-shipping')
            @elseif ($service->slug == 'open-transport-car-shipping')
                @include('pages.services.inc.open-transport-car-shipping')
            @endif

            <div id="page-content">
                <div class="container-xl">
                    <div class="page-content">
                        {!! $service->desc !!}
                        {!! $service->descOne !!}
                        {!! $service->descTwo !!}
                        {!! $service->descThree !!}
                    </div>
                </div>
            </div>

            @include('inc.steps')
            @include('inc.services')
        </div>
    </div>
@endsection

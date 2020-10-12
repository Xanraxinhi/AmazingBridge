@extends('fontend.layouts.app')

@push('css')
    <style>
        .iframe-custom iframe {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
            height: 100%;
        }
        .detail-photo img {
            width: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="show-detail">
        <div class="title-bridge p-5">
            @if(isset($nameCountry))
                <h1>{{ $nameCountry }}</h1>
            @endif
        </div>
        <div class="detail-bridges">
            @if(isset($listBridge))
                @foreach($listBridge as $bridge)
                    <div class="detail-bridges-block" id="{{ $bridge->id }}">
                        <div class="detail-photo">
                            <img class="img-fluid" src="{{ asset('store-public/'. $bridge->photos[0]->name) }}" alt="">
                        </div>
                        <h1 class="text-center py-3">{{ $bridge->name }}</h1>
                        <div class="col-8 offset-2">
                            <div class="text-center pb-5">
                                {{ $bridge->introduce }}
                            </div>
                            <div class="row no-gutters">
                                <div class="col-6 align-self-center">
                                    <h2>Thông số</h2>
                                    <div class="description-bridge">
                                        <p>Type: {{ (!blank($bridge->parameter) && !blank($bridge->parameter->type)) ? $bridge->parameter->type : 'Updating' }}</p>
                                        <p>Length: {{ (!blank($bridge->parameter) && !blank($bridge->parameter->length)) ? $bridge->parameter->length : 'Updating' }}</p>
                                        <p>Width: {{ (!blank($bridge->parameter) && !blank($bridge->parameter->width)) ? $bridge->parameter->width : 'Updating' }}</p>
                                        <p>Height: {{ (!blank($bridge->parameter) && !blank($bridge->parameter->height)) ? $bridge->parameter->height : 'Updating' }}</p>
                                        <p>Pier: {{ (!blank($bridge->parameter) && !blank($bridge->parameter->pier)) ? $bridge->parameter->pier : 'Updating' }}</p>
                                        <p>Builded: {{ (!blank($bridge->parameter)  && !blank($bridge->parameter->builded)) ? $bridge->parameter->builded : 'Updating' }}</p>
                                    </div>
                                </div>
                                <div class="col-6 iframe-custom">
                                    {!! $bridge->map !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif

        </div>
    </div>
@endsection

@push('js')
@endpush

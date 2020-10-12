@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/switchCustom.css') }}">
@endpush

@section('content')


    <div class="limiter">
        <div class="container-table100">
            <div class="cteate-table100">
                <h1><span style="color: lightgrey">Photo of: </span>{{ isset($currentBridge) ? $currentBridge->name : '' }}</h1>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <form action="{{ route('bridge.update.photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table>
                            <thead>
                            <tr class="table100-head">
                                @if(!empty($currentPhoto))
                                    <th class="column1">Upload New Photo</th>
                                    <th class="column1">Old Photo</th>
                                @else
                                    <th class="column1">Photo</th>
                                @endif
                                <th class="column6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <input type="hidden" name="bridge_id" value="{{ isset($currentBridge) ? $currentBridge->id : '' }}">
                                <input type="hidden" name="idPhoto" value="{{ !empty($currentPhoto) ? $currentPhoto->id : '' }}">
                                <input type="hidden" name="namePhoto" value="{{ !empty($currentPhoto) ? $currentPhoto->name : '' }}">
                                @if(!empty($currentPhoto))
                                    <td class="column1">
                                        <input type="file" name="name">
                                    </td>
                                    <td class="column1">
                                        <img class="img-fluid" src="{{ url('store-public/' . $currentPhoto->name) }}" alt="{{ $currentPhoto->name }}">
                                    </td>
                                @else
                                    <td class="column1">
                                        <input type="file" name="name">
                                    </td>
                                @endif

                                <td class="column6">
                                    <button class="btn-save" type="submit">Save</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="cteate-table100">
                @if(isset($currentBridge))
                    <a href="{{ route('bridge.photo.list', $currentBridge->id)}}">Back</a>
                @else
                    <a href="{{ route('bridge')}}">Back</a>
                @endif
            </div>
            @if (Session::get('image'))
                <img src="{{ url('store-public') }}/{{ Session::get('image') }}" style="max-width: 100%;">
            @endif
        </div>
    </div>
@endsection

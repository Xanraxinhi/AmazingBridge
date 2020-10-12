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
            <div class="cteate-table100">
                <a href="{{ route('bridge.photo', ['idBridge' => $currentBridge->id]) }}">Create New Photo</a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <form action="{{ route('bridge.update.photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table>
                            <thead>
                            <tr class="table100-head">
                                <th class="column1">Photo</th>
                                <th class="column6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($currentBridge->photos->count() == 0)
                                <tr>
                                    <td class="column2">
                                        No Photo
                                    </td>
                                    <td class="column6">
                                        No Action
                                    </td>
                                </tr>
                            @else
                                @foreach($currentBridge->photos as $photo)
                                    <tr>
                                        <td class="column2">
                                            <img class="img-fluid" src="{{ url('store-public/' . $photo->name) }}" alt="{{ $photo->name }}">
                                        </td>

                                        <td class="column6">
                                            <a href="{{ route('bridge.photo',['idBridge' => $currentBridge->id, 'idPhoto' => $photo->id]) }}" class="btn-edit">Edit</a>
                                            <a href="{{ route('brige.delete.photo', $photo->id) }}" class="btn-delete">Delete</a>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="cteate-table100">
                <a href="{{ route('bridge') }}">Back</a>
            </div>
            @if (Session::get('image'))
                <img src="{{ url('store-public') }}/{{ Session::get('image') }}" style="max-width: 100%;">
            @endif
        </div>
    </div>
@endsection

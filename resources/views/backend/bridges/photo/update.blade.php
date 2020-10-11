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
                                <th class="column1">Image</th>
                                <th class="column6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <input type="hidden" name="bridge_id" value="{{ isset($currentBridge) ? $currentBridge->id : '' }}">
                                <input type="hidden" name="idPhoto" value="{{ isset($currentPhoto) ? $currentPhoto->id : '' }}">
                                <td class="column1">
                                    <input type="file" name="name">
                                </td>

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
                <a href="{{ route('bridge') }}">Back</a>
            </div>
            @if (Session::get('image'))
                <img src="{{ url('store-public') }}/{{ Session::get('image') }}" style="max-width: 100%;">
            @endif
        </div>
    </div>
@endsection

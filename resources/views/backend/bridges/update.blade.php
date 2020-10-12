@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/switchCustom.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <form action="{{ route('bridge.update') }}" method="POST">
                        @csrf
                        <table>
                            <thead>
                            <tr class="table100-head">
                                <th class="column1">Bridge</th>
                                <th class="column2">Introduce</th>
                                <th class="column3">Map</th>
                                <th class="column4">Country</th>
                                <th class="column5">Public</th>
                                <th class="column6">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <input type="hidden" name="idBridge" value="{{ isset($currentBridge) ? $currentBridge->id : '' }}">

                                <td class="column1">
                                    <input type="text" name="name" placeholder="Name" value="{{ isset($currentBridge) ? $currentBridge->name : '' }}">
                                </td>

                                <td class="column2">
                                    <textarea name="introduce" placeholder="Introduce about the bridge">{{ isset($currentBridge) ? $currentBridge->introduce : '' }}</textarea>
                                </td>

                                <td class="column3">
                                    <textarea name="map" placeholder="Pass the google map Iframe">{{ isset($currentBridge) ? $currentBridge->map : '' }}</textarea>
                                </td>

                                <td class="column4">
                                    <select class="select-custom" name="country_id">
                                        <option value="" disabled style="display: none" selected>Select Country:</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" {{ isset($currentBridge) && $currentBridge->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </td>

                                <td class="column5">
                                    <!-- Rounded switch -->
                                    <label class="switch">
                                        <input name="public" checked type="checkbox" {{ isset($currentBridge) && $currentBridge->public == 1 ? 'checked' : '' }} value="1">
                                        <span class="slider round"></span>
                                    </label>
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
        </div>
    </div>
@endsection

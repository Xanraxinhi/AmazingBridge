@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/switchCustom.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="cteate-table100">
                <h1><span style="color: lightgrey">Parameter of: </span>{{ isset($currentBridge) ? $currentBridge->name : '' }}</h1>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <form id="parameter-form" action="{{ route('bridge.update.parameter') }}" method="POST">
                        @csrf
                        <input type="hidden" name="bridge_id" value="{{ isset($currentBridge) ? $currentBridge->id : '' }}">
                        <input type="hidden" name="idParameter" value="{{ isset($currentBridge) && !blank($currentBridge->parameter) ? $currentBridge->parameter->id : '' }}">
                        <table>
                            <tbody>
                                <tr class="table100-head-custom">
                                    <th class="column1">Length</th>
                                    <td class="column2">
{{--                                        @dd($currentBridge->parameter)--}}
                                        <input type="number" name="length" step=any placeholder="Ex: 3911" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->length : @old('length') ?? '' }}">
                                    </td>
                                    <td class="column1">( mét )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Width</th>
                                    <td class="column2">
                                        <input type="number" name="width" step=any placeholder="Ex: 30.12" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->width : @old('width') ?? '' }}">
                                    </td>
                                    <td class="column1">( mét )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Height</th>
                                    <td class="column2">
                                        <input type="number" name="height" step=any placeholder="Ex: 65.72" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->height : @old('height') ?? '' }}">
                                    </td>
                                    <td class="column1">( mét )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Pier</th>
                                    <td class="column2">
                                        <input type="number" name="pier" placeholder="Ex: 8" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->pier : @old('pier') ?? '' }}">
                                    </td>
                                    <td class="column1">( integer )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Type</th>
                                    <td class="column2">
                                        <input type="text" name="type" placeholder="Ex: closed-spandrel segmental stone arch bridge" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->type : @old('type') ?? '' }}">
                                    </td>
                                    <td class="column1">( string )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Builded</th>
                                    <td class="column2">
                                        <input type="number" name="builded" placeholder="Ex: 2004" min="0" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->builded : @old('builded') ?? '' }}">
                                    </td>
                                    <td class="column1">( year )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Famous</th>
                                    <td class="column2">
                                        <input type="number" name="famous" placeholder="From 0 to 10" min="0" max="10" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->famous : @old('famous') ?? '' }}">
                                    </td>
                                    <td class="column1">( range of famous )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Strange</th>
                                    <td class="column2">
                                        <input type="number" name="strange" placeholder="From 0 to 10" min="0" max="10" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->strange : @old('strange') ?? '' }}">
                                    </td>
                                    <td class="column1">( range of strange )</td>
                                </tr>
                                <tr class="table100-head-custom">
                                    <th class="column1">Beautiful</th>
                                    <td class="column2">
                                        <input type="number" name="beautiful" placeholder="From 0 to 10" min="0" max="10" value="{{ !blank($currentBridge->parameter) ? $currentBridge->parameter->beautiful : @old('beautiful') ?? '' }}">
                                    </td>
                                    <td class="column1">( range of beautiful )</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="cteate-table100">
                <button form="parameter-form" type="submit">Save</button>
                <a href="{{ route('bridge') }}">Back</a>
            </div>
            @if (Session::get('image'))
                <img src="{{ url('store-public') }}/{{ Session::get('image') }}" style="max-width: 100%;">
            @endif
        </div>
    </div>
@endsection

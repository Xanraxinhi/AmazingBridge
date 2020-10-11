@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="cteate-table100">
                <a href="{{ route('bridge.create') }}">New Bridge</a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Bridge</th>
                                <th class="column1">Photo</th>
                                <th class="column1">Parameter</th>
                                <th class="column2">Introduce</th>
                                <th class="column3">Map</th>
                                <th class="column4">Country</th>
                                <th class="column5">Public</th>
                                <th class="column6">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($bridges as $bridge)
                            <tr>
                                <td class="column1">{{ $bridge->name }}</td>
                                <td class="column1"><a href="{{ route('bridge.photo', $bridge->id) }}">Photo</a></td>
                                <td class="column1"><a href="{{ route('bridge.parameter', $bridge->id) }}">Parameter</a></td>
                                <td class="column2">{{ $bridge->introduce }}</td>
                                <td class="column3"><a href="javascript:void(0);">View map</a></td>
                                <td class="column4">{{ $bridge->country->name }}</td>
                                <td class="column5"><span class="{{ $bridge->public == 1 ? 'btn-public' : 'btn-nonpublic'}}">{{ $bridge->public == 1 ? 'Public' : 'No Public'}}</span></td>
                                <td class="column6">
                                    <a href="{{ route('bridge.edit', $bridge->id) }}" class="btn-edit">Edit</a>
                                    <a href="{{ route('bridge.delete', $bridge->id) }}" class="btn-delete">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

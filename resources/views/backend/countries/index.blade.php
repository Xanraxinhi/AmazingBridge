@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="cteate-table100">
                <a href="{{ route('country.create') }}">New Country</a>
            </div>
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column1">Country</th>
                            <th class="column2">Introduce</th>
                            <th class="column3">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td class="column1">
	                                    {{ $country->name }}
                                    </td>
                                    <td class="column2">
	                                    {{ $country->introduce }}
                                    </td>
                                    <td class="column3">
                                        <a href="{{ route('country.edit', $country->id) }}" class="btn-edit">Edit</a>
                                        <a href="{{ route('country.delete', $country->id) }}" class="btn-delete">Delete</a>
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

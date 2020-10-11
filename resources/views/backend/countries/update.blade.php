@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <form action="{{ route('country.update') }}" method="POST">
                        @csrf
                        <table>
                            <thead>
                            <tr class="table100-head">
                                <th class="column1">Country</th>
                                <th class="column2">Introduce</th>
                                <th class="column3">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <input type="hidden" name="idCountry" value="{{ isset($currentCountry) ? $currentCountry->id : '' }}">
                                <td class="column1">
                                    <input type="text" name="name" placeholder="Name" value="{{ isset($currentCountry) ? $currentCountry->name : '' }}">
                                </td>
                                <td class="column2">
                                    <textarea name="introduce" cols="60" rows="3" placeholder="Introduce about the country">{{ isset($currentCountry) ? $currentCountry->introduce : '' }}</textarea>
                                </td>
                                <td class="column3">
                                    <button class="btn-save" type="submit">Save</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/bridges.css') }}">
@endpush

@section('content')
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100">
                    <table>
                        <thead>
                        <tr class="table100-head">
                            <th class="column1">Name</th>
                            <th class="column1">Email</th>
                            <th class="column1">Number</th>
                            <th class="column2">Message</th>
                            <th class="column2">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contacts as $contact)
                            <tr>
                                <td class="column1">{{ $contact->name }}</td>
                                <td class="column1">{{ $contact->email }}</td>
                                <td class="column1">{{ $contact->number }}</td>
                                <td class="column1">{{ $contact->message }}</td>
                                <td class="column1">
                                    <a href="{{ route('contact.delete', $contact->id) }}" class="btn-delete">Delete</a>
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

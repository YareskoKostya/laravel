@extends('layouts.app')

@section('content')

    <div class="container contact-form" align="center">
        @include('partials.nav')
        <h2 class="pb-4">List of conference participants</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Full name</th>
                <th scope="col">Report subject</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($members as $k => $member)
            <tr>
                <th scope="row" style="vertical-align: middle">
                    {{ ++$k }}
                </th>
                <td>
                    <img height="50px" src="{{ asset($member->photo) ?? asset('images/no-avatar.png')}}" alt="">
                </td>
                <td style="vertical-align: middle">
                    {{ $member->firstname . ' ' . $member->lastname }}
                </td>
                <td style="vertical-align: middle">
                    {{ $member->subject }}
                </td>
                <td style="vertical-align: middle">
                    {{ $member->email }}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
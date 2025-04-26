@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$profile->firstname}} {{$profile->lastname}} profile</div>

                <div class="card-body">
                    <div class="container">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $enrollment)
                                <tr>
                                    <th scope="row">{{$enrollment->id}}</th>
                                    <td>{{$enrollment->client->firstname}} {{$enrollment->client->lastname}}</td>
                                    <td>{{$enrollment->client->contact}}</td>
                                    <td>{{$enrollment->program->name}}</td>
                                    @if($enrollment->status == 1)
                                    <td>Active</td>
                                    @else
                                    <td>Inactive</td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
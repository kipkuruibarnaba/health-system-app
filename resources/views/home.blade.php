@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Health Programs
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($programs as $program)
                                                <tr>
                                                    <th scope="row">{{$program->id}}</th>
                                                    <td>{{$program->name}}</td>
                                                    <td><button type="submit" class="btn btn-primary">View</button></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        Clients
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Names</th>
                                                    <th scope="col">Operation</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clients as $client)
                                                <tr>
                                                    <th scope="row">{{$client->id}}</th>
                                                    <td>{{$client->firstname}} {{$client->lastname}}</td>
                                                    <td><button type="submit" class="btn btn-primary">View</button></td>
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
            </div>
        </div>
    </div>
</div>
@endsection
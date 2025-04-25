@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enroll Client ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <form action="{{ route('save-enrollment') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Client">Select Client</label>
                                <select class="form-select" name="client">
                                    <option selected>Open this select menu</option>
                                    @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->contact}} : {{$client->firstname}}
                                        {{$client->lastname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Program">Select Program</label>
                                <select class="form-select" name="program">
                                    <option selected>Open this select menu</option>
                                    @foreach ($programs as $program)
                                    <option value="{{$program->id}}">{{$program->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button class="btn btn-info float-right" type="submit">Save Enrolment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
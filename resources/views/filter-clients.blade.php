@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Search Clients') }}</div>

                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('search') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Searh By</span>
                                </div>
                                <select class="form-select" name="search">
                                    <option>Select</option>
                                    <option value="firstname">First Name</option>
                                    <option value="lastname">Last Name</option>
                                    <option value="contact">Contact</option>
                                </select>
                                <!-- <input type="text" class="form-control"> -->
                                <input type="text" class="form-control" placeholder="Enter Search Criteria"
                                    name="criteria" required>
                            </div>
                            <br>
                            <button class=" btn btn-info float-right" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
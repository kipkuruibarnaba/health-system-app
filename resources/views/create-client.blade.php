@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Client ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <form action="{{ route('save-client') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="First Name">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="Last Name">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="Gender">Select Gender</label>
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option selected>Open this select menu</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Contact">Enter Contact</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter Contact"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="Age">Enter Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter Age" required>
                            </div>
                            <br>
                            <button class="btn btn-info float-right" type="submit">Submit Client</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
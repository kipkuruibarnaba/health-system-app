@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Health Program ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <form action="{{ route('save-program') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter the Program Name"
                                    required>
                            </div>
                            <br>
                            <button class="btn btn-info float-right" type="submit">Submit Program</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
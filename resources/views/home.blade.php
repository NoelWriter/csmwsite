@extends('default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card bg-dark">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ $user->username }}!
                </div>
            </div>
        </div>
        <div class="col-md-2 d-none d-md-block mb-5">
            <div class="card bg-dark">
                <div class="card-body">
                    <img class="img-fluid" src="{{ $user->avatar }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('default')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="card bg-dark">
            <div class="card-header">
                Rules
            </div>
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">
                    <div class="col-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">- Don't kill on sight when not in KOS zone</li>
                            <li class="list-group-item">- Don't offline raid</li>
                            <li class="list-group-item">- Be decent</li>
                            <li class="list-group-item">- Limit of 2 persons per team (for now)</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="row"><h2>How to join the server?</h2></div>
                        <div class="row">- open the console by pressing F1</div>
                        <div class="row">- enter the following command : client.connect rust.csmw.io:28015</div>
                        <div class="row" class="my-2"> <a class="my-2" href="http://playrust.io/map/?Procedural%20Map_3500_17702" target="_blank"><div class="btn-primary btn">Interactive map</div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <img src="https://i.csmw.io/eckqZ8.jpg" width="100%"></img>
        </div>
    </div>
    <!-- /.container -->
@endsection

@section('script')
@endsection

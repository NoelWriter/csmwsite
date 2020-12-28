@extends('default')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <div class="col-4">
                <div class="card bg-dark">
                    <div class="card-header">
                        Categories
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="tab" href="#list-12-gauge-shot" role="tab" aria-controls="list-home" aria-selected="false">12 Gauge Shot</a>
                            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="tab" href="#list-12-gauge-slugs" role="tab" aria-controls="list-profile" aria-selected="true">12 Gauge Slugs</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-20-gauge" role="tab" aria-controls="list-messages" aria-selected="false">20 Gauge</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-23x75-mm" role="tab" aria-controls="list-settings" aria-selected="false">23x75 mm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="list-12-gauge-shot" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Damage %</th>
                                    <th scope="col">Frag. Chance*</th>
                                    <th scope="col">Class 1</th>
                                    <th scope="col">Class 2</th>
                                    <th scope="col">Class 3</th>
                                    <th scope="col">Class 4</th>
                                    <th scope="col">Class 5</th>
                                    <th scope="col">Class 6</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">5.25mm Buckshot</th>
                                    <td>37</td>
                                    <td>1</td>
                                    <td>15</td>
                                    <td>0%</td>
                                    <td class="table-warning"></td>
                                    <td class="table-warning"></td>
                                    <td class="table-warning"></td>
                                    <td class="table-warning"></td>
                                    <td class="table-warning"></td>
                                    <td class="table-warning"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-12-gauge-slugs" role="tabpanel" aria-labelledby="list-profile-list">
                    </div>
                    <div class="tab-pane fade" id="list-20-gauge" role="tabpanel" aria-labelledby="list-home-list">
                    </div>
                    <div class="tab-pane fade" id="list-23x75-mm" role="tabpanel" aria-labelledby="list-profile-list">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
@endsection

@section('script')
@endsection

@extends('default')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <h2 class="card-title">Skin</h2>
                        <p class="card-text">This download containst the .osk file needed to implement the skin into OSU!, just open
                            the file with the OSU! application and it will implement the skin files automatically.</p>
                    </div>
                    <div class="card-footer">
                        <a href="files/Cosmic%20Comfort%20V2.8.osk" class="btn btn-primary btn-sm">Download</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <h2 class="card-title">Hawku Driver Settings</h2>
                        <p class="card-text">Select files, import and select the downloaded file to import my settings to the hawku
                            driver</p>
                        <ul>
                            <li>top: 5500</li>
                            <li>bottom: 9500</li>
                            <li>Left: 0</li>
                            <li>Right: 7000</li>
                            <li>Forced aspect ratio: on</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="files/osusettings.xml" class="btn btn-primary btn-sm" download>Download</a>
{{--                        <a data-toggle="modal" data-target="#tabletsize" class="btn btn-sm" download>View size</a>--}}
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card bg-dark h-100">
                    <div class="card-body">
                        <h2 class="card-title">Other</h2>
                        <p class="card-text">Discord: CosmicWolf#0001</p>
                        <p class="card-text">Tablet: Wacom Intuos</p>
                        <p class="card-text">Keyboard: <a href="https://mechanicalkeyboards.com/shop/index.php?l=product_detail&p=3332" target="_blank">Varmilo VA87M Panda</a></p>
                        <p class="card-text">Switch: Cherry MX Silver</p>
                    </div>
                    <div class="card-footer">
                        <a href="https://osu.ppy.sh/users/8352298" target="_blank" class="btn btn-primary btn-sm" download>View my osu! profile</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->


        </div>
        <!-- /.row -->

        <!-- Modal -->
        <div class="modal" id="tabletsize" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="tabletsize"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tablet size</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="tablet.png" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@endsection

@section('script')
@endsection

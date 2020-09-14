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
                            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="tab" href="#list-home" role="tab" aria-controls="list-home" aria-selected="false">Utilities</a>
                            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile" aria-selected="true">Administration</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages" aria-selected="false">Fun</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings" aria-selected="false">Games</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <!-- Utilities -->
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Bot Info
                            </div>
                            <div class="card-body">
                                <p>Shows information about the bot</p>
                                <code>!botinfo</code>
                            </div>
                        </div>
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Server Info
                            </div>
                            <div class="card-body">
                                <p>Shows information about the server, you can provide a server ID as long as the bot is available in the specified server</p>
                                <code>!serverinfo (server ID)</code>
                            </div>
                        </div>
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Github
                            </div>
                            <div class="card-body">
                                <p>shows the github repository for the bot</p>
                                <code>!github</code>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <!-- Administration -->
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <!-- Fun -->
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Woof
                            </div>
                            <div class="card-body">
                                <p>Shows a random dog picture</p>
                                <code>!woof</code>
                            </div>
                        </div>
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Meow
                            </div>
                            <div class="card-body">
                                <p>Shows a random cat picture</p>
                                <code>!meow</code>
                            </div>
                        </div>
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Dank Meme
                            </div>
                            <div class="card-body">
                                <p>Shows a random dank meme</p>
                                <code>!dankmeme</code>
                            </div>
                        </div>
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Cute
                            </div>
                            <div class="card-body">
                                <p>Shows a random cute picture</p>
                                <code>!cute</code>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <!-- Games -->
                        <div class="card mb-2 bg-dark">
                            <div class="card-header">
                                Rainbow 6 Siege
                            </div>
                            <div class="card-body">
                                <p>Shows stats of specified siege account. Platform options include Uplay, Xbox live and Playstation Network (uplay, xbl, psn).</p>
                                <code>!r6s [platform] [username]</code>
                            </div>
                        </div>
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

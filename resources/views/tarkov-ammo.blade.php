@extends('default')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Content Row -->
        <div class="row">
            <div class="col-3">
                <div class="card bg-dark">
                    <div class="card-header">
                        Ammo Type
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="tab" href="#list-12-gauge-shot" role="tab" aria-controls="list-home" aria-selected="false">12 Gauge Shot</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-12-gauge-slugs" role="tab" aria-controls="list-profile" aria-selected="true">12 Gauge Slugs</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-20-gauge" role="tab" aria-controls="list-messages" aria-selected="false">20 Gauge</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-23x75-mm" role="tab" aria-controls="list-settings" aria-selected="false">23x75 mm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="list-12-gauge-shot" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark mx-1">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Damage %</th>
                                    <th scope="col">Frag. Chance*</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">5.25mm Buckshot</th>
                                    <td>37</td>
                                    <td>1</td>
                                    <td>15</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">8.5mm Buckshot "Magnum"</th>
                                    <td>50</td>
                                    <td>2</td>
                                    <td>26</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.5mm Buckshot "Express"</th>
                                    <td>35</td>
                                    <td>3</td>
                                    <td>26</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7mm Buckshot</th>
                                    <td>39</td>
                                    <td>3</td>
                                    <td>26</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Flechette</th>
                                    <td>25</td>
                                    <td>31</td>
                                    <td>26</td>
                                    <td>0%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-12-gauge-slugs" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Damage %</th>
                                    <th scope="col">Frag. Chance*</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">RIP Slug</th>
                                    <td>265</td>
                                    <td>0</td>
                                    <td>11</td>
                                    <td>100%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Superformance HP Slug</th>
                                    <td>265</td>
                                    <td>0</td>
                                    <td>11</td>
                                    <td>100%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Grizzly 40 Slug</th>
                                    <td>190</td>
                                    <td>12</td>
                                    <td>48</td>
                                    <td>12%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">HP Copper Sabot Premier</th>
                                    <td>206</td>
                                    <td>14</td>
                                    <td>46</td>
                                    <td>38%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Led Slug</th>
                                    <td>167</td>
                                    <td>15</td>
                                    <td>55</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Dual Sabot Slug</th>
                                    <td>85</td>
                                    <td>17</td>
                                    <td>65</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Slug "Poleva-3"</th>
                                    <td>140</td>
                                    <td>17</td>
                                    <td>40</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">FTX Custom Lite Slug</th>
                                    <td>183</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Slug "Poleva-6u"</th>
                                    <td>150</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>15%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shell With .50 BMG (Tracer)	</th>
                                    <td>197</td>
                                    <td>26</td>
                                    <td>57</td>
                                    <td>5%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">AP 20 Slug</th>
                                    <td>164</td>
                                    <td>37</td>
                                    <td>65</td>
                                    <td>3%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-20-gauge" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Damage %</th>
                                    <th scope="col">Frag. Chance*</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">5.6mm Buckshot</th>
                                    <td>26</td>
                                    <td>1</td>
                                    <td>12</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6.2mm Buckshot</th>
                                    <td>22</td>
                                    <td>2</td>
                                    <td>13</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.5mm Buckshot</th>
                                    <td>25</td>
                                    <td>3</td>
                                    <td>14</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7.3mm Buckshot</th>
                                    <td>23</td>
                                    <td>3</td>
                                    <td>13</td>
                                    <td>0%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Devastator Slug</th>
                                    <td>198</td>
                                    <td>5</td>
                                    <td>13</td>
                                    <td>100%</td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Slug "Poleva-3"</th>
                                    <td>120</td>
                                    <td>14</td>
                                    <td>35</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Star Slug</th>
                                    <td>154</td>
                                    <td>16</td>
                                    <td>42</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Slug "Poleva-6u"</th>
                                    <td>135</td>
                                    <td>17</td>
                                    <td>40</td>
                                    <td>15%%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-23x75-mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Damage %</th>
                                    <th scope="col">Frag. Chance*</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>
                                    <th scope="col">6</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">"Star" Flashbang Slug</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>20%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shrapnel 25</th>
                                    <td>78</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>0%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Shrapnel 10</th>
                                    <td>87</td>
                                    <td>11</td>
                                    <td>20</td>
                                    <td>0%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                </tr>
                                <tr>
                                    <th scope="row">"Barricade" Slug</th>
                                    <td>192</td>
                                    <td>39</td>
                                    <td>75</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-4"></td>
                                </tr>
                                </tbody>
                            </table>
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
    <style>
        .cell-color-6 {
            background-color: #00FF00;
        }
        .cell-color-5 {
            background-color: #58FF00;
        }
        .cell-color-4 {
            background-color: #9FFF00;
        }
        .cell-color-3 {
            background-color: #F7FF00;
        }
        .cell-color-2 {
            background-color: #FFAF00;
        }
        .cell-color-1 {
            background-color: #FF5700;
        }
        .cell-color-0 {
            background-color: #FF0000;
        }
    </style>
@endsection

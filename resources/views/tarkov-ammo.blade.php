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
                    <div class="card-body scrollable-sidebar">
                        <div class="list-group list-group-flush" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="tab" href="#list-12-gauge-shot" role="tab" aria-controls="list-home" aria-selected="false">12 Gauge Shot</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-12-gauge-slugs" role="tab" aria-controls="list-profile" aria-selected="true">12 Gauge Slugs</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-20-gauge" role="tab" aria-controls="list-messages" aria-selected="false">20 Gauge</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-23x75-mm" role="tab" aria-controls="list-settings" aria-selected="false">23x75mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-9x18mm" role="tab" aria-controls="list-settings" aria-selected="false">9x18mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-762x25mm" role="tab" aria-controls="list-settings" aria-selected="false">7.62x25mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-9x19mm" role="tab" aria-controls="list-settings" aria-selected="false">9x19mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-45" role="tab" aria-controls="list-settings" aria-selected="false">.45</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-9x21mm" role="tab" aria-controls="list-settings" aria-selected="false">9x21mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-57x28mm" role="tab" aria-controls="list-settings" aria-selected="false">5.7x28mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-46x30mm" role="tab" aria-controls="list-settings" aria-selected="false">4.6x30mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-9x39mm" role="tab" aria-controls="list-settings" aria-selected="false">9x39mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-366" role="tab" aria-controls="list-settings" aria-selected="false">.366</a>
                            <a class="list-group-item list-group-item-action active" id="list-settings-list" data-toggle="tab" href="#list-545x39mm" role="tab" aria-controls="list-settings" aria-selected="false">5.45x39mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-556x45mm" role="tab" aria-controls="list-settings" aria-selected="false">5.56x45mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-762x39mm" role="tab" aria-controls="list-settings" aria-selected="false">7.62x39mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-300blk" role="tab" aria-controls="list-settings" aria-selected="false">.300 blk</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-762x51mm" role="tab" aria-controls="list-settings" aria-selected="false">7.62x51mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-762x54R" role="tab" aria-controls="list-settings" aria-selected="false">7.62x54R</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-127x55mm" role="tab" aria-controls="list-settings" aria-selected="false">12.7x55mm</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-338LapuaMagnum" role="tab" aria-controls="list-settings" aria-selected="false">.338 Lapua Magnum</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-MountedWeapons" role="tab" aria-controls="list-settings" aria-selected="false">Mounted Weapons</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-Other" role="tab" aria-controls="list-settings" aria-selected="false">Other</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-12-gauge-shot" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark mx-1" style="width: 99%">
                                <thead>
                                <tr>
                                    <th scope="col">Ammo Type</th>
                                    <th scope="col">Damage</th>
                                    <th scope="col">Pen Value</th>
                                    <th scope="col">Armor Dmg. %</th>
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
                            <table class="table table-dark" style="width: 99%">
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
                            <table class="table table-dark" style="width: 99%">
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
                            <table class="table table-dark" style="width: 99%">
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
                    <div class="tab-pane fade" id="list-9x18mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">SP8</th>
                                    <td>67</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>60%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">SP7</th>
                                    <td>77</td>
                                    <td>2</td>
                                    <td>5</td>
                                    <td>2%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PSV</th>
                                    <td>69</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>40%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">P gzh</th>
                                    <td>50</td>
                                    <td>5</td>
                                    <td>16</td>
                                    <td>25%</td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PSO gzh</th>
                                    <td>54</td>
                                    <td>5</td>
                                    <td>13</td>
                                    <td>35%</td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PS gs PPO</th>
                                    <td>55</td>
                                    <td>6</td>
                                    <td>16</td>
                                    <td>25%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PRS gs</th>
                                    <td>58</td>
                                    <td>6</td>
                                    <td>16</td>
                                    <td>30%</td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PPE gzh</th>
                                    <td>61</td>
                                    <td>7</td>
                                    <td>15</td>
                                    <td>35%</td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PPT gzh</th>
                                    <td>59</td>
                                    <td>8</td>
                                    <td>22</td>
                                    <td>17%</td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PST gzh</th>
                                    <td>50</td>
                                    <td>12</td>
                                    <td>26</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">RG028 gzh</th>
                                    <td>65</td>
                                    <td>13</td>
                                    <td>26</td>
                                    <td>2%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BZT gzh</th>
                                    <td>53</td>
                                    <td>18</td>
                                    <td>28</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PMM</th>
                                    <td>58</td>
                                    <td>24</td>
                                    <td>33</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PBM</th>
                                    <td>40</td>
                                    <td>28</td>
                                    <td>30</td>
                                    <td>16%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-762x25mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">LRNPC</th>
                                    <td>66</td>
                                    <td>7</td>
                                    <td>27</td>
                                    <td>35%</td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">LRN</th>
                                    <td>64</td>
                                    <td>8</td>
                                    <td>28</td>
                                    <td>35%</td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ43</th>
                                    <td>60</td>
                                    <td>11</td>
                                    <td>29</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">akbs</th>
                                    <td>58</td>
                                    <td>12</td>
                                    <td>32</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">P Gl</th>
                                    <td>58</td>
                                    <td>14</td>
                                    <td>32</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">T Gzh (Tracer)</th>
                                    <td>60</td>
                                    <td>18</td>
                                    <td>34</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Pst gzh</th>
                                    <td>50</td>
                                    <td>25</td>
                                    <td>36</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-9x19mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">RIP</th>
                                    <td>102</td>
                                    <td>2</td>
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
                                    <th scope="row">Quakemaker</th>
                                    <td>85</td>
                                    <td>8</td>
                                    <td>22</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PSO gzh</th>
                                    <td>59</td>
                                    <td>10</td>
                                    <td>32</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Luger CCI</th>
                                    <td>70</td>
                                    <td>10</td>
                                    <td>38</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Green Tracer</th>
                                    <td>58</td>
                                    <td>14</td>
                                    <td>33</td>
                                    <td>15%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PST gzh</th>
                                    <td>54</td>
                                    <td>20</td>
                                    <td>33</td>
                                    <td>15%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">AP 6.3</th>
                                    <td>52</td>
                                    <td>30</td>
                                    <td>48</td>
                                    <td>5%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-1"></td>
                                </tr>


                                <tr>
                                    <th scope="row">7n31</th>
                                    <td>52</td>
                                    <td>39</td>
                                    <td>53</td>
                                    <td>5%</td>
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
                    <div class="tab-pane fade" id="list-45" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">RIP</th>
                                    <td>127</td>
                                    <td>3</td>
                                    <td>12</td>
                                    <td>100%</td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Hydroshok</th>
                                    <td>95</td>
                                    <td>13</td>
                                    <td>30</td>
                                    <td>50%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Lasermatch (Tracer)</th>
                                    <td>74</td>
                                    <td>18</td>
                                    <td>37</td>
                                    <td>1%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ACP</th>
                                    <td>72</td>
                                    <td>19</td>
                                    <td>36</td>
                                    <td>1%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ACP AP</th>
                                    <td>70</td>
                                    <td>36</td>
                                    <td>43</td>
                                    <td>1%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-9x21mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">sp12</th>
                                    <td>80</td>
                                    <td>15</td>
                                    <td>63</td>
                                    <td>35%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">sp11</th>
                                    <td>65</td>
                                    <td>18</td>
                                    <td>44</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">sp10</th>
                                    <td>49</td>
                                    <td>35</td>
                                    <td>46</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">sp13</th>
                                    <td>63</td>
                                    <td>39</td>
                                    <td>47</td>
                                    <td>20%</td>
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
                    <div class="tab-pane fade" id="list-57x28mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">r37f</th>
                                    <td>98</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>100%</td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ss198lf</th>
                                    <td>74</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>80%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">r37x</th>
                                    <td>81</td>
                                    <td>11</td>
                                    <td>14</td>
                                    <td>70%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ss197sr</th>
                                    <td>62</td>
                                    <td>20</td>
                                    <td>22</td>
                                    <td>50%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">l191 (Tracer)</th>
                                    <td>58</td>
                                    <td>33</td>
                                    <td>41</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">sb193</th>
                                    <td>54</td>
                                    <td>35</td>
                                    <td>37</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ss190</th>
                                    <td>49</td>
                                    <td>37</td>
                                    <td>43</td>
                                    <td>20%</td>
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
                    <div class="tab-pane fade" id="list-46x30mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">Action SX</th>
                                    <td>65</td>
                                    <td>13</td>
                                    <td>39</td>
                                    <td>50%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">Subsonic SX</th>
                                    <td>45</td>
                                    <td>36</td>
                                    <td>46</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ SX</th>
                                    <td>43</td>
                                    <td>40</td>
                                    <td>41</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>


                                <tr>
                                    <th scope="row">AP SX</th>
                                    <td>35</td>
                                    <td>53</td>
                                    <td>46</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-9x39mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">sp5</th>
                                    <td>68</td>
                                    <td>35</td>
                                    <td>52</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">sp6</th>
                                    <td>58</td>
                                    <td>43</td>
                                    <td>60</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>


                                <tr>
                                    <th scope="row">SPP</th>
                                    <td>64</td>
                                    <td>45</td>
                                    <td>56</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BP</th>
                                    <td>60</td>
                                    <td>48</td>
                                    <td>68</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-366" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">Geksa</th>
                                    <td>110</td>
                                    <td>14</td>
                                    <td>38</td>
                                    <td>45%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ</th>
                                    <td>98</td>
                                    <td>23</td>
                                    <td>48</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">EKO</th>
                                    <td>73</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">AP</th>
                                    <td>90</td>
                                    <td>42</td>
                                    <td>60</td>
                                    <td>1%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="list-545x39mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">SP</th>
                                    <td>68</td>
                                    <td>11</td>
                                    <td>34</td>
                                    <td>45%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">HP</th>
                                    <td>74</td>
                                    <td>11</td>
                                    <td>20</td>
                                    <td>35%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PRS</th>
                                    <td>60</td>
                                    <td>14</td>
                                    <td>28</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">US</th>
                                    <td>65</td>
                                    <td>15</td>
                                    <td>34</td>
                                    <td>10%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ</th>
                                    <td>54</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">T (Tracer)</th>
                                    <td>57</td>
                                    <td>20</td>
                                    <td>38</td>
                                    <td>16%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PS</th>
                                    <td>50</td>
                                    <td>25</td>
                                    <td>35</td>
                                    <td>40%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PP</th>
                                    <td>46</td>
                                    <td>30</td>
                                    <td>32</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BP</th>
                                    <td>48</td>
                                    <td>32</td>
                                    <td>41</td>
                                    <td>16%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BT (Tracer)</th>
                                    <td>44</td>
                                    <td>37</td>
                                    <td>49</td>
                                    <td>16%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BS</th>
                                    <td>40</td>
                                    <td>51</td>
                                    <td>57</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                </tr>


                                <tr>
                                    <th scope="row">7n39</th>
                                    <td>37</td>
                                    <td>62</td>
                                    <td>60</td>
                                    <td>2%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-556x45mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">Warmage</th>
                                    <td>85</td>
                                    <td>3</td>
                                    <td>14</td>
                                    <td>90%</td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">55_HP</th>
                                    <td>75</td>
                                    <td>9</td>
                                    <td>22</td>
                                    <td>70%</td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">MK_255_Mod_0</th>
                                    <td>60</td>
                                    <td>17</td>
                                    <td>32</td>
                                    <td>3%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M856 (Tracer)</th>
                                    <td>55</td>
                                    <td>23</td>
                                    <td>34</td>
                                    <td>33%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ</th>
                                    <td>52</td>
                                    <td>24</td>
                                    <td>33</td>
                                    <td>50%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M855</th>
                                    <td>50</td>
                                    <td>30</td>
                                    <td>37</td>
                                    <td>40%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M856A1 (Tracer)</th>
                                    <td>51</td>
                                    <td>37</td>
                                    <td>52</td>
                                    <td>33%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M855A1</th>
                                    <td>45</td>
                                    <td>43</td>
                                    <td>52</td>
                                    <td>34%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M995</th>
                                    <td>40</td>
                                    <td>53</td>
                                    <td>58</td>
                                    <td>32%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-762x39mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">HP</th>
                                    <td>87</td>
                                    <td>15</td>
                                    <td>35</td>
                                    <td>26%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">US</th>
                                    <td>56</td>
                                    <td>29</td>
                                    <td>42</td>
                                    <td>8%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">T45M</th>
                                    <td>62</td>
                                    <td>30</td>
                                    <td>46</td>
                                    <td>12%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">PS</th>
                                    <td>57</td>
                                    <td>32</td>
                                    <td>52</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BP</th>
                                    <td>58</td>
                                    <td>47</td>
                                    <td>63</td>
                                    <td>12%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-300blk" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">BPZ</th>
                                    <td>60</td>
                                    <td>28</td>
                                    <td>36</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">AP</th>
                                    <td>55</td>
                                    <td>44</td>
                                    <td>60</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-762x51mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">Ultra Nosler</th>
                                    <td>107</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td>70%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">BPZ FMJ</th>
                                    <td>88</td>
                                    <td>31</td>
                                    <td>33</td>
                                    <td>25%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">TPZ SP</th>
                                    <td>60</td>
                                    <td>36</td>
                                    <td>40</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M80</th>
                                    <td>80</td>
                                    <td>41</td>
                                    <td>66</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M62 (Tracer)</th>
                                    <td>79</td>
                                    <td>44</td>
                                    <td>75</td>
                                    <td>14%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M61</th>
                                    <td>70</td>
                                    <td>64</td>
                                    <td>83</td>
                                    <td>13%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>


                                <tr>
                                    <th scope="row">M993</th>
                                    <td>67</td>
                                    <td>70</td>
                                    <td>85</td>
                                    <td>13%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-762x54R" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">T-46M (Tracer)</th>
                                    <td>82</td>
                                    <td>41</td>
                                    <td>83</td>
                                    <td>18%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>


                                <tr>
                                    <th scope="row">LPS_Gzh</th>
                                    <td>81</td>
                                    <td>42</td>
                                    <td>78</td>
                                    <td>18%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-3"></td>
                                </tr>


                                <tr>
                                    <th scope="row">7N1</th>
                                    <td>86</td>
                                    <td>45</td>
                                    <td>84</td>
                                    <td>8%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                </tr>


                                <tr>
                                    <th scope="row">7BT1 (Tracer)</th>
                                    <td>78</td>
                                    <td>59</td>
                                    <td>87</td>
                                    <td>8%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>


                                <tr>
                                    <th scope="row">SNB</th>
                                    <td>75</td>
                                    <td>62</td>
                                    <td>87</td>
                                    <td>8%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>


                                <tr>
                                    <th scope="row">7n37</th>
                                    <td>72</td>
                                    <td>70</td>
                                    <td>88</td>
                                    <td>8%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-127x55mm" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">ps12a</th>
                                    <td>165</td>
                                    <td>10</td>
                                    <td>22</td>
                                    <td>70%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ps12</th>
                                    <td>115</td>
                                    <td>28</td>
                                    <td>60</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-2"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">ps12b</th>
                                    <td>102</td>
                                    <td>46</td>
                                    <td>57</td>
                                    <td>30%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-338LapuaMagnum" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">Tac-X</th>
                                    <td>196</td>
                                    <td>18</td>
                                    <td>55</td>
                                    <td>50%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-1"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">UPZ</th>
                                    <td>142</td>
                                    <td>32</td>
                                    <td>70</td>
                                    <td>60%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-4"></td>
                                    <td class="cell-color-2"></td>
                                </tr>


                                <tr>
                                    <th scope="row">FMJ</th>
                                    <td>122</td>
                                    <td>47</td>
                                    <td>83</td>
                                    <td>20%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-5"></td>
                                </tr>


                                <tr>
                                    <th scope="row">AP</th>
                                    <td>115</td>
                                    <td>79</td>
                                    <td>89</td>
                                    <td>13%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-MountedWeapons" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">30mm Grenade</th>
                                    <td>199</td>
                                    <td>1</td>
                                    <td>95</td>
                                    <td>0%</td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                    <td class="cell-color-0"></td>
                                </tr>


                                <tr>
                                    <th scope="row">12.7x108mm</th>
                                    <td>182</td>
                                    <td>88</td>
                                    <td>88</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>


                                <tr>
                                    <th scope="row">12.7x108mm Tracer</th>
                                    <td>199</td>
                                    <td>80</td>
                                    <td>95</td>
                                    <td>17%</td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                    <td class="cell-color-6"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-Other" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card mb-2 bg-dark">
                            <table class="table table-dark" style="width: 99%">
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
                                    <th scope="row">40mm Buckshot Grenade</th>
                                    <td>160</td>
                                    <td>5</td>
                                    <td>95</td>
                                    <td>0%</td>
                                    <td class="cell-color-5"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
                                    <td class="cell-color-3"></td>
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
        .scrollable-sidebar {
            overflow-y: scroll;
            max-height: 90vh;
        }
    </style>
@endsection

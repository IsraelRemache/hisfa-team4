
    @extends('dashboard')

        @section('dashboardbar')

            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
        @stop

        @section('content')

            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Stock resources <span class="infotekst">(in ton)</span>
                        <a data-toggle="modal" data-target="#Modalresources"><img class="settingsicon" src="images/settings.svg" alt="settings_stockresources">
                        </a>
                    </div>
                    <!-- Toevoegen Resources -->
                    
                    <div class="modal fade" tabindex="-1" role="dialog" id="Modalresources">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    
                    <div class="bottombox_dashboard" id="flexbox">
                        <div class="flex-item1">
                            <img class="resourceimage" src="images/resource.jpg" alt="Resource image">
                            <p class="resourcename">f21MB-n </p>
                            <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">
                            <img class="resourceimage" src="images/resource.jpg" alt="Resource image">
                            <p class="resourcename">f21MB-n </p>
                            <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">
                            <img class="resourceimage" src="images/resource.jpg" alt="Resource image">
                            <p class="resourcename">f21MB-n </p>
                            <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">
                            <img class="resourceimage" src="images/resource.jpg" alt="Resource image">
                            <p class="resourcename">f21MB-n </p>
                            <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">
                            <img class="resourceimage" src="images/resource.jpg" alt="Resource image">
                            <p class="resourcename">f21MB-n </p>
                            <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Blocks in stock <span class="infotekst">(quantity)</span>
                        <a data-toggle="modal" data-target="#Modalquality"><img class="settingsicon" src="images/settings.svg" alt="settings_stockblocks"></a>
                    </div>
                    <!-- Toevoegen Quality -->
                    
                    <div class="modal fade" tabindex="-1" role="dialog" id="Modalquality">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    <div class="bottombox_dashboard" id="flexbox">
                        <div class="flex-item1">

                            <p class="resourcename">P15 </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">60SE </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">P20 </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">100SE </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">P25 </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">150SE </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">P30 </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">200SE </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">P35 </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                        <div class="flex-item1">

                            <p class="resourcename">250SE </p>
                            <div class="octa-image"><img src="images/red-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/green-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                            <div class="octa-image"><img src="images/yellow-circle.svg" alt="octabin_amount"> <p class="octanumber1">5</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------------Waste en prime silo's------------------------------ -->
            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Waste silo's
                        <a data-toggle="modal" data-target="#Modalwaste"><img class="settingsicon" src="images/settings.svg" alt="settings_wastesilo's"></a>
                    </div>
                    
                    <!-- Toevoegen Quality -->
                    
                    <div class="modal fade" tabindex="-1" role="dialog" id="Modalwaste">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    
                    <div class="bottombox_dashboard" id="flexbox">

                        <div class="flex-item1">
                            <div class="silos">
                                <img src="images/silo.svg" alt="octabin_amount">
                                <p class="resourcetext">grondstof 1</p>
                            </div>
                        </div>
                        <div class="flex-item1">
                            <div class="silos">
                                <img src="images/silo.svg" class="silo-image" alt="octabin_amount">
                                <div class="colorpercent"></div>
                                <p class="resourcetext">grondstof 2</p>
                            </div>
                        </div>
                        <div class="flex-item1">
                            <div class="silos">
                                <img src="images/silo.svg" alt="octabin_amount">
                                <p class="resourcetext">grondstof 3</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex-item">
                    <div class="topbox_dashboard">Prime silo's
                        <a data-toggle="modal" data-target="#Modalprime"><img class="settingsicon" src="images/settings.svg" alt="settings_primesilo's"></a>
                    </div>
                    
                    <!-- Toevoegen Quality -->
                    
                    <div class="modal fade" tabindex="-1" role="dialog" id="Modalprime">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Modal title</h4>
                          </div>
                          <div class="modal-body">
                            <p>One fine body&hellip;</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    <div class="bottombox_dashboard">
                        <div id="flexbox">
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 1</p>
                                </div>
                            </div>
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" class="silo-image" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 2</p>

                                </div>
                            </div>
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 3</p>
                                </div>
                            </div>
                        </div>
                        <div id="flexbox">
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 4</p>
                                </div>
                            </div>
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" class="silo-image" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 5</p>
                                </div>
                            </div>
                            <div class="flex-item1">
                                <div class="silos">
                                    <img src="images/silo.svg" alt="octabin_amount">
                                    <p class="resourcetext">grondstof 6</p>
                                </div>
                            </div>
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>


        @stop

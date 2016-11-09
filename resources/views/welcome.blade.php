 @extends('dashboard')

        @section('content')

            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Stock resources <span class="infotekst">(in ton)</span>
                      <div class="dropdown">
                      <a data-toggle="dropdown" data-target="#Modalquality"><img class="settingsicon" id="settingsicondown" src="images/settings.svg" alt="settings_stockblocks"></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>  
                    </div>
                    <!-- Toevoegen Resources -->
<<<<<<< HEAD
                    
                     
                    
=======

                    <div class="modal fade" tabindex="-1" role="dialog" id="Modalresources">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <input type="text" placeholder="Title" class="input" style="border: none;">
                          </div>
                          <div class="modal-body">
                            <input type="text" placeholder="Body" class="input" style="border: none;">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

>>>>>>> origin/devel
                    
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
                        <div class="dropdown">
                      <a data-toggle="dropdown" data-target="#Modalquality"><img class="settingsicon" id="settingsicondown" src="images/settings.svg" alt="settings_stockblocks"></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>
                    </div>
                    <!-- Toevoegen Quality -->
                    
                    
                    
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
                        <div class="dropdown">
                      <a data-toggle="dropdown" data-target="#Modalquality"><img class="settingsicon" id="settingsicondown" src="images/settings.svg" alt="settings_stockblocks"></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>
                    </div>
                    
                    <!-- Toevoegen Quality -->
                    
                
                    
                    
                    <div class="bottombox_dashboard" id="flexbox">

                        <div class="flex-item1">
                            <div class="silos">
<<<<<<< HEAD
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
=======
                                <p class="resourcetext">{{$waste->quantity}}%</p>
                                @if(($waste->quantity) <= 40)
                                    <img src="images/silo-green.svg" alt="octabin_amount">
                                @elseif(($waste->quantity) > 40 && $waste->quantity < 80)
                                    <img src="images/silo-orange.svg" alt="octabin_amount">
                                @else
                                    <img src="images/silo-red.svg" alt="octabin_amount">
                                @endif
                                <p class="resourcetext">{{$waste->name}}</p>
                                <p class="resourcetext">{{$waste->type}}</p>
>>>>>>> origin/devel
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex-item">
                    <div class="topbox_dashboard">Prime silo's
                        <div class="dropdown">
                      <a data-toggle="dropdown" data-target="#Modalquality"><img class="settingsicon" id="settingsicondown" src="images/settings.svg" alt="settings_stockblocks"></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>
                    </div>
                    
                    <!-- Toevoegen Quality -->
                    
                    
                    
                    <div class="bottombox_dashboard">
                        <div id="flexbox">
                            <div class="flex-item1">
                                <div class="silos">
<<<<<<< HEAD
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
=======
                                    <p class="resourcetext">{{(($prime->quantity))}}%</p>
                                    @if(($prime->quantity) <= 40)
                                    <img src="images/silo-green.svg" alt="octabin_amount">
                                   @elseif(($prime->quantity) > 40 && $prime->quantity < 80)
                                    <img src="images/silo-orange.svg" alt="octabin_amount">
                                    @else
                                    <img src="images/silo-red.svg" alt="octabin_amount">
                                    @endif
                                    <p class="resourcetext">{{$prime->name}}</p>
                                    <p class="resourcetext">{{$prime->type}}</p>

>>>>>>> origin/devel
                                </div>
                            </div>
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>


        @stop

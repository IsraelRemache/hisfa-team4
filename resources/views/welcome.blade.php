    @extends('dashboard')

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

                    
                    <div class="bottombox_dashboard" id="flexbox">
                        @foreach ($resources as $resource)
                            <div class="flex-item1">
                                <img class="resourceimage" src="images/{{ $resource->img }}" alt="Resource image">
                                <p class="resourcename"> {{$resource->type}} </p>
                                <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1"> {{$resource->quantity}} </p></div>
                            </div>
                        @endforeach
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

                    <div class="flex-container1">
                      @foreach ($results as $result)
                        <div class="bottombox_qualities" id="flexbox">  
                          <div class="flex-name">
                            <p class="resourcename"> {{ $result }} </p>
                          </div>
                          @foreach ($qualities as $quality)
                            @if($quality->name == $result)
                              <div class="flex-circle{{$quality->quality_id}}">
                                @if($quality->length == 4)
                                  <div class="octa-image">
                                    <img src="images/red-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                                @if($quality->length == 6)
                                  <div class="octa-image">
                                    <img src="images/green-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                                @if($quality->length == 8)
                                  <div class="octa-image">
                                    <img src="images/yellow-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                              </div>
                              @endif
                            @endforeach
                          </div>
                        @endforeach
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
                    
                    
                    <div class="bottombox_dashboard" id="flexbox">
                        @foreach ($wastes as $waste)
                        <div class="flex-item1">
                            <div class="silos">
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
                            </div>
                        </div>
                        @endforeach
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
                    
                    <div class="bottombox_dashboard">
                    @foreach ($primes->chunk(3) as $chunk)
                        <div id="flexbox">
                            @foreach ($chunk as $prime)
                            <div class="flex-item1">
                                <div class="silos">
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

                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endforeach
                    </div>

                </div>
                    </div>
                </div>
            </div>


        @stop

    @extends('dashboard')
        
        @section('content')

            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Stock resources <span class="infotekst">(in ton)</span>
                        <a href="resources/add"><img class="settingsicon" src="images/settings.svg" alt="settings_stockresources">
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
                            <a href="resources/resource_{{$resource->id}}">
                            <div class="flex-item1">
                                <img class="resourceimage" href="resources/resource_{{$resource->id}}" src="images/{{ $resource->img }}" alt="Resource image">
                                <p class="resourcename"> {{$resource->type}} </p>
                                <div class="octa-image"><img src="images/octabin.svg" alt="octabin_amount"> <p class="octanumber1"> {{$resource->quantity}} </p></div>
                            </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="flex-container">
                <div class="flex-item">
                    <div class="topbox_dashboard">Blocks in stock <span class="infotekst">(quantity)</span>
                        <a href="qualities/addquality"><img class="settingsicon" src="images/settings.svg" alt="settings_stockblocks"></a>
                    </div>
                    <!-- Toevoegen Quality -->

                    <div class="flex-container1">
                    @foreach ($results as $result)
                        <div class="bottombox_qualities" id="flexbox">  
                          <div class="flex-name">
                            <p class="resourcename"> {{ $result }} </p>
                          </div>
                          @php 
                          $cubic = 0 
                          @endphp
                        @foreach ($qualities as $quality)
                          @if($quality->name == $result)
                          <a href="qualities/quality_{{$quality->id}}">
                              <div class="flex-circle{{$quality->quality_id}}">
                                @if($quality->length == 4)
                                  <div class="octa-image">
                                    <img src="images/green-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                                @if($quality->length == 6)
                                  <div class="octa-image">
                                    <img src="images/yellow-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                                @if($quality->length == 8)
                                  <div class="octa-image">
                                    <img src="images/red-circle.svg" alt="octabin_amount"> 
                                    <p class="octanumber1">{{$quality->quantity}}</p>
                                  </div>
                                @endif
                              </div>
                               </a>
                              @php
                                  $cubic = round($cubic + $quality->quantity*$quality->length*1.03*1.29, 2);
                              @endphp
                            @endif
                        @endforeach
                           @php
                            echo "<p class='cubicmetres'> $cubic m&#179 </p>";
                           @endphp
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
                            <p>Add waste silo's</p>
                          </div>
                          <div class="modal-body">
                            
                            <form method="POST" action='{{ url("/addwaste")}}'>
                              Resource<select name="wasteresource">
                              @foreach ($resources as $resource)
                              <option value="{{$resource->id}}">{{$resource->type}}</option>
                              @endforeach
                              </select>
                              
                              <input type="text" name="wastesiloname" placeholder="Silo name" class="input" style="border: none;">
                              <input type="hidden" value="{{csrf_token()}}" name="_token">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="addwaste" class="btn btn-primary">Add silo</button>
                           </form>
                            
                          </div>
                         
                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    
                    <div class="bottombox_dashboard">
                      @foreach ($wastes->chunk(3) as $chunk)
                       <div id="flexbox">
                        @foreach ($chunk as $waste)
                        <div class="flex-item1">
                            <a href="wastes/waste_{{$waste->id}}">
                            <div class="silos">
                               
                                <p class="resourcetext">{{round(($waste->quantity/3300)*100)}}%</p>
                                @if(round(($waste->quantity/3300)*100) <= 40)
                                    <img src="images/silo-green.svg" alt="octabin_amount">
                                @elseif(round(($waste->quantity/3300)*100) > 40 && round(($waste->quantity/3300)*100) < 80)
                                    <img src="images/silo-orange.svg" alt="octabin_amount">
                                @else
                                    <img src="images/silo-red.svg" alt="octabin_amount">
                                @endif
                                <p class="resourcetext">{{$waste->name}}</p>
                                <p class="resourcetext">{{$waste->type}}</p>
                            </div>
                            </a>
                        </div>
                        @endforeach
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
                            <p>Add prime silo's</p>
                          </div>
                          <div class="modal-body">
                            
                            <form method="POST" action='{{ url("/addprime")}}' enctype="multipart/form-data">
                              Resource<select name="primeresource">
                              @foreach ($resources as $resource)
                              <option value="{{$resource->id}}">{{$resource->type}}</option>
                              @endforeach
                              </select>
                              
                              <input type="text" name="primesiloname" placeholder="Silo name" class="input" style="border: none;">
                              <input type="hidden" value="{{csrf_token()}}" name="_token">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="addprime" class="btn btn-primary">Add silo</button>
                           </form>
                            
                          </div>
                         
                          
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                    <div class="bottombox_dashboard">
                    @foreach ($primes->chunk(3) as $chunk)
                        <div id="flexbox">
                            @foreach ($chunk as $prime)
                            <div class="flex-item1">
                                <a href="/primes/prime_{{$prime->id}}">
                                <div class="silos">
                                    <p class="resourcetext">{{round(($prime->quantity/3300)*100)}}%</p>
                                    @if(round(($prime->quantity/3300)*100) <= 40)
                                    <img src="images/silo-green.svg" alt="octabin_amount">
                                   @elseif(round(($prime->quantity/3300)*100) > 40 && round(($prime->quantity/3300)*100) < 80)
                                    <img src="images/silo-orange.svg" alt="octabin_amount">
                                    @else
                                    <img src="images/silo-red.svg" alt="octabin_amount">
                                    @endif
                                    <p class="resourcetext">{{$prime->name}}</p>
                                    <p class="resourcetext">{{$prime->type}}</p>

                                </div>
                                </a>
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

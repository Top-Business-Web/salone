@extends('cityadmin.layout.app')

@section('preload-section')
@if($mapset->mapbox == 1 && $mapset->google_map == 0)
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    @endif
  @if($mapset->mapbox == 0 && $mapset->google_map == 1)  
 <style>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      #map {
        height: 100%;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
    @endif
@section ('content')
<div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ __('keywords.Upd_Vendor')}}</h4>
                   @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-primary" role="alert">
                          {{$errors->first()}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                      @endif
                  @endif
                  <form class="forms-sample" action="{{route('update-vendor',$vendor->vendor_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      

                    <div class="form-group">
                      <label for="exampleInputName1">vendor Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="vendor_name" value="{{$vendor->vendor_name}}">
                    </div>
                      @if($mapset->mapbox == 0 && $mapset->google_map == 1)
                     <div class="form-group">
                      <label for="autocomplete">Address</label>
                      <input type="text" class="form-control" id="autocomplete" value="{{$vendor->vendor_loc}}" name="vendor_address" placeholder="Enter Address">
                      
                    </div>
                   @endif
                   
                   
                    <div class="form-group">
                      <label for="exampleInputName1">Shop Type</label>
                      <select class="form-control" name="shop_type" required>
                          <option value="1" @if($vendor->shop_type == 1) selected @endif >Male</option>
                          <option value="2" @if($vendor->shop_type == 2) selected @endif >Female</option>
                          <option value="3" @if($vendor->shop_type == 3) selected @endif >Unisex</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Admin Share In %</label>
                      <input type="number" class="form-control" name="admin_share" value="{{$vendor->admin_share}}" placeholder="Enter Admin Share In %" required>
                    </div>
                   
                   
                   @if($mapset->mapbox == 1 && $mapset->google_map == 0)
                   <div class="form-group">
                      <label for="autocomplete">Address</label>
                      <!--<input type="text" class="form-control" id="autocomplete" name="cityadmin_address" placeholder="Enter Address">-->
                      <div class="autocomplete" style="width:100%;">
                           <input id="lng" type="hidden" name="lng" value="{{$vendor->lng}}">
                              <input id="lat" type="hidden" name="lat" value="{{$vendor->lat}}">
                            <input id="myInput" type="text" name="vendor_address" value="{{$vendor->vendor_loc}}" placeholder="Place your Address">
                             
                        </div>
                    </div>
                      @endif

                     <div class="form-group">
                      <label for="deliveryRange">Delivery Range</label>
                      <input type="number" min="1" name="deliveryRange" id="deliveryRange" value="{{$vendor->delivery_range}}" class="form-control" required>
                    </div>

                     <div class="form-group">
                      <label>Vendor Logo</label>
                      
                      <input type="hidden" name="old_vendor_image" value="{{$vendor->vendor_logo}}" class="file-upload-default">
                      <div class="input-group col-xs-12">
                      <input type="file" name="vendor_image" class="file-upload-default">
                      </div>
                    </div>
                     
                      <div class="form-group">
                      <label for="exampleInputName1">Owner Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="owner_name" value="{{$vendor->owner}}">
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputName1">vendor Phone</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="vendor_phone" value="{{$vendor->vendor_phone}}">
                    </div>

                      <div class="form-group">
                      <label for="exampleInputName1">vendor Email</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="vendor_email" value="{{$vendor->vendor_email}}">
                    </div>
                     
                     <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="password1" placeholder="Enter password">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputName1">Confirm Password</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="password2" placeholder="confirm password">
                    </div>
                    	<div class="form-group">
                      <label for="">Description<sup>*</sup></label>
					  <textarea id="description" name="description"  class="form-control" row="5" required>{{$vendor->description}}</textarea>
                    </div>
                        @foreach($lang as $langs)
                              <?php $tex = $langs->lang_prefix.'_description' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">Vendor Description in {{$langs->lang_name}}<sup>*</sup></label>
                      <textarea name="{{$tex}}"  class="form-control" row="5" required>{{$vendor->$tex}}</textarea>
                    </div>
                    @endforeach
                    
                    
                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>
                     <a href="{{route('vendor')}}" class="btn btn-light">{{ __('keywords.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
@endsection

@section('postload-section')
@if($mapset->mapbox == 1 && $mapset->google_map == 0)          
<script>

    var geocodingClient = mapboxSdk({accessToken: '{{$mapbox->mapbox_api}}'});

    function autocompleteSuggestionMapBoxAPI(inputParams, callback) {
        geocodingClient.geocoding.forwardGeocode({
            query: inputParams,
            autocomplete: true,
            limit: 5,
        })
            .send()
            .then(response => {
                const match = response.body;
                callback(match);
            });
    }

    function autocompleteInputBox(inp) {
        var currentFocus;
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            this.parentNode.appendChild(a);

            // suggestion list MapBox api called with callback
            autocompleteSuggestionMapBoxAPI($('#myInput').val(), function (results) {
                results.features.forEach(function (key) {
                    b = document.createElement("DIV");
                    b.innerHTML = "<strong>" + key.place_name.substr(0, val.length) + "</strong>";
                    b.innerHTML += key.place_name.substr(val.length);
                    b.innerHTML += "<input type='hidden' data-lat='" + key.geometry.coordinates[1] + "' data-lng='" + key.geometry.coordinates[0] + "'  value='" + key.place_name + "'>";
                    b.addEventListener("click", function (e) {
                        let lat = $(this).find('input').attr('data-lat');
                        let long = $(this).find('input').attr('data-lng');
                        inp.value = $(this).find('input').val();
                        $(inp).attr('data-lat', lat);
                        $(inp).attr('data-lng', long);
                        document.getElementById("lat").value = lat;
                        document.getElementById("lng").value = long;
                        closeAllLists();
                        
                    });
                    a.appendChild(b);
                });
            })
        });


        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    autocompleteInputBox(document.getElementById("myInput"));
</script>

@endif

@if($mapset->mapbox == 0 && $mapset->google_map == 1)          
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- javascript code --}}
<script src="https://maps.google.com/maps/api/js?key={{$map}}=places&callback=initAutocomplete" type="text/javascript"></script>
<script>
   $(document).ready(function() {
        $("#lat_area").addClass("d-none");
        $("#long_area").addClass("d-none");
   });
</script>
<script>
   google.maps.event.addDomListener(window, 'load', initialize);

   function initialize() {
       var input = document.getElementById('autocomplete');
       var autocomplete = new google.maps.places.Autocomplete(input);
       autocomplete.addListener('place_changed', function() {
           var place = autocomplete.getPlace();
           $('#latitude').val(place.geometry['location'].lat());
           $('#longitude').val(place.geometry['location'].lng());
           $("#lat_area").removeClass("d-none");
           $("#long_area").removeClass("d-none");
       });
   }
</script>


    <script src="https://maps.googleapis.com/maps/api/js?key={{$map}}&libraries=places&callback=initMap"
        async defer></script> 
        
@endif        
        
@endsection
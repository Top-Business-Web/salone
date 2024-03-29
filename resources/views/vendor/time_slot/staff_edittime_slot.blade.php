@extends('vendor.layout.app')

@section ('content')
<div class="content-wrapper">
          <div class="row">
		  <div class="col-md-2">
		  </div>
            
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Time Slot</h4>
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
                  <form class="forms-sample" action="{{route('staff_timeslotupdate')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" class="form-control" name="id" value="{{$time->id}}">
                    <div class="form-group">
                      <label for="exampleInputName1">open Time</label>
                      <input type="time" class="form-control" name="open_hour" value="{{$time->open_hour}}">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputName1">close Time</label>
                      <input type="time" class="form-control" name="close_hour" value="{{$time->close_hour}}">

                    </div>
                    <div class="form-group">
                      <label>Active</label></label>
                      <input type="radio" name="status" value="0" <?php echo ($time->status=='0')?'checked':'' ?>>
                      <label>Inactive</label></label>
                      <input type="radio" name="status" value="1" <?php echo ($time->status=='1')?'checked':'' ?>><br>

                    </div>
                
                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>
                
                     <a href="{{route('staff_timeslot')}}" class="btn btn-light">{{ __('keywords.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection
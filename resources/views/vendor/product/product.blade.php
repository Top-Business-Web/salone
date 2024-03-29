@extends('vendor.layout.app')
 
@section ('content')

 <style>
     input[type="file"] {
    background-color:transparent;
    padding:0px;
}

 </style>


<!-- Begin Page Content -->
<div class="container-fluid">
 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">services</h6>
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
           
        <a class="btn btn-success m-auto" style="float: right;" href="{{route('vendoraddservice')}}">Add service</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
          <thead>
            <tr>
            <th>service Name</th>
              @foreach($lang as $langs)
            <th>{{$langs->lang_name}} Service Name</th>
            @endforeach
            <th>service Image</th>
          
            <th>{{ __('keywords.Actions')}}</th>
            </tr>
          </thead>
    
          <tbody>
          @if(count($product)>0)
                          @php $i=1; @endphp
                          @foreach($product as $products)
                        <tr>
                         
                            <td>{{$products->service_name}}</td>
                              @foreach($lang as $langs)
                              <?php $tex = $langs->lang_prefix.'_service_name' ?>
                            <td>{{$products->$tex}}</td>
                            @endforeach
                            <td align="center"><img src="{{url($products->service_image)}}" style="width: 21px;"></td>
                            <td>
                               <a href="{{route('vendoreditservice',$products->service_id)}}" style="width: 28px; padding-left: 6px;" class="btn btn-info"  style="width: 10px;padding-left: 9px;" style="color: #fff;"><i class="fa fa-edit" style="width: 10px;"></i></a>
							<button type="button" style="width: 28px; padding-left: 6px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$products->service_id}}"><i class="fa fa-trash"></i></button>
              <a href="{{route('varient',$products->service_id)}}" style="width: auto; padding: 6px;" class="btn btn-info">other variants</a>
							</td>
							

                        </tr>
                        @php $i++; @endphp
                        @endforeach
                      @else
                        <tr>
                          @if(count($lang)>0)
                          @php $rows = count($lang)+3;  @endphp
                            <td>{{ __('keywords.No_Data')}}</td>
                            @for ($i = 1; $i<$rows; $i++)
                              <td style="display:none"></td>
                            @endfor
                          @endif
                        </tr>
                      @endif
                       
          </tbody>
        </table><br />
                {!! $product->links("pagination::bootstrap-4") !!}
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
</div>
</div>
@foreach($product as $products)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$products->service_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Delete Service</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				Are you want to delete service with all its varient.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('keywords.Close')}}</button>
				<a href="{{route('vendordeleteservice', $products->service_id)}}" class="btn btn-primary">{{ __('keywords.Delete')}}</a>
			</div>
		</div>
	</div>
</div>
@endforeach   
@endsection
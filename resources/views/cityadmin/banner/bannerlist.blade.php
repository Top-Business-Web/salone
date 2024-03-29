@extends('cityadmin.layout.app')

@section ('content')


<!-- Begin Page Content -->
<div class="container-fluid">
 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Banners</h6>
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
        <a class="btn btn-success m-auto" style="float: right;" href="{{route('addadminbanner')}}">{{ __('keywords.Add')}}</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
          <thead>
            <tr>
            <th>S/N#</th>
            <th>Banner Name</th>
            <th>Banner Image</th>
            <th>Vendor Name</th>
            <th>{{ __('keywords.Actions')}}</th>
            </tr>
          </thead>
          <tbody>
          @if(count($banner)>0)
                          @php $i=1; @endphp
                          @foreach($banner as $banners)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$banners->banner_name}}</td>
                           
                            <td align="center"><img src="{{url($banners->banner_image)}}" style="width: 21px;"></td>
                            <td align="center">{{$banners->vendor_name}}</td>
                            <td>
                               <a href="{{route('editadminbanner',$banners->banner_id)}}" style="width: 28px; padding-left: 6px;" class="btn btn-info"  style="width: 10px;padding-left: 9px;" style="color: #fff;"><i class="fa fa-edit" style="width: 10px;"></i></a>
							<button type="button" style="width: 28px; padding-left: 6px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$banners->banner_id}}"><i class="fa fa-trash"></i></button>
							</td>

                        </tr>
                        @php $i++; @endphp
                        @endforeach
                      @else
                        <tr>
                          <td class="text-danger">{{ __('keywords.No_Data')}}</td>
                          @for ($i = 1; $i<5; $i++)
                            <td style="display:none"></td>
                          @endfor
                        </tr>
                      @endif
                       
          </tbody>
        </table><br />
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
</div>
</div>
@foreach($banner as $banners)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$banners->banner_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">{{ __('keywords.Del_Banner')}}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				>{{ __('keywords.Del_Banner_Q')}}<
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('keywords.Close')}}</button>
				<a href="{{route('deleteadminbanner', $banners->banner_id)}}" class="btn btn-primary">{{ __('keywords.Delete')}}</a>
			</div>
		</div>
	</div>
</div>
@endforeach   
@endsection
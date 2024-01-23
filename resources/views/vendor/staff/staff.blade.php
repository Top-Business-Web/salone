@extends('vendor.layout.app')

@section ('content')


<!-- Begin Page Content -->
<div class="container-fluid">
 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Staff</h6>
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
        <a class="btn btn-success m-auto" style="float: right;" href="{{route('Addstaff')}}">{{ __('keywords.Add')}}</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
          <thead>
            <tr>
            <th>S/N#</th>
            <th>{{ __('keywords.Staff_Name')}}</th>
            <th>{{ __('keywords.Staff_Desc')}}</th>
             @foreach($lang as $langs)
              <?php $tex2 = $langs->lang_name.' Staff Description' ?>
            <th>{{$tex2}}</th>
            @endforeach
            <th>{{ __('keywords.Staff_Img')}}</th>
            <th>{{ __('keywords.Actions')}}</th>
            </tr>
          </thead>
          <tbody>
          @if(count($staff)>0)
                          @php $i=1; @endphp
                          @foreach($staff as $staffs)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$staffs->staff_name}}</td>
                            <td>{{$staffs->staff_description}}</td>
                            @foreach($lang as $langs)
                              <?php $tex = $langs->lang_prefix.'_staff_description' ?>
                            <td>{{$staffs->$tex}}</td>
                            @endforeach
                            <td align="center"><img src="{{url($staffs->staff_image)}}" style="width: 21px;"></td>
                            <td>
                               <a href="{{route('Editstaff',$staffs->staff_id)}}" style="width: 28px; padding-left: 6px;" class="btn btn-info"  style="width: 10px;padding-left: 9px;" style="color: #fff;"><i class="fa fa-edit" style="width: 10px;"></i></a>
							<button type="button" style="width: 28px; padding-left: 6px;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$staffs->staff_id}}"><i class="fa fa-trash"></i></button>
							</td>

                        </tr>
                        @php $i++; @endphp
                        @endforeach
                      @else
                        <tr>
                          @if(count($lang)>0)
                            @php $rows = count($lang)+5;  @endphp
                            <td>{{ __('keywords.No_Data')}}</td>
                            @for ($i = 1; $i<$rows; $i++)
                              <td style="display:none"></td>
                            @endfor
                          @endif
                        </tr>
                      @endif
                       
          </tbody>
        </table><br />
                {!! $staff->links("pagination::bootstrap-4") !!}

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
</div>
</div>
@foreach($staff as $staffs)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$staffs->staff_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				<a href="{{route('deletestaff', $staffs->staff_id)}}" class="btn btn-primary">{{ __('keywords.Delete')}}</a>
			</div>
		</div>
	</div>
</div>
@endforeach   
@endsection
@extends('cityadmin.layout.app')

@section ('content')


<!-- Begin Page Content -->
<div class="container-fluid">
 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">App Languages</h6>
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
        <a class="btn btn-success m-auto" style="float: right;" href="{{route('lang_add')}}">{{ __('keywords.Add')}}</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
           <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
          <thead>
            <tr>
            <th>S/N#</th>
            <th>Language</th>
			<th>Lang prefix</th>
		
            <th>{{ __('keywords.Actions')}}</th>
            </tr>
          </thead>      
          <tbody>
          @if(count($adminlang)>0)
          @php $i=1; @endphp
          @foreach($adminlang as $adminlang)
        <tr>
            <td>{{$i}}</td>
            <td>{{$adminlang->lang_name}}</td>
			<td align="center">{{$adminlang->lang_prefix}}</td>
		
              <td>
              <a href="{{route('lang_delete', [$adminlang->lang_id])}}" onClick="return confirm('Are you sure? This will delete your all added translations related to this language & you can not restore it');" class="btn btn-danger">{{ __('keywords.Delete')}}</a>
        </td>
        </tr>
              @php $i++; @endphp
                @endforeach
              @else
                <tr>
                  <td>{{ __('keywords.No_Data')}}</td>
                  @for ($i = 1; $i<4; $i++)
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

@endsection
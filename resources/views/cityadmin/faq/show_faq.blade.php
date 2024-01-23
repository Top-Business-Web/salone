@extends('cityadmin.layout.app')

@section ('content')


<!-- Begin Page Content -->
<div class="container-fluid">
 

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">FAQs</h6>
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
        <a class="btn btn-success m-auto" style="float: right;" href="{{route('faq_add')}}">{{ __('keywords.Add')}}</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
          <thead>
            <tr>
            <th>S/N#</th>
            <th>Question</th>
              @foreach($lang as $langs)
              <?php $tex = $langs->lang_name.' question' ?>
            <td>{{$tex}}</td>
            @endforeach
			<th>Answer</th>
			  @foreach($lang as $langs)
              <?php $tex2 = $langs->lang_name.' answer' ?>
            <td>{{$tex2}}</td>
            @endforeach
            <th>{{ __('keywords.Actions')}}</th>
            </tr>
          </thead>
         
          <tbody>
          @if(count($adminfaq)>0)
          @php $i=1; @endphp
          @foreach($adminfaq as $adminfaq)
        <tr>
            <td>{{$i}}</td>
            <td>{{$adminfaq->question}}</td>
             @foreach($lang as $langs)
              <?php $tex = $langs->lang_prefix.'_question' ?>
            <td>{{$adminfaq->$tex}}</td>
            @endforeach
			<td align="center">{{$adminfaq->answer}}</td>
			  @foreach($lang as $langs)
              <?php $tex = $langs->lang_prefix.'_answer' ?>
            <td>{{$adminfaq->$tex}}</td>
            @endforeach
              <td>
              <a href="{{route('faq_edit', [$adminfaq->faq_id])}}" class="btn btn-primary">{{ __('keywords.Edit')}}</a>
              <a href="{{route('faq_delete', [$adminfaq->faq_id])}}" onClick="return confirm('Are you sure?');" class="btn btn-danger">{{ __('keywords.Delete')}}</a>
        </td>
        </tr>
              @php $i++; @endphp
                @endforeach
              @else
                <tr>
                  @if(count($lang)>0)
                    @php $rows = count($lang)*2+4;  @endphp
                    <td>{{ __('keywords.No_Data')}}</td>
                    @for ($i = 1; $i<$rows; $i++)
                      <td style="display:none"></td>
                    @endfor
                  @endif
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
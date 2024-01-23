@extends('cityadmin.layout.app')

@section('preload-content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <style>
    sup {
        color:red;
        position: initial;
        font-size: 111%;
    }
    .note-editable p{
      margin:0px;
    }
  </style>
@endsection

@section ('content')
<div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Terms & Conditions</h4>
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
                  <form class="forms-sample" action="{{route('termcondition_save')}}" method="post">
                      {{csrf_field()}}
                    
					 <div class="form-group">
					  <textarea name="termcondition" class="my-editor form-control" id="my-editor" cols="30" rows="10" required>{{$termcondition->termcondition}}</textarea>
                    </div>
                     @foreach($lang as $langs)
                      <?php $tex = $langs->lang_prefix.'_termcondition' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">Terms and Conditions in {{$langs->lang_name}}<sup>*</sup></label>
                       <textarea id="{{$tex}}" name="{{$tex}}" class="{{$tex}} my-editor form-control" cols="30" rows="10" required>{{$termcondition->$tex}}</textarea>
                     
                    </div>
                    @endforeach
                    <button type="submit" class="onsubmit btn btn-success mr-2">Save</button>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@push('scripts')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>



@foreach($lang as $langs)
 <?php $tex1 = $langs->lang_prefix.'_termcondition' ?>
<script>
    CKEDITOR.replace('{{$tex1}}');
    </script>
@endforeach
@endpush
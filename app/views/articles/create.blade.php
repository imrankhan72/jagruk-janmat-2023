@extends('layouts.admin')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
        </div>
    @endif


    <h2 class="sub-header">New Article</h2>
    {{-- tab start --}}

    <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#article_details" aria-controls="article_details" role="tab" data-toggle="tab">Article Details</a></li>
    <li role="presentation"><a href="#article_categories" aria-controls="article_categories" role="tab" data-toggle="tab">Categories</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="article_details">
            {{ Form::open(array('route' => 'articles/store', 'id'=>'add_article_form','name'=>'add_article_form','class'=>'form-horizontal','role'=>'form','files' => true)) }}

<p></p>
    


        <div class="form-group">
            <label for="title" class="col-sm-1 control-label">Title</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="title" placeholder="Article Title" required>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-1 control-label">Content</label>
            <div class="col-sm-11">
                <textarea class="ckeditor" cols="80" id="editor1"  rows="10" name="body"   placeholder="description" required></textarea>
            </div>
        </div>

       {{--  <div class="form-group">
            <label for="title" class="col-sm-1 control-label">Author</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" name="author" placeholder="Author">
            </div>
        </div>
 --}}

    <div class="form-group">
        <label for="link" class="col-sm-1 control-label">Attachment</label>
        <div class="col-sm-11">
            <input type="file" class="form-control"  name="file_url" >
        </div>
    </div>

        <div class="checkbox">

            <label>
                <input type="checkbox" name="slider"  value="1"> Add to Sliding News (Home Page)
            </label>

        </div>


    <div class="radio">
        <label>
            <input type="radio" name="status"  value="0" >
            Save as Draft
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status"  value="1" checked >
           Publish
        </label>
    </div>


        
    </div>
    <div role="tabpanel" class="tab-pane" id="article_categories">

    @foreach($categories as $category)

    <div class="checkbox">
   
    <label>
      <input type="checkbox" name="categories[]"  value="{{$category->id}}" > {{$category->name}}
    </label>

    </div>

    @foreach($category->subcategories as $subcategory )

    <div class="checkbox">
    <label>
     &nbsp;&nbsp; <input type="checkbox" name="subcategories[]"  value="{{$subcategory->id}}" >{{$subcategory->name}}
    </label>
  </div>

    @endforeach
    @endforeach

    </div>
  </div>



</div>

    {{-- tab end --}}

    <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" id="submit" class="btn btn-primary">Add Article</button>
            </div>
        </div>
    </form>



 



@stop


@section('footer')
    <script>
    
//      var verifyPaymentType = function () {
//   var checkboxes = $('.wish_payment_type .checkbox');
//   var inputs = checkboxes.find('input');
//   var first = inputs.first()[0];

//   inputs.on('change', function () {
//     this.setCustomValidity('');
//   });

//   first.setCustomValidity(checkboxes.find('input:checked').length === 0 ? 'Choose one' : '');
// }

// $('#submit').click(verifyPaymentType);

// $('form').on('submit', function(){alert('ok')})

    </script>






@stop
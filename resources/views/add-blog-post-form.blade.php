<!DOCTYPE html>
<html>
<head>

    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
<script>
  $(function () {
           $('#product_id').autocomplete({
               source:function(request,response){
                
                   $.getJSON('?term='+request.term,function(data){
                        var array = $.map(data,function(row){
                            return {
                                value:row.id,
                                label:row.title,
                                name:row.description,
                            }
                        })

                        response($.ui.autocomplete.filter(array,request.term));
                   })
               },
               minLength:1,
               delay:500,
               select:function(event,ui){
                   $('#name').val(ui.item.name)
                   $('#description').val(ui.item.description)
               }
           })
})
</script>
</body>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
</html>

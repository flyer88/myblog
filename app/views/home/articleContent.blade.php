   <!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>flyer</title>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/home-index.css') }}" rel="stylesheet">
  

</head>
<body>
<div>
  
</div>
<div class="container" >

               <div class="container-article">
                	<div class="title">{{ $articles->title}}</div>
                   <div class="content"> {{$articles->content}}</div>
                 </div>           
</div>
<div>
  
{{ Form::open(array('url' => '')) }}
    <input type="text"><br>
    <textarea></textarea>
    <input type="submit" class="">
{{ Form::close() }}
</div>
   </div>
</body>
</html>

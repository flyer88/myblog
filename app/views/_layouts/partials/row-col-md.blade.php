   
@extends('_layouts.default')
@section('body')
@yield('head')

   <div class="row">
                <div class="col-md-8">
                @yield('left')
                </div>
                <div  class="col-md-4">
                @yield('right')

                </div>
    </div>      

@stop     

@extends('app')

@section('content')
<div style="text-align: center; width: 100%;background-color: #d9edf7">There will be the Filter!</div>
<div style="text-align: center; width: 100%">Main view</div>
<div class="container-fluid">
    <div class="row">
        @foreach($data as $index=>$theme)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                @include("main.smallview",['index'=>$index, 'element' => $theme]) 
            </div>
        @endforeach
    </div>
</div>

@endsection
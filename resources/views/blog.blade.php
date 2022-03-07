@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blogs</div>
 
                <div class="card-body">
                    <ul>
                        @foreach ($blogs as $data)
                         <a href="{{ route('blog', $data->post_slug) }}"><li>{{ $data->post_title }}</li></a>
                        @endforeach
                    </ul>
                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection
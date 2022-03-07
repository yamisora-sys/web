@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog Detail</div>
                <div class="card-body">
                    <h2>{{ $blog->post_title }}</h2>
                    <like-component :blog="{{ $blog->id }}"></like-component>
                    <dislike-component :blog="{{ $blog->id }}"></dislike-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
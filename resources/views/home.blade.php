@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                    <div class="jumbotron text-center">
                        <h3>Your Blog Posts</h3>
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

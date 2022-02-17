@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Stato:</strong>
                        @if ($post->published)
                        <span class="badge badge-pill badge-success">Pubblicato</span>
                        @else  
                        <span class="badge badge-pill badge-secondary">Bozza</span>   
                        @endif
                    </div>
                    {{$post->content}}
                    <a href="{{route("posts.edit", $post->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
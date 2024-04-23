@extends('./layouts/layout')
@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @if(isset($post->image))
                        <img class="img-fluid" src="{{ Storage::url($post->image->path)}}" alt="{{$post->image->path}}" />
                    @endif
                    <h2 class="section-heading">{{ $post->title }}</h2>
                    <p> {{ $post->content }} </p>
                    <hr>
                    @forelse($post->commentaires as $comment)
                        <p>{{ $comment->content }}</p>
                    @empty
                        <span>Aucun commentaire pour ce post</span>
                    @endforelse
                </div>
            </div>
        </div>
    </article>
@endsection
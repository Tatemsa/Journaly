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
                    <hr>
                    <h3>Faire un commentaire maintenant:</h3>
                    <form action="{{ route('post.comment', ['id'=>$post->id]) }}" class="form-group" method="post">
                        @csrf
                        <textarea id="" cols="30" rows="10" class="form-control" name="content" value="{{old('content')}}" placeholder="A votre plume!" style="border: solid 3px;"></textarea>
                        <br> 
                        <button class="btn btn-success" class="form-control">Valider le commentaire</button>
                    </form>
                </div>
            </div>
        </div>
    </article>
@endsection
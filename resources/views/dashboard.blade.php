@extends('./layouts/layout')
@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @if($posts->count()>0)
                    @foreach($posts as $post)
                        <div class="post-preview">
                            <a href="{{ route('post.show', ['id'=>$post->id]) }}">
                                <h2 class="post-title"> {{$post->title }} </h2>
                            </a>
                            <p class="post-meta">
                                {{ $post->content }}
                                <br>
                                <span> Créé le </span>{{ $post->created_at}}
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                     @endforeach
                @else
                    <p>Aucun post n'a encore été publié</p>
                    <a href="createPost"> Ecrire vos premières notes et poster les</a>
                @endif  
            </div>
        </div>
     </div>
@endsection
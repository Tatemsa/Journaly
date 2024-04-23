    @extends('./layouts/layout')
@section('content')
    <div class="container px-4 px-lg-5">
        <!-- @if($errors->any())
            @foreach ($errors->all() as $error)
                <em class="text-danger">{{ $error }}</em><br>
            @endforeach
        @endif -->
        <br>
        <div>
            <form action="{{ route('post.store') }}" class="form-group" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Entrez un titre pour votre post du jour" style="border: solid 3px;">
                <br>
                <textarea id="" cols="30" rows="10" class="form-control" name="content" value="{{old('content')}}" placeholder="A votre plume!" style="border: solid 3px;"></textarea>
                <br>
                <label for="image">Choisir une image</label>
                <input type="file" id="" name="image" class="form-control" style="border: solid 3px;" value="{{old('title')}}">
                <br>
                <div>
                    <label for="">Voulez-vous partager votre article avec d'autres utilisateurs?</label>
                    <label for="public">OUI</label>
                    <input type="radio" class="from-group" value="OUI" name="public" >
                    <label for="public">NON</label>
                    <input type="radio" class="form-group" value="NON" name="public">
                </div>
                <br> 
                <button class="btn btn-success" class="form-control">Enregistrer</button>
            </form>
        </div>
    </div>
    <br>
@endsection

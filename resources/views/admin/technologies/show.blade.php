@extends('layouts.app')

@section('content')

<body class="show-bg">

    <div class="container py-4">
        @foreach($technologies as $technology)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $technology->title }}</h5>
                    <img src="{{ asset('storage/' . $technology->preview) }}" class="w-50" alt="Anteprima">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$technology->id}}">
                        Elimina!!
                    </button>
                </div>
            </div>

            <div class="modal fade" id="deleteModal{{$technology->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$technology->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{$technology->id}}">Conferma</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Elimini la Categoria?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{route('admin.technologies.destroy', $technology->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

@endsection
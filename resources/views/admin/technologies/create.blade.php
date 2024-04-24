@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea una nuova tecnologia</h1>
        <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="preview" class="form-label">Anteprima:</label>
                <input type="file" class="form-control" id="preview" name="preview" required>
            </div>
            <button type="submit" class="btn btn-primary">Crea tecnologia</button>
        </form>
    </div>
@endsection
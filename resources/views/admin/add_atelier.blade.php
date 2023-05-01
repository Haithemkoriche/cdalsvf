@extends('admin.layout')
@section('content')
       <!-- Ajouter un atelier -->
       <div class="col-md-6">
        <h2>Ajouter un atelier</h2>
        <form action="{{ route('ajouter_atelier') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="atelier_title">Titre :</label>
                <input type="text" class="form-control" id="atelier_title" name="atelier_title" required>
            </div>
            <div class="form-group">
                <label for="atelier_description">Description :</label>
                <textarea class="form-control" id="atelier_description" name="atelier_description" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="atelier_image">Image :</label>
                <input type="file" class="form-control" id="atelier_image" name="atelier_image" accept="image/*"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

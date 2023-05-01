@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <!-- Ajouter une activité -->
        <div class="col-md-6">
            <h2 class="display-5">Ajouter une activité</h2>
            <form action="{{ route('ajouter_activite') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label class="form-label" for="title">Titre :</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="description">Description :</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="image">Image :</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
            </form>
        </div>
    </div>
@endsection

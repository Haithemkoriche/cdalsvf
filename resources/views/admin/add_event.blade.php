@extends('admin.layout')
@section('content')
         <!-- Ajouter un événement -->
         <div class="col-md-6">
            <h2>Ajouter un événement</h2>
            <form action="{{ route('ajouter_evenement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="evenement_title">Titre :</label>
                    <input type="text" class="form-control" id="evenement_title" name="evenement_title" required>
                </div>
                <div class="form-group">
                    <label for="evenement_description">Description :</label>
                    <textarea class="form-control" id="evenement_description" name="evenement_description" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="evenement_image">Image :</label>
                    <input type="file" class="form-control" id="evenement_image" name="evenement_image"
                        accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
@endsection

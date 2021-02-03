@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="header-title">Crear evento</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/createEvent" method="POST" enctype="multipart/form-date">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" placeholder="Título" name="title" class="form-control" required></input>
                        </div>
                        <div class="form-group select-image">
                            <label>Imagen</label>
                            <input class="input-image" type="file" name="file"></input>
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="buttons-container">
                            @csrf

                            <a href="{{ route('aprende') }}">
                            <button type="button" class="button-back">
                                {{ __('Atrás') }}
                            </button>
                            </a>
                            <input type="submit" value="Comenzar" class="button-access">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
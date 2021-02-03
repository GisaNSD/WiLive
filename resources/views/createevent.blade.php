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

                    <form action="" method="POST" enctype="multipart/form-date">
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" placeholder="Título" name="title" class="form-control" require></input>
                        </div>
                        <!-- <div class="form-group select-image">
                            <label>Imagen</label>
                            <input class="input-image" type="file" name="file"></input>
                        </div> -->
                        <div class="form-group">
                            <label>Categoria</label>
                                <select id="category" name="category" require>
                                    <option selected>--</option>
                                    <option value="Aprende">Aprende</option>
                                    <option value="Come">Come</option>
                                    <option value="Viaja">Viaja</option>
                                    <option value="Debate">Debate</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="description" rows="6" class="form-control" require></textarea>
                        </div>

                        <div class="form-group">
                            <label>Capacidad</label>
                            <input type="numbers" placeholder="Número de participantes" name="capacity" class="form-control" require></input>
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
@extends('main')

@section('container')

    <div>
        <h1>Crear Nueva Lista</h1>
        <hr class="half-rule"/>
    </div>

    <div class="container p-5" id="input-playlist-container">
        <div class="row justify-content-md-center">
            <div class="col-md-4 form-group">
                <label for="inputNombre">Nombre de la lista</label>
                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" required >
            </div>
            <div class="col-md-4 form-group">
                <label for="inputVisibilidad">Visibilidad de la lista</label>
                <select class="form-control" id="inputVisibilidad" required >
                    <option>Privada</option>
                    <option>Publica</option>
                </select>
            </div>
            <div class="col-md-8 form-group">
                <label for="inputDescripcion">Descripcion</label>
                <textarea class="form-control" id="inputDescripcion" rows="3"></textarea>
            </div>

            <div class="col-md-8 from-group">
                <label for="inputFile">Seleccione archivo de Imagen</label>
                <div class="input-group">
                    <input type="text" class="form-control" >
                    <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Seleccionar <input id="inputFile" type="file" style="display: none;" multiple>
                    </span>
                    </label>
                </div>
            </div>

        </div>

        <div class="text-center p-5">
            <button onclick="storePlaylist()" class="btn btn-primary col-md-3">Guardar</button>
        </div>

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/playlist.js') }}"></script>
    <script src="{{ asset('js/file-utils.js') }}"></script>
@endsection




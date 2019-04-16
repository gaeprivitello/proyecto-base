@extends('welcome')

@section('container')

    <div>
        <h1>Crear Nueva Lista</h1>
        <hr class="half-rule"/>
    </div>

    <div id="input-list-container" class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4 form-group">
                <label for="inputNombre">Nombre de la lista</label>
                <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
            </div>
            <div class="col-md-4 form-group">
                <label for="inputVisibilidad">Visibilidad de la lista</label>
                <select class="form-control" id="inputVisibilidad">
                    <option>Privada</option>
                    <option>Publica</option>
                </select>
            </div>
            <div class="col-md-8 form-group">
                <label for="inputDescripcion">Descripcion</label>
                <textarea class="form-control" id="inputDescripcion" rows="3"></textarea>
            </div>
        </div>
    </div>

@endsection
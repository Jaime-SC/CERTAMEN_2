@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div style="background-color: #F0D3F7" class="card-header  text-dark bg-gradient">
                    <span>Registro de Lectura</span>
                </div>
                <div class="card-body">
                    <div class="mb3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date" id="fecha-txt" class="form-control mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="time" class="form-control mb-3" id="hora-txt">
                    </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select class="form-select mb-3" id="medidor-select">
                            <option selected>Ingrese medidor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                    </div>
                    <div class="mb3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text" id="direccion-txt" class="form-control mb-3">
                    </div>
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number" class="form-control mb-3" min="1" max="500" id="valor-txt">
                    </div>
                    <div class="mb-3">
                        <label for="tipoMedida-select" class="form-label">Tipo de Medida</label>
                        <select class="form-select mb-3" id="tipoMedida-select">
                            <option value="Kilowatts">Kilowatts</option>
                            <option value="Watts">Watts</option>
                            <option value="Temperatura">Temperatura</option>

                        </select>
                    </div>

                </div>
                <div class="card-footer d-grid gap-1">
                    <button id="registrar-btn" class="btn btn-info">Registrar</button>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('js/registrar_lectura.js')}}"></script>
    
@endsection

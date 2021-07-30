@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div style="background-color: #F0D3F7" class="card-header  text-dark bg-gradient">
                    <span>Mediciones Existentes</span>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Medidor</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>10-07-2021</td>
                            <td>22:03</td>
                            <td>3</td>
                            <td>25000</td>
                            <td>ARTAS</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

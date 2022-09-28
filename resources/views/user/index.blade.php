@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    
@stop

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Usuarios</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h3 class="text-center">Dashboard Content</h3> --}}
                        <a class="btn btn-primary" href="{{}}">Crear Usuario</a>
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777eF">
                                <tr>
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff">Nombre</th>
                                    <th style="color:#fff">Email</th>
                                    <th style="color:#fff">Rol</th>
                                    <th style="color:#fff">Acciones</th>
                                </tr>

                            </thead>
                            <tbody >
{{--                                 
                                @foreach ()
                                   
                                @endforeach
                                 --}}
                            </tbody>
                        </table>
                        {{-- <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@stop

@section('css')

@stop

@section('js')

@stop
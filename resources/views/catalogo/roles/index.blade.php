@extends ('layouts.app')
@section ('h2',"Roles")
@section ('content')
<script src="{{asset('js/sweetalert/sweetalert.min.js')}}"></script>



<!-- Fin del Titulo -->
<!-- Inicio del main -->

<div class="row my-5">
    <a href="{{url('catalogo/roles/create')}}">
        <button class="btn btn-dark ml-auto d-flex align-items-end" id="btnAgregarUser">
            Agregar Nueva roles <span class="material-icons m-0 p-0"> add_circle_outline </span>
        </button>
    </a>

    <table id="datatable" class="table table-striped table-bordered">
        <thead class="text-light">
            <th>id</th>
            <th>Roles</th>
            <th colspan="3">Acciones</th>
        </thead>
        <tbody>

            @foreach ($roles as $obj)
            <tr>
                <td align="center">{{ $obj->id}}</td>
                <td>{{ $obj->name}}</td>
                <td align="center">
                    <a href="{{URL::action('catalogo\RolesController@edit',$obj->id)}}"
                        class="on-default edit-row"><i class="fa fa-pencil fa-lg"></i></a>
                    &nbsp;&nbsp;
                    <a href="" data-target="#modal-delete-{{$obj->id}}" data-toggle="modal"><i
                            class="fa fa-trash fa-lg"></i></a>
                </td>
            </tr>
            @include('catalogo.roles.modal')
            @endforeach



        </tbody>
    </table>
    @include('sweet::alert')
</div>
<!-- fin del main -->



@endsection
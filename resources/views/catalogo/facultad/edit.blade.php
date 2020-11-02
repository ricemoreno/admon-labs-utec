@extends ('layouts.app')
@section ('h2',"Editar Facultad")
@section ('content')
<script src="{{asset('js/sweetalert/sweetalert.min.js')}}"></script>

<div class="x_panel">
    <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal form-label-left">


            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!!Form::model($facultad,['method'=>'PATCH','route'=>['facultad.update',$facultad->id]])!!}
            {{Form::token()}}

            <form class="form-horizontal">
                <br>

                <div class="form-group row">
                    <label class="control-label col-md-3" align="right">Nombre</label>
                    <div class="col-md-6">
                        <input class="form-control" name="nombre" type="text" value="{{$facultad->nombre}}"
                            onblur="this.value = this.value.toUpperCase();">
                    </div>
                </div>


                <div class="form-group" align="center">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a href="{{url('catalogo/facultad')}}"><button type="button"
                            class="btn btn-primary">Cancelar</button></a>
                </div>

            </form>

            {!!Form::close()!!}

        </div>
        @include('sweet::alert')
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        {!! Form::open(['route' => ['user.profile.update', $user], 'method' => 'PUT', 'files' => true]) !!}
                        <h3 class="panel-title">
                            {!! Form::text('name', $user->third->name, ['class' => 'form-control']) !!}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                @if($user->detail->image)
                                    <img alt="User Pic" src="/profilepics/{{ $user->detail->image }}" class="img-circle img-responsive">
                                @else
                                    <img alt="User Pic" src="/profilepics/no-photo.jpg" class="img-circle img-responsive">
                                @endif
                                <p style="margin-top:30px;">
                                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
                                </p>
                            </div>

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Correo Electrónico</td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cédula</td>
                                        <td>
                                            {!! Form::number('cedula', $user->detail->cedula, ['class' => 'form-control', 'placeholder' => 'Cédula de identudad', 'maxlength' => 11]) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>País</td>
                                        <td>
                                            {!! Form::select('country_id', array('1' => 'República Dominicana'), null, ['class' => 'form-control']) !!}
                                        </td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Ciudad</td>
                                        <td>
                                            {!! Form::text('city', $user->detail->city, ['class' => 'form-control', 'placeholder' => 'Ciudad donde vives']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Provincia</td>
                                        <td>
                                            {!! Form::text('province', $user->detail->province, ['class' => 'form-control', 'placeholder' => 'Provincia donde vives']) !!}
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Calle</td>
                                        <td>
                                            {!! Form::text('address', $user->detail->address, ['class' => 'form-control', 'placeholder' => 'Dirección donde vives']) !!}
                                            <br>
                                            {!! Form::text('sector', $user->detail->sector, ['class' => 'form-control', 'placeholder' => 'Sector donde vives']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Número(s) de Contacto</td>
                                        <td>
                                            @foreach($user->third->phone as $phone)
                                                <li data-id="{{$phone->id}}" style="list-style: none;">
                                                    <a href="{{ route('user.profile.deletephone', $phone->id) }}" onclick="return confirm('Seguro desea eliminar este número de contacto?');" style="font-size: 8px !important;" data-toggle="tooltip" type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                                    {{$phone_types[$phone->phone_type_id - 1]}} : ({{ substr($phone->number, 0, 3) }}) {{ substr($phone->number, 3, 3) }}-{{ substr($phone->number, 6, 4) }}
                                                </li>
                                            @endforeach
                                                <li style="list-style: none; margin-top: 10px;">
                                                    Agrega número de contacto
                                                    {!! Form::select('phonetype', array(''=> 'Seleccione', '1' => 'Casa', '2' => 'Celular', '3' => 'Oficina'), null, ['class' => 'form-control']) !!}
                                                    {!! Form::number('phonenumber', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un nuevo numero']) !!}
                                                </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook</td>
                         '              <td>
                                            {!! Form::text('facebook', $user->detail->facebook, ['class' => 'form-control', 'placeholder' => 'Usuario de Facebook']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                        <td>
                                            {!! Form::text('instagram', $user->detail->instagram, ['class' => 'form-control', 'placeholder' => 'Usuario de instagram']) !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Twitter</td>
                                        <td>
                                            {!! Form::text('twitter', $user->detail->twitter, ['class' => 'form-control', 'placeholder' => 'Usuario de twitter']) !!}
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <a href="{{ route('user.profile.index') }}" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-remove-circle"></i> Cancelar</a>

                                {!! Form::submit(' Guardar', ['class' => 'btn btn-sm btn-success']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">

                        <a href="{{ route('user.profile.destroy', $user->id) }}" type="button" onclick="return confirm('Seguro desea eliminar el usuario? Toda su informacion y libros registrados se perderán.');" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i> Borrar Usuario</a>

                        <span class="pull-right">
                            @if($user->detail->facebook)
                                <a href="https://www.facebook.com/{{ $user->detail->facebook }}"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                            @endif
                            @if($user->detail->twitter)
                                <a href="https://www.twitter.com/{{ $user->detail->twitter }}"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                            @endif
                            @if($user->detail->instagram)
                                <a href="https://www.instagram.com/{{ $user->detail->instagram }}"><i id="social-ig" class="fa fa-envelope-square fa-2x social"></i></a>
                            @endif

                        </span>

                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mis libros registrados</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-md-12 col-lg-12 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Libro 1</td>
                                    </tr>
                                    <tr>
                                        <td>Libro 2</td>
                                    </tr>
                                    <tr>
                                        <td>Libro 3</td>
                                    </tr>
                                    <tr>
                                        <td>Libro 4</td>
                                    </tr>
                                    <tr>
                                        <td>Libro 5</td>
                                    </tr>
                                    <tr>
                                        <td>Libro 6</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="#" class="btn btn-primary">Agregar nuevo libro para prestamo</a>
                        <a href="#" class="btn btn-primary">Ver libros que me han prestado</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
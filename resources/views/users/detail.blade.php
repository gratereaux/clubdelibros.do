@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->third->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                @if($user->detail->image)
                                    <img alt="User Pic" src="/profilepics/{{ $user->detail->image }}" class="img-circle img-responsive">
                                @else
                                    <img alt="User Pic" src="/profilepics/no-photo.jpg" class="img-circle img-responsive">
                                @endif
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
                                            {{ substr($user->detail->cedula, 0, 3) }}-{{ substr($user->detail->cedula, 3, 7) }}-{{substr($user->detail->cedula, 10, 1)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>País</td>
                                        <td>
                                            {{ $user->detail->country->name}}
                                        </td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Ciudad</td>
                                        <td>
                                            {{ $user->detail->city }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Provincia</td>
                                        <td> {{ $user->detail->province}}</td>

                                    </tr>
                                    <tr>
                                        <td>Calle</td>
                                        <td>
                                            {{ $user->detail->address }}
                                            <br>
                                            Sector {{ $user->detail->sector }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Número(s) de Contacto</td>
                                        <td>
                                            @foreach($user->third->phone as $phone)
                                                <li data-id="{{$phone->id}}" style="list-style: none;">
                                                    {{$phone_types[$phone->phone_type_id - 1]}} : ({{ substr($phone->number, 0, 3) }}) {{ substr($phone->number, 3, 3) }}-{{ substr($phone->number, 6, 4) }}
                                                </li>
                                            @endforeach
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">

                            <a href="{{ route('user.profile.edit', $user->id) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar Usuario</a>

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
                                        @foreach($user->bookowner as $own)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('book.show', $own->book->id)  }}">
                                                        {{ $own->book->third->name }}, publicado por {{ $own->book->bookpublisher->third->name  }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
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

    <div class="container">
    @if (Session::has('Mensaje')){{
        //Descomentar div y cerrarlo debajo de mensaje para que tenga formato el mensaje
        //<div class="alert alert-succes" role="alert">
        Session::get('Mensaje')
    }}
    @endif
    <br><br>
    <b>Pagina principal</b>
    <br><br>
    <a href="{{url('users/create')}}" class="btn btn-primary ">Agregar Empleado</a>
    <br><br>
    <table class="table table-light table-hover">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nick Name</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->nickname}}</td>
                <td>{{$user->slug}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->estado}}</td>
                 <td>{{$user->rol}}</td>
                <td>
                    
                    <a class="btn btn-warning" href="{{ url('/users/'.$user->id.'/edit') }}">Editar</a>                      

                    <form method="post" action="{{ url('/users/'.$user->id) }}" style="display:inline">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Ud desea borrar los datos?');">Borrar</button>
                    </form>    
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
     <!--Paginador de la tabla-->
     <div class="conteiner">
         <div>
            {{$users->links()}}
        </div>
     </div>
    </div>

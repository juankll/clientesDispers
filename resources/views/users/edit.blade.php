
<div class="container">
    <h2 class="text text-center"><b>Editar datos</b> <br><br></h2>
        <form action="{{url('/users/'.$user->id)}}" method="post" class="form-horizontal" >
            <!--Metodo para la seguridad en laravel-->
            {{csrf_field()}}
            <!--metodo para actualizar los datos-->
            {{ method_field('PATCH') }}
            <div class="form-group">
            <label for="name" class="control-label">{{'Nick Name'}}</label>
            <input type="text" class="form-control" name="nickname" id="nickname" value="{{$user->nickname}}"> <br><br>
            </div>

            <div class="form-group">
            <label for="name" class="control-label">{{'Nombre'}}</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{$user->nombre}}"> <br><br>
            </div>

            <div class="form-group">
            <label for="name" class="control-label">{{'slug'}}</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{$user->slug}}"> <br><br>
            </div>

            <div class="form-group">
            <label for="email">{{'Email'}}</label>
            <input type="email" name="email" id="email" value="{{$user->email}}"> <br><br>
            </div>

            <div class="form-group">
            <label for="password">{{'Password'}}</label>
            <input type="password" name="password" id="password" value="{{$user->password}}"> <br><br>
            </div>

            <input class="btn btn-primary" type="submit" value="Modificar">
            <a href="{{url('users')}}" class="btn btn-secondary">Regresar</a>

        </form>

</div>



</div>

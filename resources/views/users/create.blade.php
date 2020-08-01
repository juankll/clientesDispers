



    <div class="container">
        <!--creacion de usuarios-->
        <h2 class="text text-center"><b>Creacion de usuario</b> </h2>
        <form action="{{url('/users')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="control-label">{{'nickname'}}</label>
                <input type="text" class="form-contro" name="nickname" id="nickname" value=""> 
            </div>
           
            <div class="form-group">
            <label for="name" class="control-label">{{'nombre'}}</label>
            <input type="text" class="form-contro" name="nombre" id="nombre" value=""> 
            </div>
            
            <div class="form-group">
            <label for="name" class="control-label">{{'slug'}}</label>
            <input type="text" class="form-contro" name="slug" id="slug" value=""> 
            </div>  

            <div class="form-group">
            <label for="email" class="control-label">{{'email'}}</label>
            <input type="email" class="form-contro" name="email" id="email" value="">
            </div>
            
            <div class="form-group">
            <label for="password" class="control-label">{{'Password'}}</label>
            <input type="password" class="form-contro" name="password" id="password"  value=""> 
            </div>
            
            <input type="hidden" name="rol" id="rol" value="cliente">
            <input class="btn btn-primary" type="submit" value="Agregar">
            <a href="{{url('users')}}" class="btn btn-secondary">Regresar</a> 
        </form>
    </div>


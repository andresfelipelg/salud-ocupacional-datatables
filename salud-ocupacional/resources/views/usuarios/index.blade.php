@extends('layout.app')

@section('css')

<link rel="stylesheet" href="{{asset('../../css/style-index.css')}}">
    
@endsection

@section('contenido')



    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Usuario</a>

    <table class="table table-dark table-striped mt-4 table-bordered shadow-lg" id="articulos">
        <thead class="bg-primary  text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Telefono</th>
                <th scope="col">Celular</th>
                <th scope="col">Direccion </th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>

                
   
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario )
   
            <tr>
                <td>{{ $usuario-> id}} </td>
                <td>{{ $usuario-> nombre}} </td>
                <td>{{ $usuario-> apellido}} </td>
                <td>{{ $usuario-> cedula}} </td>
                <td>{{ $usuario-> telefono}}</td>
                <td>{{ $usuario-> celular}} </td>
                <td>{{ $usuario-> email}}</td>
                <td>{{ $usuario-> id_role}}</td>
                <td>
                    <form action="" method="post">
                    @csrf
                    @method('DELETE')
                       <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-info">Editar</a>
                   <button href=""class="btn btn-danger" type="submit" >Borrar</button>
               </form>
               </td>
            </tr>
            </tr>
            </tr>
            </tr>
                
            @endforeach
        </tbody>
      </table>
      @section('js')
          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
          <script>
              $(document).ready(function() {
               $('#articulos').DataTable({
                   
                   "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
               });
                } );
          </script>
      @endsection
    @endsection
   
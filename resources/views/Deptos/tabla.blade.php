@isset($mesaje)
    

<p>{{$mensaje}}</p>
@endisset
<a href="{{route('Deptos.create')}}" class="btn btn-dark mb-3" role="button">
    <i class="fas fa-plus"></i> Insertar
</a>

<div
class="table-responsive-md"
>
<table
class="table  table-hover table-striped custom-table"
>
<thead class="table-dark ">
    <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Del Departamento</th>
                <th scope="col">Nombre Mediano</th>
                <th scope="col">Nombre Corto</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deptos as $depto)
            <tr>
                <td>{{ $depto->idDepto }}</td>
                <td>{{ $depto->nombreDepto }}</td>
                <td>{{ $depto->nombreMediano }}</td>
                <td>{{ $depto->nombreCorto }}</td>
                <td>
                    <a href="{{ route('Deptos.editar', $depto->idDepto) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </td>
                <td>
                    <a href="{{ route('Deptos.ver', $depto->idDepto) }}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </a>
                </td>
                <td>
                    <a href="{{ route('Deptos.ver', $depto->idDepto) }}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Ver
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $deptos->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
</div>
   
   

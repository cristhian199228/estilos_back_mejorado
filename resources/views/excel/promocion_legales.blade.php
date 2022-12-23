<table>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Empresa</th>
            <th>Estado Solicitud</th>
            <th>Direccion</th>
            <th>Telefonos</th>
            <th>Horario de Atención</th>
            <th>Vigencia de Promocion</th>
            <th>Restricciones</th>
            <th>Casilla de Veracidad de Informacion</th>
            <th>Acepto Terminos y Condiciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($promociones as $promocion)
        <tr>
            <td>{{ $promocion->created_at }}</td>
            <td>{{ $promocion->nombre_empresa }}</td>
            @if($promocion->estado_solicitud == 1)
            <td>REVISION</td>
            @endif
            @if($promocion->estado_solicitud == 2)
            <td>APROBADO</td>
            @endif
            @if($promocion->estado_solicitud == 3)
            <td>NO APROBADO</td>
            @endif
            <td>{{ $promocion->direccion}}</td>
            <td>{{ $promocion->telefono}}</td>
            <td>{{ $promocion->horario }}</td>
            <td>{{ $promocion->vigencia }}</td>
            <td>{{ $promocion->restricciones }}</td>
            @if($promocion->casilla == 1)
            <td>SI</td>
            @endif
            @if($promocion->estado_solicitud == 0)
            <td>NO</td>
            @endif
            @if($promocion->acepta == 1)
            <td>SI</td>
            @endif
            @if($promocion->acepta == 0)
            <td>NO</td>
            @endif
              <td>SI</td>
        </tr>
        @endforeach
    </tbody>
</table>
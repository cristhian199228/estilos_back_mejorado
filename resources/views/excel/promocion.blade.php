<table>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Empresa</th>
            <th>Descargas</th>
            <th>Estado Solicitud</th>
        </tr>
    </thead>
    <tbody>
        @foreach($promociones as $promocion)
        <tr>
            <td>{{ $promocion->created_at }}</td>
            <td>{{ $promocion->user->establecimiento->razon_social }}</td>
            <td>{{ $promocion->estado }}</td>
            @if($promocion->estado_solicitud == 1)
            <td>REVISION</td>
            @endif
            @if($promocion->estado_solicitud == 2)
            <td>APROBADO</td>
            @endif
            @if($promocion->estado_solicitud == 3)
            <td>NO APROBADO</td>
            @endif  
        </tr>
        @endforeach
    </tbody>
</table>
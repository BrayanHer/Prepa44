
<table id ="Plaeacion" class="table table-bordered">
  <thead class="thead-dark">
    <tr align="center">
      <th scope="col">Clave</th>
      <th scope="col">Fecha</th>
      <th scope="col">Maestro</th>
      <th scope="col">Ciclo Escolar</th>
      <th scope="col">Materia</th>
      <th scope="col">Archivo de Examenes</th>
    </tr>
  </thead>
  @foreach($Consulta as $c)
				<tbody class="col-md-10">
					<tr align="center">
						<th scope="row">{{$c->IdExam}}</th>
                        <td>{{$c->updated_at}}</td>
                        <td>{{$c->Maestro}}
						<td>{{$c->CicloEscolar}}</td>
                        <td>{{$c->Materia}}</td>
                        <td>{{$c->Archivo}}</td>
                        
                        
						</td>
					
					</tr>
				@endforeach
  				</tbody>
</table>

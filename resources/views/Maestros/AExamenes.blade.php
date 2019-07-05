<form action="{{route('GExamen')}}" method="POST" enctype='multipart/form-data'>                        
	{{csrf_field()}}

    <div class="form-group" style="display: none">
		@if($errors->first('IdExam')) 
			<small> {{ $errors->first('IdExam') }} </small> <br>
		@endif
		<input type="number" class="form-control" id="IdExam" name="IdExam" value="{{$IdExam}}">
	</div>

    <h3>Examenes</h3>
        <select class="form-control col-xl-12" name='IdCurso'>
            <option> Seleccione un Curso </option>
            
                @foreach($Curso as $c)
                    <option value='{{$c->IdCurso}}'>{{$c->CicloEscolar}} - {{$c->Periodo}} - {{$c->Materia}}</option>
                @endforeach
            </select> <br>

            <label class="custom-file col-md-12">
                <input type="file" id="file" name="Archivo" class="custom-file-input">
                <span class="custom-file-control">Seleccione el Archivo</span>
            </label> <br> <br>

            <button type="submit" class="btn btn-success btn-md">
                <span  aria-hidden="true"></span> Enviar
            </button>
</form>
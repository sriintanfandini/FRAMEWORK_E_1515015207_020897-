<div class="form-group">
	<label class="col-sm-2 control-label" id="mahasiswa_id">Mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$mahasiswa->listMahasiswaDanNim(),null,['class'=>'form-control','id'=> 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}		
	</div>
</div>

<!-- <div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Id Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$dosenmatakuliah->list('nama', 'id'),null,['class'=>'form-control','id'=> 'dosen_id','placeholder'=>"dosen"]) !!}		
	</div>
</div>
 -->
<div class="form-group">
	<label class="col-sm-2 control-label"> "ruangan_id">ruangan</label>
	<div class="col-sm-10">
		{!!Form::select ('ruangan_id', $ruangan->lists('title','id'), null, ['class'=>'form-control', 'id'=>'ruangan','placehorder'=>"ruangan"])!!}
		
		<!-- {!! Form::select('matakuliah_id',$matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}	 -->
		
	</div>
</div>

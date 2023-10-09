<div class="modal-content" >
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
  <form method="POST">
  {{csrf_field()}}
      <div class="form-group row">
          <label for="text3" class="col-4 col-form-label">Urusan</label> 
          <div class="col-8">
          <textarea name="urusan" id="kg_kegiatan" value="{{$kegiatan->urusan}}"  cols="40" rows="5" class="form-control">{{$kegiatan->urusan}}</textarea>
          </div>
      </div> 
      <div class="form-group row">
          <label for="text3" class="col-4 col-form-label">Indikator</label> 
          <div class="col-8">
          <textarea name="indikator" id="kg_indikator" value="{{$kegiatan->indikator}}" cols="40" rows="5" class="form-control">{{$kegiatan->indikator}}</textarea>
          </div>
      </div> 
      <div class="form-group row">
          <label for="text3" class="col-4 col-form-label">Kinerja</label> 
          <div class="col-8">
          <input name="target_k" id="kg_target_k" value="{{$kegiatan->target_k}}" type="number" class="form-control">
          </div>
      </div>
      <input type="text" id="id_p" name="kode" hidden value="{{$kegiatan->kode}} ">
      <input type="text" id="id" name="id" hidden value="{{ $kegiatan->id }}">
      <button type="button" class="btn btn-primary" onclick="ubah()">Save</button>
      </form>
          </div>
  </div>
</div>
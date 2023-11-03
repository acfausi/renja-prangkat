@extends('bidang.layout.main')

@section('judul')
Data Target
@endsection

@section('isi')
    <!-- End Page Title -->
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rencana Kerja</h5>
              <!-- Small tables -->
              <table class="table table-sm">
                <tbody id="table-get">
                  <a href=""></a> 
                </tbody>
              </table>
              <!-- End small tables -->
            </div>
          </div>
        </div>
      </div>
  </main>

  <script>

    $(document).ready(function(){
      $.ajax({
      type  : "GET",
      url   : "{{url('bidang/getdata')}}",
      dataType : "html",

      success : function(data) {
        $("#table-get").html(data);
      }
      })
    });



  </script>
  
  @endsection
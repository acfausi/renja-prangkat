@extends('admin.layout.main')
@section('judul')

@endsection
@section('isi')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Data User</h5>
                    <form class="row g-3" method="POST" action="{{url('admin/user/store')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" name="bidang_id" aria-label="Default select example">
                                    <option selected="">-</option>
                                    @foreach($bidang as $b)
                                    <option value="{{$b->id}}">{{$b->nama_bidang}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="floatingName"
                                    placeholder="Your name">
                                <label for="floatingName">Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="floatingName"
                                    placeholder="Your email">
                                <label for="floatingName">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="password" class="form-control" id="floatingName"
                                    placeholder="Your password">
                                <label for="floatingName">Password</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-control" name="role">
                                    <option value="admin">--</option>
                                    <option value="admin">Admin</option>
                                    <option value="bidang">Bidang</option>
                                    <option value="bendahara">Bendahara</option>
                                </select>
                                <label for="floatingName">Role</label>
                            </div>
                        </div>
                        <div class="text-">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>



@endsection

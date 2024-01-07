<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

<head>
    
    <title>Edit Pemasukan</title>
    @include ('layouts.navbar-menu')

</head>


<body class="bg-gradient-primary">
    <div class="container">
        <div class="card-login o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 head-navbar8">
                        <div class="p-5">
                            
                            <div class="text-center">
                                <h1 class="h4 subhead text-blue-100 mb-3" >Edit Pemasukan</h1>
                            </div>
                            <form class="user" action='/edit-pemasukan/{{$pemasukan['id']}}' method='POST'>
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="font-weight-bold text-primary mt-4">Tanggal</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input type="date" class="form-control form-control-md" name="tanggal" value={{$pemasukan['tanggal']}}>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Keterangan</h6>
                                    <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" value="{{$pemasukan['keterangan']}}" required>
        
                                </div>
                                <div class="form-group">
                                    <h6 class="h6 text-blue-100 mb-1">Nominal</h6>
                                    <input type="text" class="form-control form-control-user" id="nominal" name="nominal" placeholder="Masukkan nominal" value="{{$pemasukan['nominal']}}" required>
        
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
  
                                <button class="btn btn-login btn-user btn-regist4" type='submit'>
                                    Simpan
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@include ('layouts.footer-menu')
@include ('layouts.script')

</html>

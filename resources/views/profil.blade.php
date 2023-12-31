<!DOCTYPE html>
<html lang="en">

<head>
    <title>UNS News</title>
    @include ('layouts.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include ('layouts.navbar-menu')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 font-weight-bold text-primary">Profil</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <tbody class="text-left">
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>No. HP</td>
                                        <td>{{ Auth::user()->no_hp }} 
                                            <a href="/edit-akun" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                            <i class="fas fa-edit fa-sm text-white-50"></i> Edit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include ('layouts.footer-menu')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel" >Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Edit Akun Modal-->
    <div class="modal fade" id="editAkunModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" action='/profil' method="POST">
                        @csrf
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nomor Induk</h6>
                            <input type="number" class="form-control form-control-user"
                                id="inputNoInduk" readonly placeholder="{{Auth::user()->no_credential}}">
                        </div>
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Nama</h6>
                            <input type="text" class="form-control form-control-user"
                                id="inputName" readonly placeholder="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">Email</h6>
                            <input type="email" class="form-control form-control-user"
                                id="inputEmail" aria-describedby="emailHelp" readonly placeholder="{{Auth::user()->email}}"> 
                        </div>
                        <div class="form-group">
                            <h6 class="h6 text-blue-100 mb-1">No HP</h6>
                            <input type="tel" class="form-control form-control-user" id="no_hp" name="no_hp"
                                            placeholder="{{Auth::user()->no_hp}}" pattern="[0][8][0-9]{10}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div> --}}
@include ('layouts.script')
</body>

</html>
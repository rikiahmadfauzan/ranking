<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IOAN | Ranking</title>
    <link rel="shortcut icon" href="{{asset('img/icon1.png')}}">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar fw-bold sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('img/icon1.png')}}" alt="" width="50px">
                </div>
                <div class="h4 fw-bold sidebar-brand-text mx-3">IOAN</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                MENU
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog text-white"></i>
                    <span class="text-white">Sektor</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item text-primary" href="/layout1">Sektor 1</a>
                        <a class="collapse-item text-primary" href="/layout2">Sektor 2</a>
                        <a class="collapse-item text-primary" href="/layout3">Sektor 3</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/ranking">
                    <i class="fas fa-fw fa-chart-area text-white"></i>
                    <span class="text-white">Ranking</span></a>
            </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                   <h2>PERFORMANSI IOAN LBG</h2>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center">
                        <h4 class="text-gray-800">Ranking Closing</h4>
                    </div>
                    {{-- <button type="button" style="width: 140px" class="btn btn-primary mt-1 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus"></i> Tambah Data
                     </button> --}}
                    <div class="row">
                        <table id="example" class="table table-striped mt-3" style="width:100%">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Kode Teknisi</th>
                                    <th>Nama Teknisi</th>
                                    <th>Total Closing</th>
                                    {{-- <th><i class="fas fa-plus"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($layout1 as $key => $item)
                                <tr>
                                    {{-- <td>{{ $key+1 }}</td> --}}
                                    <td>{{ $item->kd_teknisi }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->closing }}</td>
                                    {{-- <td>
                                        <a data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                        <i class="fas fa-pen-to-square" style="color: blue"></i>
                                        </a>
                                    </td> --}}
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <style>
                                                    .submit1 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: blue;
                                                    }
                                                    .submit2 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: red;
                                                    }
                                                </style>
                                                <form action="/ranking/update/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <p class="mb-1">Nama</p>
                                                    <input class="form-control" type="text" name="nama" id="" value="{{ $item->nama }}" readonly>
                                                    <p class="mb-1 mt-3">Total Closing</p>
                                                    <input class="form-control"  type="number" name="closing" id="" value="{{ $item->closing }}">
                                                    <p class="mb-1 mt-3">Sektor</p>
                                                    <select class="form-control mb-2" name="sektor" id="">
                                                        <option value="{{ $item->sektor }}">{{ $item->sektor }}</option>
                                                    </select>
                                                    <input class="mt-3 submit1" type="submit" value="Update" name="update">
                                                    <input class="mt-3 submit2" type="button" data-bs-dismiss="modal" value="Close">
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                                @foreach ($layout2 as $key => $item)
                                <tr>
                                    {{-- <td>{{ $key+1 }}</td> --}}
                                    <td>{{ $item->kd_teknisi }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->closing }}</td>
                                    {{-- <td>
                                        <a data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                        <i class="fas fa-pen-to-square" style="color: blue"></i>
                                        </a>
                                    </td> --}}
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <style>
                                                    .submit1 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: blue;
                                                    }
                                                    .submit2 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: red;
                                                    }
                                                </style>
                                                <form action="/ranking/update/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <p class="mb-1">Nama</p>
                                                    <input class="form-control" type="text" name="nama" id="" value="{{ $item->nama }}" readonly>
                                                    <p class="mb-1 mt-3">Total Closing</p>
                                                    <input class="form-control"  type="number" name="closing" id="" value="{{ $item->closing }}">
                                                    <p class="mb-1 mt-3">Sektor</p>
                                                    <select class="form-control mb-2" name="sektor" id="">
                                                        <option value="{{ $item->sektor }}">{{ $item->sektor }}</option>
                                                    </select>
                                                    <input class="mt-3 submit1" type="submit" value="Update" name="update">
                                                    <input class="mt-3 submit2" type="button" data-bs-dismiss="modal" value="Close">
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                                @foreach ($layout3 as $key => $item)
                                <tr>
                                    {{-- <td>{{ $key+1 }}</td> --}}
                                    <td>{{ $item->kd_teknisi }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->closing }}</td>
                                    {{-- <td>
                                        <a data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                        <i class="fas fa-pen-to-square" style="color: blue"></i>
                                        </a>
                                    </td> --}}
                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <style>
                                                    .submit1 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: blue;
                                                    }
                                                    .submit2 {
                                                        border: none;
                                                        padding: 7px;
                                                        width: 75px;
                                                        border-radius: 7px;
                                                        color: white;
                                                        background-color: red;
                                                    }
                                                </style>
                                                <form action="/ranking/update/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <p class="mb-1">Nama</p>
                                                    <input class="form-control" type="text" name="nama" id="" value="{{ $item->nama }}" readonly>
                                                    <p class="mb-1 mt-3">Total Closing</p>
                                                    <input class="form-control"  type="number" name="closing" id="" value="{{ $item->closing }}">
                                                    <p class="mb-1 mt-3">Sektor</p>
                                                    <select class="form-control mb-2" name="sektor" id="">
                                                        <option value="{{ $item->sektor }}">{{ $item->sektor }}</option>
                                                    </select>
                                                    <input class="mt-3 submit1" type="submit" value="Update" name="update">
                                                    <input class="mt-3 submit2" type="button" data-bs-dismiss="modal" value="Close">
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a href="https://www.instagram.com/arwiesa_/">AryaWiraSaputra</a></a></span>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example', {
            order: [[2,'desc']]
        });
    </script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <style>
                .submit1 {
                    border: none;
                    padding: 7px;
                    width: 75px;
                    border-radius: 7px;
                    color: white;
                    background-color: blue;
                }
                .submit2 {
                    border: none;
                    padding: 7px;
                    width: 75px;
                    border-radius: 7px;
                    color: white;
                    background-color: red;
                }
            </style>
            <form action="/ranking/create" method="post">
                @csrf
                <p class="mb-1">Nama</p>
                <input class="form-control" type="text" name="nama" id="">
                <p class="mb-1 mt-3">Total Closing</p>
                <input class="form-control" type="number" name="closing" id="">
                {{-- <p class="mb-1 mt-3">Sektor</p>
                <select class="form-control mb-2" name="sektor" id="">
                    <option value="Sektor 1">Sektor 1</option>
                    <option value="Sektor 2">Sektor 2</option>
                    <option value="Sektor 3">Sektor 3</option>
                </select> --}}
                <input class="mt-3 submit1" type="submit" value="Simpan" name="simpan">
                <input class="mt-3 submit2" type="button" data-bs-dismiss="modal" value="Close">
            </form>
        </div>
        </div>
    </div>
</div>
</html>
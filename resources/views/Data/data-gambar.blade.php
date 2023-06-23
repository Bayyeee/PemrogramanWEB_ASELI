<!DOCTYPE html>
<html lang="en">

<head>

    <title>Upload Gambar</title>
    @include('komponen.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('komponen.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('komponen.top-bar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- @if (auth()->user()->level == "admin") --}}
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Upload Gambar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <form class="user" action="" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                                <input type="file" class="form-control form-control-user" name="gambar" id="gambar">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Submit
                                        </button>
                                        <hr>
                                    </form>
                                    {{-- @foreach ($usr as $item) --}}
                                        {{-- <tr> --}}
                                            {{-- <td>
                                                <img height="100px" width="70px"
                                                src="{{asset('gambar/' . $item->foto )}}"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td> --}}
                                            {{-- <td><a href="{{url('ubah-pengguna', $item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="{{url('delete-data/'. $item->id)}}"><i class="fa-solid fa-trash" style="color: red"></i></a> </td> --}}
                                        {{-- </tr> --}}
                                    {{-- @endforeach --}}
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- @else
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="{{url('/')}}">&larr; Back to Dashboard</a>
                    </div>
                    @endif --}}


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('komponen.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('komponen.modal-logout')

    <!-- Bootstrap core JavaScript-->
    @include('komponen.script')

    @include('sweetalert::alert')
</body>

</html>

@extends('admin.layout.main')

@section('title','dashboard')

@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
        <div
            class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="text-dark font-weight-bold my-1 mr-5">
                        Wisata </h2>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Wisata</th>
                        <th>Lokasi</th>
                        <th>Hari</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($wisata as $wisatas)
                    
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $wisatas->judul }}</td>
                        <td>{{ $wisatas->lokasi}}</td>
                        <td>{{ $wisatas->hari }} hari</td>
                        <td>{{ $wisatas->harga_awal }}$.</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Wisata</th>
                        <th>Lokasi</th>
                        <th>Hari</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('script')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush
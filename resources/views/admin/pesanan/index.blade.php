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
                        Pesanan
                    </h2>
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
                        <th>Nama</th>
                        <th>No Meja</th>
                        <th>Pesanan</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>Star Creator</td>
                        <td>Meja 42</td>
                        <td>Kopi robusta | <span style="color: red"> hot</span></td>
                        <td>Rp. 0</td>
                        <td><button>Sudah</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
        <div
            class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="text-dark font-weight-bold my-1 mr-5">
                        Pesanan Selesai
                    </h2>
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
            <table id="myTable2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Meja</th>
                        <th>Pesanan</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>Star Creator</td>
                        <td>Meja 42</td>
                        <td>Kopi robusta | <span style="color: red"> hot</span></td>
                        <td>Rp. 0</td>
                        <td style="color: rgb(52, 216, 52)" >Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Container-->
    </div>
</div>
<!--end::Content-->
@endsection

@push('script')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    $(document).ready( function () {
        $('#myTable2').DataTable();
    } );
</script>
@endpush
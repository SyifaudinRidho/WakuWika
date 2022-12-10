@extends('admin.layout.main')

@section('title','dashboard')

@section('content')
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
                        Tambah Minuman </h2>
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

            <form action="{{-- {{ route('add.post') }} --}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9" style="margin-inline: auto">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Tambah Minuman
                                </h3>
                            </div>
                            <!--begin::Form-->
                                <div class="card-body">
                                    <div class="form-group mb-1">
                                        <label>Nama Minuman</label>
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Nama Minuman.."/>
                                        @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Kategori Minuman</label>
                                        <select class="form-control" name="lokasi">
                                            <option value=""></option>
                                            {{-- @foreach($lokasi as $l)
                                            <option value="{{ $l->name }}">{{ $l->name }}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('lokasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleSelect1">Minuman hot/ice</label>
                                        <select class="form-control" name="hari" id="exampleSelect1" onchange="showresult(this.value)">
                                            <option value="1" id="hari1">hot</option>
                                            <option value="2" id="hari2">ice</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Harga</label>
                                        <input type="number" class="form-control" name="harga_awal" id="harga_awal" placeholder="Rp."/>
                                            @error('harga_awal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="image">Foto Wisata</label>
                                        <input class="form-control" id="image" type="file" name="gambar" accept="image/*">
                                        @error('gambar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>                              
                                </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="card-footer col-md-9" style="margin-inline: auto">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>


 
<!--end::Content-->
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
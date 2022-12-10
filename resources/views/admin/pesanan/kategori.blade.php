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
                        Tambah Kategori </h2>
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
            <form action="{{-- {{ route('add.kategori') }} --}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Tambah Kategori Minuman
                                </h3>
                            </div>
                            <!--begin::Form-->
                                <div class="card-body">
                                    <div class="form-group mb-1">
                                        <label>Kategori Minuman </label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Kategori.."/>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="card-footer col-md-6">
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
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-inclusion").click(function(){ 
          var html = $(".clone-inclusion").html();
          $(".increment-inclusion").after(html);
      });
      $("body").on("click",".danger-inclusion",function(){ 
          $(this).parents(".control-group-inclusion").remove();
      });
    });

    $(document).ready(function() {
      $(".btn-exclusion").click(function(){ 
          var html = $(".clone-exclusion").html();
          $(".increment-exclusion").after(html);
      });
      $("body").on("click",".exclusion",function(){ 
          $(this).parents(".control-group-exclusion").remove();
      });
    });

    $(document).ready(function() {
      $(".btn-addons").click(function(){ 
          var html = $(".clone-addons").html();
          $(".increment-addons").after(html);
      });
      $("body").on("click",".addons",function(){ 
          $(this).parents(".control-group-addons").remove();
      });
    });
</script>
<script>
   const day1 = document.getElementById('days1');
   const day2 = document.getElementById('days2');
   const day3 = document.getElementById('days3');
   const day4 = document.getElementById('days4');
   const day5 = document.getElementById('days5');
   const title2 = document.getElementById('day2');
   const title3 = document.getElementById('day3');
   const title4 = document.getElementById('day4');
   const title5 = document.getElementById('day5');
   const ket2 = document.getElementById('keterangan2');
   const ket3 = document.getElementById('keterangan3');
   const ket4 = document.getElementById('keterangan4');
   const ket5 = document.getElementById('keterangan5');
    function showresult(str){
        if(str == "1"){
            day1.style.display = 'block';
            day2.style.display = 'none';
            day3.style.display = 'none';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = false;
            title3.required = false;
            title4.required = false;
            title5.required = false;
            ket2.required = false;
            ket3.required = false;
            ket4.required = false;
            ket5.required = false;

        }else if(str == "2"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'none';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = false;
            title4.required = false;
            title5.required = false;
            ket2.required = true;
            ket3.required = false;
            ket4.required = false;
            ket5.required = false;
        }else if(str == "3"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'none';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = true;
            title4.required = false;
            title5.required = false;
            ket2.required = true;
            ket3.required = true;
            ket4.required = false;
            ket5.required = false;
        }else if(str == "4"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'block';
            day5.style.display = 'none';
            title2.required = true;
            title3.required = true;
            title4.required = true;
            title5.required = false;
            ket2.required = true;
            ket3.required = true;
            ket4.required = true;
            ket5.required = false;
        }else if(str == "5"){
            day1.style.display = 'block';
            day2.style.display = 'block';
            day3.style.display = 'block';
            day4.style.display = 'block';
            day5.style.display = 'block';
            title2.required = true;
            title3.required = true;
            title4.required = true;
            title5.required = true;
            ket2.required = true;
            ket3.required = true;
            ket4.required = true;
            ket5.required = true;
        }
    }

    const radioButtons = document.querySelectorAll('select[name="hari"]');
    radioButtons.forEach(radio=>{
        radio.addEventListener('click',handleRadioClick);
    });
</script>
@endpush
@extends('../layout/' . $layout)

@section('head')
    <title>Register - Lakubo - Lapak UMKM Boyolali</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="http://127.0.0.1:8000/" class="-intro-x flex items-center pt-5">
                    <img alt="Lakubo - Lapak UMKM Boyolali" class="w-6" src="{{ asset('build/assets/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        Lakubo
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('build/assets/images/dukung-umkm.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-2">Beberapa langkah untuk <br> Mendaftar.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Lakubo - Lapak UMKM Boyolali</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Mendaftar</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">Beberapa langkah untuk Mendaftar. Lakubo - Lapak UMKM Boyolali</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Masukan Nama Lengkap">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Nomor Hp">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
                        <!-- BEGIN: Nested Select Kecamatan -->
                        <div class="mt-3">
                            <div class="mt-2">
                                <select data-placeholder="Cari Kecamatan" class="tom-select w-full">
                                    <optgroup label="Kecamatan">
                                        <option> --Pilih Kecamatan-- </option>
                                        @foreach($provinces as $provinsi)
                                            <option value="{{$provinsi->id}}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- END: Nested Select Kecamatan -->
                        <!-- BEGIN: Nested Select Desa -->
                        <div class="mt-3">
                            <div class="mt-2">
                                <select data-placeholder="Cari Desa" class="tom-select w-full">
                                    <optgroup label="Desa">
                                        <option value="1">--Pilih Desa--</option>
                                        <option value="2">Winong</option>
                                        <option value="3">Jelok</option>
                                        <option value="4">Kenteng</option>
                                        <option value="5">Mojosongo</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <!-- END: Nested Select -->
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Alamat Detail (RT/RW/Nomor Rumah)">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Kata Sandi">
                        {{--<div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-success"></div>
                            <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                        </div>
                        <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">Apa itu sandi yang aman?</a>--}}
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Konfirmasi sandi">
                    </div>
                    {{--<div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                        <label class="cursor-pointer select-none" for="remember-me">Saya setuju dengan</label>
                        <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                    </div>--}}
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Mendaftar</button>
                        <a href="{{route('login.index')}}">
                            <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Masuk</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
@endsection

{{--
@section('script')
    <script>
        $(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        $(function (){
            $(function (){

                $('#provinsi').on('change',function (){
                    let id_provinsi = $('#provinsi').val()

                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkabupaten')}}",
                        data : {id_provinsi:id_provinsi},
                        cache : false,

                        success:: function (msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').('');
                            $('#desa').('');
                        },
                        error: function (data){
                            console.log('error:',data)
                        },
                    })

                })

            })
        });

    </script>
@endsection--}}

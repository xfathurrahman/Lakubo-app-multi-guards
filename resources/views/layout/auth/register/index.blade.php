@extends('layout.auth.main')

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
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Mendaftar</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">Beberapa langkah untuk Mendaftar. Lakubo - Lapak UMKM Boyolali</div>
                        <!-- BEGIN: Validation Form -->
                        <form class="validate-form mt-8">
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    {{--nama--}}
                                    <div class="input-form">
                                        <label for="validation-form-nama" class="intro-x form-label w-full flex flex-col sm:flex-row">
                                            Nama <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Wajib di isi</span>
                                        </label>
                                        <input id="validation-form-nama" type="text" name="name" class="intro-x form-control" placeholder="Masukan nama lengkap" required>
                                    </div>
                                    {{--nomor hp--}}
                                    <div class="input-form mt-3">
                                        <label for="validation-form-phone" class="intro-x form-label w-full flex flex-col sm:flex-row">
                                            No Handphone <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Wajib di isi, hanya angka</span>
                                        </label>
                                        <input id="validation-form-phone" type="number" name="phone" class="intro-x form-control" placeholder="081234567890" minlength="11" maxlength="13" required>
                                    </div>
                                    {{--email--}}
                                    <div class="input-form mt-3">
                                        <label for="validation-form-email" class="intro-x form-label w-full flex flex-col sm:flex-row">
                                            Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Wajib di isi, format email</span>
                                        </label>
                                        <input id="validation-form-email" type="email" name="email" class="intro-x form-control" placeholder="contoh@gmail.com" required>
                                    </div>
                                    {{--kata sandi--}}
                                    <div class="input-form mt-3">
                                        <label for="validation-form-password" class="form-label w-full flex flex-col sm:flex-row">
                                            Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Wajib di isi, minimal 8 karakter</span>
                                        </label>
                                        <input id="validation-form-password" type="text" name="password" class="form-control" placeholder="rahasia" minlength="8" required>
                                    </div>
                                </div>
                                <div class="intro-y col-span-12 lg:col-span-6">

                                    <!-- BEGIN: Nested Select - Address -->
                                    <label for="provinsi" class="intro-x form-label w-full flex flex-col sm:flex-row">
                                        Alamat <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Wajib di isi, pilih sesuai lokasi anda</span>
                                    </label>
                                    {{--Provinsi--}}
                                    <div class="mt-3">
                                        <div class="-mt-1">
                                            <select id="provinsi" class="intro-x w-full rounded text-sm" required>
                                                <option value="" selected disabled> -- Pilih Provinsi -- </option>
                                                @foreach($provinces as $provinsi)
                                                    <option value="{{$provinsi->id}}">{{ $provinsi->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--Kabupaten--}}
                                    <div class="mt-3">
                                        <div class="mt-2">
                                            <select id="kabupaten" class="intro-x w-full rounded text-sm" required></select>
                                        </div>
                                    </div>
                                    {{--Kecamatan--}}
                                    <div class="mt-3">
                                        <div class="mt-2">
                                            <select id="kecamatan" class="intro-x w-full rounded text-sm" required></select>
                                        </div>
                                    </div>
                                    {{--Desa--}}
                                    <div class="mt-3">
                                        <div class="mt-2">
                                            <select id="desa" class="intro-x w-full rounded text-sm" required></select>
                                        </div>
                                    </div>
                                    <!-- END: Nested Select -->
                                    {{--Alamat Lengkap--}}
                                    <div class="input-form mt-3">
                                        <label for="validation-form-detail-address" class="intro-x form-label w-full flex flex-col sm:flex-row">
                                            Patokan<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500"> RT/RW/No.Rumah/Jalan</span>
                                        </label>
                                        <textarea id="validation-form-detail-address" class="intro-x form-control py-3 px-4 block" name="detail-address" placeholder="Jelaskan detail alamat" minlength="10" required=""></textarea>
                                    </div>
                                    {{--Persetujuan PP--}}
                                    <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                        <label class="cursor-pointer select-none" for="remember-me">Saya setuju dengan</label>
                                        <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                                    </div>
                                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left float-right">
                                        <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Mendaftar</button>
                                        <a class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top" href="{{route('login.index')}}">Masuk</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END: Validation Form -->
                        <!-- BEGIN: Success Notification Content -->
                        <div
                                id="success-notification-content"
                                class="toastify-content hidden flex"
                        >
                            <i class="text-success" data-lucide="check-circle"></i>
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registrasi berhasil!</div>
                                <div class="text-slate-500 mt-1"></div>
                            </div>
                        </div>
                        <!-- END: Success Notification Content -->
                        <!-- BEGIN: Failed Notification Content -->
                        <div
                                id="failed-notification-content"
                                class="toastify-content hidden flex"
                        >
                            <i class="text-danger" data-lucide="x-circle"></i>
                            <div class="ml-4 mr-4">
                                <div class="font-medium">Registrasi gagal!</div>
                                <div class="text-slate-500 mt-1">
                                    Silahkan cek kembali data diri/alamat anda.
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function (){
            var $j = jQuery.noConflict();
            $('#provinsi').on('change',function (){
                let id_provinsi = $('#provinsi').val()

                $j.ajax({
                    type : 'POST',
                    url : "{{ route('getkabupaten') }}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,

                    success: function (msg){
                        $('#kabupaten').html(msg);
                        $('#kecamatan').hide();
                        $('#desa').hide();
                    },
                    error: function (data){
                        console.log('error:',data)
                    },
                })

            })
        });

        $(function (){
            var $j = jQuery.noConflict();
            $('#kabupaten').on('change',function (){
                let id_kabupaten = $('#kabupaten').val()

                $j.ajax({
                    type : 'POST',
                    url : "{{ route('getkecamatan') }}",
                    data : {id_kabupaten:id_kabupaten},
                    cache : false,

                    success: function (msg){
                        $('#kecamatan').html(msg);
                        $('#desa').hide();
                    },
                    error: function (data){
                        console.log('error:',data)
                    },
                })

            })
        });

        $(function (){
            var $j = jQuery.noConflict();
            $('#kecamatan').on('change',function (){
                let id_kecamatan = $('#kecamatan').val()

                $j.ajax({
                    type : 'POST',
                    url : "{{ route('getdesa') }}",
                    data : {id_kecamatan:id_kecamatan},
                    cache : false,

                    success: function (msg){
                        $('#desa').html(msg);
                    },
                    error: function (data){
                        console.log('error:',data)
                    },
                })

            })
        });

        $(document).ready(function(){
            $("#kabupaten").hide();
            $("#kecamatan").hide();
            $("#desa").hide();
        });

        $(document).on('change',"#provinsi", function () {
            if ($(this).val() === "") {
                $("#kabupaten").hide();
            } else {
                $("#kabupaten").show();
            }
        });

        $(document).on('change',"#kabupaten", function () {
            if ($(this).val() === "") {
                $("#kecamatan").hide();
            } else {
                $("#kecamatan").show();
            }
        });

        $(document).on('change',"#kecamatan", function () {
            if ($(this).val() === "") {
                $("#desa").hide();
            } else {
                $("#desa").show();
            }
        });

    </script>
@endsection

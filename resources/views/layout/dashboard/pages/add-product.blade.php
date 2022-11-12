@extends('../layout/dashboard/' . $layout)

@section('subhead')
    <title>Lakubo - Tambah Produk</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Tambah Produk</h2>
    </div>
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
        <!-- BEGIN: Notification -->
        {{--<div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
            <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
            <span>Starting May 10, 2021, there will be changes to the Terms & Conditions regarding the number of products that may be added by the Seller. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">Learn More</a></span>
            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        </div>--}}
        <!-- BEGIN: Notification -->
        <div class="intro-y col-span-11 2xl:col-span-9">
            <!-- BEGIN: Uplaod Product -->
            <div class="intro-y box p-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Unggah Produk
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center text-slate-500">
                            <span><i data-lucide="lightbulb" class="w-5 h-5 text-warning"></i></span>
                            <div class="ml-2">
                                <span class="mr-1">Hindari menjual produk yang melanggar aturan Lukabo! agar produkmu tidak di hapus.</span>
                                <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="text-primary font-medium" target="blank">Pelajari</a>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-10">
                            <div class="form-label w-full xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Foto Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        <div>Format gambar adalah .jpg .jpeg .png dan ukuran minimum adalah 300 x 300 pixels (Untuk gambar yang optimal gunakan ukuran 700 x 700 pixels).</div>
                                        <div class="mt-2">Pilih foto lalu letakkan disini dengan maksimal 5 foto. Gunakan foto yang menarik untuk mendapatkan perhatian pembeli.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                                    @foreach (array_slice($fakers, 0, 5) as $faker)
                                        <div class="col-span-5 md:col-span-2 h-28 relative image-fit cursor-pointer zoom-in">
                                            <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('build/assets/images/' . $faker['images'][0]) }}">
                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                    <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop
                                    <input id="horizontal-form-1" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Uplaod Product -->
            <!-- BEGIN: Product Information -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Informasi Produk
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Nama Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        Masukan minimal 40 karakter agar lebih menarik pembeli, unggah produk secara konsisten, merek, dan informasi seperti warna, bahan dan tipe.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="product-name" type="text" class="form-control" placeholder="Product name">
                                <div class="form-help text-right">Maksimum karakter 0/70</div>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Kategori</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <select id="category" class="form-select">
                                    @foreach (array_slice($fakers, 0, 9) as $faker)
                                        <option value="{{ $faker['categories'][0]['name'] }}">{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Subcategory</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        You can add a new subcategory or choose from the existing subcategory list.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <select id="subcategory" data-placeholder="Etalase" class="tom-select w-full" multiple>
                                    @foreach (array_slice($fakers, 0, 2) as $faker)
                                        <option selected value="{{ $faker['categories'][0]['name'] }}">{{ $faker['categories'][0]['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- END: Product Information -->
            <!-- BEGIN: Product Detail -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Detail Produk
                    </div>
                    <div class="mt-5">
                        {{--<div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Condition</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="flex flex-col sm:flex-row">
                                    <div class="form-check mr-4">
                                        <input id="condition-new" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                        <label class="form-check-label" for="condition-new">New</label>
                                    </div>
                                    <div class="form-check mr-4 mt-2 sm:mt-0">
                                        <input id="condition-second" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                        <label class="form-check-label" for="condition-second">Second</label>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Deskripsi Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        <div>
                                            Pastikan deskripsi produk memberikan penjelasan rinci tentang produk Anda sehingga mudah dipahami dan ditemukan produk Anda.</div>
                                        <div class="mt-2">Disarankan untuk tidak memasukkan info nomor ponsel, email, dll ke dalam deskripsi produk untuk melindungi data pribadi Anda.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="editor">
                                    <p>Content of the editor.</p>
                                </div>
                                <div class="form-help text-right">Maksimum Karakter 0/2000</div>
                            </div>
                        </div>
                        {{--<div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Video Produk</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        Add a video so that buyers are more interested in your product. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="text-primary font-medium" target="blank">Learn more.</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <button class="btn btn-outline-secondary w-40">
                                    <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Video URL
                                </button>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- END: Product Detail -->

            <!-- BEGIN: Product Management -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Management
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Product Status</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        Jika statusnya aktif, produk Anda dapat dicari oleh calon pembeli.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="form-check form-switch">
                                    <input id="product-status-active" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="product-status-active">Aktif</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Stok Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="product-stock" type="text" class="form-control" placeholder="Masukan Stok Barangmu">
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Harga Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="sm:grid grid-cols-1 gap-2">
                                    <div class="input-group">
                                        <div class="input-group-text">Rp.</div>
                                        <input type="text" class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Product Management -->
            <!-- BEGIN: Weight & Shipping -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Bobot & Pengiriman
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Berat Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        Masukkan berat dengan menimbang produk setelah di<span class="font-medium text-slate-600 dark:text-slate-300">&nbsp;kemas</span>.
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="sm:grid grid-cols-4 gap-2">
                                    <select class="form-select">
                                        <option value="Gram (g)">Gram (g)</option>
                                        <option value="Kilogram (kg)">Kilogram (kg)</option>
                                    </select>
                                    <input type="text" id="product-weight" class="form-control mt-2 sm:mt-0" placeholder="Stok">
                                </div>
                                <div class="alert alert-outline-warning alert-dismissible show flex items-center bg-warning/20 dark:bg-darkmode-400 dark:border-darkmode-400 mt-5" role="alert">
                                    <span><i data-lucide="alert-triangle" class="w-6 h-6 mr-3"></i></span>
                                    <span class="text-slate-800 dark:text-slate-500">Perhatikan baik-baik berat produk agar tidak ada perbedaan data dengan kurir pengiriman. <a class="text-primary font-medium" href="">Pelajari</a></span>
                                    <button type="button" class="btn-close dark:text-white" data-tw-dismiss="alert" aria-label="Close">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Ukuran Produk</div>
                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Wajib di isi</div>
                                    </div>
                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                        Masukkan ukuran produk setelah pengepakan untuk menghitung berat volume. <a class="text-primary font-medium" href="">Pelajari  berat volume</a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="sm:grid grid-cols-3 gap-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Lebar">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                    <div class="input-group mt-2 sm:mt-0">
                                        <input type="text" class="form-control" placeholder="Tinggi">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                    <div class="input-group mt-2 sm:mt-0">
                                        <input type="text" class="form-control" placeholder="Panjang">
                                        <div class="input-group-text">cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Weight & Shipping -->
            <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Batal</button>
                <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Simpan & Tambah Produk Baru</button>
                <button type="button" class="btn py-3 btn-primary w-full md:w-52">Simpan</button>
            </div>
        </div>
        <div class="intro-y col-span-2 hidden 2xl:block">
            <div class="pt-10 sticky top-0">
                <ul class="text-slate-500 relative before:content-[''] before:w-[2px] before:bg-slate-200 before:dark:bg-darkmode-600 before:h-full before:absolute before:left-0 before:z-[-1]">
                    <li class="mb-4 border-l-2 pl-5 border-primary dark:border-primary text-primary font-medium">
                        <a href="">Unggah Produk</a>
                    </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent">
                        <a href="">Informasi Produk</a>
                    </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent">
                        <a href="">Detail Produk</a>
                    </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent">
                        <a href="">Manajemen Produk</a>
                    </li>
                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent">
                        <a href="">Bobot & Pengiriman</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection

@extends('layouts.main', [
    'title' => 'Tentang Kami | Berbinar Insightful Indonesia',
    'active' => 'Tentang Kami',
    'page' => 'Tentang Kami'
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh]" id="home">
    <div class="max-w-6xl mx-auto">
        <div class="flex">
            <div class="home__data">
                <div class="title flex gap-2">
                    <h1 class="about__title font-light ">Tentang</h1>
                    <h1 class="about__title font-light md:w-full w-[90%] text-primary">Berbinar</h1>
                </div>
                <div class="flex-col justify-center gap-0">
                    <p class="home__description md:w-[80%] w-[80%] font-light text-[#70787D] text-justify">
                    Setiap individu mengalami episode yang sama di tahap kehidupannya. Inilah pentingnya seseorang memiliki pengetahuan seputar psikologi dan memahami dirinya sendiri. Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang. Kami juga memiliki layanan online yang bisa diakses dengan fleksibel, di mana pun Anda berada, karena apa yang Anda rasakan dan alami itu penting dan Anda berhak menjadi lebih baik lagi.
                    </p>
                </div>
                <a href="#share" class="button-new">Kenali Kami Lebih Lanjut</a>
            </div>
            <img src="{{ asset('assets/images/logo-berbinar.png') }}" alt="" class="w-[40%]">   
        </div>
    </div>
</section>

<!--========== SHARE ==========-->
<section class="w-full mt-[16vh]" id="share">
    <div class="max-w-6xl mx-auto flex gap-16 md:flex-row flex-col-reverse">
        <div class="share__img flex-2 mx-auto md:block hidden">
            <img src="{{ asset('assets/images/visi-misi.png') }}" alt="">
        </div>
        <div class="share__data flex-1 md:px-0 px-5">
            <div class="flex gap-2">
                <h2 class="text-[1.25rem] mb-[1.5rem] font-[600] text-left md:text-center">Visi & Misi</h2>
                <h2 class="text-[1.25rem] mb-[1.5rem] font-[600] text-left md:text-center text-primary">Berbinar</h2>
            </div>

            <div class="relative w-[500px] overflow-hidden shadow-[0_0_10px_0_rgba(0,0,0,0.25)] rounded-md">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
                <div class="bg-white h-12 w-full pl-5 flex items-center">
                    <h2 class="text-md font-semibold text-black">Visi</h2>
                </div>
                <div class="absolute top-3 right-3 text-black transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>                      
                </div>
                <div class="bg-white overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-40">
                    <div class="p-4">
                        <p>Terdepan dalam menyediakan fasilitas psikologi yang berkualitas, berintegritas, dan mudah diakses oleh seluruh kalangan masyarakat.</p>
                    </div>

                </div>
            </div>
            <div class="relative w-[500px] overflow-hidden shadow-[0_0_10px_0_rgba(0,0,0,0.25)] rounded-md mt-8">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-12 opacity-0 z-10 cursor-pointer">
                <div class="bg-white h-12 w-full pl-5 flex items-center">
                    <h2 class="text-md font-semibold text-black">Misi</h2>
                </div>
                <div class="absolute top-3 right-3 text-black transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>                      
                </div>
                <div class="bg-white overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-80">
                    <div class="p-4">
                        <ul class="list-disc"></ul>
                            <li>Memberikan layanan terstandar dan berkualitas tinggi yang sesuai dengan kebutuhan customer</li>
                            <li>Mengembangkan produk psikologi yang berlandaskan Kode Etik Psikologi Indonesia dan dijalankan oleh sumber daya manusia yang berintegritas</li>
                            <li>Menciptakan akses layanan yang mudah dijangkau oleh seluruh lapisan masyarakat dengan harga yang bersaing</li>
                    </div>

                </div>
            </div>
    </div>
</section>

<!--========== ACCESSORIES ==========-->
<section class="accessory section bd-container flex flex-col items-center" id="accessory">
   
    <div class="share__img my-10">
        <div class="flex gap-2 items-center justify-center mx-auto">
            <h2 class="section-title font-[600]">Nilai</h2>
            <h2 class="section-title font-[600] text-primary">Berbinar</h2>
        </div>
    </div>

    <div class="accessory__container bd-grid">
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Honest</p>
            <span class="accessory__category text-white">Membangun kepercayaan dengan mengembangkan komunikasi dan hubungan yang jujur.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Empathetic</p>
            <span class="accessory__category text-white">Memahami orang lain, melihat sudut pandang orang tersebut, dan membayangkan berada di posisi orang tersebut.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Innovative</p>
            <span class="accessory__category text-white">Menciptakan ide, pemikiran, dan cara baru untuk diterapkan dalam pelaksanaan dan penyelesaian pekerjaan.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-center text-white text-2xl mt-3">Learn and be Curious</p>
            <span class="accessory__category text-white">Mau untuk terus belajar untuk berkembang jadi lebih baik, dilandasi rasa ingin tahu yang tinggi.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Impactful</p>
            <span class="accessory__category text-white">Memberikan pengaruh positif untuk lingkungan sekitar dan tetap berlandaskan pada kode etik yang berlaku.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Initiative</p>
            <span class="accessory__category text-white">Memulai suatu tindakan yang selaras dengan tujuan organisasi, namun tetap sesuai dengan fungsi dan wewenangnya.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-white text-2xl mt-3">Collaborative</p>
            <span class="accessory__category text-white">Melakukan interaksi, komunikasi, dan diskusi dengan setiap individu dan kelompok, baik yang terlibat secara langsung maupun tidak langsung.</span>
        </div>
        <div class="accessory__content flex flex-col gap-3 justify-center py-4 bg-gradient-to-t from-[#3986A3] to-[#75BADB]">
            <p class="items-center mx-auto text-center text-white text-2xl mt-3">Customer Oriented</p>
            <span class="accessory__category text-white">Menjadikan kebutuhan konsumen sebagai dasar untuk merencanakan dan mendesain strategi bisnis.</span>
        </div>
    </div>
</section>

<section class="flex flex-col items-center" id="accessory">
   
    <div class="share__img">
        <h2 class="section-title font-[600]">What They Say?</h2>
    </div>

    <div class="flex-1 xl:mx-8 swiper mySwiper max-w-7xl md:w-full w-full mx-auto flex items-center justify-center -mt-7">
        <div class="swiper-wrapper w-full">
            @foreach($testimonials as $testimonial)
            <section class="p-6 swiper-slide w-full md:w-full">
                <div class="container max-w-xl mx-auto w-full">
                    <div class="flex flex-col items-center w-full p-6 space-y-8 rounded-md lg:h-full lg:p-8 shadow-[0_0_6px_0_rgba(0,0,0,0.25)] pb-8">
                        <img src="{{ asset('assets/images/Vector.png') }}" alt="">
                        <blockquote class="max-w-lg text-lg italic text-black font-medium text-center text-justify">"{{ $testimonial["testimonial"] }}"</blockquote>
                        <hr class="h-px mt-6 border-0 bg-slate-400">
                        <img src={{ $testimonial["image"] }} alt="" class="w-20 h-20 rounded-full dark:bg-gray-500 object-cover">
                        <div class="text-center">
                            <p class="dark:text-black font-bold">{{ $testimonial["name"] }}</p>
                            <p class="dark:text-gray-400">{{ $testimonial["divisi"] }}</p>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<!--========== CALL TO ACTION ==========-->
<section class="send section relative">
    <div class="send__container bd-container bd-grid relative">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="send__content">
                <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
                <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            </div>

            <a href="https://wa.me/6282141869800" target="_blank" class="button-secondary md:absolute md:right-14">Hubungi Kami</a>
        </div>

        <div class="send__img">
            <!-- <img src="assets/img/send.png" alt=""> -->
        </div>
    </div>
</section>
@endsection
@extends('layouts.main', [
    'title' => 'Produk Berbinar | Berbinar Insightful Indonesia',
    'active' => 'Produk Berbinar',
    'page' => 'Produk Berbinar',
])

@section('content')
<!--========== HOME ==========-->
<section class="w-full mt-[20vh] mb-30" id="home">
    <div class="max-w-7xl mx-auto">
        <div class="home__data flex flex-col items-center">
            <h1 class="about__title text-center">Produk Berbinar</h1>
            <div class="flex flex-col items-center justify-center gap-0">
                <p class="home__description md:w-[70%] w-[92%] text-justify mb-[5rem]">
                Kesehatan mental sering timbul di kalangan masyarakat. Namun, masih banyak dari kita yang merasa ragu untuk mencari bantuan. Mahalnya biaya konsultasi dan jasa psikotes menjadi penghalang utama untuk cari pertolongan lebih lanjut.
                Permasalahan ini menjadi alasan berdirinya Berbinar Insightful Indonesia. Berbinar memberikan layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan.
                </p>
            </div>
        </div>   
    </div>
</section>

<div class="swiper mySwiper md:-mt-10">
    <div class="swiper-wrapper">
        <div class="swiper-slide relative">
            <img src="https://i.postimg.cc/130bKSVV/1.png" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
            <div class="description absolute top-0 flex flex-col items-start md:px-[3.5rem] px-[1.5rem] py-[2rem] md:py-[4.5rem] gap-40">
            </div>
           
        </div>
        <div class="swiper-slide relative">
            <img src="https://i.postimg.cc/9062mTFV/2.png" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
            <div class="description absolute top-0 flex flex-col items-start md:px-[3.5rem] px-[1.5rem] py-[2rem] md:py-[4.5rem] gap-40">
            </div>
           
        </div>
        <div class="swiper-slide relative">
            <img src="https://i.postimg.cc/c120Bq7j/3.png" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
            <div class="description absolute top-0 flex flex-col items-start md:px-[3.5rem] px-[1.5rem] py-[2rem] md:py-[4.5rem] gap-40">
            </div>
            
        </div>
        <div class="swiper-slide relative">
            <img src="https://i.postimg.cc/9QHvT00j/4.png" title="Slider's Image" alt="Slider's Image" class="-z-50 absolute" />
            <div class="description absolute top-0 flex flex-col items-start md:px-[3.5rem] px-[1.5rem] py-[2rem] md:py-[4.5rem] gap-40">
            </div>
           
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<section class="">
    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
        <div class="flex items-center justify-center flex-col">
            <h1 class="about__title text-center md:w-full w-[20rem] leading-[120%]">Pilihan Produk Berbinar</h1>
            <p class="home__description md:w-[70%] w-full mx-auto text-center">
                Berbinar hadir untuk memberikan layanan psikologi terbaik nomor satu di Indonesia. Terdapat banyak pilihan produk yang dapat dijadikan sebagai pendukung kebutuhan psikologi kalian yang sangat bermanfaat di Berbinar Insightful Indonesia.
            </p>
        </div>
        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
            <div>
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl">Konseling</h3>
                <p class="mt-3 md:text-lg text-[1.025rem]">Konsultasikan permasalahan psikologis kamu ke psikolog partner dan peer counselor Berbinar.</p>
                <div class="mt-12 space-y-12">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold leading-6">Fokus</h4>
                            <p class="mt-2">Konseling membantu mendorong terjadinya penyelesaian masalah oleh diri klien.</p>
                        </div>
                    </div>
                     <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold leading-6">Jenis Konseling</h4>
                            <p class="mt-2">Di Berbinar terdapat dua jenis konseling yang dapat dipilih oleh sobar berbinar sesuai kebutuhan dan kenyamanan sobat, diantara lain ada Konseling with Psikolog dan Konseling with Peer Counselor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div aria-hidden="true" class="mt-0 lg:mt-0">
                <img src="https://i.postimg.cc/x1DmqBKp/konseling.png" alt="" class="mx-auto w-[30rem]">
            </div>
        </div>
        <div>
            <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-bold tracking-tight sm:text-3xl">Asesmen Psikologi</h3>
                    <p class="mt-3 md:text-lg text-[1.025rem]">Terdapat dua jenis asesmen psikologi yang terdapat pada Berbinar Insightful Indonesia, Asesmen Individu dan Asesmen Perusahaan</p>
                    <div class="mt-12 space-y-12">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold leading-6">Fokus Asesmen Individu</h4>
                                <p class="mt-2">Assessmen psikologi individu dapat memprediksi potensi yang dimiliki dalam kaitannya dengan pencapaian hasil belajar atau kemampuan di masa yang akan datang.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold leading-6">Fokus Asesmen Perusahaan</h4>
                                <p class="mt-2">Assesmen Psikologi untuk Perusahaan digunakan untuk melihat potensi, kelebihan dan kekurangan, serta kecenderungan kepribadian seorang kandidat dan melihat apakah kandidat tersebut cocok ditempatkan di suatu posisi pekerjaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 lg:mt-0 lg:col-start-1 lg:row-start-1">
                    <img src="https://i.postimg.cc/hvY59KSd/asesmen-psikologi.png" alt="" class="mx-auto w-[35rem]">
                </div>
            </div>
        </div>
        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
            <div>
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl">Kelas Berbinar</h3>
                <p class="mt-3 md:text-lg text-[1.025rem]">Ikuti dan dapatkan insight serta ilmu baru dari Kelar Berbinar untuk mempersiapkan karir dan juga meningkatkan skill dan kemampuan diri.</p>
                <div class="mt-12 space-y-12">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold leading-6">Fokus</h4>
                            <p class="mt-2">Dengan mengikuti kelas dari Berbinar, Anda dapat meningkatkan soft skill dan hard skill yang dimiliki untuk meningkatkan kemampuan bersaing.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 space-y-12">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold leading-6">Kelas Berbinar</h4>
                            <p class="mt-2">
                                Berikut kelas - kelas yang pernah diadakan di Berbinar Insighful Indonesia,
                                • Psychological First Aid <br>
                                • How to be A Good Peer Counselor <br>
                                • Self Development <br>
                                • Quantitative Research Method <br>
                                • Psychological Assessment Course: in HR Setting <br>
                                • Training: Be Super Hero as Peer Counselor! <br>
                                Untuk kelas - kelas dengan topik yang lain akan diinfokan melalui instagram Berbinar
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div aria-hidden="true" class="mt-10 lg:mt-0">
                <img src="https://i.postimg.cc/NFVQ5hSN/webinar.png" alt="" class="mx-auto w-[35rem]">
            </div>
        </div>
        <!--<div>-->
        <!--    <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">-->
        <!--        <div class="lg:col-start-2">-->
        <!--            <h3 class="text-2xl font-bold tracking-tight sm:text-3xl">Webinars</h3>-->
        <!--            <p class="mt-3 md:text-lg text-[1.025rem]">Webinar menjadi alternatif belajar dan pelatihan berbasis online dengan peserta dan narasumber</p>-->
        <!--            <div class="mt-12 space-y-12">-->
        <!--                <div class="flex">-->
        <!--                    <div class="flex-shrink-0">-->
        <!--                        <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">-->
        <!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">-->
        <!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>-->
        <!--                            </svg>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="ml-4">-->
        <!--                        <h4 class="text-lg font-semibold leading-6">Deskripsi</h4>-->
        <!--                        <p class="mt-2">Webinar menjadi alternatif belajar dan pelatihan berbasis online dengan peserta dan narasumbernya yang tidak perlu bertemu secara langsung. Webinar menggabungkan pelajaran multimedia berbasis web, seminar, diskusi, dan demonstrasi, yang semuanya memberikan banyak manfaat.</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="flex">-->
        <!--                    <div class="flex-shrink-0">-->
        <!--                        <div class="flex items-center justify-center w-12 h-12 rounded-md bg-[#3986a3] dark:text-gray-900">-->
        <!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 text-white">-->
        <!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>-->
        <!--                            </svg>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="ml-4">-->
        <!--                        <h4 class="text-lg font-semibold leading-6">Fokus</h4>-->
        <!--                        <p class="mt-2">Webinar dapat memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli yang sudah-->
        <!--                            berpengalaman di bidangnya.</p>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="mt-10 lg:mt-0 lg:col-start-1 lg:row-start-1">-->
        <!--            <img src="https://i.postimg.cc/NFVQ5hSN/webinar.png" alt="" class="mx-auto w-[35rem]">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
</section>

<!--========== CALL TO ACTION ==========-->
<section class="send section relative">
    <div class="send__container bd-container bd-grid relative">
        <div class="flex flex-row items-center justify-between">
            <div class="send__content">
                <h2 class="section-title-center send__title font-semibold">Hubungi Kami Sekarang</h2>
                <p class="send__description">Buat janji dan lakukan konseling dengan tim Berbinar Insightful Indonesia untuk layanan konseling online ataupun offline.</p>
            </div>

            <a href="https://wa.me/6282141869800" target="_blank" class="button-secondary absolute right-14">Hubungi Kami</a>
        </div>

        <div class="send__img">
            <!-- <img src="assets/img/send.png" alt=""> -->
        </div>
    </div>
</section>
@endsection
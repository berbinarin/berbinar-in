@extends('layouts.main', [
    'title' => 'Work With Us | Berbinar Insightful Indonesia',
    'active' => 'Work With Us',
    'page' => 'Work With Us',
])

@section('content')
<section class="flex bg-white w-full h-screen relative items-center justify-center">
    <div class="flex items-center justify-center flex-col -mt-14">
        <img src="https://i.postimg.cc/L5BLFJFL/by-dhila-banner-web-2.png" alt="Work With Us" title="Work With Us" class="w-[35rem]" />

        <h1 class="home__title md:w-full w-[25rem] md:text-[2rem] text-center leading-[120%] mt-10">Ayo Kerja Sama Bersama <br>Berbinar Insightful Indonesia</h1>
        <p class="home__description text-center w-[50%]">Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang.</p>
        <a href="https://bit.ly/CounselingWithBerbinar" target="_blank" class="button">Hubungi Kami</a>
    </div>

    <img src="https://i.postimg.cc/jdHZRj48/2.png" alt="Work With Us" title="Work With Us" class="absolute w-[30rem] left-0 bottom-0" />
    <img src="https://i.postimg.cc/m2fmx9Cz/3.png" alt="Work With Us" title="Work With Us" class="absolute w-[30rem] right-0 bottom-0" />
</section>
@endsection
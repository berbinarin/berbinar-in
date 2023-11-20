@extends('layouts.main', [
    'title' => 'Work With Us | Berbinar Insightful Indonesia',
    'active' => 'Work With Us',
    'page' => 'Work With Us',
])

@section('content')
<section class="flex bg-white w-full h-screen relative items-center justify-center">
    <div class="flex items-center justify-center flex-col -mt-14">
        <p class="home__title md:w-full w-[25rem] text-7xl text-black md:text-[3rem] text-center leading-[120%]">Mari bekerja sama dengan</p>
        <p class="home__title md:w-full w-[25rem] text-7xl md:text-[3rem] text-center text-primary leading-[120%]">Berbinar Insightful Indonesia</p>
        <p class="home__description text-center w-[70%] text-[#70787D]">Berbinar hadir menawarkan layanan konseling bersama psikolog partner dan peer counselor untuk setiap individu yang sedang berjuang.</p>
        <a href="https://bit.ly/CounselingWithBerbinar" target="_blank" class="button-new">Hubungi Kami</a>
    </div>
</section>
@endsection
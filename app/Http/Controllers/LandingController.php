<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "Konseling dengan Psikolog",
                "description" => "Konsultasikan permasalahan psikologis kamu ke psikolog partner Berbinar.",
                "route" => "konseling",
            ],

            [
                "name" => "Konseling dengan Peer Counselor",
                "description" => "Konsultasikan permasalahan psikologis kamu ke counselor Berbinar.",
                "route" => "konseling",
            ],

            [
                "name" => "Asesmen Psikologi",
                "description" => "Assessmen psikologi individu dapat memprediksi potensi yang dimiliki",
                "route" => "psikotes",
            ],

            [
                "name" => "Kelas Berbinar",
                "description" => "Meningkatkan soft skill dan hard skill yang dimiliki untuk meningkatkan kemampuan bersaing",
                "route" => "kelas",
            ],
        ];

        $whySection = [
            "title" => 'Kenapa Memilih Berbinar Insightful Indonesia?',
            "description" => 'Kesehatan mental sering timbul di kalangan masyarakat. Namun, masih banyak dari kita yang merasa ragu untuk mencari bantuan. Mahalnya biaya konsultasi dan jasa psikotes menjadi penghalang utama untuk mencari pertolongan lebih lanjut. Permasalahan ini menjadi alasan berdirinya Berbinar Insightful Indonesia. Berbinar memberikan layanan psikotes, konseling, dan kelas, yang fleksibel dan sesuai kebutuhan customer, namun tetap kredibel.',
            "image" => '',
            "achievements" => [
                [ "name" => 'Media Partner', "count" => 12 ],
                [ "name" => 'Jumlah Produk', "count" => 3 ],
                [ "name" => 'Jumlah Sub Produk', "count" => 8 ],
            ],
        ];

        return view('index', [
            'products' => $products,
            'whySection' => $whySection,
        ]);
    }

    public function tentangKami()
    {
        $testimonials = [
            [
                "name" => "Ace Pebri Ala",
                "jabatan" => "Manager",
                "divisi" => "Tiktok Creator",
                "testimonial" => "Saya memang baru memakai produk dari Berbinar yaitu layanan psikotes, dan untuk kualitasnya menurut saya sangat bagus.",
                "image" => "https://i.postimg.cc/QthPrpJY/20230715-163432-Ace-Pebri.jpg"
            ],
            [
                "name" => "Mellynda Silanur Rohmah",
                "jabatan" => "Manager",
                "divisi" => "Human Resource",
                "testimonial" => "Tentunya produk dari berbinar itu memiliki kualitas unggul karena ditangani langsung oleh seorang psikolog, tetapi dengan harga yang terjangkau.",
                "image" => "https://i.postimg.cc/3rDpHPW6/90x90-900-900-px-4-Mellynda.png"
            ],
            [
                "name" => "Caroline Athalia Rianda",
                "jabatan" => "Manager",
                "divisi" => "Graphic Designer",
                "testimonial" => "Sejauh yang aku tau di berbinar sendiri itu udah nyediain beragam banget layanan psikologi  untuk sobat binar semua ",
                "image" => "https://i.postimg.cc/sgMTFndg/Whats-App-Image-2022-03-27-at-17-04-49-caroline-athalia.jpg"
            ],
            [
                "name" => "Mawaliatul Khasanah",
                "jabatan" => "Manager",
                "divisi" => "IG Creator",
                "testimonial" => "Produknya keren, kualitas dan kuantitas bisa di tingkatkan",
                "image" => "https://i.postimg.cc/pL3qPDRY/1689071354341-Mawaliatul-Khasanah.jpg"
            ],
            [
                "name" => "Regina Amanda Sharen",
                "jabatan" => "Manager",
                "divisi" => "Secretary & Finance",
                "testimonial" => "Produk Berbinar pun sgt beragam dan pastiny ramah di kantong. Menurut saya produk-produk Berbinar telah sesuai kebutuhan masyarakat.",
                "image" => "https://i.postimg.cc/5tcTscYV/60-CC00-E1-003-B-488-B-A89-D-82213-B9-D2415-Amanda-Sharen.png"
            ],
            [
                "name" => "Ananda Deshinta Rasyid",
                "jabatan" => "Staff",
                "divisi" => "Class Product Management",
                "testimonial" => "Berbinar salah satu layanan edukasi psikologi yang cukup lengkap, dan produk produknya sangat dibutuhkan oleh anak remaja jaman sekarang.",
                "image" => "https://i.postimg.cc/sxkJ5wx0/65-EA8-F58-7-F6-A-4-F20-8-E54-071-BB9103-DE6-A-Deshinta-Rasyid.jpg"
            ],
            [
                "name" => "Anestia Novita Fatimah ",
                "jabatan" => "Staff",
                "divisi" => "Tiktok Creator",
                "testimonial" => "Berbinar Insightful Indonesia ini merupakan perusahaan yang lebih mengedepankan kepedulian terhadap sesama manusia.",
                "image" => "https://i.postimg.cc/3Jn3nVYG/IMG20220706144739-Anestia-N-F.jpg"
            ],
            [
                "name" => "Arinta Putri Dewanti",
                "jabatan" => "Staff",
                "divisi" => "Secretary & Finance",
                "testimonial" => "Produknya bener-bener bagus dan berkualitas. Pelayanannya juga ramah banget bikin aku merasa nyaman.",
                "image" => "https://i.postimg.cc/htZTW2bz/1670039228042-Arinta-Putri-Dewanti.jpg"
            ],
            [
                "name" => "Dhila Aprilianti ",
                "jabatan" => "Staff",
                "divisi" => "Graphic Designer",
                "testimonial" => "Layanan konseling yang diadakan berbinar juga sangat membantu untuk menyelesaikan masalah mental dan kesehatan pikiran.",
                "image" => "https://i.postimg.cc/nr6VGQvL/IMG-20210529-103302-Dhila-Aprilianti.jpg"
            ],
            [
                "name" => "Naufal Sidqi Haekal",
                "jabatan" => "Staff",
                "divisi" => "Class Product Management",
                "testimonial" => "Berbinar sudah memiliki banyak produk dan lahanan yang menurut saya sudah cukup sekali.",
                "image" => "https://i.postimg.cc/7hMD0QYK/20220730-172908-Naufal-Sidqi-Haekal.jpg"
            ],
            [
                "name" => "Dea Fadhila",
                "jabatan" => "Staff",
                "divisi" => "Marketing Strategist & Sales",
                "testimonial" => "Berbinar merupakan brand yang sangat kredibel dalam menjaga kualitas serta sangat mengutamakan customer.",
                "image" => "https://i.postimg.cc/Hn5KyJ3H/dea-Dea-Fadhila.png"
            ],
            [
                "name" => "Ulfah Ramadhia",
                "jabatan" => "Researcher",
                "divisi" => "Human Resource",
                "testimonial" => "Produk produk di Berbinar lengkap dan sesuai dengan kebutuhan masyarakat dari berbagai kalangan.",
                "image" => "https://i.postimg.cc/VvRqpmkn/20230529-174853-Ulfah-Ramadhia.jpg"
            ],
            [
                "name" => "Fransiska Dian Nurfala",
                "jabatan" => "Staff",
                "divisi" => "Graphic Designer",
                "testimonial" => "Produk Berbinar menarik dan bermanfaat bagi yang membutuhkan layanan psikologi serta konten yang insightful.",
                "image" => "https://i.postimg.cc/mrygQDXY/IMG-20230311-214130-Fransiska-Dian-Nurfala.jpg"
            ],
            [
                "name" => "Livia Lailatul Arsy",
                "jabatan" => "Staff",
                "divisi" => "Graphic Designer",
                "testimonial" => "Jika dilihat dari layanan yang ditawarkan oleh Berbinar Insightful Indonesia sudah cukup lengkap.",
                "image" => "https://i.postimg.cc/HxfWmyVC/g2-Livia-Lailatul-Arsy.jpg"
            ],
            [
                "name" => "Wulantika",
                "jabatan" => "Staff",
                "divisi" => "Counseling",
                "testimonial" => "Dari produk tes psikotes memberikan manfaat untuk melaksanakan tes itu secara gratis.",
                "image" => "https://i.postimg.cc/MHdsRyRC/1681399315097-Wulan-tika.jpg"
            ],
            [
                "name" => "Nurainni",
                "jabatan" => "Staff",
                "divisi" => "Class Product Management",
                "testimonial" => "Berbinar sebagai perusahaan yang bergerak di bidang edukasi dan psikologi sudah berhasil  membangun awareness masyarakat terhadap kesehatan mental.",
                "image" => "https://i.postimg.cc/N0s5CmrJ/F334-BDF2-5-FFD-48-F5-A31-D-30-C1-B23-BECC0-Nur-Ainni.jpg"
            ],
            [
                "name" => "Intan Putri Ardithya",
                "jabatan" => "Staff",
                "divisi" => "Human Resource",
                "testimonial" => "Memberikan banyak ilmu dan pengetahuan baru melalui konten yang menarik dan mudah dipahami",
                "image" => "https://i.postimg.cc/DyCsG7p4/20200625-192917-897-Intan-Putri-Ardithya.jpg"
            ],
            [
                "name" => "Sri Wahyuni",
                "jabatan" => "Staff",
                "divisi" => "PTPM",
                "testimonial" => "Menurut saya produknya sudah bagus karena bisa mencakup hal hal yang betul betul diperlukan. Selain itu juga terus mengembangkan produknya",
                "image" => "https://i.postimg.cc/rp57sZys/3590-F2-EC-FAB6-4-D58-804-E-1-D981-B6-E0939-Sri-Wahyuni.jpg"
            ],
        ];
        return view('tentang-kami', [
            'testimonials' => $testimonials,
        ]);
    }

    public function produkBerbinar()
    {
        return view('produk-berbinar');
    }

    public function workWithUs()
    {
        return view('work-with-us');
    }

    public function artikel()
    {
        return view('artikel');
    }

    public function konseling()
    {
        return view('konseling');
    }

    public function psikotes()
    {
        return view('psikotes');
    }

    public function kelas()
    {
        return view('kelas');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\Content;

use App\Models\User;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $owner = User::select('id', 'email', 'mobile')->where('id', 1)->first();

        Content::create([
            'user_id' => $owner->id,
            'header' => "Faisal Ramadhan Portfolio Website",
            'description_indonesia' => "Halo saudara dan saudariku, saya Faisal Ramadhan. Saya adalah seorang mahasiswa jurusan sistem informasi. Sebelum saya terjun di dunia teknologi, dulu saya hanya seorang anak yang lebih sering menghabiskan waktu dengan game. Saya suka sekali dengan game, terutama game-game dari playstation 2 dan nintendo ds. Sewaktu kecil saya tidak sama sekali terpikirkan akan menjadi seorang programmer. Malah, dulu saya berpikir, untuk ingin menjadi desainer grafis. 
                Singkat cerita, sewaktu saya masih berada dibangku sekolah menengah atas, saya mencari beberapa universitas swasta yang menyediakan kelas khusus untuk desain grafis, namun karena saya terkendala oleh faktor ekonomi, akhirnya saya memilih universitas yang lebih murah. Namun, sayangnya di universitas yang saya pilih ini tidak ada jurusan desain grafis. Dari situ, akhirnya saya memilih jurusan Sistem Informasi. Jujur saja, bisa dibilang jurusan Sistem Informasi, tidaklah begitu sulit, anda hanya dipaksa untuk menguras logika anda pada titik-titik tertentu. Lalu, untuk selebihnya anda hanya membuat makalah, jurnal dsb.
                Di semua semester yang saya tempuh, saya hanya terikat pada 2 mata kuliah favorit saya, yaitu Logika Algoritma dan Web Programming. Jujur saja,  dua mata kuliah tersebut adalah sebab mengapa saya menyukai dunia programming. 
                Baiklah, saya rasa cukup perkenalan yang saya buat untuk kalian semua, oh iya, untuk sebagai bukti bahwa saya benar-benar cinta dengan dunia programming, saya akan mencantumkan link proyek-proyek yang telah saya buat bersama tim saya.",
            'description_english' => "Hello brothers and sisters, I am Faisal Ramadhan. I am a student majoring in information systems. Before I got into the world of technology, I used to be just a kid who spent more time with games. I really like games, especially games from playstation 2 and nintendo ds. As a child I never thought I would become a programmer. In fact, I used to think, to want to be a graphic designer.
                Long story short, when I was still in high school, I looked for several private universities that provide special classes for graphic design, but because I was constrained by economic factors, I finally chose a university that was cheaper. However, it's a shame that the university I chose doesn't have a graphic design department. From there, I finally chose to major in Information Systems. Honestly, you could say majoring in Information Systems, it's not that difficult, you're just forced to drain your logic at certain points. Then, for the rest you just make papers, journals, etc.
                In all the semesters I took, I was only attached to my 2 favorite subjects, namely Algorithmic Logic and Web Programming. To be honest, these two courses are the reason why I like the world of programming.
                Alright, I think I made enough introductions for all of you, oh yes, as proof that I really love the world of programming, I will include links to projects that I have made with my team.",
            'email' => $owner->email,
            'mobile' => $owner->mobile
        ]);
    }
}

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
            'description_indonesia' => "Halo saudara dan saudariku. Saya Faisal Ramadhan. Saya adalah seorang programmer tingkat menengah. Kesukaaan saya pada dunia koding, dimulai sejak saya memasuki dunia perkuliahan, tepatnya pada tahun 2020. Bahasa yang pertama kali saya pelajari adalah Python dan SQL. Dua bahasa ini membawa saya ke dalam dunia teknologi. Saya sempat membuat sebuah proyek website toko online bersama tim proyek saya. Syukurnya, website tersebut sekarang sudah begitu bagus, walau masih dalam tahap pre-produksi.
                 Anda-anda semua akan saya izinkan untuk melihat langsung proyek-proyek yang telah saya dan tim saya buat di masa lalu.",
            'description_english' => "Hello my brothers and sisters. I am Faisal Ramadhan. I am an intermediate level programmer. 
                My passion for coding started when I entered university, in 2020 to be precise. The first languages I learned were Python and SQL. These two languages brought me into the world of technology. I had time to make an online shop website project with my project team. Thankfully, the website is pretty good now, even though it's still in the pre-production stage. I will allow all of you to see first-hand the projects that my team and I have made in the past.",
            'email' => $owner->email,
            'mobile' => $owner->mobile
        ]);
    }
}

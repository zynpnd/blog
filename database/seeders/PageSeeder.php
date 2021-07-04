<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count = 0;
        foreach ($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'         => $page,
                'image'        =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR1Ik2FPcYi95wWFfmF5kwqZ0LdgGLLbFZng&usqp=CAU',
                'content'      =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                  Ad adipisci alias distinctio eos esse expedita,
                                  fuga fugit illum incidunt modi nobis non nostrum officiis qui quibusdam,
                                  reiciendis vel veritatis vero.',
                'slug'         => Str::slug($page,"-"),
                'order'        =>$count,
                'created_at'   => now(),
                'updated_at'   => now()
            ]);
        }

    }
}

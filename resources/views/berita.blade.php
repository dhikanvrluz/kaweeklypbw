<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
    [
        "judul" => "MBG Mas Burhan Gunawan",
        "slug" => "mbg-mas-burhan-gunawan",
        "penulis" => "Burhan",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis error sed numquam aliquam eveniet est veniam molestias enim possimus quibusdam, delectus atque nihil adipisci suscipit quia architecto quas quidem voluptas necessitatibus eos cum. Ducimus tenetur nobis quod odio. Provident voluptatem quaerat aspernatur odio error autem animi reiciendis? Dolor ex eaque perspiciatis iusto officia maiores repudiandae inventore quas odio, delectus commodi nulla, voluptates voluptatibus ipsam est reiciendis accusamus aliquam ducimus in aspernatur nemo? Iste praesentium, sequi vitae nemo, quod voluptate doloribus ex explicabo minima voluptas, suscipit modi velit ratione error unde dignissimos accusantium mollitia provident aliquid nobis rerum rem saepe! Possimus doloribus architecto, consequuntur cupiditate molestiae dicta ipsa saepe cumque quos dolore, sequi nemo vel, earum accusantium quas vitae qui ullam. Debitis, illo corporis explicabo labore a hic quo at reiciendis animi. Perspiciatis velit dolorem laboriosam quisquam doloremque aperiam, porro earum et sed consectetur voluptatibus ex, hic expedita, itaque odit nobis.",
    ],
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Amin",
        "konten" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At ducimus sed a vitae soluta accusamus perferendis nulla totam? Illo incidunt distinctio dolore. Vel, error eius unde qui officia velit neque iure, quidem pariatur alias ullam expedita, mollitia tempore quas dolores sit quia nostrum maxime perspiciatis facere recusandae aut. Deserunt libero fuga iste reprehenderit, esse numquam, recusandae deleniti dolor cumque soluta a et iusto officia quae minima, asperiores voluptas quis. Impedit sit error non, aliquid praesentium amet deleniti. Nobis accusantium corrupti quis dicta suscipit neque tempore aspernatur odio distinctio temporibus quidem dolores eos dignissimos, impedit asperiores provident illo veniam obcaecati omnis explicabo sit aliquam. A autem, cupiditate omnis in rerum iusto quis hic exercitationem eaque dolorum delectus, distinctio facere recusandae fugiat?",
    ]
];

public function ambildata()
{
    return $data_berita;
}


}
<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul buku pertama",
            "slug" => "judul-buku-pertama",
            "author" => "Faisal",
            "blog" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Atque, eum odit blanditiis exercitationem quo amet est quibusdam tenetur tempore aspernatur repudiandae vitae, hic iusto ducimus. 
            Aliquam eum beatae quas aliquid!"
        ],
        [
            "title" => "Judul buku kedua",
            "slug" => "judul-buku-kedua",
            "author" => "Faqih",
            "blog" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut, in? Facilis explicabo molestias ea perferendis illo sequi dicta culpa temporibus alias. 
            Non quia ducimus ad tempora harum. Voluptate placeat recusandae beatae nihil, totam laudantium porro quae iste obcaecati itaque quisquam reiciendis unde rem modi, 
            iusto consectetur dolores magnam vitae cumque doloremque est rerum similique! Asperiores esse nulla aspernatur aliquid at? Cupiditate repellat totam ea adipisci, 
            officia reprehenderit autem! Quidem ipsam molestiae expedita quas inventore eveniet necessitatibus veniam corrupti cupiditate eaque! Ipsum similique excepturi, 
            sunt nemo consectetur nulla minus saepe, natus molestiae aliquam maiores a est nostrum quasi voluptatum facilis commodi!"
        ]
    ];

    public static function all() {
        return self::$blog_posts;
    }

    public static function find($slug) {
        $posts = self::$blog_posts;
    }
}

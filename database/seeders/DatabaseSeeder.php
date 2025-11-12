<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Service;
use App\Models\Post;
use App\Models\SiteSetting;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create a default admin
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password_hash' => bcrypt('password'),
            'role' => 'admin'
        ]);

        $c = Category::create(['name'=>'Sửa khóa cửa','slug'=>'sua-khoa-cua','type'=>'service']);

        Service::create([
            'category_id' => $c->category_id,
            'user_id' => 1,
            'title' => 'Sửa khóa cửa gỗ',
            'slug' => 'sua-khoa-cua-go',
            'short_description' => 'Dịch vụ sửa khóa cửa gỗ tận nơi',
            'content' => '<p>Chúng tôi sửa khóa cửa gỗ chuyên nghiệp.</p>',
            'price' => 150000,
            'location' => 'Hà Nội',
            'phone_number' => '0123456789'
        ]);

        Post::create([
            'title'=>'Mẹo bảo quản khóa','slug'=>'meo-bao-quan-khoa','content'=>'<p>Nội dung mẫu...</p>',
            'user_id' => 1,
            'status' => 'published'
        ]);

        SiteSetting::create(['key'=>'site_title','value'=>'Sửa khóa tận nơi']);
    }
}

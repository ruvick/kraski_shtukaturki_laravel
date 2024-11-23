<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("san-marco.webp", file_get_contents(public_path('base/tm/san-marco.webp')), 'public');

        $tm = "San Marco";

        $tm_elem =
            [
                "name" => $tm,
                "slug" => Str::slug($tm),
                "img" => Storage::url("san-marco.webp"),
                "description" => $tm,
                "title_seo" => $tm,
                "description_seo" => $tm. "Купить по выгодной цене в Курске. Гарантия качества.",
            ];

        DB::table("trademarks")->insert($tm_elem);

        Storage::disk('public')->put("decorazza.webp", file_get_contents(public_path('base/tm/decorazza.webp')), 'public');

        $tm = "DECORAZZA";

        $tm_elem =
            [
                "name" => $tm,
                "slug" => Str::slug($tm),
                "img" => Storage::url("decorazza.webp"),
                "description" => $tm,
                "title_seo" => $tm,
                "description_seo" => $tm. "Купить по выгодной цене в Курске. Гарантия качества.",
            ];

        DB::table("trademarks")->insert($tm_elem);
    }
}

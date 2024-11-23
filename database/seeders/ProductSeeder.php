<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public $cat_data = [
        "Декоративные краски" => 1,
        "Венецианские штукатурки" => 2,
        "Фактурные покрытия" => 3,
        "Лессирующие покрытия" => 4,
        "Интерьерные краски" => 5,
        "Фасадные краски" => 6,
        "Фасадные штукатурки" => 7,
        "Грунты" => 8,
        "Специальные покрытия" => 9,
        "Системы Микроцементо" => 10,
        "Инструменты" => 11
    ];

    public function run(): void
    {

     $ourData = file_get_contents(base_path() . "/public/base/tovars/tovar_vernici.json");
     $main_data = json_decode($ourData, true);

     $i = 1;
     foreach ($main_data as $item) {
        try {
            $full_img_name = basename($item["pack_foto"]);

            if ($full_img_name)
                Storage::disk('public')->put($full_img_name, file_get_contents($item["pack_foto"]), 'public');


            $tovar_element = [
                "sku" => $item["sku"],
                "title" => $item["name"],
                "slug" => Str::slug($item["name"]."_".$item["sku"]),
                "img" => Storage::url($full_img_name),
                "description" => $item["description"],
                "price" => floatval($item["price"]),
                "old_price" => (rand(0, 1))?(float)$item["price"] - 100:0,
                "sales_count" => (rand(0, 1))?rand(1, 10):0,
                "hit" => 0,
                "new" => 0,
                "tm" => "San Marco",
                "advantages" => json_encode([]),
                "props" => json_encode($item["props"]),
                "volume" => $item["volume"],
                "short_description" => $item["short_description"],
                "seo_title" => $item["name"],
                "seo_description" => $item["name"]." - купить в курске по выгодной цене. Гарантия качества."
            ];

            DB::table("products")->insert($tovar_element);

            $t_id = DB::getPdo()->lastInsertId();

            printf("Добавлен товар: %s \n\r", $item["name"]);

            $cat_id = $this->cat_data[$item["category"]];

            if ($cat_id) {
                $cat_relation[] = [
                    'category_id' => $cat_id,
                    'product_id' => $t_id,
                ];

                DB::table("category_product")->insert($cat_relation);
                printf("Присвоенна категория: %s \n\r", $item["category"]);
            } else {
                print("Не найден ID в категориях\n\r");
                print("Категория: " . $item["category"] );
            }

            if (!empty($item["textutes"])) {
                foreach ($item["textutes"] as $key => $vaue) {

                    $tex_img_name = basename($vaue);

                    if ($tex_img_name)
                        Storage::disk('public')->put($tex_img_name, file_get_contents($vaue), 'public');

                    $tx_element = [
                        "product_id" => $t_id,
                        "img" => Storage::url($tex_img_name),
                        "title" => $key
                    ];

                    DB::table("product_textures")->insert($tx_element);
                }
                print("Добавлены текстуры\n\r");
            }

            echo "\n\r------\n\r";
        } catch (Exception $e) {
            print("Errr: Товар не загружен!");
        }
        $i++;
     }

    }
}

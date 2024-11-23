<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductSeederDecorazza extends Seeder
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

     $ourData = file_get_contents(base_path() . "/public/base/tovars/tovar_decorazza.json");
     $main_data = json_decode($ourData, true);

     $no_cat = 0;
     $i = 1;
     foreach ($main_data as $item) {
        try {
            $full_img_name = basename($item["pack_foto"]);

            if ($full_img_name)
                Storage::disk('public')->put($full_img_name, file_get_contents($item["pack_foto"]), 'public');

            $full_img_name_clr = basename($item["color_img"]);

            if ($full_img_name_clr)
                Storage::disk('public')->put($full_img_name_clr, file_get_contents($item["color_img"]), 'public');

            $tovar_element = [
                "sku" => $item["sku"],
                "title" => $item["name"],
                "slug" => Str::slug($item["name"]."_".$item["sku"]),
                "img" => Storage::url($full_img_name),
                "description" => $item["description"],
                "price" => floatval($item["price"]),
                "old_price" => 0,
                "sales_count" => 0,
                "hit" => 0,
                "new" => 0,
                "tm" => "DECORAZZA",
                "advantages" => json_encode($item["advantages"]),
                "props" => json_encode([]),
                "volume" => $item["volume"],
                "short_description" => $item["short_description"],
                'color_name' => $item["color_name"],
                'color_img' => Storage::url($full_img_name_clr),
                'series' => $item["series"],
                "seo_title" => $item["name"],
                "seo_description" => $item["name"]." - купить в курске по выгодной цене. Гарантия качества."
            ];

            DB::table("products")->insert($tovar_element);

            $t_id = DB::getPdo()->lastInsertId();

            printf("#%s\n\r", $i);
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
                $no_cat++;
            }

            if (!empty($item["full_galery"])) {
                foreach ($item["full_galery"] as $vaue) {

                    $tex_img_name = basename($vaue);

                    if ($tex_img_name)
                        Storage::disk('public')->put($tex_img_name, file_get_contents($vaue), 'public');

                    $tx_element = [
                        "product_id" => $t_id,
                        "link" => Storage::url($tex_img_name),
                        "title" => $item["name"],
                        "alt" => $item["name"],
                    ];

                    DB::table("product_images")->insert($tx_element);
                }
                print("Галерея добавлена\n\r");
            }

            echo "\n\r------\n\r";
        } catch (\Exception $e) {
            print("Errr: Товар не загружен! \n\r");
        }

        $i++;
     }

     printf("Нет категорий у %s записей", $no_cat);

    }
}

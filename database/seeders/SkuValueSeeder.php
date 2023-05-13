<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\option;
use App\Models\Product;
use App\Models\productSku;
use App\Models\optionValue;
use Illuminate\Database\Seeder;

class SkuValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::inRandomOrder()->take(5)->get();

        foreach ($products as  $product) {
            
            
            $option =  option::factory()
            ->for($product)
                        ->create();

            $choices = [];
            if($option->name == "Size"){
                $choices = ['S','M','L','XL','XXL'];
            }else if($option->name == "Color"){
                $choices = ['Red','Blue','Green','Yellow','Black','White'];
            }else if($option->name == "Material"){
                $choices = ['Cotton','Polyester','Wool','Silk','Linen'];
            }

            foreach($choices as $choice){
                
                $sku = productSku::factory()
                ->for($product)
                ->create();

               $optionValue =  optionValue::factory(['name' => $choice])
                    ->for($option)
                    ->create();

                    $product->productSkusValues()->create([
                        'product_sku_id' => $sku->id,
                        'option_value_id' => $optionValue->id,
                        'option_id' => $option->id,
                    ]) ;   
            }
        }

        for($i = 0 ; $i < 3 ; $i++){
            $product =
                Product::factory()
                    ->for(Category::factory())
                    ->create();
            
            $product->productSkus()->create([
                'sku' => uniqid(),
                'price' => rand(100,600),
                'quantity' => rand(1,30),
            ]);

            $product->sale()->create([
                'discounted_price' =>rand(20,99),
            ]);
        }

        
    }
}

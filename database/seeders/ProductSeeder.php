<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $softDrinks = Category::where('name', 'Soft Drinks')->firstOrFail();
        $liquors = Category::where('name', 'Liquors')->firstOrFail();
        $wine = Category::where('name', 'Wine')->firstOrFail();

        // Soft Drinks
        $softDrinkProducts = [
            [
                'name' => 'Coca-Cola',
                'description' => 'Coca-Cola soft drink.',
                'price' => 1000,
                'image' => 'products/coca-cola.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Fanta Orange',
                'description' => 'Orange-flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/fanta-orange.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Fanta Passion',
                'description' => 'Passion-fruit flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/fanta-passion.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Sprite',
                'description' => 'Lemon-lime flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/sprite.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Stoney Tangawizi',
                'description' => 'Ginger-flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/stoney.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Pepsi',
                'description' => 'Pepsi carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/pepsi.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Mirinda Orange',
                'description' => 'Orange-flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/mirinda-orange.webp',
                'size_volume' => '500ml',
            ],
            [
                'name' => 'Mirinda Fruity',
                'description' => 'Fruit-flavoured carbonated soft drink.',
                'price' => 1000,
                'image' => 'products/mirinda-fruity.webp',
                'size_volume' => '500ml',
            ],
        ];

        foreach ($softDrinkProducts as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                [
                    'category_id' => $softDrinks->id,
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'size_volume' => $product['size_volume'],
                    'is_available' => true,
                    'is_active' => true,
                ]
            );
        }

        // Liquors
        $liquorProducts = [
            [
                'name' => 'Smirnoff Vodka',
                'description' => 'Smirnoff vodka.',
                'price' => 25000,
                'image' => 'products/smirnoff-vodka.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => "Gordon's Gin",
                'description' => "Gordon's London Dry Gin.",
                'price' => 30000,
                'image' => 'products/gordons-gin.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Johnnie Walker Red Label',
                'description' => 'Johnnie Walker Red Label blended Scotch whisky.',
                'price' => 45000,
                'image' => 'products/johnnie-walker-red.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Johnnie Walker Black Label',
                'description' => 'Johnnie Walker Black Label blended Scotch whisky.',
                'price' => 85000,
                'image' => 'products/johnnie-walker-black.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Hennessy',
                'description' => 'Hennessy cognac.',
                'price' => 120000,
                'image' => 'products/hennessy.webp',
                'size_volume' => '700ml',
            ],
            [
                'name' => 'Captain Morgan',
                'description' => 'Captain Morgan spiced rum.',
                'price' => 35000,
                'image' => 'products/captain-morgan.webp',
                'size_volume' => '750ml',
            ],
        ];

        foreach ($liquorProducts as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                [
                    'category_id' => $liquors->id,
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'size_volume' => $product['size_volume'],
                    'is_available' => true,
                    'is_active' => true,
                ]
            );
        }

        // Wine
        $wineProducts = [
            [
                'name' => 'Four Cousins Red',
                'description' => 'Red wine.',
                'price' => 18000,
                'image' => 'products/four-cousins-red.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Four Cousins White',
                'description' => 'White wine.',
                'price' => 18000,
                'image' => 'products/four-cousins-white.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Four Cousins Rosé',
                'description' => 'Rosé wine.',
                'price' => 18000,
                'image' => 'products/four-cousins-rose.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Drostdy-Hof Red',
                'description' => 'Red wine.',
                'price' => 20000,
                'image' => 'products/drostdy-hof-red.webp',
                'size_volume' => '750ml',
            ],
            [
                'name' => 'Drostdy-Hof White',
                'description' => 'White wine.',
                'price' => 20000,
                'image' => 'products/drostdy-hof-white.webp',
                'size_volume' => '750ml',
            ],
        ];

        foreach ($wineProducts as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                [
                    'category_id' => $wine->id,
                    'description' => $product['description'],
                    'price' => $product['price'],
                    'image' => $product['image'],
                    'size_volume' => $product['size_volume'],
                    'is_available' => true,
                    'is_active' => true,
                ]
            );
        }
    }
}

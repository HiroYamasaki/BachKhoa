<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $spreadsheet = IOFactory::load(database_path('data.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();
        $highestRow = $sheet->getHighestRow();

        $products = [];
        $now = now();

        for ($row = 2; $row <= $highestRow; $row++) {
            $products[] = [
                'product_id'        => $sheet->getCell('A' . $row)->getValue(),
                'attribute_id'      => $sheet->getCell('B' . $row)->getValue(),
                'sku'               => $sheet->getCell('C' . $row)->getValue(),
                'name'              => $sheet->getCell('D' . $row)->getValue(),
                'category'          => $sheet->getCell('E' . $row)->getValue(),
                'image'             => $sheet->getCell('F' . $row)->getValue(),
                'image1'            => $sheet->getCell('G' . $row)->getValue(),
                'image2'            => $sheet->getCell('H' . $row)->getValue(),
                'image3'            => $sheet->getCell('I' . $row)->getValue(),
                'price'             => (int) $sheet->getCell('J' . $row)->getValue(),
                'sale_price'        => (int) $sheet->getCell('K' . $row)->getValue(),
                'discount'          => (int) $sheet->getCell('L' . $row)->getValue(),
                'quantity'          => (int) $sheet->getCell('M' . $row)->getValue(),
                'short_description' => $sheet->getCell('N' . $row)->getValue(),
                'long_description'  => $sheet->getCell('O' . $row)->getValue(),
                'created_at'        => $now,
                'updated_at'        => $now,
            ];

            // Insert in chunks of 100
            if (count($products) === 100) {
                Product::insert($products);
                $products = [];
            }
        }

        // Insert remaining
        if (!empty($products)) {
            Product::insert($products);
        }

        $this->command->info('Imported ' . ($highestRow - 1) . ' products from data.xlsx');
    }
}

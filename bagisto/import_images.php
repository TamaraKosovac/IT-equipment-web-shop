<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use Intervention\Image\ImageManagerStatic as Image;

function bagistoInsertImages($db, $data, $sku, $productId) {
    $imageColumns = ['Slika1','Slika2','Slika3','Slika4','Slika5','Slika6','Slika7','Slika8','Slika9','Slika10'];

    // Folder for images: storage/app/public/{SKU}/
    $skuFolder = trim($sku);
    $productFolder = __DIR__ . '/storage/app/public/' . $skuFolder . '/';

    if (!is_dir($productFolder)) {
        mkdir($productFolder, 0777, true);
    }

    foreach ($imageColumns as $key) {
        if (!empty($data[$key])) {
            $imageUrl = trim($data[$key]);
            $imageContent = @file_get_contents($imageUrl);
            if (!$imageContent) {
                echo "⚠️ Slika nije preuzeta: $imageUrl\n";
                continue;
            }

            $imageName = basename(parse_url($imageUrl, PHP_URL_PATH));
            $localPath = $productFolder . $imageName;

            if (!file_exists($localPath)) {
                // Resize image to 500x500 like Bagisto admin upload
                $image = Image::make($imageContent)->fit(500, 500);
                $image->save($localPath);
            }

            // Path stored in database (relative to storage)
            $dbPath = $skuFolder . '/' . $imageName;

            $stmt = $db->prepare("INSERT INTO product_images (product_id, path, type) VALUES (?, ?, 'image')");
            $stmt->bind_param("is", $productId, $dbPath);
            $stmt->execute();
            $stmt->close();

            echo "✅ Slika dodana za SKU $sku: $dbPath\n";
        }
    }
}

// DB connection
$db = new mysqli('127.0.0.1', 'newuser', 'password', 'bagisto');
if ($db->connect_error) {
    die("DB connection failed: " . $db->connect_error);
}

// Load Excel
$spreadsheet = IOFactory::load("import_33827.xls");
$sheet = $spreadsheet->getActiveSheet();
$rows = $sheet->toArray(null, true, true, true);

// First row = headers
$headers = array_shift($rows);

// Process each row
foreach ($rows as $row) {
    $data = [];
    foreach ($headers as $key => $header) {
        $data[$header] = $row[$key];
    }

    $sku = trim($data['Šifra']);

    // Find product by SKU
    $stmt = $db->prepare("SELECT id FROM products WHERE sku = ?");
    $stmt->bind_param("s", $sku);
    $stmt->execute();
    $stmt->bind_result($productId);
    $stmt->fetch();
    $stmt->close();

    if ($productId) {
        bagistoInsertImages($db, $data, $sku, $productId);
    } else {
        echo "❌ Proizvod nije pronađen za SKU: $sku\n";
    }
}

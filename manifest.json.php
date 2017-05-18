
<?php
header('Content-type: application/manifest+json');

echo "{\"name\" : \"App BabsonChile trip\",\n";
echo "\"short_name\": \"App BabsonChile trip\",\n";
echo "\"start_url\": \"/cachedemo\",\n";
echo "\"display\": \"standalone\",\n";
echo "\"icons\": [";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"16x16\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"32x32\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"57x57\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"60x60\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"72x72\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"76x76\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"96x96\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"114x114\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"150x150\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"180x180\",\"type\": \"image/png\"},\n";
echo "{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"192x192\",\"type\": \"image/png\"}\n";
echo "]}";
?>
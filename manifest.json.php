
<?php
header('Content-type: application/manifest+json');

echo "{\"name\" : \"App BabsonChile trip,\n";
echo "\"short_name\": \"BabsonChile\",\n";
echo "\"start_url\": \"/cachedemo\",\n";
echo "\"scope\": \"/cachedemo\",\n";
echo "\"display\": \"standalone\",\n";
echo "\"theme_color\": \"#9C2780\",\n";
echo "\"background_color\": \"#58c9f3\",\n";
echo "\"icons\": [{ \"src\": \"/cachedemo/icon.png\",\"sizes\": \"146x146\",\"type\": \"image/png\"}]";
echo "}";
?>
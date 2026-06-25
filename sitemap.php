<?php
// Prevent accidental trailing layout echoes 
header("Content-Type: application/xml; charset=UTF-8");
header("Cache-Control: public, max-age=3600");

$base_url = "https://thrillnation.in"; // Set your production absolute domain here

$entries = [
    ["path" => "/", "changefreq" => "weekly", "priority" => "1.0"],
    ["path" => "/attractions", "changefreq" => "weekly", "priority" => "0.9"],
    ["path" => "/water-park", "changefreq" => "weekly", "priority" => "0.9"],
    ["path" => "/stay", "changefreq" => "weekly", "priority" => "0.8"],
    ["path" => "/events", "changefreq" => "weekly", "priority" => "0.8"],
    ["path" => "/visit", "changefreq" => "weekly", "priority" => "0.8"],
    ["path" => "/contact", "changefreq" => "monthly", "priority" => "0.6"]
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($entries as $e): ?>
  <url>
    <loc><?= $base_url . $e['path'] ?></loc>
    <changefreq><?= $e['changefreq'] ?></changefreq>
    <priority><?= $e['priority'] ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
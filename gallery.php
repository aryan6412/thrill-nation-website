<?php
// ==========================================
// 1. DATA CONFIGURATION & FILTERING LOGIC
// ==========================================

// Primary Media Types
$media_types = [
    'all' => 'All Media',
    'photos' => 'Photos',
    'videos' => 'Videos'
];

// Subcategory Zones
$subcategories = [
    'all' => 'All',
    'water-park' => 'Water Park',
    'adventure' => 'Adventure',
    'wonders' => 'Wonders',
    'kids-zone' => 'Kids Zone',
    'events' => 'Events',
    'stay' => 'Stay',
    'park-overview' => 'Park Overview'
];

// Active State URL Trackers (Fallback to default 'all')
$active_media = isset($_GET['media']) ? $_GET['media'] : 'all';
$active_sub = isset($_GET['sub']) ? $_GET['sub'] : 'all';

// Gallery dataset mapping all image card blocks
$gallery_items = [
    [
        'title' => 'Park Aerial View',
        'location' => 'Main Gate',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'park-overview',
        'thumb' => 'https://images.unsplash.com/photo-1534447677768-be436bb09401?q=80&w=600'
    ],
    [
        'title' => 'Taj Mahal Replica',
        'location' => 'Monument Garden',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'wonders',
        'thumb' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?q=80&w=600'
    ],
    [
        'title' => 'Evening Event Setup',
        'location' => 'Grand Lawn',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'events',
        'thumb' => 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=600'
    ],
    [
        'title' => 'Bungee Tower View',
        'location' => 'Adventure Zone',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'adventure',
        'thumb' => 'https://images.unsplash.com/photo-1524143743306-03714b7bb829?q=80&w=600'
    ],
    [
        'title' => 'Blue Lagoon Wave Pool',
        'location' => 'Blue Lagoon',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'water-park',
        'thumb' => 'https://images.unsplash.com/photo-1582647509711-c8bb8a86eb97?q=80&w=600'
    ],
    [
        'title' => 'Kids Carousel',
        'location' => 'Little Thrillers',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'kids-zone',
        'thumb' => 'https://images.unsplash.com/photo-1533224427566-ce3b2903527b?q=80&w=600'
    ],
    [
        'title' => 'Meera Hotel Exterior',
        'location' => 'Meera Resort',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'stay',
        'thumb' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=600'
    ],
    [
        'title' => 'Sunset Over Sabarmati',
        'location' => 'Riverfront',
        'year' => '2024',
        'type' => 'photos',
        'sub' => 'park-overview',
        'thumb' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=600'
    ],
    [
        'title' => 'Zipline Adventure',
        'location' => 'Adventure Zone',
        'year' => '2024',
        'type' => 'videos',
        'sub' => 'adventure',
        'thumb' => 'https://images.unsplash.com/photo-1516690561799-46d8f74f90f6?q=80&w=600'
    ],
    [
        'title' => 'Water Slide Splash',
        'location' => 'Blue Lagoon',
        'year' => '2024',
        'type' => 'videos',
        'sub' => 'water-park',
        'thumb' => 'https://images.unsplash.com/photo-1519817650390-64a93db51149?q=80&w=600'
    ],
    [
        'title' => 'Monument Garden Walkthrough',
        'location' => 'Monument Garden',
        'year' => '2024',
        'type' => 'videos',
        'sub' => 'wonders',
        'thumb' => 'https://images.unsplash.com/photo-1590001155093-a3c66ab0c3ff?q=80&w=600'
    ],
    [
        'title' => 'Kids Zone Fun Moments',
        'location' => 'Little Thrillers',
        'year' => '2024',
        'type' => 'videos',
        'sub' => 'kids-zone',
        'thumb' => 'https://images.unsplash.com/photo-1566415712127-a12d20d8573b?q=80&w=600'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore the Thrill Nation gallery. See photos and videos of our water park, adventure rides, kids zone, and resort stays.">
    <title>Gallery - Thrill Nation</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #FAF6EE;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="text-gray-800 antialiased min-h-screen flex flex-col justify-between">

    <div
        class="bg-[#1B4314] text-xs px-6 py-2 flex flex-col sm:flex-row justify-between items-center text-gray-300 border-b border-green-800 relative z-30">
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6 text-center sm:text-left">
            <span><span class="text-green-400">●</span> Open today: 9:00 AM - 6:00 PM</span>
            <span>📍 Derol, Vijapur Road, Gujarat</span>
        </div>
        <div class="mt-1 sm:mt-0">📞 +91 90000 00000</div>
    </div>

    <div class="relative bg-cover bg-center min-h-[60vh] flex flex-col justify-between"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.35), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?q=80&w=1600');">

        <?php include 'header.php'; ?>

        <br><br><br>
        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-28 space-y-4 my-auto">
            <span
                class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Memories & Moments
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight serif-font leading-tight">
                Gallery
            </h2>
            <p class="text-gray-200 max-w-xl mx-auto text-xs md:text-sm leading-relaxed opacity-95 font-light">
                Step inside the park — from splash zones to sunset views, adventure highs to family smiles.
            </p>
        </div>

        <div
            class="absolute inset-x-0 bottom-0 h-48 sm:h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 w-full -mt-8 relative z-20">
        <div
            class="bg-white rounded-2xl p-3 shadow-md flex flex-col sm:flex-row items-center justify-between gap-4 border border-gray-100 max-w-3xl mx-auto">

            <div class="flex items-center gap-1.5 bg-gray-100 p-1 rounded-xl w-full sm:w-auto">
                <?php foreach ($media_types as $m_key => $m_name): ?>
                    <a href="?media=<?= $m_key ?>&sub=<?= $active_sub ?>#gallery-display"
                        class="text-xs font-semibold px-4 py-2 rounded-lg text-center transition flex-1 sm:flex-initial <?= ($active_media === $m_key) ? 'bg-white text-gray-900 shadow-sm' : 'text-gray-500 hover:text-gray-900' ?>">
                        <?= $m_name ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="hidden sm:flex items-center gap-2 text-gray-400">
                <span
                    class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-sm cursor-pointer hover:bg-gray-100 text-gray-800">🎛️</span>
                <span
                    class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center text-sm cursor-pointer hover:bg-gray-100">📋</span>
            </div>
        </div>
    </div>

    <main id="gallery-display" class="max-w-7xl mx-auto px-6 lg:px-16 py-12 w-full space-y-10">

        <div class="flex items-center gap-2 overflow-x-auto pb-3 scrollbar-none justify-start md:justify-center">
            <?php foreach ($subcategories as $s_key => $s_name): ?>
                <a href="?media=<?= $active_media ?>&sub=<?= $s_key ?>#gallery-display"
                    class="text-xs font-medium px-4 py-2 rounded-full border whitespace-nowrap transition flex-shrink-0 <?= ($active_sub === $s_key) ? 'bg-[#FF7E42] text-white border-transparent shadow-sm' : 'bg-white hover:bg-gray-50 text-gray-600 border-gray-200' ?>">
                    <?= $s_name ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $rendered_count = 0;
            foreach ($gallery_items as $item):
                // Perform dynamic evaluations matching inputs
                if ($active_media !== 'all' && $item['type'] !== $active_media)
                    continue;
                if ($active_sub !== 'all' && $item['sub'] !== $active_sub)
                    continue;
                $rendered_count++;
                ?>
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white border border-gray-100/50 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between h-[300px]">

                    <img src="<?= $item['thumb'] ?>" alt="<?= htmlspecialchars($item['title']) ?>"
                        class="absolute inset-0 w-full h-full object-cover transition duration-700 group-hover:scale-105">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-black/30"></div>

                    <div class="absolute top-3 left-3 z-10">
                        <?php if ($item['type'] === 'photos'): ?>
                            <span
                                class="bg-black/30 backdrop-blur-md text-white text-[9px] font-bold tracking-widest uppercase px-2.5 py-1 rounded-md flex items-center gap-1 border border-white/10 select-none">
                                📷 PHOTO
                            </span>
                        <?php else: ?>
                            <span
                                class="bg-[#EF5350] text-white text-[9px] font-bold tracking-widest uppercase px-2.5 py-1 rounded-md flex items-center gap-1 shadow-sm select-none">
                                🎬 VIDEO
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if ($item['type'] === 'videos'): ?>
                        <div class="absolute inset-0 flex items-center justify-center z-10">
                            <span
                                class="w-12 h-12 rounded-full bg-white/90 text-gray-900 shadow-md flex items-center justify-center text-lg pl-0.5 group-hover:bg-white transition-colors cursor-pointer transform group-hover:scale-105 duration-300">
                                ▶
                            </span>
                        </div>
                    <?php endif; ?>

                    <div class="absolute bottom-0 inset-x-0 p-5 text-white space-y-1 z-10">
                        <h4 class="font-bold text-sm sm:text-base leading-tight tracking-wide serif-font">
                            <?= htmlspecialchars($item['title']) ?>
                        </h4>
                        <p class="text-gray-300 text-[10px] font-light flex items-center gap-1.5">
                            📍 <?= htmlspecialchars($item['location']) ?> <span class="opacity-40">·</span>
                            <?= htmlspecialchars($item['year']) ?>
                        </p>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <?php if ($rendered_count === 0): ?>
            <div class="text-center py-16 bg-white rounded-3xl border border-gray-100 shadow-sm max-w-md mx-auto">
                <span class="text-3xl block mb-2">📂</span>
                <p class="text-gray-400 text-sm font-medium">No media items found in this section criteria.</p>
            </div>
        <?php endif; ?>

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>
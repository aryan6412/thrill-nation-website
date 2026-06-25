<?php
// ==========================================
// 1. DATA CONFIGURATION
// ==========================================

// Core contact and link coordinates
$reservation_phone = "+91 90000 00000";
$external_hotel_url = "https://hotalmeera.com"; // Preserving typo from design mockup 'hotalmeera.com'

// Amenities list matrix array
$amenities = [
    [
        'title' => '3 room categories',
        'desc' => 'Deluxe to Luxury Suites',
        'icon' => '🛏️'
    ],
    [
        'title' => 'Multi-cuisine dining',
        'desc' => 'All-day à-la-carte restaurant',
        'icon' => '🍽️'
    ],
    [
        'title' => 'Green park surrounds',
        'desc' => 'Wake up to riverside calm',
        'icon' => '🌳'
    ],
    [
        'title' => 'Wi-Fi & parking',
        'desc' => 'Complimentary for guests',
        'icon' => '📶'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Stay at Meera Hotel & Resort located inside Thrill Nation. Deluxe rooms, super-deluxe, and luxury suites with multi-cuisine dining surrounded by the serene Sabarmati.">
    <title>Stay Over - Meera Hotel & Resort</title>
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
        <div class="mt-1 sm:mt-0">📞 <?= $reservation_phone ?></div>
    </div>

    <div class="relative bg-cover bg-center min-h-[75vh] flex flex-col justify-between"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1600');">

        <?php include 'header.php'; ?>
        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-44 space-y-4 my-auto">
            <span
                class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Stay Over
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight serif-font leading-tight">
                Meera Hotel & Resort — a<br class="hidden md:inline"> world of its own.
            </h2>
            <p class="text-gray-200 max-w-xl mx-auto text-xs md:text-sm leading-relaxed opacity-90 font-light">
                Our hospitality wing has a dedicated website with live availability, full room galleries, dining menus
                and instant booking.
            </p>
        </div>
        <div
            class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16 w-full -mt-32 relative z-20">
        <div
            class="bg-white rounded-[2.5rem] p-6 md:p-10 shadow-2xl border border-gray-100/80 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center max-w-5xl mx-auto">

            <div class="lg:col-span-7 space-y-5">
                <span
                    class="bg-[#FCF5E3] text-[#B58A3D] text-[10px] font-bold px-3 py-1.5 rounded-md uppercase tracking-wider inline-flex items-center gap-1.5 border border-[#F3E5C8]">
                    🔗 Dedicated Hotel Website
                </span>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 serif-font leading-tight">
                    Plan your stay on the official Meera Hotel site.
                </h3>
                <p class="text-gray-500 text-xs md:text-sm leading-relaxed font-light">
                    Compare Deluxe, Super Deluxe and Luxury Suites, view 360° room tours, check seasonal offers, and
                    reserve in a few taps. Park combo tickets included with every stay.
                </p>
                <div class="flex flex-wrap gap-3 pt-2">
                    <a href="<?= $external_hotel_url ?>" target="_blank"
                        class="bg-gradient-to-r from-[#FF7E42] to-[#FFA342] text-white text-xs font-semibold px-5 py-3 rounded-full shadow-md flex items-center gap-1.5 hover:opacity-95 transition">
                        Visit Meera Hotel website <span class="text-[10px]">↗</span>
                    </a>
                    <a href="tel:<?= str_replace(' ', '', $reservation_phone) ?>"
                        class="bg-white hover:bg-gray-50 text-gray-700 text-xs font-semibold px-5 py-3 rounded-full border border-gray-200 shadow-sm flex items-center gap-1.5 transition">
                        📞 Call reservations
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative w-full">
                <div
                    class="rounded-3xl overflow-hidden shadow-lg border border-gray-100 max-w-sm mx-auto lg:ml-auto h-[260px] md:h-[300px] relative">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=600"
                        alt="Meera Hotel Night View" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-5 text-white">
                        <span class="text-[9px] font-bold uppercase tracking-wider text-yellow-400 block mb-0.5">📍
                            Inside the 150-acre park</span>
                        <h4 class="font-bold text-sm serif-font">Meera Hotel & Resort</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="max-w-7xl mx-auto px-6 lg:px-16 pt-24 pb-12 text-center w-full">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 serif-font mb-10">What awaits you</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-5xl mx-auto">
            <?php foreach ($amenities as $item): ?>
                <div
                    class="bg-white rounded-2xl p-5 border border-gray-100/80 shadow-sm flex flex-col items-center justify-center text-center space-y-2">
                    <div
                        class="w-10 h-10 rounded-full bg-[#E8F5E9] text-[#2E7D32] flex items-center justify-center text-lg shadow-inner">
                        <?= $item['icon'] ?>
                    </div>
                    <h4 class="font-bold text-gray-900 text-xs sm:text-sm serif-font pt-1">
                        <?= htmlspecialchars($item['title']) ?></h4>
                    <p class="text-gray-400 text-[11px] font-light"><?= htmlspecialchars($item['desc']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 lg:px-16 pb-24 w-full">
        <div
            class="bg-[#338446] text-white rounded-3xl p-8 md:p-12 shadow-xl flex flex-col md:flex-row md:items-center md:justify-between gap-6 border border-green-800/10 max-w-5xl mx-auto">
            <div class="space-y-1">
                <span class="text-[10px] tracking-widest text-[#B4E5B1] font-bold uppercase block">Continue to</span>
                <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight select-all">
                    <?= parse_url($external_hotel_url, PHP_URL_HOST) ?></h2>
                <p class="text-green-100/70 text-xs font-light pt-1">Full rooms, gallery, dining, weddings and direct
                    booking — all on the dedicated hotel website.</p>
            </div>
            <div class="flex-shrink-0">
                <a href="<?= $external_hotel_url ?>" target="_blank"
                    class="inline-flex items-center justify-center gap-2 bg-white text-gray-900 font-bold px-6 py-3.5 rounded-xl text-xs tracking-wide shadow-md hover:bg-gray-50 transition w-full sm:w-auto">
                    Open hotel website <span>⚙️</span>
                </a>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>
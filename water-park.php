<?php
// ==========================================
// 1. DATA CONFIGURATION
// ==========================================

// Core pricing configuration
$ticket_price = 350;

// Features grid data mapping
$features = [
    [
        'title' => 'Giant Slides',
        'desc'  => 'Multi-lane racer and twister slides over 3 storeys high.',
        'icon'  => '🌊'
    ],
    [
        'title' => 'Rain Dance',
        'desc'  => 'Daily DJ rain-dance sessions on a sprawling open-air floor.',
        'icon'  => '🔊'
    ],
    [
        'title' => 'Lifeguarded',
        'desc'  => 'Every pool is supervised by certified lifeguards.',
        'icon'  => '🛡️'
    ],
    [
        'title' => 'Open 12 – 5 PM',
        'desc'  => 'Bring swimwear or rent costumes & lockers on site.',
        'icon'  => '🕒'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Dive into Blue Lagoon at Thrill Nation, Gujarat's premier tropical water park. Splash in the wave lagoon, brave the giant slides, or join the daily DJ rain dance floor.">
    <title>Blue Lagoon - Thrill Nation</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300..800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #FAF6EE; }
        .serif-font { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="text-gray-800 antialiased min-h-screen flex flex-col justify-between">

    <div class="bg-[#1B4314] text-xs px-6 py-2 flex flex-col sm:flex-row justify-between items-center text-gray-300 border-b border-green-800 relative z-30">
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6 text-center sm:text-left">
            <span><span class="text-green-400">●</span> Open today: 9:00 AM - 6:00 PM</span>
            <span>📍 Derol, Vijapur Road, Gujarat</span>
        </div>
        <div class="mt-1 sm:mt-0">📞 +91 90000 00000</div>
    </div>

    <div class="relative bg-cover bg-center min-h-[92vh] flex flex-col justify-between" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6)), url('./photo/Waterpark.jpg');">
       <?php include 'header.php'; ?>

        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-24 space-y-4 my-auto">
            <span class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Blue Lagoon
            </span>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight serif-font leading-tight">
                A tropical water park inside<br class="hidden md:inline"> the adventure park.
            </h2>
            <p class="text-gray-200 max-w-2xl mx-auto text-sm md:text-base leading-relaxed opacity-95">
                Twisting slides, lagoon pools, palm trees and a rain dance floor. Cool off after the rides.
            </p>
        </div>

        <div class="w-full h-16 bg-gradient-to-t from-[#FAF6EE] to-transparent"></div>
    </div>

    <section class="max-w-7xl mx-auto px-6 lg:px-16 py-16 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="w-full lg:col-span-6 space-y-8">
                <div class="space-y-3">
                    <span class="text-xs font-bold tracking-widest text-[#00A3C4] uppercase block">What's Inside</span>
                    <h3 class="text-3xl md:text-4xl font-bold text-[#232323] serif-font">Five attractions, one ticket.</h3>
                    <p class="text-gray-500 text-xs md:text-sm leading-relaxed max-w-xl">
                        Blue Lagoon access is ₹<?= $ticket_price ?> per person and includes every slide, pool and the rain-dance floor. Lockers and swim-costume rentals are available on site.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($features as $feat): ?>
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm space-y-2">
                            <div class="w-8 h-8 rounded-lg bg-[#E0F7FA] text-[#00A3C4] flex items-center justify-center text-base font-semibold">
                                <?= $feat['icon'] ?>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm serif-font"><?= htmlspecialchars($feat['title']) ?></h4>
                            <p class="text-gray-500 text-[11px] leading-relaxed"><?= htmlspecialchars($feat['desc']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="w-full lg:col-span-6">
                <div class="overflow-hidden rounded-[2.5rem] shadow-xl border border-white max-w-md mx-auto lg:ml-auto">
                    <img 
                        src="./photo/Waterpark.jpg" 
                        alt="Blue Lagoon Aerial Feature" 
                        class="w-full h-[380px] md:h-[480px] object-cover hover:scale-103 transition duration-500"
                    >
                </div>
            </div>

        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 lg:px-16 pb-24 w-full">
        <div class="bg-gradient-to-r from-[#39B5C9] to-[#39BDC4] text-white rounded-3xl p-8 text-center shadow-lg border border-cyan-400/10 space-y-2">
            <h2 class="text-2xl md:text-3xl font-extrabold tracking-wide">
                ₹<?= $ticket_price ?> / person — all-day water park access
            </h2>
            <p class="text-cyan-50 text-xs md:text-sm font-light">
                Combo with park entry available at the gate. Free for kids under 3.
            </p>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
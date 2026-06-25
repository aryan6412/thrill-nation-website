<?php
// index.php page
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Experience Thrill Nation, Gujarat's largest adventure park in Derol. 150 acres of fun, a huge water park, miniature monuments, and thrill rides for the whole family.">
    <meta property="og:title" content="Thrill Nation - Tirupati Rushivan">
    <meta property="og:description" content="Experience Thrill Nation, Gujarat's largest adventure park in Derol.">
    <title>Thrill Nation - Tirupati Rushivan</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .serif-font {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-black m-0 p-0 text-white min-h-screen">

    <div class="relative bg-cover bg-center min-h-[90vh] flex flex-col justify-between"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.5)), url('./photo/hero.jpg');">
        <?php include 'header.php'; ?>


        <div
            class="max-w-7xl mx-auto px-6 lg:px-16 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center my-auto pt-32 pb-12 md:py-12">

            <div class="lg:col-span-7 space-y-6">
                <span
                    class="bg-white/10 text-xs px-3 py-1.5 rounded-full uppercase tracking-wider border border-white/20 inline-block font-semibold text-yellow-400">
                    ✨ Gujarat's Largest Adventure Park
                </span>
                <h1 class="text-4xl md:text-6xl serif-font font-semibold text-white leading-tight">
                    Wonders of the world, on the bank of the <span class="text-[#FFC738]">Sabarmati.</span>
                </h1>
                <p class="text-gray-300 max-w-xl text-sm md:text-base leading-relaxed">
                    150 acres of thrills, splashes and miniature monuments. From bungee jumps to bumper cars, Blue
                    Lagoon to laughing Buddha — your whole day, sorted.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="/visit"
                        class="bg-gradient-to-r from-[#FF7E42] to-[#FFA342] text-white px-6 py-3 rounded-full text-sm font-medium flex items-center gap-2 hover:opacity-90 transition shadow-lg">🎟️
                        Book Tickets</a>
                    <a href="/attractions"
                        class="bg-white/10 backdrop-blur-sm border border-white/20 text-white px-6 py-3 rounded-full text-sm font-medium flex items-center gap-2 hover:bg-white/20 transition">Explore
                        Attractions ➔</a>
                </div>
            </div>


        </div>

        <div class="w-full bg-gradient-to-t from-black/80 to-transparent pt-12 pb-6 px-6 lg:px-16">
            <div class="max-w-5xl flex flex-wrap gap-8 md:gap-16">
                <div>
                    <h4 class="text-3xl font-extrabold text-[#FFC738]">150+</h4>
                    <p class="text-xs text-gray-300">Acres of fun</p>
                </div>
                <div>
                    <h4 class="text-3xl font-extrabold text-[#FFC738]">30+</h4>
                    <p class="text-xs text-gray-300">Rides & shows</p>
                </div>
                <div>
                    <h4 class="text-3xl font-extrabold text-[#FFC738]">1,500</h4>
                    <p class="text-xs text-gray-300">Guest event lawn</p>
                </div>
            </div>
        </div>

    </div>




    <br><br><br>

    <section class="w-full bg-[#FAF6EE] py-16 text-gray-800 antialiased font-sans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

            <div
                class="grid grid-cols-1 md:grid-cols-3 rounded-3xl overflow-hidden shadow-xl -mt-28 relative z-20 text-white font-medium mb-16">
                <div class="bg-[#2E6F40] p-5 flex items-center gap-4">
                    <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center text-xl">🕒</div>
                    <div>
                        <h4 class="font-bold text-sm sm:text-base">Park 9 AM – 6 PM</h4>
                        <p class="text-xs text-green-200">Water Park 12 – 5 PM</p>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-[#F07D43] to-[#F1A83B] p-5 flex items-center gap-4">
                    <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center text-xl">📍</div>
                    <div>
                        <h4 class="font-bold text-sm sm:text-base">Derol, Gujarat</h4>
                        <p class="text-xs text-orange-100">75 km from Ahmedabad</p>
                    </div>
                </div>

                <div class="bg-[#3BBCCF] p-5 flex items-center gap-4">
                    <div class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center text-xl">⭐</div>
                    <div>
                        <h4 class="font-bold text-sm sm:text-base">Family & groups</h4>
                        <p class="text-xs text-cyan-100">Bring-your-kitchen policy</p>
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <span class="text-xs font-bold tracking-widest text-[#FF6332] uppercase block mb-2">Experience
                    Hub</span>
                <h2 class="text-4xl md:text-5xl font-bold text-[#232323] mb-4"
                    style="font-family: 'Playfair Display', serif;">
                    A park for every mood
                </h2>
                <p class="text-gray-500 max-w-xl text-sm md:text-base leading-relaxed">
                    Splash, sprint, soar — or just stroll under a marble Taj. Filter and find your favourite zone.
                </p>
            </div>

            <?php
            $featured_attractions = [
                ['title' => 'Giant Family Slides', 'desc' => 'Massive multi-lane slides plunging into a turquoise splash pool.', 'tag' => 'Water Park', 'price' => 'Included', 'icon' => '🌊'],
                ['title' => 'Zipline (Flying Fox)', 'desc' => 'Soar across the Sabarmati riverbed on a 300m high-speed cable.', 'tag' => 'Adventure', 'price' => '₹150', 'icon' => '🪂'],
                ['title' => 'Taj Mahal Replica', 'desc' => 'A breathtaking marble-finish miniature of the Wonder of India.', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🕌']
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <?php foreach ($featured_attractions as $item): ?>
                    <div
                        class="bg-white rounded-[2rem] p-6 border border-gray-100/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between min-h-[240px]">
                        <div>
                            <div class="flex justify-between items-start mb-5">
                                <div class="text-4xl select-none"><?= $item['icon'] ?></div>
                                <?php if ($item['price'] === 'Included' || $item['price'] === 'Free'): ?>
                                    <span
                                        class="bg-[#EDF7ED] text-[#2E7D32] font-bold text-[10px] px-3 py-1 rounded-full uppercase tracking-wider">Included</span>
                                <?php else: ?>
                                    <span
                                        class="bg-[#FDF2F2] text-[#EF5350] font-bold text-[11px] px-3 py-1 rounded-full tracking-wide"><?= $item['price'] ?></span>
                                <?php endif; ?>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2"
                                style="font-family: 'Playfair Display', serif;">
                                <?= htmlspecialchars($item['title']) ?>
                            </h3>
                            <p class="text-gray-500 text-xs md:text-sm leading-relaxed mb-6">
                                <?= htmlspecialchars($item['desc']) ?>
                            </p>
                        </div>
                        <div class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                            <?= htmlspecialchars($item['tag']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center">
                <a href="/attractions"
                    class="inline-flex items-center justify-center gap-2 bg-[#2E6F40] hover:bg-[#235830] text-white font-bold px-8 py-3.5 rounded-full text-sm tracking-wide shadow-md transition duration-150">
                    View all 30+ Attractions ➔
                </a>
            </div>
        </div>
    </section>


    <?php include 'map.php'; ?>




    <?php
    // Feature sections dataset mapping the images
    $features = [
        [
            'label' => 'BLUE LAGOON',
            'title' => 'A whole tropical water park inside the park.',
            'description' => 'Giant family slides, a wave lagoon, rain-dance floor and shaded splash pools — supervised by trained lifeguards and ringed with palm trees.',
            'image_url' => './photo/Waterpark.jpg', // Replace with your Blue Lagoon image asset
            'link' => '/water-park',
            'align_left' => true // Image on left, text on right
        ],
        [
            'label' => 'ADVENTURE',
            'title' => 'Zip, jump, race, soar.',
            'description' => 'A whole acre of adrenaline. Take the 300m zipline across the riverbed or push your nerve on the bungee tower — instructors guide every step.',
            'image_url' => './photo/adventure.jpg', // Replace with your Zipline/Adventure image asset
            'link' => '/attractions?category=adventure#attractions-hub',
            'align_left' => false // Image on right, text on left
        ],
        [
            'label' => 'WONDERS',
            'title' => 'Seven wonders in one walk.',
            'description' => 'From the Taj Mahal to Mount Rushmore, our monument garden is the most photographed corner of Gujarat — and it never charges extra.',
            'image_url' => './photo/momento.jpg', // Replace with your Miniature Wonders image asset
            'link' => '/attractions?category=monuments#attractions-hub',
            'align_left' => true
        ],
        [
            'label' => 'LITTLE ONES',
            'title' => 'Magic-hour for kids.',
            'description' => 'Carousels, Chhota Bheem zone, ball pools and a soft-play wonderland. Under 3s enter free, always.',
            'image_url' => './photo/kide.jpg', // Replace with your Kids/Carousel image asset
            'link' => '/attractions?category=kids#attractions-hub',
            'align_left' => false
        ]
    ];
    ?>

    <section class="w-full bg-[#FAF6EE] py-20 text-gray-800 antialiased font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 space-y-24 md:space-y-32">

            <?php foreach ($features as $feature): ?>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">

                    <div class="w-full lg:col-span-6 <?= $feature['align_left'] ? 'lg:order-1' : 'lg:order-2' ?>">
                        <div class="overflow-hidden rounded-[2.5rem] shadow-xl border border-white/40">
                            <img src="<?= htmlspecialchars($feature['image_url']) ?>"
                                alt="<?= htmlspecialchars($feature['title']) ?>"
                                class="w-full h-[300px] md:h-[420px] object-cover hover:scale-105 transition-transform duration-700" />
                        </div>
                    </div>

                    <div
                        class="w-full lg:col-span-6 space-y-4 <?= $feature['align_left'] ? 'lg:order-2 lg:pl-6' : 'lg:order-1 lg:pr-6' ?>">
                        <span class="text-xs font-bold tracking-widest text-[#FF6332] uppercase block">
                            <?= htmlspecialchars($feature['label']) ?>
                        </span>

                        <h3 class="text-3xl md:text-4xl font-bold text-[#232323] leading-tight"
                            style="font-family: 'Playfair Display', serif;">
                            <?= htmlspecialchars($feature['title']) ?>
                        </h3>

                        <p class="text-gray-500 text-sm md:text-base leading-relaxed max-w-xl">
                            <?= htmlspecialchars($feature['description']) ?>
                        </p>

                        <div class="pt-2">
                            <a href="<?= htmlspecialchars($feature['link']) ?>"
                                class="group inline-flex items-center gap-2 text-sm font-bold text-[#1C4E28] hover:opacity-80 transition duration-150">
                                Learn more
                                <span class="transform group-hover:translate-x-1 transition-transform duration-150">➔</span>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <?php
    // Data configuration for the top two banner cards
    $promo_cards = [
        [
            'label' => 'STAY OVER',
            'title' => 'Meera Hotel & Resort',
            'description' => 'Deluxe rooms, super-deluxe and luxury suites inside the park premises — with multi-cuisine à-la-carte dining.',
            'image_url' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800', // Replace with Meera Hotel asset
            'link' => '/stay'
        ],
        [
            'label' => 'CELEBRATE',
            'title' => 'Weddings & corporate lawns',
            'description' => 'Lawns for up to 1,500 guests, 24 in-house rooms, and flexible decorator + catering policy.',
            'image_url' => './photo/event.jpg', // Replace with Wedding/Lawn asset
            'link' => '/events'
        ]
    ];
    ?>

    <section class="w-full bg-[#FAF6EE] pb-24 text-gray-800 antialiased font-sans">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-16 space-y-12">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($promo_cards as $card): ?>
                    <div
                        class="relative overflow-hidden rounded-[2.5rem] group shadow-xl h-[340px] md:h-[400px] border border-white/20">

                        <img src="<?= htmlspecialchars($card['image_url']) ?>" alt="<?= htmlspecialchars($card['title']) ?>"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-black/10"></div>

                        <div class="absolute inset-0 p-8 flex flex-col justify-end text-white space-y-3">
                            <span class="text-[11px] font-bold tracking-widest text-gray-300 opacity-90 uppercase">
                                <?= htmlspecialchars($card['label']) ?>
                            </span>

                            <h3 class="text-2xl md:text-3xl font-bold leading-tight"
                                style="font-family: 'Playfair Display', serif;">
                                <?= htmlspecialchars($card['title']) ?>
                            </h3>

                            <p class="text-gray-300 text-xs md:text-sm leading-relaxed max-w-md font-light">
                                <?= htmlspecialchars($card['description']) ?>
                            </p>

                            <div class="pt-2">
                                <a href="<?= htmlspecialchars($card['link']) ?>"
                                    class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold tracking-wider text-white hover:underline">
                                    Discover ➔
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div
                class="bg-[#2E7D44] text-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-xl flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 border border-green-800/20">

                <div class="space-y-4 max-w-3xl">
                    <div class="flex items-center gap-2 text-[#C6F0A3] text-xs font-bold tracking-widest uppercase">
                        👥 Schools & Corporates
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold leading-tight"
                        style="font-family: 'Playfair Display', serif;">
                        Planning a picnic for 50 or 500?<br class="hidden md:inline"> We've got you.
                    </h2>

                    <p class="text-green-100/80 text-xs md:text-sm leading-relaxed font-light">
                        Bulk discounts, private cooking zones, custom meal plans and dedicated coordinators. Submit your
                        group details and we'll send a custom quote within 24 hours.
                    </p>
                </div>

                <div class="flex-shrink-0">
                    <a href="/contact"
                        class="inline-flex items-center justify-center gap-2 bg-[#FBB016] hover:bg-[#E59F0F] text-gray-900 font-bold px-7 py-4 rounded-full text-sm tracking-wide shadow-md transition duration-150 w-full sm:w-auto">
                        Get a group quote ➔
                    </a>
                </div>

            </div>

        </div>
    </section>


    <?php include 'footer.php'; ?>
</body>

</html>
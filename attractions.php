<?php
// ==========================================
// 1. DATA CONFIGURATION & LOGIC
// ==========================================

// --- Ticket Calculator Logic ---
$adults = isset($_POST['adults']) ? (int) $_POST['adults'] : 2;
$kids = isset($_POST['kids']) ? (int) $_POST['kids'] : 1;
$blue_lagoon = isset($_POST['blue_lagoon']) ? true : false;

$price_adult = 150;
$price_kid = 100;
$price_blue_lagoon = 350;

$total_cost = ($adults * $price_adult) + ($kids * $price_kid);
if ($blue_lagoon) {
    $total_cost += (($adults + $kids) * $price_blue_lagoon);
}

// --- Category Filters ---
$categories = [
    'all' => 'All',
    'water-park' => 'Water Park',
    'adventure' => 'Adventure',
    'monuments' => 'Monuments',
    'kids' => 'Kids',
    'family' => 'Family'
];
$active_filter = isset($_GET['category']) ? $_GET['category'] : 'all';

// --- Attractions Directory Array (30 Items) ---
$attractions = [
    // WATER PARK
    ['title' => 'Giant Family Slides', 'desc' => 'Massive multi-lane slides plunging into a turquoise splash pool.', 'category' => 'water-park', 'tag' => 'Water Park', 'price' => 'Included', 'icon' => '🌊'],
    ['title' => 'Rain Dance Floor', 'desc' => 'Open-air rain dance with DJ — Gujarat\'s biggest splash party.', 'category' => 'water-park', 'tag' => 'Water Park', 'price' => 'Included', 'icon' => '💦'],
    ['title' => 'Family Splash Pools', 'desc' => 'Shallow lagoons for families and toddlers, lifeguard-supervised.', 'category' => 'water-park', 'tag' => 'Water Park', 'price' => 'Included', 'icon' => '🏊'],
    ['title' => 'Wave Lagoon', 'desc' => 'Gentle artificial waves under tropical palms.', 'category' => 'water-park', 'tag' => 'Water Park', 'price' => 'Included', 'icon' => '🌴'],

    // ADVENTURE
    ['title' => 'Zipline (Flying Fox)', 'desc' => 'Soar across the Sabarmati riverbed on a 300m high-speed cable.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹150', 'icon' => '🪂'],
    ['title' => 'Sky Rail', 'desc' => 'Pedal across the canopy on our suspended sky cycle track.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹120', 'icon' => '🚲'],
    ['title' => 'Bungee Jumping', 'desc' => 'The ultimate free-fall rush over a soft landing zone.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹150', 'icon' => '🤸'],
    ['title' => 'Dirt Biking', 'desc' => 'Off-road mini bikes on a custom motocross loop.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹120', 'icon' => '🏍️'],
    ['title' => 'Monster Car', 'desc' => 'Climb obstacles and crawl over rocks in a real off-roader.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹100', 'icon' => '🚙'],
    ['title' => 'Go-Karting', 'desc' => 'Race friends on the longest go-kart track in the region.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹100', 'icon' => '🏁'],
    ['title' => 'Archery', 'desc' => 'Take aim like an Olympian on our 30m archery range.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹80', 'icon' => '🏹'],
    ['title' => 'Water Ball', 'desc' => 'Roll across the lake inside a giant inflatable orb.', 'category' => 'adventure', 'tag' => 'Adventure', 'price' => '₹80', 'icon' => '🫧'],

    // MONUMENTS
    ['title' => 'Taj Mahal Replica', 'desc' => 'A breathtaking marble-finish miniature of the Wonder of India.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🕌'],
    ['title' => 'Eiffel Tower', 'desc' => 'Walk under our towering steel-lattice tribute to Paris.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🗼'],
    ['title' => 'Statue of Liberty', 'desc' => 'Lady Liberty stands tall at the heart of the park lake.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🗽'],
    ['title' => 'Statue of Merlion', 'desc' => 'Singapore\'s iconic lion-fish — a perfect photo stop.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🦁'],
    ['title' => 'Easter Island Heads', 'desc' => 'Mysterious Moai monoliths emerging from a sculpted hill.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🗿'],
    ['title' => 'Mount Rushmore', 'desc' => 'A miniature carved tribute to four American presidents.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '⛰️'],
    ['title' => 'Ashok Stambh', 'desc' => 'India\'s national emblem rendered in golden polished stone.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🦁'],
    ['title' => 'Holy Shivdhara', 'desc' => 'A serene sacred Shiva shrine with flowing water.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🕉️'],
    ['title' => 'Laughing Buddha', 'desc' => 'A gigantic golden Buddha that promises good fortune.', 'category' => 'monuments', 'tag' => 'Monuments', 'price' => 'Free', 'icon' => '🧘'],

    // FAMILY
    ['title' => 'Jungle Safari', 'desc' => 'Spot animatronic wildlife on a jeep ride through the jungle.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹80', 'icon' => '🦓'],
    ['title' => '6D Theater', 'desc' => 'Wind, water and motion-synced cinema for the full sensory ride.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹100', 'icon' => '🎬'],
    ['title' => 'Ghost Villa', 'desc' => 'Dare to enter Gujarat\'s spookiest haunted mansion.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹100', 'icon' => '👻'],
    ['title' => 'Wonder Wheel', 'desc' => 'Panoramic views of the park from our giant ferris wheel.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹80', 'icon' => '🎡'],
    ['title' => 'Carousel', 'desc' => 'A classic painted carousel — pure childhood joy.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹50', 'icon' => '🎠'],
    ['title' => 'Dashing Cars', 'desc' => 'Bumper cars chaos for friends and families.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹80', 'icon' => '🚗'],
    ['title' => 'Boating', 'desc' => 'Paddle and pedal boats on the calm park lake.', 'category' => 'family', 'tag' => 'Family', 'price' => '₹100', 'icon' => '🛶'],

    // KIDS
    ['title' => 'Chhota Bheem Zone', 'desc' => 'A dedicated themed playground for Bheem fans.', 'category' => 'kids', 'tag' => 'Kids', 'price' => '₹50', 'icon' => '🧒'],
    ['title' => 'Mini Columbus', 'desc' => 'A kid-safe pirate-ship swing.', 'category' => 'kids', 'tag' => 'Kids', 'price' => '₹50', 'icon' => '⛵'],
    ['title' => 'Kids Play Zone', 'desc' => 'Slides, ball pools and soft-play wonderland for tiny tots.', 'category' => 'kids', 'tag' => 'Kids', 'price' => '₹20', 'icon' => '🎈']
];

// --- Alternating Spotlights Array ---
$spotlights = [
    ['label' => 'BLUE LAGOON', 'title' => 'A whole tropical water park inside the park.', 'desc' => 'Giant family slides, a wave lagoon, rain-dance floor and shaded splash pools — supervised by trained lifeguards and ringed with palm trees.', 'img' => 'https://images.unsplash.com/photo-1582647509711-c8bb8a86eb97?q=80&w=800', 'align_left' => true],
    ['label' => 'ADVENTURE', 'title' => 'Zip, jump, race, soar.', 'desc' => 'A whole acre of adrenaline. Take the 300m zipline across the riverbed or push your nerve on the bungee tower — instructors guide every step.', 'img' => 'https://images.unsplash.com/photo-1524143743306-03714b7bb829?q=80&w=800', 'align_left' => false],
    ['label' => 'WONDERS', 'title' => 'Seven wonders in one walk.', 'desc' => 'From the Taj Mahal to Mount Rushmore, our monument garden is the most photographed corner of Gujarat — and it never charges extra.', 'img' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?q=80&w=800', 'align_left' => true],
    ['label' => 'LITTLE ONES', 'title' => 'Magic-hour for kids.', 'desc' => 'Carousels, Chhota Bheem zone, ball pools and a soft-play wonderland. Under 3s enter free, always.', 'img' => 'https://images.unsplash.com/photo-1533224427566-ce3b2903527b?q=80&w=800', 'align_left' => false]
];

// --- Stays and Lawns Cards ---
$promo_cards = [
    ['label' => 'STAY OVER', 'title' => 'Meera Hotel & Resort', 'desc' => 'Deluxe rooms, super-deluxe and luxury suites inside the park premises — with multi-cuisine à-la-carte dining.', 'img' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800'],
    ['label' => 'CELEBRATE', 'title' => 'Weddings & corporate lawns', 'desc' => 'Lawns for up to 1,500 guests, 24 in-house rooms, and flexible decorator + catering policy.', 'img' => 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=800']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore over 30 attractions at Thrill Nation. From high-speed ziplines and water slides to miniature wonders of the world, there is fun for the whole family.">
    <title>Attractions - Thrill Nation</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Google Fonts -->
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

<body class="bg-[#FAF6EE] m-0 p-0 text-gray-800 min-h-screen flex flex-col">

    <div id="attractions-hub" class="w-full bg-[#FAF6EE] text-gray-800 antialiased font-sans">

        <div class="relative bg-cover bg-center min-h-[55vh] flex flex-col justify-between pb-12"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6)), url('./photo/momento.jpg');">

            <?php include 'header.php'; ?>

            <div
                class="absolute inset-x-0 bottom-0 h-48 sm:h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none z-0">
            </div>
            <div class="mt-auto relative z-10">
                <div class="max-w-7xl mx-auto px-6 lg:px-16 w-full text-center text-white space-y-4 mb-8">
                    <span
                        class="bg-white/10 text-[10px] px-3 py-1 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                        Attractions
                    </span>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tight serif-font"
                        style="font-family: 'Playfair Display', serif;">
                        30+ ways to spend the day
                    </h2>
                    <p class="text-gray-200 max-w-xl mx-auto text-xs md:text-sm leading-relaxed opacity-90">
                        Filter by zone and find your favourites. Most attractions are pay-per-ride from ₹20 to ₹150 —
                        water
                        park access is bundled.
                    </p>
                </div>

                <div class="w-full translate-y-20 px-4">
                    <div
                        class="max-w-7xl mx-auto bg-white rounded-3xl p-4 shadow-md flex flex-wrap justify-center gap-2 border border-gray-100">
                        <?php foreach ($categories as $key => $name): ?>
                            <a href="?category=<?= $key ?>#attractions-hub"
                                class="text-xs font-semibold px-5 py-2.5 rounded-full transition duration-150 <?= ($active_filter === $key) ? 'bg-[#211E1B] text-white shadow-md' : 'bg-white hover:bg-gray-100 text-gray-700 border border-gray-200' ?>">
                                <?= $name ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="max-w-7xl mx-auto px-6 lg:px-16 pt-32 pb-20 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $card_rendered = false;
            foreach ($attractions as $item):
                // Contextual logic filter
                if ($active_filter !== 'all' && $item['category'] !== $active_filter) {
                    continue;
                }
                $card_rendered = true;
                ?>
                <div
                    class="bg-white rounded-[2rem] p-6 border border-gray-100/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between min-h-[240px]">
                    <div>
                        <div class="flex justify-between items-start mb-5">
                            <div class="text-4xl select-none">
                                <?= $item['icon'] ?>
                            </div>

                            <?php if ($item['price'] === 'Included' || $item['price'] === 'Free'): ?>
                                <span
                                    class="bg-[#EDF7ED] text-[#2E7D32] font-bold text-[10px] px-3 py-1 rounded-full uppercase tracking-wider">
                                    Included
                                </span>
                            <?php else: ?>
                                <span
                                    class="bg-[#FDF2F2] text-[#EF5350] font-bold text-[11px] px-3 py-1 rounded-full tracking-wide">
                                    <?= $item['price'] ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-2" style="font-family: 'Playfair Display', serif;">
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
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
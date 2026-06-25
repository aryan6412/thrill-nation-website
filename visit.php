<?php
// ==========================================
// 1. DATA CONFIGURATION & WIDGET LOGIC
// ==========================================

// --- Ticket Calculator Post Process ---
$adults = isset($_POST['adults']) ? (int)$_POST['adults'] : 2;
$kids = isset($_POST['kids']) ? (int)$_POST['kids'] : 1;
$blue_lagoon = isset($_POST['blue_lagoon']) ? true : false;

$price_adult = 150;
$price_kid = 100;
$price_blue_lagoon = 350;

$total_cost = ($adults * $price_adult) + ($kids * $price_kid);
if ($blue_lagoon) {
    $total_cost += (($adults + $kids) * $price_blue_lagoon);
}

// --- Key Policy Notes Array ---
$policies = [
    [
        'title' => 'Bring your kitchen',
        'desc'  => 'Designated group cooking zones available for a small maintenance fee.',
        'icon'  => '🍳'
    ],
    [
        'title' => 'Under-3s enter free',
        'desc'  => 'Tiny tots don\'t need a ticket for park entry.',
        'icon'  => '👶'
    ],
    [
        'title' => 'Trained staff',
        'desc'  => 'Every adventure ride is run by certified instructors.',
        'icon'  => '🛡️'
    ],
    [
        'title' => 'Group transport',
        'desc'  => 'Free coordination with bus operators for school groups.',
        'icon'  => '🚌'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plan your adventure at Thrill Nation. Check ticket pricing, park timings, group booking offers, find driving directions, and calculate ticket costs in advance.">
    <title>Plan Your Visit - Thrill Nation</title>
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
    
    <div class="relative bg-cover bg-center min-h-[55vh] flex flex-col justify-between" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.25), rgba(0,0,0,0.55)), url('https://images.unsplash.com/photo-1448375240586-882707db888b?q=80&w=1600');">
        
            <?php include 'header.php'; ?>

        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-24 space-y-4 my-auto">
            <span class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Plan Your Visit
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight serif-font leading-tight">
                Everything you need before<br class="hidden md:inline"> you arrive.
            </h2>
            <p class="text-gray-200 max-w-xl mx-auto text-xs md:text-sm leading-relaxed opacity-95 font-light">
                Timings, pricing, directions and group offers — in one place.
            </p>
        </div>
        
        <div class="absolute inset-x-0 bottom-0 h-48 sm:h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none"></div>
    </div>

    <main class="max-w-7xl mx-auto px-6 lg:px-16 py-16 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <div class="lg:col-span-7 space-y-8 w-full">
            <div class="space-y-3">
                <span class="text-xs font-bold tracking-widest text-[#FF6332] uppercase block">Timings & Pricing</span>
                <h3 class="text-3xl font-bold text-gray-900 serif-font">Open every day, all year round.</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-[#2E7D44] text-white p-4 rounded-2xl shadow-sm flex items-start gap-3">
                    <span class="text-lg mt-0.5">🕒</span>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-wider text-green-200">Park Entry</p>
                        <p class="text-base font-extrabold">9:00 AM – 6:00 PM</p>
                    </div>
                </div>
                <div class="bg-[#3ABCCF] text-white p-4 rounded-2xl shadow-sm flex items-start gap-3">
                    <span class="text-lg mt-0.5">💧</span>
                    <div>
                        <p class="text-[10px] uppercase font-bold tracking-wider text-cyan-100">Water Park</p>
                        <p class="text-base font-extrabold">12:00 PM – 5:00 PM</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100 divide-y divide-gray-100 shadow-sm overflow-hidden text-xs sm:text-sm">
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h4 class="font-bold text-gray-900">General Park Entry</h4>
                        <p class="text-gray-400 text-[11px]">per person · free under 3 yrs</p>
                    </div>
                    <span class="font-bold text-[#E53935] text-sm">₹150</span>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h4 class="font-bold text-gray-900">Blue Lagoon Water Park</h4>
                        <p class="text-gray-400 text-[11px]">per person · all-day access</p>
                    </div>
                    <span class="font-bold text-[#E53935] text-sm">₹350</span>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h4 class="font-bold text-gray-900">Individual rides</h4>
                        <p class="text-gray-400 text-[11px]">pay-per-ride at the gate</p>
                    </div>
                    <span class="font-bold text-[#E53935] text-sm">₹20 – ₹150</span>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h4 class="font-bold text-gray-900">Locker / costume rental</h4>
                        <p class="text-gray-400 text-[11px]">at the water park entrance</p>
                    </div>
                    <span class="font-bold text-[#E53935] text-sm">₹50+</span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                <?php foreach ($policies as $p): ?>
                    <div class="bg-white rounded-2xl p-4 border border-gray-100/80 shadow-sm space-y-2">
                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-sm shadow-inner">
                            <?= $p['icon'] ?>
                        </div>
                        <h4 class="font-bold text-gray-900 text-xs sm:text-sm serif-font"><?= htmlspecialchars($p['title']) ?></h4>
                        <p class="text-gray-400 text-[11px] leading-relaxed font-light"><?= htmlspecialchars($p['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="lg:col-span-5 w-full space-y-6">
            
            <div class="bg-white text-gray-800 rounded-3xl p-6 shadow-xl border border-gray-100/60 w-full max-w-md mx-auto lg:ml-auto">
                <div class="flex items-center gap-2 text-xs font-bold text-[#FF6332] uppercase tracking-wider mb-2">🎟️ Quick Ticket Calculator</div>
                <h3 class="text-xl serif-font font-bold text-gray-900 mb-6">Estimate your visit cost</h3>
                
                <form method="POST" action="#calcForm" id="calcForm">
                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-xl p-3 flex justify-between items-center border border-gray-100">
                            <div>
                                <p class="font-bold text-sm text-gray-900">Adults</p>
                                <p class="text-xs text-gray-500">₹<?= $price_adult ?> per person</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="button" onclick="changeQty('adults', -1)" class="w-7 h-7 rounded-full bg-white border border-gray-200 flex items-center justify-center font-bold text-gray-600 shadow-sm">-</button>
                                <input type="number" name="adults" id="adults" value="<?= $adults ?>" min="0" class="w-6 text-center font-bold text-gray-900 bg-transparent pointer-events-none focus:outline-none">
                                <button type="button" onclick="changeQty('adults', 1)" class="w-7 h-7 rounded-full bg-white border border-gray-200 flex items-center justify-center font-bold text-gray-600 shadow-sm">+</button>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-3 flex justify-between items-center border border-gray-100">
                            <div>
                                <p class="font-bold text-sm text-gray-900">Kids (3+)</p>
                                <p class="text-xs text-gray-500">₹<?= $price_kid ?> per child</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="button" onclick="changeQty('kids', -1)" class="w-7 h-7 rounded-full bg-white border border-gray-200 flex items-center justify-center font-bold text-gray-600 shadow-sm">-</button>
                                <input type="number" name="kids" id="kids" value="<?= $kids ?>" min="0" class="w-6 text-center font-bold text-gray-900 bg-transparent pointer-events-none focus:outline-none">
                                <button type="button" onclick="changeQty('kids', 1)" class="w-7 h-7 rounded-full bg-white border border-gray-200 flex items-center justify-center font-bold text-gray-600 shadow-sm">+</button>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 flex justify-between items-center border border-gray-100">
                            <div>
                                <p class="font-bold text-sm text-gray-900">Add Blue Lagoon Water Park</p>
                                <p class="text-xs text-gray-500">₹<?= $price_blue_lagoon ?> per person</p>
                            </div>
                            <input type="checkbox" name="blue_lagoon" id="blue_lagoon" onchange="submitCalcForm()" class="w-5 h-5 accent-green-600 rounded cursor-pointer" <?= $blue_lagoon ? 'checked' : '' ?>>
                        </div>
                    </div>
                    <div class="mt-6 bg-gradient-to-r from-[#FF7E42] to-[#FFA342] text-white p-4 rounded-2xl flex justify-between items-center shadow-lg">
                        <div>
                            <p class="text-[10px] uppercase font-bold opacity-95 tracking-wider">Estimated Total</p>
                            <p class="text-2xl font-extrabold">₹<?= number_format($total_cost) ?></p>
                        </div>
                        <button type="submit" class="bg-white text-gray-900 font-bold px-4 py-2 rounded-xl text-xs hover:bg-gray-50 shadow-sm transition">Book Now</button>
                    </div>
                </form>
            </div>

            <div class="bg-white text-gray-800 rounded-3xl p-6 shadow-xl border border-gray-100/60 w-full max-w-md mx-auto lg:ml-auto space-y-4">
                <div class="flex items-start gap-3">
                    <span class="text-xl mt-0.5">🚗</span>
                    <div class="space-y-1">
                        <h4 class="font-bold text-gray-900 text-sm">Reaching the park</h4>
                        <p class="text-gray-500 text-[11px] leading-relaxed">
                            <strong class="text-gray-700">75 km</strong> from Ahmedabad · ~1h 45m<br>
                            <strong class="text-gray-700">50 km</strong> from Gandhinagar · ~1h 15m
                        </p>
                        <p class="text-gray-400 text-[10px] font-light pt-1">On the Vijapur–Himatnagar road at Derol, Gujarat 383220</p>
                    </div>
                </div>
                <div class="pt-1">
                    <a href="https://maps.google.com" target="_blank" class="w-full bg-[#211E1B] hover:bg-black text-white text-xs font-semibold py-3.5 rounded-xl text-center shadow-md block transition">
                        Open in Google Maps
                    </a>
                </div>
            </div>

        </div>

    </main>

<?php include 'footer.php'; ?>

    <script>
        function changeQty(fieldId, amount) {
            const input = document.getElementById(fieldId);
            let currentVal = parseInt(input.value) || 0;
            currentVal += amount;
            if(currentVal < 0) currentVal = 0;
            input.value = currentVal;
            submitCalcForm();
        }
        function submitCalcForm() {
            document.getElementById('calcForm').submit();
        }
    </script>
</body>
</html>
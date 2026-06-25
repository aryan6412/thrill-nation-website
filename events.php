<?php
// ==========================================
// 1. DATA CONFIGURATION & FORM PROCESSING
// ==========================================

// Key features grid matrix
$features = [
    [
        'title' => 'Up to 1,500 guests',
        'desc'  => 'Tiered lawns with dedicated stage zones.',
        'icon'  => '👥'
    ],
    [
        'title' => '24 guest rooms',
        'desc'  => 'On-site rooms for close family & staff.',
        'icon'  => '🏨'
    ],
    [
        'title' => 'Open catering',
        'desc'  => 'Bring your preferred caterer or use ours.',
        'icon'  => '🍳'
    ],
    [
        'title' => 'Decorator-friendly',
        'desc'  => 'Choose any decorator — our team coordinates.',
        'icon'  => '✨'
    ]
];

// Form Submission Message Handler
$form_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form inputs
    $name         = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone        = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $email        = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $event_type   = filter_input(INPUT_POST, 'event_type', FILTER_SANITIZE_SPECIAL_CHARS);
    $event_date   = filter_input(INPUT_POST, 'event_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $guests       = filter_input(INPUT_POST, 'guests', FILTER_SANITIZE_SPECIAL_CHARS);
    $message      = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $phone && $email) {
        // Here you would typically insert records into a database or send an email quote notification.
        $form_success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Host weddings, celebrations, and corporate events at Thrill Nation. Beautiful open-sky lawns for up to 1500 guests, 24 guest rooms, and custom event catering.">
    <title>Events & Weddings - Thrill Nation</title>
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

    <div class="relative bg-cover bg-center min-h-[75vh] flex flex-col justify-between" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.65)), url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=1600');">
        
       <?php include 'header.php'; ?>

        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-28 space-y-4 my-auto">
            <span class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Events & Weddings
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight serif-font leading-tight">
                Big-day lawns under the<br class="hidden md:inline"> open sky.
            </h2>
            <p class="text-gray-200 max-w-2xl mx-auto text-xs md:text-sm leading-relaxed opacity-95 font-light">
                Up to 1,500 guests, 24 in-house rooms and the freedom to pick your own decorator & caterer.
            </p>
        </div>
        
        <div class="absolute inset-x-0 bottom-0 h-48 sm:h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none"></div>
    </div>

    <main class="max-w-7xl mx-auto px-6 lg:px-16 py-16 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <div class="lg:col-span-7 space-y-8">
            <div class="space-y-3">
                <span class="text-xs font-bold tracking-widest text-[#FF6332] uppercase block">What We Offer</span>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 serif-font leading-tight">
                    A venue that scales with you.
                </h3>
                <p class="text-gray-500 text-xs md:text-sm leading-relaxed font-light max-w-xl">
                    Whether it's a 200-guest sangeet or a 1,500-strong product launch, our lawns and supporting infrastructure flex to fit your moment.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php foreach ($features as $f): ?>
                    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex flex-col justify-between min-h-[120px]">
                        <div class="space-y-2">
                            <div class="w-7 h-7 rounded-full bg-[#FFF3E0] text-[#FF9800] flex items-center justify-center text-sm">
                                <?= $f['icon'] ?>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm serif-font"><?= htmlspecialchars($f['title']) ?></h4>
                            <p class="text-gray-400 text-[11px] leading-relaxed font-light"><?= htmlspecialchars($f['desc']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="pt-2">
                <a href="#" class="inline-flex items-center gap-2 bg-[#211E1B] hover:bg-black text-white text-xs font-semibold px-5 py-3.5 rounded-xl shadow-md transition">
                    📥 Download brochure
                </a>
            </div>
        </div>

        <div class="lg:col-span-5 w-full">
            <div class="bg-[#2E7D44] text-white rounded-[2rem] p-6 md:p-8 shadow-2xl border border-green-800/20 w-full max-w-md mx-auto lg:ml-auto">
                <h3 class="text-xl font-bold text-white serif-font mb-1">Tell us about your event</h3>
                <p class="text-green-100/70 text-xs font-light mb-6">Our team replies within 24 hours with a custom proposal.</p>
                
                <?php if ($form_success): ?>
                    <div class="bg-white/10 border border-white/20 rounded-xl p-4 text-center text-sm text-green-200 mb-6 animate-pulse">
                        ✨ Thank you! Your proposal request has been received.
                    </div>
                <?php endif; ?>

                <form method="POST" action="" class="space-y-4 text-gray-200">
                    <div>
                        <input type="text" name="name" placeholder="Name" required 
                            class="w-full bg-white/10 placeholder-green-100/50 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="tel" name="phone" placeholder="Phone" required 
                            class="w-full bg-white/10 placeholder-green-100/50 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition">
                        
                        <input type="email" name="email" placeholder="Email" required 
                            class="w-full bg-white/10 placeholder-green-100/50 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition">
                    </div>

                    <div>
                        <select name="event_type" class="w-full bg-white/10 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition cursor-pointer appearance-none">
                            <option value="wedding" class="text-gray-900">Wedding</option>
                            <option value="sangeet" class="text-gray-900">Sangeet / Pre-Wedding</option>
                            <option value="corporate" class="text-gray-900">Corporate Event</option>
                            <option value="social" class="text-gray-900">Social Gathering</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="date" name="event_date" required 
                            class="w-full bg-white/10 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition">
                        
                        <input type="number" name="guests" placeholder="Approx. guests" min="1" 
                            class="w-full bg-white/10 placeholder-green-100/50 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition">
                    </div>

                    <div>
                        <textarea name="message" rows="4" placeholder="Tell us more..." 
                            class="w-full bg-white/10 placeholder-green-100/50 text-white rounded-xl px-4 py-3 text-xs border border-transparent focus:outline-none focus:border-white/20 transition resize-none"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full bg-[#FBB016] hover:bg-[#E59F0F] text-gray-900 font-bold text-xs tracking-wider py-4 rounded-xl shadow-md transition duration-150">
                            Request a quote
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

</body>
</html> 
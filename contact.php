<?php
// ==========================================
// 1. DATA CONFIGURATION & FORM PROCESSING
// ==========================================

$contact_phone = "+91 90000 00000";
$contact_email = "hello@thrillnation.in";
$contact_address = "Bank of Sabarmati, Vijapur Rd, Derol, Gujarat 383220";

// Form Submission Message Handler
$form_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form inputs
    $name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $message) {
        // Here you would typically process the inquiry (e.g., mail() or database storage)
        $form_success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with the Thrill Nation support team. Find our location, phone number, email, and easily submit inquiries for bookings or corporate group picnics.">
    <title>Contact Us - Thrill Nation</title>
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
        <div class="mt-1 sm:mt-0">📞 <?= $contact_phone ?></div>
    </div>

    <div class="relative bg-cover bg-center min-h-[60vh] flex flex-col justify-between" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.65)), url('./photo/hero.jpg');">
        
        <?php include 'header.php'; ?>

        <div class="max-w-4xl mx-auto text-center text-white px-6 pb-28 space-y-4 my-auto">
            <span class="bg-white/10 text-[10px] px-4 py-1.5 rounded-full uppercase tracking-widest font-bold border border-white/20 inline-block">
                Contact
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight serif-font leading-tight">
                We'd love to hear from you.
            </h2>
            <p class="text-gray-200 max-w-xl mx-auto text-xs md:text-sm leading-relaxed opacity-95 font-light">
                Questions about tickets, bookings or partnerships — we usually reply within a few hours.
            </p>
        </div>
        
        <div class="absolute inset-x-0 bottom-0 h-48 sm:h-64 bg-gradient-to-t from-[#FAF6EE] to-transparent pointer-events-none"></div>
    </div>

    <main class="max-w-7xl mx-auto px-6 lg:px-16 py-16 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <div class="lg:col-span-5 space-y-4 w-full">
            
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-[#FFF3E0] text-[#FF9800] flex items-center justify-center text-base">
                    📞
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-wider font-bold text-gray-400">Call Us</p>
                    <a href="tel:<?= str_replace(' ', '', $contact_phone) ?>" class="text-sm font-semibold text-gray-800 hover:underline"><?= $contact_phone ?></a>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-[#E8F5E9] text-[#4CAF50] flex items-center justify-center text-base">
                    💬
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-wider font-bold text-gray-400">WhatsApp</p>
                    <a href="#" class="text-sm font-semibold text-gray-800 hover:underline">Chat with our team</a>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-[#E3F2FD] text-[#2196F3] flex items-center justify-center text-base">
                    ✉️
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-wider font-bold text-gray-400">Email</p>
                    <a href="mailto:<?= $contact_email ?>" class="text-sm font-semibold text-gray-800 hover:underline"><?= $contact_email ?></a>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-[#F3E5F5] text-[#9C27B0] flex items-center justify-center text-base">
                    📍
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-wider font-bold text-gray-400">Visit</p>
                    <p class="text-sm font-semibold text-gray-800 leading-tight"><?= $contact_address ?></p>
                </div>
            </div>

        </div>

        <div class="lg:col-span-7 w-full">
            <div class="bg-white rounded-[2rem] p-6 md:p-8 shadow-xl border border-gray-100/80 w-full max-w-2xl mx-auto lg:ml-auto">
                <h3 class="text-xl font-bold text-gray-900 serif-font mb-6">Send a message</h3>
                
                <?php if ($form_success): ?>
                    <div class="bg-[#EDF7ED] border border-green-200 text-[#2E7D32] rounded-xl p-4 text-center text-xs sm:text-sm font-medium mb-6">
                        📬 Message successfully dispatched! We will be in touch shortly.
                    </div>
                <?php endif; ?>

                <form method="POST" action="" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <input type="text" name="name" placeholder="Name" required 
                            class="w-full bg-[#F9EFE2]/60 placeholder-gray-400 text-gray-800 rounded-xl px-4 py-3.5 text-xs border border-transparent focus:outline-none focus:bg-white focus:border-orange-300 transition">
                        
                        <input type="email" name="email" placeholder="Email" required 
                            class="w-full bg-[#F9EFE2]/60 placeholder-gray-400 text-gray-800 rounded-xl px-4 py-3.5 text-xs border border-transparent focus:outline-none focus:bg-white focus:border-orange-300 transition">
                    </div>

                    <div>
                        <input type="text" name="subject" placeholder="Subject" required 
                            class="w-full bg-[#F9EFE2]/60 placeholder-gray-400 text-gray-800 rounded-xl px-4 py-3.5 text-xs border border-transparent focus:outline-none focus:bg-white focus:border-orange-300 transition">
                    </div>

                    <div>
                        <textarea name="message" rows="5" placeholder="Your message" required 
                            class="w-full bg-[#F9EFE2]/60 placeholder-gray-400 text-gray-800 rounded-xl px-4 py-3.5 text-xs border border-transparent focus:outline-none focus:bg-white focus:border-orange-300 transition resize-none"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full bg-gradient-to-r from-[#FF7E42] to-[#FFA342] hover:opacity-95 text-white font-bold text-xs tracking-wider py-4 rounded-xl shadow-md transition duration-150">
                            Send message
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>

<?php include 'footer.php'; ?>

</body>
</html>
<?php
$current_file = basename($_SERVER['PHP_SELF']);
if (empty($current_file))
    $current_file = 'index.php';

$nav_items = [
    '/' => 'Home',
    '/attractions' => 'Attractions',
    '/water-park' => 'Blue Lagoon',
    '/stay' => 'Stay',
    '/events' => 'Events',
    '/gallery' => 'Gallery',
    '/visit' => 'Plan Visit',
    '/contact' => 'Contact'
];

$page_mapping = [
    '/' => 'index.php',
    '/attractions' => 'attractions.php',
    '/water-park' => 'water-park.php',
    '/stay' => 'stay.php',
    '/events' => 'events.php',
    '/gallery' => 'gallery.php',
    '/visit' => 'visit.php',
    '/contact' => 'contact.php'
];
?>
<header class="fixed top-0 left-0 right-0 z-50 flex flex-col">
    <div
        class="bg-[#1B4314] text-xs px-6 py-2 flex flex-col sm:flex-row justify-between items-center text-gray-300 border-b border-green-800">
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6 text-center sm:text-left">
            <span><span class="text-green-400">●</span> Open today: 9:00 AM - 6:00 PM</span>
            <span>📍 Derol, Vijapur Road, Gujarat</span>
        </div>
        <div class="mt-1 sm:mt-0">
            📞 +91 90000 00000
        </div>
    </div>
    <nav
        class="flex justify-between items-center px-6 lg:px-16 py-3 bg-gray-900/40 backdrop-blur-md shadow-lg mx-4 my-3 rounded-full transition-all">
        <div class="flex items-center gap-3">
            <img src="photo/trlogo.png" alt="Thrill Nation Logo" class="h-10 md:h-12 w-auto object-contain">
        </div>
        <div class="hidden lg:flex items-center gap-6 text-sm font-medium">
            <?php foreach ($nav_items as $url => $label): ?>
                    <a href="<?= $url ?>"
                        class="<?= $current_file == ($page_mapping[$url] ?? '') ? 'bg-white/20 px-4 py-1.5 rounded-full text-white' : 'text-white hover:text-gray-300 transition' ?>"><?= $label ?></a>
                <?php endforeach; ?>
        </div>
        <div class="flex items-center gap-3">
            <a href="/visit"
                class="hidden sm:inline-flex bg-gradient-to-r from-[#FF7E42] to-[#FFA342] text-white font-semibold px-5 py-2.5 rounded-full text-sm hover:opacity-90 transition shadow-md">Book
                Tickets</a>
            <button id="mobile-menu-btn" class="lg:hidden text-white hover:text-[#FF7E42] focus:outline-none p-1">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu-dropdown"
        class="hidden lg:hidden bg-gray-900/95 backdrop-blur-md mx-4 rounded-2xl shadow-xl flex-col overflow-hidden transition-all border border-gray-700">
        <?php foreach ($nav_items as $url => $label): ?>
            <a href="<?= $url ?>"
                class="px-6 py-3.5 text-white border-b border-gray-800 transition <?= $current_file == ($page_mapping[$url] ?? '') ? 'bg-gray-800 font-semibold' : 'hover:bg-gray-800' ?>"><?= $label ?></a>
        <?php endforeach; ?>
        <a href="/visit"
            class="px-6 py-4 bg-gradient-to-r from-[#FF7E42] to-[#FFA342] text-white font-bold text-center hover:opacity-90 transition sm:hidden">Book
            Tickets</a>
    </div>
</header>

<script>
    (function() {
        const initMenu = () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const menuDropdown = document.getElementById('mobile-menu-dropdown');
            const menuIconPath = document.getElementById('menu-icon-path');

            if (menuBtn && menuDropdown) {
                menuBtn.addEventListener('click', () => {
                    const isHidden = menuDropdown.classList.contains('hidden');
                    if (isHidden) {
                        menuDropdown.classList.remove('hidden');
                        menuDropdown.classList.add('flex');
                        if (menuIconPath) {
                            menuIconPath.setAttribute('d', 'M6 18L18 6M6 6l12 12'); // Changes to X icon
                        }
                    } else {
                        menuDropdown.classList.add('hidden');
                        menuDropdown.classList.remove('flex');
                        if (menuIconPath) {
                            menuIconPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16'); // Changes to Hamburger icon
                        }
                    }
                });
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initMenu);
        } else {
            initMenu();
        }
    })();
</script>
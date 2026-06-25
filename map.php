<?php
// Mock Data Configurations
$pins = [
    ["id" => "slides", "name" => "Tornado Slides", "sub" => "5-storey thrill drops", "x" => 14, "y" => 38, "tone" => "lagoon", "icon" => "waves"],
    ["id" => "wave", "name" => "Wave Lagoon", "sub" => "Blue Lagoon main pool", "x" => 36, "y" => 50, "tone" => "lagoon", "icon" => "droplets"],
    ["id" => "taj", "name" => "Taj Mahal Replica", "sub" => "Wonders of the World", "x" => 44, "y" => 17, "tone" => "sunset", "icon" => "landmark"],
    ["id" => "eiffel", "name" => "Eiffel Tower", "sub" => "Wonders garden", "x" => 52, "y" => 16, "tone" => "sunset", "icon" => "landmark"],
    ["id" => "liberty", "name" => "Statue of Liberty", "sub" => "Wonders garden", "x" => 58, "y" => 17, "tone" => "sunset", "icon" => "landmark"],
    ["id" => "coaster", "name" => "Sky Coaster", "sub" => "Signature roller-coaster", "x" => 70, "y" => 30, "tone" => "coral", "icon" => "mountain"],
    ["id" => "swing", "name" => "Pirate Swing", "sub" => "Adventure zone", "x" => 60, "y" => 32, "tone" => "coral", "icon" => "mountain"],
    ["id" => "kart", "name" => "Go-Kart Track", "sub" => "Family racing circuit", "x" => 58, "y" => 38, "tone" => "coral", "icon" => "mountain"],
    ["id" => "dome", "name" => "Dome Food Court", "sub" => "Multi-cuisine dining", "x" => 52, "y" => 52, "tone" => "forest", "icon" => "meals"],
    ["id" => "villas", "name" => "Meera Resort Villas", "sub" => "24 in-park rooms", "x" => 60, "y" => 65, "tone" => "forest", "icon" => "hotel"],
    ["id" => "lawn", "name" => "Event Lawn", "sub" => "1,500-guest capacity", "x" => 80, "y" => 45, "tone" => "forest", "icon" => "tent"],
    ["id" => "river", "name" => "Sabarmati Riverfront", "sub" => "Ghat walk & viewpoint", "x" => 45, "y" => 80, "tone" => "lagoon", "icon" => "waves"],
];

$tone_classes = [
    "lagoon" => "bg-gradient-to-br from-cyan-500 to-blue-600 text-white",
    "sunset" => "bg-gradient-to-br from-orange-500 to-amber-500 text-white",
    "forest" => "bg-gradient-to-br from-emerald-600 to-teal-800 text-white",
    "sun" => "bg-amber-400 text-zinc-950",
    "coral" => "bg-rose-500 text-white",
    "ink" => "bg-zinc-900 text-white",
];

$legend = [
    ["icon" => "droplets", "label" => "Blue Lagoon Water Park", "tone" => "lagoon", "note" => "Slides, wave pool, splash zones"],
    ["icon" => "landmark", "label" => "Wonders of the World", "tone" => "sunset", "note" => "Taj Mahal, Eiffel, Liberty & more"],
    ["icon" => "mountain", "label" => "Adventure Zone", "tone" => "coral", "note" => "Coaster, swings, go-karts"],
    ["icon" => "hotel", "label" => "Meera Resort & Lawns", "tone" => "forest", "note" => "Villas, dining & events"],
    ["icon" => "car", "label" => "Parking & Riverfront", "tone" => "ink", "note" => "Entry, river ghat walk"],
];

function renderSvgIcon($name)
{
    switch ($name) {
        case "waves":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M2 6c.6 0 1.2-.2 1.7-.6 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 .5.4.6 1 .6M2 12c.6 0 1.2-.2 1.7-.6 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 .5.4.6 1 .6M2 18c.6 0 1.2-.2 1.7-.6 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 1-.7 2.4-.7 3.4 0 1 .6 2.4.6 3.4 0 .5.4.6 1 .6"/></svg>';
        case "droplets":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 22a7 7 0 0 0 7-7c0-4.3-7-13-7-13S5 10.7 5 15a7 7 0 0 0 7 7z"/></svg>';
        case "baby":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="5" r="2.5"/><path d="M5 16c0-2.2 1.8-4 4-4h6c2.2 0 4 1.8 4 4v2H5v-2z"/><path d="M9 12v6M15 12v6"/></svg>';
        case "landmark":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><path d="M5 11h14l-7-6-7 6z"/></svg>';
        case "mountain":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="m8 3 4 8 5-5 5 11H2L8 3z"/></svg>';
        case "meals":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>';
        case "hotel":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>';
        case "tent":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M19 21 12 4 5 21h14zM12 4v17"/></svg>';
        case "car":
            return '<svg class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect width="16" height="8" x="4" y="9" rx="2"/><path d="M9 9V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4M6 17h.01M18 17h.01"/></svg>';
    }
}

$page_title = "Park Map — Thrill Nation Adventure Park";
$page_description = "Explore the 3D layout of Tirupati Rushivan Adventure Park.";


?>

<main class="bg-[#fcfefa] min-h-screen text-zinc-800">
    <style>
        #map-window.fullscreen-active {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            z-index: 100 !important;
            border-radius: 0px !important;
            margin: 0 !important;
            background: #18181b !important;
        }
        
        /* Keep viewport aspect ratio locked to map image dimensions to prevent pin displacement */
        #map-window.fullscreen-active #map-viewport {
            height: auto !important;
        }
        @media (min-width: 640px) {
            #map-window.fullscreen-active #map-viewport {
                aspect-ratio: 16 / 11 !important;
                width: min(100%, calc(100vh * 16 / 11)) !important;
            }
        }
        @media (max-width: 639px) {
            #map-window.fullscreen-active #map-viewport {
                aspect-ratio: 1 / 1 !important;
                width: min(100%, 100vh) !important;
            }
        }
    </style>

    <section class="relative bg-zinc-900 text-white pt-20 pb-32 px-5 sm:px-8 overflow-hidden">
        <div class="absolute inset-0 opacity-40">
            <img src="./photo/mapbg.jpg" alt="Thrill Nation Background" class="h-full w-full object-cover">
        </div>
        <!-- Smooth fade into the bottom section's background color -->
        <div
            class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#fcfefa] to-transparent pointer-events-none">
        </div>
        <div class="relative mx-auto max-w-7xl z-10">
            <span class="text-xs uppercase tracking-widest text-amber-400 font-semibold">Park map</span>
            <h1 class="font-sans text-4xl sm:text-6xl font-bold mt-2">A 3D tour of 150 acres of fun.</h1>
            <p class="mt-4 max-w-2xl text-zinc-300 text-sm sm:text-base leading-relaxed">
                Tap any pin to see what's there. The park flows from parking → wonders garden → adventure zone → Blue
                Lagoon, with the resort villas tucked beside the Sabarmati riverbank.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-5 sm:px-8 mt-12 grid lg:grid-cols-[1.7fr_1fr] gap-8">

        <div class="p-4 sm:p-8 rounded-[2.5rem] flex items-center justify-center">

            <div id="map-window" class="relative w-full rounded-[2rem] overflow-hidden border border-zinc-200/60 shadow-xl"
                style="background: radial-gradient(120% 90% at 50% 0%, #ffffff 0%, #f0faf7 45%, #d1f0e8 100%);">
                <div
                    class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-white/70 to-transparent pointer-events-none z-10">
                </div>

                <!-- Floating Zoom Controls -->
                <div class="absolute top-4 left-4 z-20 flex gap-1.5">
                    <button id="btn-zoom-in" title="Zoom In"
                        class="h-9 w-9 rounded-full bg-white/95 border border-zinc-200/80 shadow-md hover:bg-white text-lg font-bold flex items-center justify-center select-none cursor-pointer text-zinc-700 hover:text-zinc-950">+</button>
                    <button id="btn-zoom-out" title="Zoom Out"
                        class="h-9 w-9 rounded-full bg-white/95 border border-zinc-200/80 shadow-md hover:bg-white text-lg font-bold flex items-center justify-center select-none cursor-pointer text-zinc-700 hover:text-zinc-950">-</button>
                    <button id="btn-zoom-reset" title="Reset view"
                        class="h-9 w-9 rounded-full bg-white/95 border border-zinc-200/80 shadow-md hover:bg-white text-sm font-semibold flex items-center justify-center select-none cursor-pointer text-zinc-700 hover:text-zinc-950">↺</button>
                </div>

                <button id="btn-fullscreen"
                    class="absolute top-4 right-4 z-25 inline-flex items-center gap-2 rounded-full bg-white/95 text-zinc-800 backdrop-blur px-4 py-2 text-xs font-semibold shadow-md hover:bg-white transition-all cursor-pointer">
                    <svg id="fullscreen-icon" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
                    </svg> <span id="fullscreen-text">Fullscreen</span>
                </button>

                <!-- Viewport centering wrapper -->
                <div id="map-viewport-wrapper" class="w-full h-full flex items-center justify-center z-0">
                    <!-- Zoomable viewport container -->
                    <div id="map-viewport" class="relative w-full aspect-square sm:aspect-[16/11] origin-center transition-transform duration-100 ease-out max-w-full max-h-full">
                        <div class="absolute left-[6%] right-[6%] bottom-[3%] h-8 rounded-[50%] bg-zinc-950/15 blur-2xl">
                        </div>

                        <img src="./photo/map2.png" alt="Isometric 3D map of Tirupati Rushivan Adventure Park"
                            class="absolute inset-0 h-full w-full object-contain select-none z-0" draggable="false" />

                        <?php foreach ($pins as $p): ?>
                            <div id="pin-<?= $p['id'] ?>"
                                class="map-pin-container absolute -translate-x-1/2 -translate-y-full group cursor-pointer z-10"
                                style="left: <?= $p['x'] ?>%; top: <?= $p['y'] ?>%;" data-id="<?= $p['id'] ?>">
                                <div
                                    class="pin-tooltip absolute bottom-full left-1/2 -translate-x-1/2 mb-2 hidden origin-bottom transition-all duration-200 opacity-0 scale-90 w-max z-50">
                                    <div
                                        class="rounded-xl bg-white/98 border border-zinc-200/80 shadow-lg px-3 py-2 text-left min-w-[140px]">
                                        <div class="font-sans text-sm font-semibold leading-tight text-zinc-900">
                                            <?= htmlspecialchars($p['name']) ?>
                                        </div>
                                        <div class="text-[10px] uppercase tracking-widest text-zinc-500 mt-0.5">
                                            <?= htmlspecialchars($p['sub']) ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center">
                                    <span
                                        class="h-9 w-9 grid place-items-center rounded-full shadow-md ring-4 ring-white/90 transition-transform duration-200 group-hover:scale-110 <?= $tone_classes[$p['tone']] ?>">
                                        <span class="h-4 w-4"><?= renderSvgIcon($p['icon']) ?></span>
                                    </span>
                                    <span class="-mt-1 h-2.5 w-2.5 rotate-45 shadow-sm <?= $tone_classes[$p['tone']] ?>"></span>
                                    <span class="mt-0.5 h-1.5 w-1.5 rounded-full bg-zinc-900/30"></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div
                    class="absolute bottom-4 left-4 z-20 h-14 w-14 rounded-full bg-white/95 border border-zinc-200/80 shadow-md grid place-items-center">
                    <div class="relative h-10 w-10 text-zinc-400 font-bold font-sans text-[10px]">
                        <span class="absolute inset-x-0 top-0 text-center text-rose-500">N</span>
                        <span class="absolute inset-x-0 bottom-0 text-center">S</span>
                        <span class="absolute inset-y-0 left-0 flex items-center">W</span>
                        <span class="absolute inset-y-0 right-0 flex items-center justify-end">E</span>
                        <span
                            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-0.5 h-7 bg-gradient-to-b from-rose-500 via-rose-400 to-zinc-900 rounded-full"></span>
                    </div>
                </div>

                <!-- Mobile Details Bottom Sheet Card -->
                <div id="mobile-details-card" class="absolute inset-x-0 bottom-0 z-30 bg-white/98 border-t border-zinc-200/80 shadow-2xl p-5 transform translate-y-full transition-transform duration-300 ease-out flex flex-col gap-2 rounded-t-[1.5rem] lg:hidden text-left">
                    <div class="flex justify-between items-start">
                        <div class="min-w-0">
                            <span id="mobile-card-tag" class="text-[9px] uppercase tracking-widest font-extrabold text-rose-500">Zone Name</span>
                            <h3 id="mobile-card-title" class="font-sans text-base font-bold text-zinc-900 leading-tight mt-0.5">Location Name</h3>
                        </div>
                        <button id="btn-close-mobile-card" class="h-7 w-7 rounded-full bg-zinc-100 hover:bg-zinc-200 flex items-center justify-center text-zinc-500 transition-colors cursor-pointer text-xs" aria-label="Close">✕</button>
                    </div>
                    <p id="mobile-card-desc" class="text-xs text-zinc-500 leading-relaxed font-light">Detailed description of the attraction will appear here.</p>
                </div>
            </div>

        </div>

        <aside class="space-y-4 flex flex-col justify-center">
            <div>
                <span class="text-xs uppercase tracking-widest text-rose-500 font-semibold tracking-wider">Legend</span>
                <h2 class="font-sans text-3xl font-bold text-zinc-900 mt-1">What's where</h2>
                <p class="mt-2 text-sm text-zinc-600 leading-relaxed">Hover or tap any pin on the map to see its name.
                    Below are the five colour-coded zones.</p>
            </div>

            <div class="space-y-3">
                <?php foreach ($legend as $l): ?>
                    <div
                        class="flex items-center gap-4 rounded-2xl border border-zinc-200/60 bg-white p-4 shadow-sm hover:shadow-md transition-all duration-200">
                        <span
                            class="h-11 w-11 grid place-items-center rounded-xl shrink-0 <?= $tone_classes[$l['tone']] ?>">
                            <span class="h-5 w-5"><?= renderSvgIcon($l['icon']) ?></span>
                        </span>
                        <div>
                            <div class="font-sans text-base font-bold text-zinc-900"><?= htmlspecialchars($l['label']) ?>
                            </div>
                            <div class="text-xs text-zinc-500 mt-0.5"><?= htmlspecialchars($l['note']) ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="rounded-2xl bg-gradient-to-br from-emerald-800 to-teal-950 text-white p-5 shadow-sm mt-2">
                <div class="text-xs uppercase tracking-widest text-emerald-300 font-bold tracking-wider">Tip</div>
                <p class="mt-1 text-sm text-zinc-100 leading-relaxed">Start with the water park before noon while the
                    sun is soft, then head to the wonders garden for golden-hour photos.</p>
            </div>
        </aside>
    </section>

    <section class="mx-auto max-w-7xl px-5 sm:px-8 mt-20 pb-24">
        <div class="flex items-end justify-between gap-4 flex-wrap border-b border-zinc-200 pb-4">
            <div>
                <span class="text-xs uppercase tracking-widest text-rose-500 font-semibold tracking-wider">Index</span>
                <h2 class="font-sans text-3xl font-bold text-zinc-900 mt-1">Every place on the map</h2>
            </div>
            <span class="text-sm text-zinc-500 font-medium"><?= count($pins) ?> marked locations</span>
        </div>

        <div class="mt-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <?php foreach ($pins as $p): ?>
                <button
                    class="index-item-link flex items-center gap-3 rounded-2xl border border-zinc-200/60 bg-white p-3 text-left hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 w-full"
                    data-target="pin-<?= $p['id'] ?>">
                    <span class="h-9 w-9 grid place-items-center rounded-lg shrink-0 <?= $tone_classes[$p['tone']] ?>">
                        <span class="h-4 w-4"><?= renderSvgIcon($p['icon']) ?></span>
                    </span>
                    <div class="min-w-0 flex-1">
                        <div class="font-sans text-sm font-bold text-zinc-900 truncate"><?= htmlspecialchars($p['name']) ?>
                        </div>
                        <div class="text-[11px] uppercase tracking-widest text-zinc-400 mt-0.5 truncate">
                            <?= htmlspecialchars($p['sub']) ?>
                        </div>
                    </div>
                </button>
            <?php endforeach; ?>
        </div>
    </section>



</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const pins = document.querySelectorAll(".map-pin-container");
        const indexItems = document.querySelectorAll(".index-item-link");
        const lightbox = document.getElementById("lightbox-modal");
        const openLightboxBtn = document.getElementById("btn-fullscreen");
        const closeLightboxBtn = document.getElementById("btn-close-lightbox");

        // Pan & Zoom Elements
        const viewport = document.getElementById("map-viewport");
        const zoomInBtn = document.getElementById("btn-zoom-in");
        const zoomOutBtn = document.getElementById("btn-zoom-out");
        const zoomResetBtn = document.getElementById("btn-zoom-reset");
        const mapWindow = document.getElementById("map-window");

        // Mobile Details Elements
        const mobileCard = document.getElementById("mobile-details-card");
        const mobileCardTag = document.getElementById("mobile-card-tag");
        const mobileCardTitle = document.getElementById("mobile-card-title");
        const mobileCardDesc = document.getElementById("mobile-card-desc");
        const closeMobileCardBtn = document.getElementById("btn-close-mobile-card");

        // PHP Pins Data Echoed to JS
        const pinsData = <?= json_encode($pins) ?>;
        const pinsMap = {};
        pinsData.forEach(p => {
            pinsMap[p.id] = p;
        });

        const zoneLabels = {
            "slides": "Blue Lagoon Water Park",
            "wave": "Blue Lagoon Water Park",
            "taj": "Wonders of the World",
            "eiffel": "Wonders of the World",
            "liberty": "Wonders of the World",
            "coaster": "Adventure Zone",
            "swing": "Adventure Zone",
            "kart": "Adventure Zone",
            "dome": "Dining & Food Court",
            "villas": "Meera Hotel & Resort",
            "lawn": "Event Lawns & Gardens",
            "river": "Sabarmati Riverfront Walk"
        };

        // Zoom & Pan State
        let scale = 1;
        let transformX = 0;
        let transformY = 0;
        let isDragging = false;
        let startX = 0;
        let startY = 0;
        let startDist = 0;
        let startScale = 1;

        function updateTransform(smooth = false) {
            if (!viewport) return;
            viewport.style.transition = smooth ? "transform 0.2s ease-out" : "none";
            viewport.style.transform = `translate(${transformX}px, ${transformY}px) scale(${scale})`;
        }

        function zoom(amount, mouseX = null, mouseY = null) {
            let oldScale = scale;
            scale = Math.min(Math.max(scale + amount, 1), 4); // Bounds: 1x to 4x

            if (scale === 1) {
                transformX = 0;
                transformY = 0;
            } else if (mouseX !== null && mouseY !== null && mapWindow) {
                // Zoom towards mouse pointer/pinch coordinates
                const rect = mapWindow.getBoundingClientRect();
                const relX = mouseX - rect.left - rect.width / 2;
                const relY = mouseY - rect.top - rect.height / 2;

                transformX -= relX * (scale / oldScale - 1);
                transformY -= relY * (scale / oldScale - 1);
            }

            constrainBounds();
            updateTransform(true);
        }

        function constrainBounds() {
            if (!viewport || !mapWindow) return;
            const windowRect = mapWindow.getBoundingClientRect();
            const viewportWidth = viewport.clientWidth;
            const viewportHeight = viewport.clientHeight;
            
            // Allow dragging map within visible window bounds
            const maxX = Math.max(0, (viewportWidth * scale - windowRect.width) / 2);
            const maxY = Math.max(0, (viewportHeight * scale - windowRect.height) / 2);

            transformX = Math.min(Math.max(transformX, -maxX), maxX);
            transformY = Math.min(Math.max(transformY, -maxY), maxY);
        }

        // Zoom Click Handlers
        if (zoomInBtn) zoomInBtn.addEventListener("click", (e) => { e.stopPropagation(); zoom(0.4); });
        if (zoomOutBtn) zoomOutBtn.addEventListener("click", (e) => { e.stopPropagation(); zoom(-0.4); });
        if (zoomResetBtn) zoomResetBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            scale = 1;
            transformX = 0;
            transformY = 0;
            updateTransform(true);
        });

        // Mouse Drag Controls
        if (mapWindow) {
            mapWindow.addEventListener("mousedown", (e) => {
                if (e.target.closest(".map-pin-container") || e.target.closest("button") || e.target.closest("#mobile-details-card")) return;
                isDragging = true;
                startX = e.clientX - transformX;
                startY = e.clientY - transformY;
                mapWindow.style.cursor = "grabbing";
            });

            window.addEventListener("mousemove", (e) => {
                if (!isDragging) return;
                transformX = e.clientX - startX;
                transformY = e.clientY - startY;
                constrainBounds();
                updateTransform();
            });

            window.addEventListener("mouseup", () => {
                if (isDragging) {
                    isDragging = false;
                    mapWindow.style.cursor = "default";
                }
            });

            // Desktop Scroll Zoom
            mapWindow.addEventListener("wheel", (e) => {
                if (e.target.closest("#mobile-details-card")) return;
                e.preventDefault();
                const zoomDelta = e.deltaY < 0 ? 0.25 : -0.25;
                zoom(zoomDelta, e.clientX, e.clientY);
            }, { passive: false });

            // Touch Drag / Pinch Zoom
            mapWindow.addEventListener("touchstart", (e) => {
                if (e.target.closest(".map-pin-container") || e.target.closest("button") || e.target.closest("#mobile-details-card")) return;

                if (e.touches.length === 1) {
                    isDragging = true;
                    startX = e.touches[0].clientX - transformX;
                    startY = e.touches[0].clientY - startY;
                } else if (e.touches.length === 2) {
                    isDragging = false;
                    startDist = Math.hypot(
                        e.touches[0].clientX - e.touches[1].clientX,
                        e.touches[0].clientY - e.touches[1].clientY
                    );
                    startScale = scale;
                }
            }, { passive: true });

            mapWindow.addEventListener("touchmove", (e) => {
                if (isDragging && e.touches.length === 1) {
                    transformX = e.touches[0].clientX - startX;
                    transformY = e.touches[0].clientY - startY;
                    constrainBounds();
                    updateTransform();
                } else if (e.touches.length === 2) {
                    const dist = Math.hypot(
                        e.touches[0].clientX - e.touches[1].clientX,
                        e.touches[0].clientY - e.touches[1].clientY
                    );
                    const factor = dist / startDist;
                    const midX = (e.touches[0].clientX + e.touches[1].clientX) / 2;
                    const midY = (e.touches[0].clientY + e.touches[1].clientY) / 2;

                    scale = Math.min(Math.max(startScale * factor, 1), 4);
                    constrainBounds();
                    updateTransform();
                }
            }, { passive: true });

            mapWindow.addEventListener("touchend", () => {
                isDragging = false;
            });
        }

        // Mobile Details Card Triggers
        function showMobileCard(pinId) {
            const pin = pinsMap[pinId];
            if (!pin || !mobileCard) return;

            mobileCardTag.textContent = zoneLabels[pin.id] || "Zone Location";
            mobileCardTitle.textContent = pin.name;
            mobileCardDesc.textContent = pin.sub;
            mobileCard.classList.remove("translate-y-full");
        }

        function hideMobileCard() {
            if (mobileCard) {
                mobileCard.classList.add("translate-y-full");
            }
        }

        if (closeMobileCardBtn) {
            closeMobileCardBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                hideMobileCard();
                deactivateAll();
            });
        }

        if (mobileCard) {
            mobileCard.addEventListener("click", (e) => {
                e.stopPropagation(); // Avoid triggering map closing clicks
            });
        }

        function deactivateAll() {
            pins.forEach(pin => {
                pin.style.zIndex = "10";
                const tooltip = pin.querySelector(".pin-tooltip");
                if (tooltip) {
                    tooltip.classList.add("opacity-0", "scale-90");
                    tooltip.classList.remove("opacity-100", "scale-100");

                    setTimeout(() => {
                        if (tooltip.classList.contains("opacity-0")) {
                            tooltip.classList.add("hidden");
                        }
                    }, 200);
                }
            });
        }

        function activatePin(pin) {
            deactivateAll();
            pin.style.zIndex = "30";

            const pinId = pin.getAttribute("data-id");
            const isMobileView = window.innerWidth < 1024;

            if (isMobileView) {
                showMobileCard(pinId);
            } else {
                hideMobileCard();
                const tooltip = pin.querySelector(".pin-tooltip");
                if (tooltip) {
                    tooltip.classList.remove("hidden");
                    tooltip.style.transition = 'none';
                    tooltip.style.marginLeft = '0px';
                    tooltip.classList.remove('top-full', 'mt-2', 'origin-top');
                    tooltip.classList.add('bottom-full', 'mb-2', 'origin-bottom');

                    void tooltip.offsetWidth; // Force reflow

                    if (mapWindow) {
                        const mapRect = mapWindow.getBoundingClientRect();
                        const tooltipRect = tooltip.getBoundingClientRect();

                        if (tooltipRect.left < mapRect.left) {
                            tooltip.style.marginLeft = `${mapRect.left - tooltipRect.left + 10}px`;
                        } else if (tooltipRect.right > mapRect.right) {
                            tooltip.style.marginLeft = `${mapRect.right - tooltipRect.right - 10}px`;
                        }

                        if (tooltipRect.top < mapRect.top) {
                            tooltip.classList.remove('bottom-full', 'mb-2', 'origin-bottom');
                            tooltip.classList.add('top-full', 'mt-2', 'origin-top');
                        }
                    }

                    void tooltip.offsetWidth;
                    tooltip.style.transition = '';
                    tooltip.classList.remove("opacity-0", "scale-90");
                    tooltip.classList.add("opacity-100", "scale-100");
                }
            }
        }

        pins.forEach(pin => {
            let isTouch = false;

            pin.addEventListener("touchstart", () => {
                isTouch = true;
            }, { passive: true });

            pin.addEventListener("mouseenter", () => {
                if (isTouch || window.innerWidth < 1024) return;
                activatePin(pin);
            });

            pin.addEventListener("mouseleave", () => {
                if (isTouch || window.innerWidth < 1024) return;
                deactivateAll();
            });

            pin.addEventListener("click", (e) => {
                e.stopPropagation();
                const isMobileView = window.innerWidth < 1024;
                
                if (isMobileView) {
                    activatePin(pin);
                } else {
                    const tooltip = pin.querySelector(".pin-tooltip");
                    const isActive = tooltip && tooltip.classList.contains("opacity-100");

                    if (isActive) {
                        deactivateAll();
                    } else {
                        activatePin(pin);
                    }
                }

                setTimeout(() => { isTouch = false; }, 300);
            });
        });

        indexItems.forEach(item => {
            const targetId = item.getAttribute("data-target");
            const linkedPin = document.getElementById(targetId);

            item.addEventListener("mouseenter", () => {
                if (linkedPin && window.innerWidth >= 1024) {
                    activatePin(linkedPin);
                }
            });

            item.addEventListener("mouseleave", () => {
                if (linkedPin && window.innerWidth >= 1024) {
                    deactivateAll();
                }
            });

            item.addEventListener("click", (e) => {
                e.stopPropagation();
                if (linkedPin) {
                    if (mapWindow) {
                        mapWindow.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    activatePin(linkedPin);
                }
            });
        });

        document.addEventListener("click", () => {
            deactivateAll();
            hideMobileCard();
        });

        const toggleFullscreenBtn = document.getElementById("btn-fullscreen");
        const fullscreenText = document.getElementById("fullscreen-text");
        const fullscreenIcon = document.getElementById("fullscreen-icon");

        if (toggleFullscreenBtn && mapWindow) {
            toggleFullscreenBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                const isActive = mapWindow.classList.toggle("fullscreen-active");
                
                if (isActive) {
                    if (fullscreenText) fullscreenText.textContent = "Exit Fullscreen";
                    if (fullscreenIcon) {
                        fullscreenIcon.innerHTML = `<path d="M4 14h6v6M20 10h-6V4M14 10l7-7M10 14l-7 7" stroke-linecap="round" stroke-linejoin="round"/>`;
                    }
                } else {
                    if (fullscreenText) fullscreenText.textContent = "Fullscreen";
                    if (fullscreenIcon) {
                        fullscreenIcon.innerHTML = `<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" stroke-linecap="round" stroke-linejoin="round"/>`;
                    }
                }
                
                // Recalculate zoom drag bounds based on new full screen dimensions
                constrainBounds();
                updateTransform(true);
            });
        }
    });
</script>
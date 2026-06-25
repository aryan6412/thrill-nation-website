<footer class="w-full bg-[#2E7D44] text-white pt-16 pb-8 px-6 sm:px-12 lg:px-16 border-t border-green-800/30 antialiased font-sans">
    <div class="max-w-7xl mx-auto space-y-12">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-4">
            
            <div class="lg:col-span-4 space-y-5">
                <div class="flex items-center gap-3">
                    <div class="bg-[#FBB016] w-10 h-10 rounded-full flex items-center justify-center font-extrabold text-gray-900 text-lg">T</div>
                    <h3 class="font-bold tracking-wide text-xl" style="font-family: 'Playfair Display', serif;">Thrill Nation</h3>
                </div>
                <p class="text-green-100/80 text-sm leading-relaxed max-w-sm font-light">
                    The largest adventure park of Gujarat — with the wonders of the world on the bank of Sabarmati.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition text-sm">📸</a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition text-sm">📘</a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition text-sm">📺</a>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-[#FBB016] font-bold text-xs tracking-widest uppercase">Explore</h4>
                <ul class="space-y-2.5 text-sm font-light text-green-100/90">
                    <li><a href="/attractions" class="hover:text-white transition">Attractions</a></li>
                    <li><a href="/water-park" class="hover:text-white transition">Blue Lagoon Water Park</a></li>
                    <li><a href="/stay" class="hover:text-white transition">Meera Hotel & Resort</a></li>
                    <li><a href="/events" class="hover:text-white transition">Weddings & Events</a></li>
                    <li><a href="/visit" class="hover:text-white transition">Plan Your Visit</a></li>
                </ul>
            </div>

            <div class="lg:col-span-3 space-y-4">
                <h4 class="text-[#FBB016] font-bold text-xs tracking-widest uppercase">Visit</h4>
                <ul class="space-y-3.5 text-sm font-light text-green-100/90">
                    <li class="flex items-start gap-2.5">
                        <span class="mt-0.5">📍</span>
                        <span>Bank of Sabarmati River, Vijapur–Himatnagar Road, Derol, Gujarat 383220</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <span class="mt-0.5">🕒</span>
                        <span>Park: 9 AM – 6 PM · Water Park: 12 – 5 PM</span>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <span>📞</span>
                        <a href="tel:+919000000000" class="hover:text-white transition">+91 90000 00000</a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <span>✉️</span>
                        <a href="mailto:hello@thrillnation.in" class="hover:text-white transition">hello@thrillnation.in</a>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-2 space-y-4">
                <h4 class="text-[#FBB016] font-bold text-xs tracking-widest uppercase">Newsletter</h4>
                <p class="text-green-100/80 text-xs leading-relaxed font-light">
                    Get seasonal offers and event invites.
                </p>
                
                <form action="" method="POST" class="relative flex items-center max-w-sm">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="you@email.com" 
                        required 
                        class="w-full bg-white/10 text-white placeholder-green-200/50 text-xs rounded-full pl-4 pr-16 py-3 border border-transparent focus:outline-none focus:border-white/30"
                    >
                    <button 
                        type="submit" 
                        class="absolute right-1 top-1 bottom-1 bg-[#FBB016] hover:bg-[#E59F0F] text-gray-900 text-xs font-bold px-4 rounded-full transition shadow-sm"
                    >
                        Join
                    </button>
                </form>
            </div>

        </div>

        <hr class="border-green-700/50">

        <div class="flex flex-col sm:flex-row justify-between items-center text-[11px] text-green-200/70 font-light gap-2 text-center sm:text-left">
            <div>
                © <?= date('Y') ?> Tirupati Rushivan Adventure Park. All rights reserved.
            </div>
            <div class="italic">
                Crafted with care for every adventurer.
            </div>
        </div>

    </div>
</footer>
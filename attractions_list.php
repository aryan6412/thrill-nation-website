
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
                <div class="bg-white rounded-[2rem] p-6 border border-gray-100/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between min-h-[240px]">
                    <div>
                        <div class="flex justify-between items-start mb-5">
                            <div class="text-4xl select-none">
                                <?= $item['icon'] ?>
                            </div>
                            
                            <?php if ($item['price'] === 'Included' || $item['price'] === 'Free'): ?>
                                <span class="bg-[#EDF7ED] text-[#2E7D32] font-bold text-[10px] px-3 py-1 rounded-full uppercase tracking-wider">
                                    Included
                                </span>
                            <?php else: ?>
                                <span class="bg-[#FDF2F2] text-[#EF5350] font-bold text-[11px] px-3 py-1 rounded-full tracking-wide">
                                    <?= $item['price'] ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-2" style="font-family: 'Playfair Display', serif;"><?= htmlspecialchars($item['title']) ?></h3>
                        <p class="text-gray-500 text-xs md:text-sm leading-relaxed mb-6"><?= htmlspecialchars($item['desc']) ?></p>
                    </div>

                    <div class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">
                        <?= htmlspecialchars($item['tag']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
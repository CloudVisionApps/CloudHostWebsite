
    <!-- Advanced Detailed Pricing Tables Section -->
    <section id="detailed-pricing" class="pb-20">
        <div class="container mx-auto px-4">

            <!-- Simple Pricing Tabs -->
            <div class="flex justify-center mb-24">
                <div class="bg-[#1a1a1a] rounded-2xl p-2 border border-[#2a2a2a]">
                    <button id="monthly-tab" class="px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg">
                        Месечно
                    </button>
                    <button id="yearly-tab" class="px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2">
                        Годишно
                        <span class="ml-2 px-2 py-1 text-xs bg-[#1e9975] text-white rounded-full">-20%</span>
                    </button>
                </div>
            </div>
         
            <!-- Visual Comparison Cards -->
            <div class="grid lg:grid-cols-3 gap-8 mb-16 mt-10  scroll-fade-in">
                <?php foreach (get_config('plans') as $planKey => $plan): ?>
                <div class="<?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/20 to-[#1e9975]/20 border-2 border-[#1683ab] transform scale-105' : 'bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a]'; ?> rounded-3xl p-8 hover:border-[#1683ab]/50 transition-all duration-500">
                    
                    <!-- Plan Header -->
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white mb-3"><?php echo $plan['name']; ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo $plan['description']; ?></p>
                        <?php if (isset($plan['popular']) && $plan['popular']): ?>
                        <div class="inline-block bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                            Най-Популярен
                        </div>
                        <?php endif; ?>
                        
                        <!-- Pricing -->
                        <div class="monthly-price">
                                <span class="text-4xl font-bold text-white" id="<?php echo $planKey; ?>-price"><?php echo $plan['monthly_price']; ?></span>
                                <span class="text-gray-400 ml-2" id="<?php echo $planKey; ?>-period"><?php echo $plan['monthly_period']; ?></span>
                            </div>
                            <div class="yearly-price hidden">
                                    <div class="text-center space-y-3">
                                  
                                    <div class="text-white">
                                        <span class="text-4xl font-bold"><?php echo $plan['yearly_monthly_price']; ?></span>
                                        <span class="text-gray-400 ml-2"><?php echo $plan['monthly_period']; ?></span>
                                    </div>
                                    
                                    <div class="text-md text-gray-300">
                                        <span class="text-4xl font-bold"><?php echo $plan['yearly_price']; ?></span>
                                        <span class="text-gray-400 ml-2"><?php echo $plan['yearly_period']; ?></span>
                                    </div>

                                    <div class="inline-flex items-center px-3 py-1 bg-[#1e9975] text-white text-sm font-semibold rounded-full">
                                        <?php echo $plan['yearly_discount']; ?> отстъпка
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- Technical Specs Grid -->
                    <div class="space-y-6">
                        
                        <!-- Server Specs -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-microchip text-[#1683ab] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Сървър</h4>
                            </div>
                            <div class="grid grid-cols-2 gap-3 text-sm">
                                <div class="flex items-center">
                                    <i class="fas fa-microchip text-[#1683ab] mr-2 text-xs"></i>
                                    <span class="text-gray-400">CPU:</span>
                                    <span class="text-white font-medium ml-auto"><?php echo $plan['detailed_specs']['server']['cpu_cores']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-memory text-[#1e9975] mr-2 text-xs"></i>
                                    <span class="text-gray-400">RAM:</span>
                                    <span class="text-white font-medium ml-auto"><?php echo $plan['detailed_specs']['server']['ram']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-hdd text-[#e74c3c] mr-2 text-xs"></i>
                                    <span class="text-gray-400">Хранилище:</span>
                                    <span class="text-white font-medium ml-auto text-xs"><?php echo $plan['detailed_specs']['server']['storage_type']; ?></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#f39c12] mr-2 text-xs"></i>
                                    <span class="text-gray-400">Скорост:</span>
                                    <span class="text-white font-medium ml-auto text-xs"><?php echo $plan['detailed_specs']['server']['storage_speed']; ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Performance -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-tachometer-alt text-[#1e9975] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Производителност</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Работа:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['uptime_guarantee']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Зареждане:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['load_time']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">CDN:</span>
                                    <span class="<?php echo $plan['detailed_specs']['performance']['cdn_included'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['performance']['cdn_included'] ? '✓ Включен' : '✗ Не е включен'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Security -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-shield-alt text-[#e74c3c] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Сигурност</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">DDoS:</span>
                                    <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['security']['ddos_protection']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Сканиране:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['malware_scanning']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Резервни копия:</span>
                                    <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['backup_frequency']; ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Development -->
                        <div class="bg-[#0f0f0f]/50 rounded-2xl p-4">
                            <div class="flex items-center mb-3">
                                <i class="fas fa-code text-[#9b59b6] mr-3 text-lg"></i>
                                <h4 class="text-white font-semibold">Разработка</h4>
                            </div>
                            <div class="space-y-2 text-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">PHP:</span>
                                    <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['development']['php_versions']; ?></span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">SSH:</span>
                                    <span class="<?php echo $plan['detailed_specs']['development']['ssh_access'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['development']['ssh_access'] ? '✓ Доступен' : '✗ Не е достъпен'; ?>
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400">Git:</span>
                                    <span class="<?php echo $plan['detailed_specs']['development']['git_deployment'] ? 'text-green-400' : 'text-red-400'; ?> font-medium">
                                        <?php echo $plan['detailed_specs']['development']['git_deployment'] ? '✓ Поддържан' : '✗ Не се поддържа'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-[#0f0f0f]/50 rounded-2xl p-4 text-center">
                                <div class="text-2xl font-bold text-[#1683ab] mb-1">
                                    <?php echo $plan['detailed_specs']['performance']['concurrent_users']; ?>
                                </div>
                                <div class="text-xs text-gray-400">Едновременни потребители</div>
                            </div>
                            <div class="bg-[#0f0f0f]/50 rounded-2xl p-4 text-center">
                                <div class="text-2xl font-bold text-[#1e9975] mb-1">
                                    <?php echo $plan['detailed_specs']['performance']['daily_visitors']; ?>
                                </div>
                                <div class="text-xs text-gray-400">Дневни посетители</div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="mt-8">
                        <button class="w-full py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] hover:from-[#1e9975] hover:to-[#1683ab] text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Започнете с <?php echo $plan['name']; ?>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Feature Comparison Matrix -->
            <div class="scroll-fade-in">
                <h3 class="text-3xl font-bold text-white text-center mb-12">Бързо Сравнение на Ключови Функции</h3>
                
                <div class="bg-[#1a1a1a] rounded-3xl border border-[#2a2a2a] overflow-hidden">
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a]">
                        <!-- Feature Names -->
                        <div class="p-6 bg-[#0f0f0f]">
                            <h4 class="text-lg font-semibold text-white">Функция</h4>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-6 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/10 to-[#1e9975]/10]' : ''; ?>">
                            <h4 class="text-lg font-bold text-white"><?php echo $plan['name']; ?></h4>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Server Specifications -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-blue-400">🖥️ Сървър</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['server']['cpu_cores']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">RAM</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['server']['ram']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Хранилище</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['server']['storage_type']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Скорост на трансфер</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['server']['transfer_speed']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Performance Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-green-400">⚡ Производителност</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['uptime_guarantee']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Време за зареждане</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['load_time']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Едновременни потребители</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['concurrent_users']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Дневни посетители</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['performance']['daily_visitors']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Кеш система</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['performance']['cache_system']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">CDN Включен</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['performance']['cdn_included'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['performance']['cdn_included'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Security Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-red-400">🛡️ Сигурност</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['security']['ssl_certificate']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">DDoS Защита</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['security']['ddos_protection']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Firewall</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['security']['firewall']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Сканиране за зловреден код</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['malware_scanning']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Честота на резервни копия</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['backup_frequency']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Запазване на резервни копия</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['security']['backup_retention']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">IP Whitelisting</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['security']['ip_whitelisting'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['security']['ip_whitelisting'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Development Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-purple-400">💻 Разработка</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['development']['php_versions']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Node.js Версии</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['development']['node_js']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Python Версии</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium text-xs"><?php echo $plan['detailed_specs']['development']['python']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Git Deployment</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['development']['git_deployment'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['development']['git_deployment'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">SSH Достъп</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['development']['ssh_access'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['development']['ssh_access'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Cron Jobs</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['development']['cron_jobs']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Composer</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['development']['composer'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['development']['composer'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Database Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-blue-400">🗄️ Бази Данни</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['databases']['mysql_version']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Макс. връзки</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['databases']['max_connections']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Макс. размер</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['databases']['max_size']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">phpMyAdmin</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['databases']['phpmyadmin'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['databases']['phpmyadmin'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Резервни копия БД</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['databases']['backup_frequency']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Email Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-orange-400">📧 Имейл</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['email']['email_accounts']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Имейл хранилище</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['email']['email_storage']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Защита от спам</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium"><?php echo $plan['detailed_specs']['email']['spam_protection']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Webmail</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['email']['webmail'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['email']['webmail'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">SMTP</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="<?php echo $plan['detailed_specs']['email']['smtp'] ? 'text-green-400' : 'text-red-400'; ?> font-bold text-xl">
                                <?php echo $plan['detailed_specs']['email']['smtp'] ? '✓' : '✗'; ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Additional Features -->
                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300 font-semibold text-yellow-400">⭐ Допълнително</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium">-</span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Поддръжка</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium">
                                <?php 
                                if ($planKey === 'starter') echo '24/7';
                                elseif ($planKey === 'professional') echo 'Приоритетна';
                                else echo 'VIP';
                                ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="grid grid-cols-4 divide-x divide-[#2a2a2a] border-t border-[#2a2a2a]">
                        <div class="p-4 bg-[#0f0f0f] flex items-center">
                            <span class="text-gray-300">Време за отговор</span>
                        </div>
                        <?php foreach (get_config('plans') as $planKey => $plan): ?>
                        <div class="p-4 text-center <?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/5 to-[#1e9975]/5]' : 'bg-[#1a1a1a]'; ?>">
                            <span class="text-white font-medium">
                                <?php 
                                if ($planKey === 'starter') echo '< 4 часа';
                                elseif ($planKey === 'professional') echo '< 2 часа';
                                else echo '< 1 час';
                                ?>
                            </span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                 <!-- Additional Features -->
            <div class="mt-20 text-center scroll-fade-in">
                <h3 class="text-3xl font-bold text-white mb-4 scroll-scale-in">Всички Планове Включват</h3>
                <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto scroll-slide-left">Насладете се на професионални функции, които са включени във всеки план без допълнителни такси</p>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#1683ab]/50 hover:from-[#1683ab]/5 hover:to-[#1e9975]/5 transition-all duration-300 transform hover:scale-105 scroll-slide-left">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-blue-500/30 group-hover:to-blue-600/30 transition-all duration-300 scroll-rotate-in">
                                <i class="fas fa-rocket text-blue-400 text-2xl group-hover:text-blue-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Оптимизиран LiteSpeed сървър</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Световно най-бързият уеб сървър за максимална производителност</p>
                        </div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#1e9975]/50 hover:from-[#1e9975]/5 hover:to-[#1683ab]/5 transition-all duration-300 transform hover:scale-105 scroll-scale-in">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500/20 to-green-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-green-500/30 group-hover:to-green-600/30 transition-all duration-300 scroll-bounce-in">
                                <i class="fas fa-shield-alt text-green-400 text-2xl group-hover:text-green-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Безплатни SSL сертификати</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Защитете вашия сайт с безплатни SSL сертификати за всички домейни</p>
                        </div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#9b59b6]/50 hover:from-[#9b59b6]/5 hover:to-[#8e44ad]/5 transition-all duration-300 transform hover:scale-105 scroll-slide-right">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-purple-500/30 group-hover:to-purple-600/30 transition-all duration-300 scroll-rotate-in">
                                <i class="fas fa-folder text-purple-400 text-2xl group-hover:text-purple-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Неограничен брой inodes</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Създавайте колкото файлове и директории желаете без ограничения</p>
                        </div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#f39c12]/50 hover:from-[#f39c12]/5 hover:to-[#e67e22]/5 transition-all duration-300 transform hover:scale-105 scroll-slide-left">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500/20 to-orange-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-orange-500/30 group-hover:to-orange-600/30 transition-all duration-300 scroll-bounce-in">
                                <i class="fas fa-tachometer-alt text-orange-400 text-2xl group-hover:text-orange-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Неограничен трафик</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Приемете неограничен брой посетители без допълнителни такси</p>
                        </div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#e74c3c]/50 hover:from-[#e74c3c]/5 hover:to-[#c0392b]/5 transition-all duration-300 transform hover:scale-105 scroll-scale-in">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-500/20 to-red-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-red-500/30 group-hover:to-red-600/30 transition-all duration-300 scroll-rotate-in">
                                <i class="fas fa-exchange-alt text-red-400 text-2xl group-hover:text-red-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Безплатно преместване</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Преместете се от друг хостинг доставчик безплатно и лесно</p>
                        </div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] border border-[#2a2a2a] rounded-2xl p-6 hover:border-[#f1c40f]/50 hover:from-[#f1c40f]/5 hover:to-[#f39c12]/5 transition-all duration-300 transform hover:scale-105 scroll-slide-right">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-yellow-600/20 rounded-2xl flex items-center justify-center mb-4 group-hover:from-yellow-500/30 group-hover:to-yellow-600/30 transition-all duration-300 scroll-bounce-in">
                                <i class="fas fa-clock text-yellow-400 text-2xl group-hover:text-yellow-300 transition-colors duration-300"></i>
                            </div>
                            <h4 class="text-white font-semibold text-lg mb-2 scroll-glow-in">Компенсиране за времето</h4>
                            <p class="text-gray-400 text-sm leading-relaxed scroll-blur-in">Получете компенсация за оставащото предплатено време от другия доставчик</p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>



             <!-- Pricing Tabs JavaScript -->
             <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthlyTab = document.getElementById('monthly-tab');
            const yearlyTab = document.getElementById('yearly-tab');
        
            
            function updatePrices(isYearly) {
                // Show/hide monthly vs yearly price sections
                const monthlyPriceElements = document.querySelectorAll('.monthly-price');
                const yearlyPriceElements = document.querySelectorAll('.yearly-price');
                
                if (isYearly) {
                    // Show yearly prices, hide monthly
                    monthlyPriceElements.forEach(element => element.classList.add('hidden'));
                    yearlyPriceElements.forEach(element => element.classList.remove('hidden'));
                } else {
                    // Show monthly prices, hide yearly
                    monthlyPriceElements.forEach(element => element.classList.remove('hidden'));
                    yearlyPriceElements.forEach(element => element.classList.add('hidden'));
                }
            }
            
            function switchToMonthly() {
                monthlyTab.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg';
                yearlyTab.className = 'px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2';
                
                // Update yearly badge to gray when inactive
                const yearlyBadge = yearlyTab.querySelector('span');
                yearlyBadge.className = 'ml-2 px-2 py-1 text-xs bg-gray-500 text-white rounded-full';
                
                updatePrices(false);
            }
            
            function switchToYearly() {
                yearlyTab.className = 'px-8 py-3 rounded-xl text-white font-semibold transition-all duration-300 bg-gradient-to-r from-[#1683ab] to-[#1e9975] shadow-lg';
                monthlyTab.className = 'px-8 py-3 rounded-xl text-gray-400 font-semibold transition-all duration-300 hover:text-white ml-2';
                
                // Update yearly badge to white when active
                const yearlyBadge = yearlyTab.querySelector('span');
                yearlyBadge.className = 'ml-2 px-2 py-1 text-xs bg-white text-[#1e9975] rounded-full';
                
                updatePrices(true);
            }
            
            monthlyTab.addEventListener('click', switchToMonthly);
            yearlyTab.addEventListener('click', switchToYearly);
            
            // Initialize with monthly pricing
            updatePrices(false);
        });
    </script>
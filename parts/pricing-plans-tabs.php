                  <!-- Simple Pricing Tabs -->
                  <div class="flex justify-center mb-12">
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
            
            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 scroll-stagger">
                <?php foreach (get_config('plans') as $planKey => $plan): ?>
                <div class="<?php echo $planKey === 'professional' ? 'bg-gradient-to-br from-[#1683ab]/10 to-[#1e9975]/10 rounded-3xl p-8 border-2 border-[#1683ab] relative group hover:scale-105 transition-all duration-500' : 'bg-gradient-to-br from-[#1a1a1a] to-[#0f0f0f] rounded-3xl p-8 border border-[#2a2a2a] hover:border-[#1683ab]/50 transition-all duration-500 group hover:scale-105'; ?>">
                    
                    <?php if (isset($plan['popular']) && $plan['popular']): ?>
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white px-6 py-2 rounded-full text-sm font-semibold">
                            Най-популярен
                        </span>
                    </div>
                    <?php endif; ?>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-white mb-4"><?php echo $plan['name']; ?></h3>
                        <div class="mb-6">
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
                                    
                                    <div class="text-3xl text-gray-300"><?php echo $plan['yearly_price']; ?> лв/година</div>

                                    <div class="inline-flex items-center px-3 py-1 bg-[#1e9975] text-white text-sm font-semibold rounded-full">
                                        <?php echo $plan['yearly_discount']; ?> отстъпка
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-400"><?php echo $plan['description']; ?></p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <?php foreach ($plan['features'] as $feature): ?>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-[#1e9975] mr-3"></i>
                            <?php echo $feature; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <button class="w-full py-4 bg-gradient-to-r from-[#1683ab] to-[#1e9975] text-white font-semibold rounded-2xl hover:from-[#1e9975] hover:to-[#1683ab] transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Избери план
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
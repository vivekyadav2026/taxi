<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="pt-32 pb-20 bg-gray-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1512850692650-c382e34f7fb2?auto=format&fit=crop&q=80&w=1600')] bg-cover bg-center opacity-30"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Drive with <span class="text-primary">RaipurTaxi</span></h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">Join our network of professional drivers and earn on your own schedule.</p>
    </div>
</section>

<section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row gap-12">
            
            <!-- Info Side -->
            <div class="w-full lg:w-5/12">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white">Why Drive With Us?</h2>
                <p class="text-gray-600 dark:text-gray-400 mb-8 text-lg">Partner with RaipurTaxi and take control of your earnings. We offer consistent bookings, transparent payouts, and full support for our driver partners.</p>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-wallet text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white">Great Earnings</h4>
                            <p class="text-gray-600 dark:text-gray-400">Competitive rates and timely payouts. Keep more of what you earn.</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-clock text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white">Flexible Schedule</h4>
                            <p class="text-gray-600 dark:text-gray-400">Be your own boss. Drive when you want, where you want.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-headset text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-800 dark:text-white">24/7 Support</h4>
                            <p class="text-gray-600 dark:text-gray-400">Our dedicated support team is always available to assist you on the road.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div class="w-full lg:w-7/12">
                <div class="glass-card dark:glass-dark rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">Registration Form</h3>
                    
                    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Full Name</label>
                                <input type="text" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white transition">
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Phone Number</label>
                                <input type="tel" required placeholder="+91 9876543210" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white transition">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">City</label>
                                <input type="text" required placeholder="Raipur" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white transition">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Vehicle Type</label>
                                <select required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white transition appearance-none">
                                    <option value="" disabled selected>Select Vehicle</option>
                                    <option value="sedan">Sedan (Dzire, Etios, etc.)</option>
                                    <option value="suv">SUV (Ertiga, Innova, etc.)</option>
                                    <option value="mini">Mini / Hatchback</option>
                                    <option value="premium">Premium</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Upload Documents (License, RC, Aadhar)</label>
                            <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-xl p-6 text-center hover:bg-gray-50 dark:hover:bg-gray-800 transition cursor-pointer">
                                <i class="fa-solid fa-cloud-arrow-up text-4xl text-gray-400 mb-2"></i>
                                <p class="text-sm text-gray-500">Click to upload or drag and drop</p>
                                <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG up to 5MB</p>
                                <input type="file" multiple class="hidden">
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-primary text-secondary py-4 rounded-xl font-bold text-lg hover:bg-yellow-500 transition shadow-lg hover:-translate-y-0.5 transform">
                            Submit Application
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<?php 
$page_title = "Raipur Taxi & Tour Travel Services | Chhattisgarh Tours";
$meta_desc = "Book reliable taxi, sightseeing and customized tour services in Raipur, Chhattisgarh and across India. Explore India with local travel assistance and airport transfers.";
$meta_keywords = "Raipur Taxi, Raipur Cab Service, Raipur Tour Packages, Raipur Travel Agency, Chhattisgarh Tour Packages";
$schema_data = '{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "TravelAgency",
      "name": "Raipur Taxi & Tour Travel",
      "image": "https://raipurtaxi.com/assets/images/logo.png",
      "description": "Premium taxi and tour travel agency in Raipur providing local sightseeing, outstation cabs, and customized Chhattisgarh tour packages.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Raipur",
        "addressLocality": "Raipur",
        "addressRegion": "Chhattisgarh",
        "postalCode": "492001",
        "addressCountry": "IN"
      },
      "telephone": "+919183555655",
      "priceRange": "₹₹",
      "url": "https://raipurtaxi.com"
    }
  ]
}';

include 'header.php'; 
?>

<!-- Hero Section -->
<section class="relative bg-gray-900 border-b border-gray-800 pt-32 pb-8 md:pt-20 md:pb-10" id="home">
    <!-- Banner Background -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-gray-900">
        <!-- Mobile Background Image -->
        <img src="assets/images/hero_mobile.jpg" alt="Taxi Service Banner Mobile" class="w-full h-full object-cover object-top block md:hidden">
        <!-- Desktop Background Image -->
        <img src="assets/images/hero_girl.jpg" alt="Raipur Taxi and Tours" class="w-full h-full object-cover object-right -scale-x-100 hidden md:block">
        
        <!-- Gradient overlay: Bottom-to-top on mobile, Right-to-left on desktop -->
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/80 to-gray-900/50 md:bg-gradient-to-l md:from-gray-900/90 md:via-gray-900/50 md:to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-end">
        
        <!-- Right Side: Text & Compact Form -->
        <div class="w-full max-w-md">
            
            <!-- Hero Text -->
            <div class="mb-6 text-center md:text-left">
                <span class="inline-block py-1 px-3 rounded-full bg-primary/20 text-primary text-[10px] font-bold tracking-wider mb-2 border border-primary/30 uppercase backdrop-blur-sm">Taxi & Tours</span>
                <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight leading-tight mb-2 text-white drop-shadow-lg">
                    Raipur Taxi & <span class="text-primary">Tour Travel</span>
                </h1>
                <p class="text-sm md:text-base text-gray-100 drop-shadow-md">
                    Explore Raipur, Chhattisgarh & India with reliable taxi, sightseeing and customized tour services.
                </p>
            </div>
            
            <!-- Booking Form -->
            <div id="book" class="bg-white/10 backdrop-blur-xl rounded-2xl p-5 shadow-2xl border border-white/20">
                <form id="booking-form" class="space-y-3" onsubmit="handleBookingSubmit(event)">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <input type="text" id="pickup_location" placeholder="Pickup Location" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-white/5 text-white placeholder-gray-400 focus:bg-white/10 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm">
                        </div>
                        <div>
                            <input type="text" id="drop_location" placeholder="Drop Location" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-white/5 text-white placeholder-gray-400 focus:bg-white/10 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <input type="date" id="booking_date" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-white/5 text-white placeholder-gray-400 focus:bg-white/10 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm [color-scheme:dark]">
                        </div>
                        <div>
                            <input type="time" id="booking_time" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-white/5 text-white placeholder-gray-400 focus:bg-white/10 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm [color-scheme:dark]">
                        </div>
                    </div>

                    <div>
                        <select id="car_type" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-[#2a303c] text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm">
                            <option value="" disabled selected>Select Car Type</option>
                            <option value="dzire" data-rate="15">Swift Dzire - ₹15/km</option>
                            <option value="ertiga" data-rate="20">Maruti Ertiga - ₹20/km</option>
                            <option value="innova" data-rate="25">Toyota Innova - ₹25/km</option>
                            <option value="crysta" data-rate="26">Innova Crysta - ₹26/km</option>
                            <option value="tempo" data-rate="32">Tempo Traveller - ₹32/km</option>
                        </select>
                    </div>

                    <div>
                        <input type="tel" id="mobile_number" placeholder="Mobile Number" required class="w-full px-4 py-2.5 rounded-xl border border-white/20 bg-white/5 text-white placeholder-gray-400 focus:bg-white/10 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all text-sm">
                    </div>

                    <button type="submit" class="w-full bg-primary text-gray-900 py-3 rounded-xl font-bold hover:bg-yellow-500 hover:shadow-[0_0_15px_rgba(255,215,0,0.3)] transition-all mt-2 text-sm" data-translate="btn-confirm">
                        Confirm Booking
                    </button>
                </form>
            </div>
            
            <div class="mt-5 flex flex-wrap gap-3 items-center justify-center md:justify-start">
                <a href="tel:+919183555655" class="inline-flex items-center justify-center gap-2 bg-white/5 hover:bg-white/15 border border-white/10 backdrop-blur-md px-3.5 py-1.5 rounded-full text-white text-[11px] uppercase font-bold tracking-wider transition-all shadow-lg hover:shadow-blue-500/20 group">
                    <div class="w-6 h-6 rounded-full bg-blue-500/20 border border-blue-400/30 flex items-center justify-center text-blue-400 text-[10px] group-hover:bg-blue-500 group-hover:text-white transition-colors">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    Call Now
                </a>
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20taxi." target="_blank" class="inline-flex items-center justify-center gap-2 bg-white/5 hover:bg-white/15 border border-white/10 backdrop-blur-md px-3.5 py-1.5 rounded-full text-white text-[11px] uppercase font-bold tracking-wider transition-all shadow-lg hover:shadow-[#25D366]/20 group">
                    <div class="w-6 h-6 rounded-full bg-[#25D366]/20 border border-[#25D366]/30 flex items-center justify-center text-[#25D366] text-[11px] group-hover:bg-[#25D366] group-hover:text-white transition-colors">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-12 md:py-16 bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center max-w-3xl mx-auto mb-10 md:mb-12">
            <span class="inline-block py-1.5 px-4 rounded-full bg-primary/10 text-yellow-600 dark:text-primary text-xs font-bold tracking-wider mb-4 border border-primary/20 uppercase">Our Benefits</span>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-gray-900 dark:text-white">Why Choose Us?</h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">Experience the difference with our simple, reliable, and highly comfortable journey features designed specifically for you.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="group bg-gray-50 dark:bg-gray-800/50 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 hover:shadow-2xl hover:shadow-gray-200/50 dark:hover:shadow-black/50 hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-gray-900 transition-colors duration-300">
                    <i class="fa-solid fa-location-crosshairs"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">GPS Tracking</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Track your ride in real-time and securely share your live location with friends or family for complete peace of mind.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="group bg-gray-50 dark:bg-gray-800/50 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 hover:shadow-2xl hover:shadow-gray-200/50 dark:hover:shadow-black/50 hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-gray-900 transition-colors duration-300">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">24/7 Service</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Our premium taxi services and dedicated customer support are available around the clock to assist you anytime.</p>
            </div>

            <!-- Feature 3 -->
            <div class="group bg-gray-50 dark:bg-gray-800/50 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 hover:shadow-2xl hover:shadow-gray-200/50 dark:hover:shadow-black/50 hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-gray-900 transition-colors duration-300">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Secure Payment</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Enjoy hassle-free checkout with multiple highly secure payment options including UPI, Credit Cards, and Cash.</p>
            </div>

            <!-- Feature 4 -->
            <div class="group bg-gray-50 dark:bg-gray-800/50 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:bg-white dark:hover:bg-gray-800 hover:shadow-2xl hover:shadow-gray-200/50 dark:hover:shadow-black/50 hover:-translate-y-2 transition-all duration-300">
                <div class="w-14 h-14 bg-white dark:bg-gray-700 text-gray-900 dark:text-white shadow-sm rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-primary group-hover:text-gray-900 transition-colors duration-300">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Verified Drivers</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">Travel with confidence knowing all our drivers are professional, highly experienced, and strictly background-verified.</p>
            </div>
        </div>
    </div>
</section>

<!-- Fleet & Cars Section -->
<section class="py-12 md:py-16 bg-white dark:bg-gray-900 transition-colors duration-300" id="fleet">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 md:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white" data-translate="fleet-title">Our Available <span class="text-primary">Fleet</span></h2>
            <p class="text-gray-650 dark:text-gray-400 text-base sm:text-lg" data-translate="fleet-desc">Choose from our modern, clean, and extremely well-maintained vehicles for a safe journey.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Swift Dzire -->
            <div class="bg-gray-50 dark:bg-gray-850 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-850 hover-card-effect flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[4/3] bg-gray-200">
                        <img src="assets/images/swift_dzire.png" alt="Swift Dzire" class="w-full h-full object-cover">
                        <span class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-secondary font-bold px-3 py-1 rounded-full text-xs shadow-md">POPULAR</span>
                    </div>
                    <div class="p-6 pb-2">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Swift Dzire</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Sleek & Economical Sedan</p>
                        
                        <div class="flex flex-wrap gap-3 my-4">
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-users text-primary"></i> 4+1 Seats
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-snowflake text-primary"></i> AC Equipped
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-briefcase text-primary"></i> 2 Bags
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4 mb-4">
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Starting at</span>
                        <div class="text-right">
                            <span class="text-2xl font-extrabold text-gray-800 dark:text-white">₹15</span>
                            <span class="text-gray-500 text-sm">/km</span>
                        </div>
                    </div>
                    <a href="#book" onclick="selectCarType('dzire')" class="block w-full py-3 bg-secondary text-primary dark:bg-primary dark:text-secondary text-center rounded-xl font-bold hover:shadow-lg transition">Book Dzire Now</a>
                </div>
            </div>

            <!-- Maruti Ertiga -->
            <div class="bg-gray-50 dark:bg-gray-850 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-850 hover-card-effect flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[4/3] bg-gray-200">
                        <img src="assets/images/ertiga.png" alt="Maruti Ertiga" class="w-full h-full object-cover">
                        <span class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-secondary font-bold px-3 py-1 rounded-full text-xs shadow-md">BUDGET SUV</span>
                    </div>
                    <div class="p-6 pb-2">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Maruti Ertiga</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Comfortable Family MPV</p>
                        
                        <div class="flex flex-wrap gap-3 my-4">
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-users text-primary"></i> 6+1 Seats
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-snowflake text-primary"></i> Dual AC
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-briefcase text-primary"></i> 3 Bags
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4 mb-4">
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Starting at</span>
                        <div class="text-right">
                            <span class="text-2xl font-extrabold text-gray-800 dark:text-white">₹20</span>
                            <span class="text-gray-500 text-sm">/km</span>
                        </div>
                    </div>
                    <a href="#book" onclick="selectCarType('ertiga')" class="block w-full py-3 bg-secondary text-primary dark:bg-primary dark:text-secondary text-center rounded-xl font-bold hover:shadow-lg transition">Book Ertiga Now</a>
                </div>
            </div>

            <!-- Toyota Innova -->
            <div class="bg-gray-50 dark:bg-gray-850 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-850 hover-card-effect flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[4/3] bg-gray-200">
                        <img src="assets/images/innova.png" alt="Toyota Innova" class="w-full h-full object-cover">
                        <span class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-secondary font-bold px-3 py-1 rounded-full text-xs shadow-md">RELIABLE</span>
                    </div>
                    <div class="p-6 pb-2">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Toyota Innova</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Spacious & Sturdy SUV</p>
                        
                        <div class="flex flex-wrap gap-3 my-4">
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-users text-primary"></i> 6+1 Seats
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-snowflake text-primary"></i> Powerful AC
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-briefcase text-primary"></i> 4 Bags
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4 mb-4">
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Starting at</span>
                        <div class="text-right">
                            <span class="text-2xl font-extrabold text-gray-800 dark:text-white">₹25</span>
                            <span class="text-gray-500 text-sm">/km</span>
                        </div>
                    </div>
                    <a href="#book" onclick="selectCarType('innova')" class="block w-full py-3 bg-secondary text-primary dark:bg-primary dark:text-secondary text-center rounded-xl font-bold hover:shadow-lg transition">Book Innova Now</a>
                </div>
            </div>

            <!-- Innova Crysta -->
            <div class="bg-gray-50 dark:bg-gray-850 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-850 hover-card-effect flex flex-col justify-between">
                <div>
                    <div class="relative overflow-hidden aspect-[4/3] bg-gray-200">
                        <img src="assets/images/crysta.png" alt="Innova Crysta" class="w-full h-full object-cover">
                        <span class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-secondary font-bold px-3 py-1 rounded-full text-xs shadow-md">PREMIUM LUXURY</span>
                    </div>
                    <div class="p-6 pb-2">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Innova Crysta</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">High-class Executive MPV</p>
                        
                        <div class="flex flex-wrap gap-3 my-4">
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-users text-primary"></i> 7+1 Seats
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-chair text-primary"></i> Captain Seats
                            </span>
                            <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                <i class="fa-solid fa-briefcase text-primary"></i> 5 Bags
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4 mb-4">
                        <span class="text-gray-500 dark:text-gray-400 text-sm">Starting at</span>
                        <div class="text-right">
                            <span class="text-2xl font-extrabold text-gray-800 dark:text-white">₹26</span>
                            <span class="text-gray-500 text-sm">/km</span>
                        </div>
                    </div>
                    <a href="#book" onclick="selectCarType('crysta')" class="block w-full py-3 bg-secondary text-primary dark:bg-primary dark:text-secondary text-center rounded-xl font-bold hover:shadow-lg transition">Book Crysta Now</a>
                </div>
            </div>

            <!-- Tempo Traveller -->
            <div class="bg-gray-50 dark:bg-gray-850 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-850 hover-card-effect flex flex-col justify-between lg:col-span-2 lg:max-w-2xl lg:mx-auto">
                <div class="flex flex-col md:flex-row">
                    <div class="relative overflow-hidden md:w-1/2 aspect-[4/3] bg-gray-200 flex-shrink-0">
                        <img src="assets/images/tempo_traveller.png" alt="Tempo Traveller" class="w-full h-full object-cover">
                        <span class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-secondary font-bold px-3 py-1 rounded-full text-xs shadow-md">GROUP TOURIST</span>
                    </div>
                    <div class="p-6 pb-2 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white">Tempo Traveller</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Ideal for Group Tours & Marriages</p>
                            
                            <div class="flex flex-wrap gap-2.5 my-4">
                                <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                    <i class="fa-solid fa-users text-primary"></i> 12-17 Seats
                                </span>
                                <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                    <i class="fa-solid fa-snowflake text-primary"></i> Rear Dual AC
                                </span>
                                <span class="flex items-center gap-1 text-xs font-semibold text-gray-600 dark:text-gray-300 bg-gray-200/50 dark:bg-gray-800 px-3 py-1.5 rounded-full">
                                    <i class="fa-solid fa-briefcase text-primary"></i> Huge Carrier
                                </span>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center border-t border-gray-200 dark:border-gray-700 pt-4 mb-4">
                                <span class="text-gray-500 dark:text-gray-400 text-sm">Starting at</span>
                                <div class="text-right">
                                    <span class="text-2xl font-extrabold text-gray-800 dark:text-white">₹32</span>
                                    <span class="text-gray-500 text-sm">/km</span>
                                </div>
                            </div>
                            <a href="#book" onclick="selectCarType('tempo')" class="block w-full py-3 bg-secondary text-primary dark:bg-primary dark:text-secondary text-center rounded-xl font-bold hover:shadow-lg transition">Book Traveller Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pricing & Rates Section -->
<section class="py-12 md:py-16 bg-gray-50 dark:bg-gray-800 transition-colors duration-300" id="pricing">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white" data-translate="pricing-title">Transparent <span class="text-primary">Fare</span> Rates</h2>
            <p class="text-gray-655 dark:text-gray-400 text-base sm:text-lg" data-translate="pricing-desc">No hidden charges! Tolls, parking, and state tax will be extra as per actual receipts.</p>
        </div>

        <!-- Tabs Menu -->
        <div class="flex justify-center mb-8">
            <div class="flex bg-gray-200 dark:bg-gray-900 p-1.5 rounded-2xl gap-2 w-full max-w-lg shadow-inner">
                <button onclick="switchTab('tab-per-km')" id="btn-tab-per-km" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl transition duration-300 bg-white text-secondary shadow dark:bg-gray-800 dark:text-white">
                    Per KM Rates
                </button>
                <button onclick="switchTab('tab-packages')" id="btn-tab-packages" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl transition duration-300 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Popular Packages
                </button>
                <button onclick="switchTab('tab-airport')" id="btn-tab-airport" class="flex-1 py-2.5 text-center text-sm font-bold rounded-xl transition duration-300 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    Airport Fixed
                </button>
            </div>
        </div>

        <!-- Tab Contents -->
        <div>
            <!-- Tab 1: Per KM Rates -->
            <div id="tab-per-km" class="tab-content block">
                <div class="bg-white dark:bg-gray-900 rounded-3xl p-6 shadow-xl border border-gray-150 dark:border-gray-700 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="py-4 px-4 font-bold text-gray-850 dark:text-white">Vehicle Name</th>
                                <th class="py-4 px-4 font-bold text-gray-850 dark:text-white">Type</th>
                                <th class="py-4 px-4 font-bold text-gray-850 dark:text-white">Outstation Rate</th>
                                <th class="py-4 px-4 font-bold text-gray-850 dark:text-white">Min. Limit/Day</th>
                                <th class="py-4 px-4 font-bold text-gray-850 dark:text-white">Driver Allowance</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-150 dark:divide-gray-850">
                            <tr>
                                <td class="py-4 px-4 font-bold text-gray-800 dark:text-white">Swift Dzire</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Sedan</td>
                                <td class="py-4 px-4 font-extrabold text-primary">₹15 / KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">250 KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">₹500 / Day</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-4 font-bold text-gray-800 dark:text-white">Maruti Ertiga</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">SUV</td>
                                <td class="py-4 px-4 font-extrabold text-primary">₹20 / KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">250 KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">₹500 / Day</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-4 font-bold text-gray-800 dark:text-white">Toyota Innova</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">SUV</td>
                                <td class="py-4 px-4 font-extrabold text-primary">₹25 / KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">250 KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">₹500 / Day</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-4 font-bold text-gray-800 dark:text-white">Innova Crysta</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Premium SUV</td>
                                <td class="py-4 px-4 font-extrabold text-primary">₹26 / KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">250 KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">₹500 / Day</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-4 font-bold text-gray-800 dark:text-white">Tempo Traveller</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">Minibus</td>
                                <td class="py-4 px-4 font-extrabold text-primary">₹32 / KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">300 KM</td>
                                <td class="py-4 px-4 text-gray-600 dark:text-gray-400">₹500 / Day</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab 2: Popular Packages -->
            <div id="tab-packages" class="tab-content hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Pack 1 -->
                    <div class="bg-white dark:bg-gray-900 rounded-3xl p-6 shadow-xl border border-gray-150 dark:border-gray-800">
                        <span class="text-xs font-bold bg-primary/20 text-yellow-600 dark:text-primary px-3 py-1 rounded-full">POPULAR ONE WAY</span>
                        <h4 class="text-xl font-bold text-gray-850 dark:text-white mt-3">Raipur to Bilaspur</h4>
                        <p class="text-sm text-gray-500 mb-6 border-b border-gray-200 dark:border-gray-800 pb-3">Approx 115 KM distance</p>
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Swift Dzire:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹2,999 All Inc.</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Maruti Ertiga:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹4,499 All Inc.</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Innova Crysta:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹5,999 All Inc.</span>
                            </div>
                        </div>
                        <a href="#book" class="block w-full py-2 bg-gray-100 dark:bg-gray-800 hover:bg-primary dark:hover:bg-primary hover:text-secondary text-center text-sm font-bold rounded-xl transition">Book Package</a>
                    </div>
                    
                    <!-- Pack 2 -->
                    <div class="bg-white dark:bg-gray-900 rounded-3xl p-6 shadow-xl border border-gray-150 dark:border-gray-800">
                        <span class="text-xs font-bold bg-primary/20 text-yellow-600 dark:text-primary px-3 py-1 rounded-full">TOUR PACKAGE</span>
                        <h4 class="text-xl font-bold text-gray-850 dark:text-white mt-3">Raipur to Jagdalpur</h4>
                        <p class="text-sm text-gray-500 mb-6 border-b border-gray-200 dark:border-gray-800 pb-3">Bastar Sightseeing (3 Days)</p>
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Swift Dzire:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹9,999 (Toll Extra)</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Maruti Ertiga:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹13,999 (Toll Extra)</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Innova Crysta:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹17,999 (Toll Extra)</span>
                            </div>
                        </div>
                        <a href="#book" class="block w-full py-2 bg-gray-100 dark:bg-gray-800 hover:bg-primary dark:hover:bg-primary hover:text-secondary text-center text-sm font-bold rounded-xl transition">Book Package</a>
                    </div>

                    <!-- Pack 3 -->
                    <div class="bg-white dark:bg-gray-900 rounded-3xl p-6 shadow-xl border border-gray-150 dark:border-gray-800">
                        <span class="text-xs font-bold bg-primary/20 text-yellow-600 dark:text-primary px-3 py-1 rounded-full">INTERSTATE</span>
                        <h4 class="text-xl font-bold text-gray-850 dark:text-white mt-3">Raipur to Nagpur</h4>
                        <p class="text-sm text-gray-500 mb-6 border-b border-gray-200 dark:border-gray-800 pb-3">One Way Interstate Highway</p>
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Swift Dzire:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹6,999 (State Tax Inc)</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Maruti Ertiga:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹9,999 (State Tax Inc)</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600 dark:text-gray-400 font-semibold">Innova Crysta:</span>
                                <span class="font-bold text-gray-800 dark:text-white">₹13,499 (State Tax Inc)</span>
                            </div>
                        </div>
                        <a href="#book" class="block w-full py-2 bg-gray-100 dark:bg-gray-800 hover:bg-primary dark:hover:bg-primary hover:text-secondary text-center text-sm font-bold rounded-xl transition">Book Package</a>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Airport Fixed -->
            <div id="tab-airport" class="tab-content hidden">
                <div class="bg-white dark:bg-gray-900 rounded-3xl p-6 shadow-xl border border-gray-150 dark:border-gray-800">
                    <div class="text-center mb-6">
                        <span class="text-xs font-bold bg-[#25D366]/20 text-[#25D366] px-4 py-1.5 rounded-full inline-block">SWAMI VIVEKANANDA AIRPORT TRANSFERS</span>
                        <h4 class="text-2xl font-bold text-gray-850 dark:text-white mt-3">Fixed Rates to/from Raipur City</h4>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-4xl mx-auto mt-8">
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-5 text-center shadow-md">
                            <span class="text-sm font-bold text-gray-400 dark:text-gray-500 block mb-1">SEDAN</span>
                            <span class="text-lg font-bold text-gray-800 dark:text-white block">Swift Dzire</span>
                            <span class="text-3xl font-extrabold text-primary block mt-3">₹999</span>
                            <span class="text-xs text-gray-500 mt-2 block">All Inclusive Fixed</span>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-5 text-center shadow-md">
                            <span class="text-sm font-bold text-gray-400 dark:text-gray-500 block mb-1">BUDGET SUV</span>
                            <span class="text-lg font-bold text-gray-800 dark:text-white block">Maruti Ertiga</span>
                            <span class="text-3xl font-extrabold text-primary block mt-3">₹1,499</span>
                            <span class="text-xs text-gray-500 mt-2 block">All Inclusive Fixed</span>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-5 text-center shadow-md">
                            <span class="text-sm font-bold text-gray-400 dark:text-gray-500 block mb-1">PREMIUM SUV</span>
                            <span class="text-lg font-bold text-gray-800 dark:text-white block">Toyota Innova</span>
                            <span class="text-3xl font-extrabold text-primary block mt-3">₹1,799</span>
                            <span class="text-xs text-gray-500 mt-2 block">All Inclusive Fixed</span>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-800 rounded-2xl p-5 text-center shadow-md">
                            <span class="text-sm font-bold text-gray-400 dark:text-gray-500 block mb-1">LUXURY SUV</span>
                            <span class="text-lg font-bold text-gray-800 dark:text-white block">Innova Crysta</span>
                            <span class="text-3xl font-extrabold text-primary block mt-3">₹2,199</span>
                            <span class="text-xs text-gray-500 mt-2 block">All Inclusive Fixed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Explore Tourism CTA Section -->
<section class="py-16 md:py-20 relative bg-gray-900 border-y border-gray-800">
    <div class="absolute inset-0 z-0">
        <img src="assets/images/tours/chitrakote-waterfalls.jpg" alt="Chhattisgarh Tourism" class="w-full h-full object-cover opacity-30" onerror="this.src='assets/images/taxi_right.jpg'">
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="max-w-2xl text-center md:text-left">
            <span class="inline-block py-1.5 px-4 rounded-full bg-primary/20 text-primary text-xs font-bold tracking-wider mb-4 border border-primary/30 uppercase">Tour & Travel Service</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg leading-tight">Explore the Beauty of <span class="text-primary">Chhattisgarh</span></h2>
            <p class="text-lg text-gray-300 mb-8">From majestic waterfalls like Chitrakote to ancient historical sites and thrilling jungle safaris, discover the best places in and around Raipur. Book our customized tour packages and outstation cabs for a memorable journey.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="tours.php" class="bg-primary text-gray-900 px-8 py-3.5 rounded-full font-bold hover:bg-yellow-500 transition shadow-[0_0_15px_rgba(255,215,0,0.4)] flex items-center justify-center gap-2">
                    <i class="fa-solid fa-earth-asia text-lg"></i> Explore Tour Packages
                </a>
                <a href="tel:+919183555655" class="bg-white/10 text-white border border-white/20 px-8 py-3.5 rounded-full font-bold hover:bg-white/20 transition backdrop-blur-sm flex items-center justify-center gap-2">
                    <i class="fa-solid fa-phone"></i> Call for Queries
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-12 md:py-16 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10 md:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">Trusted by <span class="text-primary">Customers</span></h2>
            <p class="text-gray-650 dark:text-gray-400 text-base sm:text-lg">See what our happy customers have to say about our service.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl relative">
                <i class="fa-solid fa-quote-left text-4xl text-primary/20 absolute top-4 left-4"></i>
                <div class="flex items-center gap-4 mb-6 relative z-10">
                    <img src="https://i.pravatar.cc/150?img=11" alt="User" class="w-16 h-16 rounded-full border-2 border-primary">
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">Rahul Sharma</h4>
                        <div class="text-primary text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 italic">"Excellent service! Booked a Sedan from Raipur to Bilaspur. The driver was on time, very polite, and the car was extremely clean. Highly recommend RaipurTaxi."</p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl relative">
                <i class="fa-solid fa-quote-left text-4xl text-primary/20 absolute top-4 left-4"></i>
                <div class="flex items-center gap-4 mb-6 relative z-10">
                    <img src="https://i.pravatar.cc/150?img=32" alt="User" class="w-16 h-16 rounded-full border-2 border-primary">
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">Priya Patel</h4>
                        <div class="text-primary text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 italic">"Used their airport pickup service. Very convenient and reasonably priced. The Ertiga we booked had plenty of space for all our luggage."</p>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl relative">
                <i class="fa-solid fa-quote-left text-4xl text-primary/20 absolute top-4 left-4"></i>
                <div class="flex items-center gap-4 mb-6 relative z-10">
                    <img src="https://i.pravatar.cc/150?img=68" alt="User" class="w-16 h-16 rounded-full border-2 border-primary">
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white">Amit Verma</h4>
                        <div class="text-primary text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-400 italic">"Best taxi service in Chhattisgarh. Have used them multiple times for corporate travel to Nagpur and Odhisa. Very professional setup."</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-12 md:py-16 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10 md:mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 text-gray-800 dark:text-white">Frequently Asked <span class="text-primary">Questions</span></h2>
            <p class="text-gray-650 dark:text-gray-400 text-base sm:text-lg">Got questions? We've got answers.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white dark:bg-gray-900 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Do you provide outstation cabs?</h3>
                <p class="text-gray-600 dark:text-gray-400">Yes, we provide outstation cabs from Raipur to all over Chhattisgarh, Madhya Pradesh, Maharashtra, Andhra Pradesh, and Odisha.</p>
            </div>
            
            <!-- FAQ 2 -->
            <div class="bg-white dark:bg-gray-900 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">What is the pricing for Swift Dzire and Ertiga?</h3>
                <p class="text-gray-600 dark:text-gray-400">Our standard pricing for a Sedan (like Swift Dzire) is ₹15/km, and for an SUV (like Ertiga) it is ₹25/km. Tolls and parking charges are extra as applicable.</p>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white dark:bg-gray-900 rounded-xl p-6 shadow-sm border border-gray-100 dark:border-gray-700">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2" data-translate="faq-3-title">Are your drivers verified?</h3>
                <p class="text-gray-600 dark:text-gray-400" data-translate="faq-3-desc">Yes, all our drivers go through a strict background check and hold valid commercial driving licenses to ensure your safety.</p>
            </div>
        </div>
    </div>
</section>

<!-- Active Bookings / Booking Management Section -->
<section class="py-12 md:py-16 bg-white dark:bg-gray-900 transition-colors duration-300 hidden" id="booking-status-section">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="bg-primary/20 text-yellow-600 dark:text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">BOOKING MANAGEMENT</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white mt-3">Track Your <span class="text-primary">Ride Status</span></h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Real-time status of your RaipurTaxi bookings.</p>
        </div>

        <div id="active-bookings-list" class="space-y-6">
            <!-- Dynamically populated via Javascript -->
        </div>
    </div>
</section>

<!-- Web-App Showcase Section -->
<section class="py-12 md:py-16 bg-gray-50 dark:bg-gray-850 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-secondary via-gray-900 to-black rounded-[2.5rem] overflow-hidden p-8 md:p-16 relative shadow-2xl border border-gray-800">
            <!-- Light Glow -->
            <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-primary/10 blur-[100px]"></div>
            
            <div class="flex flex-col lg:flex-row items-center gap-12 relative z-10">
                <div class="w-full lg:w-3/5 text-white">
                    <span class="text-primary font-bold tracking-wider text-sm uppercase block mb-3" data-translate="webapp-badge">100% MOBILE OPTIMIZED</span>
                    <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold tracking-tight mb-6" data-translate="webapp-title">
                        Instant Web Booking — <span class="text-primary">No App Needed!</span>
                    </h2>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed" data-translate="webapp-desc">
                        No need to waste storage space or download large apps. RaipurTaxi is built as an ultra-modern Responsive Web App. Open our website on any smartphone, add it to your home screen in 3 seconds, and enjoy a blazing-fast, app-like ride booking experience on both Android and iOS!
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                        <!-- Benefit 1 -->
                        <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                            <div class="text-primary text-xl mb-2"><i class="fa-solid fa-hard-drive"></i></div>
                            <h4 class="font-bold text-sm text-white" data-translate="webapp-b1-title">0 MB Storage</h4>
                            <p class="text-xs text-gray-400 mt-1" data-translate="webapp-b1-desc">Saves phone memory, no installation required.</p>
                        </div>
                        <!-- Benefit 2 -->
                        <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                            <div class="text-primary text-xl mb-2"><i class="fa-solid fa-bolt"></i></div>
                            <h4 class="font-bold text-sm text-white" data-translate="webapp-b2-title">Instant Load</h4>
                            <p class="text-xs text-gray-400 mt-1" data-translate="webapp-b2-desc">Loads instantly in Chrome, Safari or Firefox.</p>
                        </div>
                        <!-- Benefit 3 -->
                        <div class="bg-white/5 p-4 rounded-2xl border border-white/5">
                            <div class="text-primary text-xl mb-2"><i class="fa-solid fa-arrows-rotate"></i></div>
                            <h4 class="font-bold text-sm text-white" data-translate="webapp-b3-title">Auto Updates</h4>
                            <p class="text-xs text-gray-400 mt-1" data-translate="webapp-b3-desc">Always get the latest fleets, fares, and features.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="#book" class="bg-primary hover:bg-yellow-500 text-secondary px-8 py-3.5 rounded-2xl font-bold transition duration-300 transform hover:-translate-y-1 shadow-lg" data-translate="webapp-btn-book">
                            <i class="fa-solid fa-taxi mr-2"></i> Book A Cab Instantly
                        </a>
                        <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20taxi." target="_blank" class="bg-[#25D366] hover:bg-[#1ebd5c] text-white px-8 py-3.5 rounded-2xl font-bold transition duration-300 transform hover:-translate-y-1 shadow-lg flex items-center gap-2" data-translate="webapp-btn-wa">
                            <i class="fa-brands fa-whatsapp text-xl"></i> WhatsApp Booking
                        </a>
                    </div>
                </div>

                <!-- Phone Mockup showing the Responsive Web Interface -->
                <div class="w-full lg:w-2/5 flex justify-center">
                    <div class="relative w-72 h-[500px] bg-secondary border-[10px] border-gray-800 rounded-[3rem] shadow-2xl overflow-hidden transform rotate-3 hover:rotate-0 transition duration-500">
                        <!-- Phone Speaker/Camera -->
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 h-5 w-32 bg-gray-800 rounded-b-2xl z-20 flex justify-center items-center">
                            <div class="w-12 h-1 bg-gray-600 rounded-full mb-1"></div>
                        </div>
                        
                        <!-- App UI Screen Mockup -->
                        <div class="absolute inset-0 bg-gray-900 text-white p-4 pt-8 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center mb-6">
                                    <div class="flex items-center gap-2">
                                        <span class="font-extrabold text-sm text-white">Raipur<span class="text-primary">Taxi</span></span>
                                    </div>
                                    <i class="fa-solid fa-globe text-xs text-primary"></i>
                                </div>
                                <div class="bg-gray-800 rounded-2xl p-3.5 mb-4 border border-gray-700">
                                    <span class="text-[10px] text-primary font-bold uppercase tracking-wider block mb-1" data-translate="webapp-mock-status-lbl">LIVE STATUS TRACKER</span>
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-xs font-bold block" data-translate="webapp-mock-driver">Sohan Singh (Driver)</span>
                                            <span class="text-[10px] text-gray-400 block">CG-04-DF-4455 (Ertiga)</span>
                                        </div>
                                        <i class="fa-solid fa-phone text-xs bg-primary text-secondary p-2.5 rounded-full"></i>
                                    </div>
                                </div>
                                <div class="bg-gray-800/50 rounded-2xl p-3.5 border border-gray-700">
                                    <span class="text-[10px] text-gray-400 block mb-2" data-translate="webapp-mock-route-lbl">ACTIVE ROUTE</span>
                                    <div class="space-y-2.5">
                                        <div class="flex items-center gap-2 text-xs">
                                            <i class="fa-solid fa-location-dot text-primary text-[10px]"></i>
                                            <span class="font-medium text-gray-300" data-translate="webapp-mock-pickup">Raipur Station</span>
                                        </div>
                                        <div class="flex items-center gap-2 text-xs border-t border-gray-700/50 pt-2">
                                            <i class="fa-solid fa-location-crosshairs text-primary text-[10px]"></i>
                                            <span class="font-medium text-gray-300" data-translate="webapp-mock-drop">VIP Road, Raipur</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-primary/20 text-primary border border-primary/30 py-2.5 text-center font-bold text-xs rounded-xl shadow-md" data-translate="webapp-mock-footer">
                                <i class="fa-solid fa-mobile-screen-button mr-1.5"></i> Web App Interface
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Booking Confirmation Modal (Glassmorphism) -->
<div id="booking-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/60 backdrop-blur-md hidden opacity-0 transition-opacity duration-300">
    <div class="glass-dark rounded-[2rem] w-full max-w-lg overflow-hidden border border-white/10 shadow-2xl transform scale-95 transition-transform duration-300" id="booking-modal-card">
        <!-- Header -->
        <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-600 text-secondary flex justify-between items-center">
            <div>
                <h3 class="text-xl font-extrabold flex items-center gap-2"><i class="fa-solid fa-receipt"></i> Booking Summary</h3>
                <p class="text-xs font-semibold opacity-90 mt-0.5">Please review your journey details</p>
            </div>
            <button onclick="closeBookingModal()" class="w-8 h-8 rounded-full bg-secondary/15 hover:bg-secondary/25 flex items-center justify-center text-secondary transition">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <!-- Receipt Body -->
        <div class="p-6 space-y-4 max-h-[70vh] overflow-y-auto text-white">
            <div class="grid grid-cols-2 gap-4 pb-4 border-b border-white/10">
                <div>
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Pickup Location</span>
                    <span id="rec-pickup" class="text-sm font-bold block">--</span>
                </div>
                <div>
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Drop Location</span>
                    <span id="rec-drop" class="text-sm font-bold block">--</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 pb-4 border-b border-white/10">
                <div>
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Date & Time</span>
                    <span id="rec-datetime" class="text-sm font-bold block">--</span>
                </div>
                <div>
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Selected Vehicle</span>
                    <span id="rec-car" class="text-sm font-bold block">--</span>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 pb-4 border-b border-white/10">
                <div>
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Mobile Number</span>
                    <span id="rec-mobile" class="text-sm font-bold block">--</span>
                </div>
                <div class="hidden">
                    <span class="text-[10px] text-gray-400 uppercase font-semibold block">Est. Distance</span>
                    <span id="rec-distance" class="text-sm font-bold text-primary block">--</span>
                </div>
            </div>

            <!-- Price Breakdown -->
            <div class="bg-white/5 rounded-2xl p-4 space-y-2 border border-white/5">
                <div class="flex justify-between text-sm py-1 font-semibold text-white">
                    <span class="text-gray-300">Base Fare (Per KM):</span>
                    <span id="rec-base-rate" class="text-primary text-base font-extrabold">--</span>
                </div>
                <div class="flex justify-between text-xs hidden">
                    <span class="text-gray-400">Total Est. Ride Cost:</span>
                    <span id="rec-total-cost" class="font-semibold text-gray-200">--</span>
                </div>
                <div class="flex justify-between text-xs text-green-400 hidden" id="rec-coupon-row">
                    <span>Coupon Applied (<span id="rec-coupon-name"></span>):</span>
                    <span>- <span id="rec-coupon-value"></span></span>
                </div>
                <div class="flex justify-between text-base font-extrabold border-t border-white/10 pt-2 text-white hidden">
                    <span>Estimated Total:</span>
                    <span id="rec-final-cost" class="text-primary">--</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-3 pt-2">
                <button onclick="confirmBookingWhatsApp()" class="w-full bg-[#25D366] hover:bg-[#1ebd5c] text-white py-3.5 rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg transition duration-300 transform hover:-translate-y-0.5">
                    <i class="fa-brands fa-whatsapp text-xl"></i> Confirm via WhatsApp Booking
                </button>
                <!-- <button onclick="confirmBookingOnline()" class="w-full bg-primary hover:bg-yellow-500 text-secondary py-3.5 rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg transition duration-300 transform hover:-translate-y-0.5">
                    <i class="fa-solid fa-cloud-arrow-up"></i> Submit Request & Track Online
                </button> -->
            </div>
            
            <p class="text-[10px] text-gray-400 text-center mt-2 leading-relaxed">
                *Tolls, parking, and state tax will be extra as per actual receipts.
            </p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<?php 
$page_title = "Chhattisgarh Tour Packages & Tourist Places | Raipur Taxi";
$meta_desc = "Discover the best tourist destinations in Chhattisgarh. Book custom tour packages and outstation cabs for Sirpur, Chitrakote, Barnawapara, and more.";
$meta_keywords = "Chhattisgarh Tour Packages, Raipur Tourist Places, Chhattisgarh Tourism, Raipur Sightseeing";
include 'header.php'; 
include 'tour_data.php';
?>

<!-- Tours Hero Section -->
<section class="relative pt-32 pb-12 md:pt-28 md:pb-12 bg-gray-900 border-b border-gray-800">
    <div class="absolute inset-0 z-0 opacity-50">
        <!-- We use a generic fallback image if the tour hero failed to download -->
        <img src="assets/images/taxi_right.jpg" alt="Raipur Tours" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/90 via-gray-900/80 to-gray-900"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
            Explore Raipur & <span class="text-primary">Chhattisgarh</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto drop-shadow-md">
            Discover the best tourist destinations in and around Raipur with comfortable, reliable and affordable taxi services.
        </p>
        <div class="mt-8 flex justify-center gap-4">
            <a href="index.php#book" class="bg-primary text-gray-900 px-8 py-3.5 rounded-full font-bold hover:bg-yellow-500 transition shadow-lg">Plan Your Trip</a>
            <a href="#destinations" class="bg-white/10 text-white border border-white/20 px-8 py-3.5 rounded-full font-bold hover:bg-white/20 transition backdrop-blur-sm">View Places</a>
        </div>
    </div>
</section>

<!-- Tours Grid Section -->
<section id="destinations" class="py-12 md:py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
            <span class="inline-block py-1.5 px-4 rounded-full bg-primary/10 text-yellow-600 dark:text-primary text-xs font-bold tracking-wider mb-4 border border-primary/20 uppercase">Top Destinations</span>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Tourist Attractions</h2>
            <p class="text-gray-600 dark:text-gray-400">Book our reliable outstation or local cabs to visit any of these amazing places safely and comfortably.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($destinations as $id => $dest): ?>
            <!-- Destination Card -->
            <div class="bg-white dark:bg-gray-800 rounded-3xl overflow-hidden shadow-lg border border-gray-100 dark:border-gray-700 flex flex-col hover:shadow-2xl transition-all duration-300 group">
                <div class="relative h-56 overflow-hidden bg-gray-200 dark:bg-gray-700">
                    <!-- Fallback to placeholder if image not found -->
                    <img src="<?php echo file_exists($dest['image']) ? $dest['image'] : 'assets/images/taxi_right.jpg'; ?>" alt="<?php echo $dest['alt']; ?>" loading="lazy" decoding="async" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-xl font-bold text-white mb-1"><?php echo $dest['name']; ?></h3>
                        <div class="flex items-center text-xs text-gray-300 gap-3">
                            <span><i class="fa-solid fa-route text-primary mr-1"></i> <?php echo $dest['distance']; ?></span>
                            <span><i class="fa-regular fa-clock text-primary mr-1"></i> <?php echo $dest['travel_time']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-grow"><?php echo $dest['short_desc']; ?></p>
                    
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <a href="destination.php?id=<?php echo $id; ?>" class="w-full text-center border border-gray-300 dark:border-gray-600 hover:border-primary dark:hover:border-primary text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary py-2.5 rounded-xl text-sm font-bold transition-colors">View Details</a>
                        <a href="<?php echo $dest['map_link']; ?>" target="_blank" class="w-full text-center border border-gray-300 dark:border-gray-600 hover:border-blue-500 dark:hover:border-blue-500 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 py-2.5 rounded-xl text-sm font-bold transition-colors"><i class="fa-solid fa-map-location-dot"></i> Directions</a>
                    </div>
                    <a href="index.php#book" class="block w-full text-center bg-gray-100 hover:bg-primary text-gray-800 hover:text-secondary dark:bg-gray-700 dark:hover:bg-primary dark:text-white py-3 rounded-xl font-bold transition-colors shadow-sm">Book Taxi Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Tour Packages Section -->
<section class="py-12 md:py-16 bg-white dark:bg-gray-850 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Popular Raipur Tour Packages</h2>
            <p class="text-gray-600 dark:text-gray-400">Handcrafted itineraries for the perfect trip. Get a customized quote for your family or group.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($tour_packages as $pkg): ?>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-3xl p-6 shadow border border-gray-100 dark:border-gray-700">
                <span class="text-xs font-bold bg-primary/20 text-yellow-600 dark:text-primary px-3 py-1 rounded-full mb-3 inline-block"><i class="fa-solid fa-car-side"></i> <?php echo $pkg['duration']; ?></span>
                <h4 class="text-xl font-bold text-gray-850 dark:text-white mb-2"><?php echo $pkg['title']; ?></h4>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 border-b border-gray-200 dark:border-gray-700 pb-4"><?php echo $pkg['desc']; ?></p>
                <div class="flex gap-3">
                    <a href="https://wa.me/919183555655?text=Hi%20I%20want%20a%20quote%20for%20<?php echo urlencode($pkg['title']); ?>" target="_blank" class="flex-1 bg-[#25D366] hover:bg-[#1ebd5c] text-white text-center py-2.5 rounded-xl font-bold transition-colors text-sm"><i class="fa-brands fa-whatsapp"></i> Get Quote</a>
                    <a href="tel:+919183555655" class="flex-1 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-800 dark:text-white text-center py-2.5 rounded-xl font-bold transition-colors text-sm"><i class="fa-solid fa-phone"></i> Call Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

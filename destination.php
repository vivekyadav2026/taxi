<?php 
include 'tour_data.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$dest = isset($destinations[$id]) ? $destinations[$id] : null;

if (!$dest) {
    header('Location: tours.php');
    exit;
}

$page_title = $dest['name'] . " - Travel Guide & Cab Booking | Raipur Taxi";
$meta_desc = "Plan your trip to " . $dest['name'] . ". Get distance, travel time, best time to visit, and book an outstation taxi from Raipur.";
$meta_keywords = $dest['name'] . " tour, " . $dest['name'] . " travel guide, taxi from Raipur to " . $dest['name'];
$schema_data = '{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "' . $dest['name'] . '",
  "description": "' . strip_tags($dest['short_desc']) . '",
  "image": "https://raipurtaxi.com/' . $dest['image'] . '"
}';

include 'header.php'; 
?>

<!-- Destination Hero Section -->
<section class="relative pt-32 pb-16 md:pt-40 md:pb-32 bg-gray-900 border-b border-gray-800">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo file_exists($dest['image']) ? $dest['image'] : 'assets/images/taxi_right.jpg'; ?>" alt="<?php echo $dest['alt']; ?>" class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-gray-900/20"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-block py-1.5 px-4 rounded-full bg-primary/20 text-primary text-xs font-bold tracking-wider mb-4 border border-primary/30 uppercase">Destination Guide</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg leading-tight">
                <?php echo $dest['name']; ?>
            </h1>
            <p class="text-lg text-gray-300 drop-shadow-md mb-8 flex items-center gap-2">
                <i class="fa-solid fa-location-dot text-primary"></i> <?php echo $dest['location']; ?>
            </p>
            
            <div class="flex flex-wrap gap-4">
                <a href="index.php#book" class="bg-primary hover:bg-yellow-500 text-gray-900 px-8 py-3.5 rounded-xl font-bold shadow-lg transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-taxi"></i> Book Taxi
                </a>
                <a href="<?php echo $dest['map_link']; ?>" target="_blank" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-8 py-3.5 rounded-xl font-bold backdrop-blur-sm transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-map-location-dot"></i> Get Directions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Destination Details Content -->
<section class="py-12 md:py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <div class="mb-8 text-sm font-semibold text-gray-500 dark:text-gray-400">
            <a href="index.php" class="hover:text-primary transition-colors">Home</a> <i class="fa-solid fa-chevron-right text-[10px] mx-2"></i> 
            <a href="tours.php" class="hover:text-primary transition-colors">Tours & Sightseeing</a> <i class="fa-solid fa-chevron-right text-[10px] mx-2"></i> 
            <span class="text-gray-800 dark:text-white"><?php echo $dest['name']; ?></span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Left Content (Main Details) -->
            <div class="lg:col-span-2 space-y-10">
                
                <!-- Overview -->
                <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-sm border border-gray-150 dark:border-gray-750">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 border-b border-gray-100 dark:border-gray-700 pb-3">Destination Overview</h2>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-lg">
                        <?php echo $dest['overview']; ?>
                    </p>
                </div>
                
                <!-- Why Visit & Things To Do -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-sm border border-gray-150 dark:border-gray-750">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl mb-4"><i class="fa-solid fa-star"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Why Visit?</h3>
                        <p class="text-gray-600 dark:text-gray-300"><?php echo $dest['why_visit']; ?></p>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-sm border border-gray-150 dark:border-gray-750">
                        <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary text-xl mb-4"><i class="fa-solid fa-camera"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Things to Do</h3>
                        <p class="text-gray-600 dark:text-gray-300"><?php echo $dest['things_to_do']; ?></p>
                    </div>
                </div>

                <!-- Suggested Itinerary Note -->
                <div class="bg-blue-50 dark:bg-blue-900/20 p-6 rounded-3xl border border-blue-100 dark:border-blue-800/50 flex items-start gap-4">
                    <i class="fa-solid fa-lightbulb text-blue-500 text-2xl mt-1"></i>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-1">Local Travel Tip</h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">Combine this trip with <strong><?php echo $dest['nearby']; ?></strong>. Our customized taxi packages allow you to cover multiple nearby attractions in a single day at very affordable rates.</p>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar (Quick Info & Booking) -->
            <div class="space-y-6">
                <!-- Quick Info Card -->
                <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-150 dark:border-gray-700 overflow-hidden">
                    <div class="bg-gray-900 p-6 text-center">
                        <h3 class="text-xl font-bold text-white">Trip Information</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center gap-4 border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300"><i class="fa-solid fa-route"></i></div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-bold uppercase tracking-wider">Distance from Raipur</p>
                                <p class="text-gray-900 dark:text-white font-bold"><?php echo $dest['distance']; ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300"><i class="fa-regular fa-clock"></i></div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-bold uppercase tracking-wider">Estimated Travel Time</p>
                                <p class="text-gray-900 dark:text-white font-bold"><?php echo $dest['travel_time']; ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300"><i class="fa-solid fa-cloud-sun"></i></div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-bold uppercase tracking-wider">Best Time to Visit</p>
                                <p class="text-gray-900 dark:text-white font-bold"><?php echo $dest['best_time']; ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 border-b border-gray-100 dark:border-gray-700 pb-4">
                            <div class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300"><i class="fa-regular fa-hourglass-half"></i></div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-bold uppercase tracking-wider">Suggested Duration</p>
                                <p class="text-gray-900 dark:text-white font-bold"><?php echo $dest['duration']; ?></p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-yellow-600 dark:text-primary"><i class="fa-solid fa-car"></i></div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 font-bold uppercase tracking-wider">Best Taxi Option</p>
                                <p class="text-gray-900 dark:text-white font-bold"><?php echo $dest['taxi_option']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking CTA Card -->
                <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl shadow-xl p-8 text-center relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-3xl"></div>
                    <div class="relative z-10">
                        <i class="fa-solid fa-taxi text-4xl text-primary mb-4"></i>
                        <h3 class="text-2xl font-bold text-white mb-2">Need a Cab?</h3>
                        <p class="text-gray-400 text-sm mb-6">Book an AC outstation taxi for a comfortable trip to <?php echo explode(',', $dest['name'])[0]; ?>.</p>
                        
                        <a href="index.php#book" class="block w-full bg-primary hover:bg-yellow-500 text-gray-900 py-3.5 rounded-xl font-bold transition-colors mb-3">Book Taxi Online</a>
                        
                        <a href="https://wa.me/919575955655?text=Hi%2C%20I%20need%20a%20cab%20for%20<?php echo urlencode($dest['name']); ?>" target="_blank" class="block w-full bg-[#25D366] hover:bg-[#1ebd5c] text-white py-3.5 rounded-xl font-bold transition-colors flex items-center justify-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

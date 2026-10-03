<?php
$from = isset($_GET['from']) ? ucwords(str_replace('-', ' ', $_GET['from'])) : 'Raipur';
$to = isset($_GET['to']) ? ucwords(str_replace('-', ' ', $_GET['to'])) : 'Destination';

$page_title = "$from to $to Taxi Service | Outstation Cabs - Raipur Taxi";
$meta_desc = "Book reliable and affordable taxi service from $from to $to. Safe rides, professional drivers, and clean cars for your outstation trip. Get an instant quote.";
$meta_keywords = "$from to $to taxi, $from to $to cab, book taxi $from to $to, outstation taxi $from";

include 'header.php';
?>

<section class="relative pt-32 pb-16 md:pt-40 md:pb-24 bg-gray-900 border-b border-gray-800">
    <div class="absolute inset-0 z-0">
        <img src="assets/images/taxi_right.jpg" alt="Taxi from <?php echo $from; ?> to <?php echo $to; ?>" class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-gray-900/20"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block py-1.5 px-4 rounded-full bg-primary/20 text-primary text-xs font-bold tracking-wider mb-4 border border-primary/30 uppercase">Premium Outstation Taxi</span>
        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-red-600 to-red-500 text-white px-4 py-2 rounded-xl shadow-lg border border-red-400 animate-pulse mb-6 mt-2">
            <i class="fa-solid fa-gift text-yellow-300"></i>
            <span class="text-sm font-bold tracking-wide uppercase">Special Offer: Flat 20% OFF on Round Trips!</span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg leading-tight">
            <span class="text-primary"><?php echo $from; ?></span> to <span class="text-primary"><?php echo $to; ?></span> Taxi Service
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto drop-shadow-md mb-8">
            Enjoy a safe, comfortable, and affordable outstation ride from <?php echo $from; ?> to <?php echo $to; ?> with our verified drivers.
        </p>
        
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="tel:+9183555655" class="bg-primary hover:bg-yellow-500 text-gray-900 px-8 py-3.5 rounded-xl font-bold shadow-lg transition-colors flex items-center gap-2">
                <i class="fa-solid fa-phone"></i> Call to Book
            </a>
            <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20taxi%20from%20<?php echo urlencode($from); ?>%20to%20<?php echo urlencode($to); ?>" target="_blank" class="bg-[#25D366] hover:bg-[#1ebd5c] text-white px-8 py-3.5 rounded-xl font-bold shadow-lg transition-colors flex items-center gap-2">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Us
            </a>
        </div>
    </div>
</section>

<section class="py-12 md:py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Why Book Our <?php echo $from; ?> to <?php echo $to; ?> Cab?</h2>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-gray-700 dark:text-gray-300"><i class="fa-solid fa-check-circle text-primary text-xl"></i> Transparent Pricing, No Hidden Charges</li>
                    <li class="flex items-center gap-3 text-gray-700 dark:text-gray-300"><i class="fa-solid fa-check-circle text-primary text-xl"></i> 24/7 Availability for Outstation & Airport</li>
                    <li class="flex items-center gap-3 text-gray-700 dark:text-gray-300"><i class="fa-solid fa-check-circle text-primary text-xl"></i> Experienced Drivers & Well-Maintained Cabs (Dzire, Ertiga, Innova)</li>
                    <li class="flex items-center gap-3 text-gray-700 dark:text-gray-300"><i class="fa-solid fa-check-circle text-primary text-xl"></i> Door-to-Door Pickup and Drop</li>
                </ul>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm">
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">Get an Instant Quote!</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Click below to message us on WhatsApp with your travel details and get the best price for your trip.</p>
                    <a href="https://wa.me/919183555655?text=Hi%2C%20What%20is%20the%20price%20for%20a%20taxi%20from%20<?php echo urlencode($from); ?>%20to%20<?php echo urlencode($to); ?>%3F" target="_blank" class="block text-center bg-gray-900 dark:bg-white text-white dark:text-gray-900 py-3 rounded-xl font-bold hover:bg-gray-800 dark:hover:bg-gray-100 transition">Get Price on WhatsApp</a>
                </div>
            </div>
            <div>
                 <img src="assets/images/hero_girl.jpg" alt="Outstation Cab <?php echo $to; ?>" class="rounded-3xl shadow-xl w-full h-[400px] object-cover">
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<?php
$from = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : 'Raipur';
$to = isset($_GET['to']) ? htmlspecialchars($_GET['to']) : '';
$service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : ($to == '' ? "$from Taxi Service" : "$from to $to Taxi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <title>Premium Cab Service | <?php echo $service; ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    colors: { primary: '#FFD700', dark: '#111827', accent: '#FBBF24' }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom); }
    </style>
    
    <!-- Google Ads Tag (Dummy - Replace AW-CONVERSION_ID) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JP3H1G4K9H">
</script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JP3H1G4K9H');
</script>
</head>
<body class="text-gray-800 antialiased pb-24 md:pb-0 relative min-h-screen">

    <!-- Minimal Header (No distractions) -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img src="assets/images/logo.png" alt="RaipurTaxi Logo" class="h-12 w-auto object-contain">
                <span class="font-extrabold text-2xl text-dark hidden sm:block">Raipur<span class="text-primary">Taxi</span></span>
            </div>
        </div>
    </header>

    <!-- Main Campaign Content -->
    <main class="max-w-6xl mx-auto px-4 py-4 md:py-8">
        
        <!-- Offer Banner -->
        <div class="bg-gradient-to-r from-red-600 to-red-500 text-white rounded-2xl p-4 flex flex-col sm:flex-row items-center justify-between shadow-lg shadow-red-500/20 mb-6 border border-red-400 gap-4 sm:gap-0">
            <div class="flex items-center gap-4">
                <div class="bg-white/20 w-12 h-12 rounded-xl flex items-center justify-center shrink-0 shadow-inner">
                    <i class="fa-solid fa-gift text-2xl text-yellow-300 animate-bounce"></i>
                </div>
                <div>
                    <h3 class="font-black text-base md:text-lg tracking-wide">LIMITED TIME OFFER</h3>
                    <p class="text-xs md:text-sm font-medium opacity-90">Get <span class="font-bold text-yellow-300">Flat 20% OFF</span> on Outstation & Local Rentals!</p>
                </div>
            </div>
            <a href="https://wa.me/919183555655?text=Hi%2C%20I%20saw%20the%20Google%20Ad.%20I%20want%20to%20claim%20the%2020%25%20discount%20offer." target="_blank" class="bg-white hover:bg-gray-50 text-red-600 px-6 py-2.5 rounded-xl font-extrabold text-sm shadow-md transition-transform hover:-translate-y-0.5 whitespace-nowrap w-full sm:w-auto text-center flex items-center justify-center gap-2" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
                <i class="fa-brands fa-whatsapp text-lg text-[#25D366]"></i> Claim on WhatsApp
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Side: Ad Copy & Trust Signals -->
            <div class="lg:col-span-7">
                <span class="inline-block bg-primary/20 text-yellow-700 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5 border border-primary/30">Premium Cab Service</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6 text-dark tracking-tight">
                    <?php if($to == ''): ?>
                        Premium Taxi Service in <br><span class="text-primary relative inline-block mt-2">
                            <?php echo $from; ?>
                            <svg class="absolute w-full h-3 -bottom-1 left-0 text-primary opacity-30" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="none"/></svg>
                        </span>
                    <?php else: ?>
                        Comfortable Ride from <br><span class="text-primary relative inline-block mt-2">
                            <?php echo $from; ?> to <?php echo $to; ?>
                            <svg class="absolute w-full h-3 -bottom-1 left-0 text-primary opacity-30" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="none"/></svg>
                        </span>
                    <?php endif; ?>
                </h1>
                <p class="text-gray-600 text-lg md:text-xl mb-6 font-medium leading-relaxed">Top-rated sanitised cabs, professional drivers, and absolutely zero hidden charges. Get a confirmed cab in just 2 minutes.</p>
                
                <div class="flex flex-wrap items-center gap-3 mb-8">
                    <a href="https://wa.me/919183555655?text=Hi%2C%20I%20saw%20the%20Google%20Ad.%20I%20want%20to%20book%20a%20taxi." target="_blank" class="bg-[#25D366] hover:bg-[#20ba59] text-white px-6 py-3.5 rounded-2xl font-extrabold text-sm sm:text-base transition-all shadow-lg shadow-green-500/25 flex items-center gap-2.5 transform hover:-translate-y-0.5" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
                        <i class="fa-brands fa-whatsapp text-2xl"></i> Chat &amp; Book on WhatsApp
                    </a>
                    <a href="tel:+919183555655" class="bg-dark hover:bg-black text-white px-6 py-3.5 rounded-2xl font-extrabold text-sm sm:text-base transition-all shadow-md flex items-center gap-2.5 transform hover:-translate-y-0.5" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/call_click'});">
                        <i class="fa-solid fa-phone text-primary"></i> Call: +91 9183555655
                    </a>
                </div>

                <div class="space-y-5 bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-green-100 text-green-600 flex items-center justify-center shrink-0 shadow-inner"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                        <div>
                            <p class="font-extrabold text-gray-800 text-base">Transparent Billing</p>
                            <p class="text-xs text-gray-500">No hidden costs. Pay exactly what you see.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0 shadow-inner"><i class="fa-solid fa-car-sparkles"></i></div>
                        <div>
                            <p class="font-extrabold text-gray-800 text-base">Clean & Sanitised Cabs</p>
                            <p class="text-xs text-gray-500">Sedans and SUVs available in pristine condition.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center shrink-0 shadow-inner"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <p class="font-extrabold text-gray-800 text-base">On-Time Guarantee</p>
                            <p class="text-xs text-gray-500">Punctual pickups so you never miss a flight or meeting.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: High Converting Lead Form -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-gray-100 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2.5 bg-gradient-to-r from-primary to-accent"></div>
                    
                    <div class="text-center mb-6 mt-2">
                        <h2 class="text-2xl md:text-3xl font-black text-dark mb-2">Get an Instant Quote</h2>
                        <p class="text-gray-500 text-sm font-medium">Fill details and get the best fare directly on WhatsApp.</p>
                    </div>
                    
                    <form id="adsBookingForm" onsubmit="handleAdsSubmit(event)" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">Pickup Location</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400"><i class="fa-solid fa-location-dot"></i></div>
                                <input type="text" id="pickup" value="<?php echo $from; ?>" required class="w-full pl-10 pr-4 py-3.5 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all text-sm font-bold text-dark">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide"><?php echo $to == '' ? 'Drop Location (Optional)' : 'Drop Location'; ?></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400"><i class="fa-solid fa-map-pin"></i></div>
                                <input type="text" id="drop" value="<?php echo $to; ?>" <?php echo $to == '' ? 'placeholder="e.g. Airport, Naya Raipur, etc."' : 'required'; ?> class="w-full pl-10 pr-4 py-3.5 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all text-sm font-bold text-dark">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">Travel Date</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400"><i class="fa-solid fa-calendar-day"></i></div>
                                <input type="date" id="date" required class="w-full pl-10 pr-4 py-3.5 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all text-sm font-bold text-gray-600">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">WhatsApp Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400"><i class="fa-brands fa-whatsapp"></i></div>
                                <input type="tel" id="phone" placeholder="10-digit number" required pattern="[0-9]{10}" class="w-full pl-10 pr-4 py-3.5 rounded-xl bg-gray-50 border border-gray-200 focus:bg-white focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all text-sm font-bold text-dark">
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white font-black py-4.5 rounded-xl shadow-xl shadow-green-500/25 transition-all transform hover:-translate-y-1 mt-6 text-base tracking-wide flex justify-center items-center gap-2 group">
                            <i class="fa-brands fa-whatsapp text-2xl"></i> Get Fare on WhatsApp <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        
                        <p class="text-center text-[10px] font-bold text-gray-400 mt-4 uppercase tracking-widest"><i class="fa-solid fa-shield-halved"></i> 100% Safe & Secure Booking</p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Our Services Section -->
    <section class="max-w-6xl mx-auto px-4 py-8 border-t border-gray-100">
        <div class="text-center mb-6">
            <span class="text-primary font-black tracking-widest uppercase text-xs">What We Offer</span>
            <h2 class="text-3xl font-black text-dark mt-2">Premium Taxi Services</h2>
            <p class="text-gray-500 mt-2 font-medium">Reliable and comfortable rides for every need.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Local -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all group relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-primary/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center mb-4 border border-gray-100 text-dark group-hover:bg-primary group-hover:text-white transition-colors relative z-10">
                    <i class="fa-solid fa-city text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2 relative z-10">Local Rentals</h3>
                <p class="text-gray-500 text-sm font-medium mb-4 relative z-10">8Hr/80Km packages for city tours, shopping, and meetings.</p>
                <a href="services.php" class="text-primary font-bold text-sm flex items-center gap-2 group-hover:text-dark transition-colors relative z-10">Know More <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
            
            <!-- Outstation -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all group relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-primary/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center mb-4 border border-gray-100 text-dark group-hover:bg-primary group-hover:text-white transition-colors relative z-10">
                    <i class="fa-solid fa-route text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2 relative z-10">Outstation Drops</h3>
                <p class="text-gray-500 text-sm font-medium mb-4 relative z-10">One-way and round-trip outstation rides at lowest fares.</p>
                <a href="services.php" class="text-primary font-bold text-sm flex items-center gap-2 group-hover:text-dark transition-colors relative z-10">Know More <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
            
            <!-- Airport -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all group relative overflow-hidden">
                <div class="absolute -right-6 -top-6 w-24 h-24 bg-primary/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
                <div class="w-14 h-14 bg-gray-50 rounded-2xl flex items-center justify-center mb-4 border border-gray-100 text-dark group-hover:bg-primary group-hover:text-white transition-colors relative z-10">
                    <i class="fa-solid fa-plane-departure text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-2 relative z-10">Airport Transfers</h3>
                <p class="text-gray-500 text-sm font-medium mb-4 relative z-10">Punctual pick and drop from Swami Vivekananda Airport.</p>
                <a href="services.php" class="text-primary font-bold text-sm flex items-center gap-2 group-hover:text-dark transition-colors relative z-10">Know More <i class="fa-solid fa-arrow-right text-xs"></i></a>
            </div>
        </div>
    </section>

    <!-- Transparent Pricing & Fleet Section -->
    <section class="max-w-6xl mx-auto px-4 py-8 bg-gray-50/50 rounded-[3rem] border border-gray-100 my-4">
        <div class="text-center mb-6">
            <span class="text-primary font-black tracking-widest uppercase text-xs">Our Fleet</span>
            <h2 class="text-3xl font-black text-dark mt-2">Transparent Pricing</h2>
            <p class="text-gray-500 mt-2 font-medium">No hidden charges. Choose the best cab for your journey.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-0 md:px-4">
            <!-- Sedan -->
            <div class="bg-white rounded-[2rem] border border-gray-200 shadow-md hover:shadow-xl transition-all p-6 relative flex flex-col items-center text-center group">
                <img src="assets/images/swift_dzire.png" alt="Sedan Taxi" class="w-48 h-auto object-contain mb-4 group-hover:scale-110 transition-transform duration-500">
                <h3 class="text-2xl font-black text-dark">Sedan</h3>
                <p class="text-gray-500 text-sm font-medium mb-4">Swift Dzire, Etios or similar</p>
                <div class="bg-gray-50 w-full rounded-2xl py-3 mb-4 border border-gray-100">
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider mb-1">Starting From</p>
                    <p class="text-2xl font-black text-primary">&#8377;11 <span class="text-sm text-gray-500 font-medium">/ Km</span></p>
                </div>
                <ul class="text-sm font-bold text-gray-600 mb-6 space-y-2 text-left w-full px-2">
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> AC Equipped</li>
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> 4 Seats + Luggage</li>
                </ul>
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20Sedan%20Taxi." target="_blank" class="w-full bg-gray-900 hover:bg-black text-white font-bold py-3 rounded-xl transition-all shadow-md mt-auto flex items-center justify-center gap-2" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});"><i class="fa-brands fa-whatsapp text-green-400 text-lg"></i> Book Sedan</a>
            </div>
            
            <!-- SUV -->
            <div class="bg-white rounded-[2rem] border border-primary shadow-xl p-6 relative flex flex-col items-center text-center group transform md:-translate-y-4">
                <div class="absolute -top-4 bg-primary text-yellow-900 text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full shadow-sm">Most Popular</div>
                <img src="assets/images/ertiga.png" alt="SUV Taxi" class="w-48 h-auto object-contain mb-4 group-hover:scale-110 transition-transform duration-500 mt-2">
                <h3 class="text-2xl font-black text-dark">SUV</h3>
                <p class="text-gray-500 text-sm font-medium mb-4">Ertiga, Carens or similar</p>
                <div class="bg-primary/10 w-full rounded-2xl py-3 mb-4 border border-primary/20">
                    <p class="text-gray-500 text-[10px] font-black uppercase tracking-wider mb-1">Starting From</p>
                    <p class="text-3xl font-black text-dark">&#8377;14 <span class="text-sm text-gray-600 font-medium">/ Km</span></p>
                </div>
                <ul class="text-sm font-bold text-gray-600 mb-6 space-y-2 text-left w-full px-2">
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> Dual AC</li>
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> 6 Seats + Carrier</li>
                </ul>
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20an%20SUV%20Taxi%20(Ertiga)." target="_blank" class="w-full bg-primary hover:bg-accent text-yellow-900 font-black py-3.5 rounded-xl transition-all shadow-lg mt-auto flex items-center justify-center gap-2" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});"><i class="fa-brands fa-whatsapp text-green-800 text-lg"></i> Book SUV</a>
            </div>
            
            <!-- Premium SUV -->
            <div class="bg-white rounded-[2rem] border border-gray-200 shadow-md hover:shadow-xl transition-all p-6 relative flex flex-col items-center text-center group">
                <img src="assets/images/innova.png" alt="Premium SUV" class="w-48 h-auto object-contain mb-4 group-hover:scale-110 transition-transform duration-500">
                <h3 class="text-2xl font-black text-dark">Premium SUV</h3>
                <p class="text-gray-500 text-sm font-medium mb-4">Innova Crysta</p>
                <div class="bg-gray-50 w-full rounded-2xl py-3 mb-4 border border-gray-100">
                    <p class="text-gray-400 text-[10px] font-black uppercase tracking-wider mb-1">Starting From</p>
                    <p class="text-2xl font-black text-primary">&#8377;18 <span class="text-sm text-gray-500 font-medium">/ Km</span></p>
                </div>
                <ul class="text-sm font-bold text-gray-600 mb-6 space-y-2 text-left w-full px-2">
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> Luxury Interiors</li>
                    <li class="flex items-center gap-3"><div class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex justify-center items-center text-xs"><i class="fa-solid fa-check"></i></div> 7 Seats + Carrier</li>
                </ul>
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20an%20Innova%20Crysta." target="_blank" class="w-full bg-gray-900 hover:bg-black text-white font-bold py-3 rounded-xl transition-all shadow-md mt-auto flex items-center justify-center gap-2" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});"><i class="fa-brands fa-whatsapp text-green-400 text-lg"></i> Book Crysta</a>
            </div>
        </div>
    </section>

    <!-- Fast WhatsApp Booking Banner -->
    <section class="max-w-6xl mx-auto px-4 py-4">
        <div class="bg-gradient-to-r from-gray-900 via-dark to-gray-900 rounded-[2.5rem] p-6 md:p-8 text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl border border-gray-800">
            <div class="flex items-center gap-4 text-center md:text-left flex-col md:flex-row">
                <div class="w-16 h-16 rounded-2xl bg-[#25D366]/20 border border-[#25D366]/40 flex items-center justify-center text-[#25D366] text-3xl shrink-0">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-black text-white">Need an Instant Cab or Custom Quote?</h3>
                    <p class="text-gray-300 text-sm mt-1">Chat directly with our booking team on WhatsApp for immediate confirmation &amp; best rates.</p>
                </div>
            </div>
            <a href="https://wa.me/919183555655?text=Hi%2C%20I%20saw%20the%20Google%20Ad.%20I%20want%20to%20inquire%20about%20taxi%20booking." target="_blank" class="bg-[#25D366] hover:bg-[#20ba59] text-white px-8 py-4 rounded-2xl font-black text-base transition-all shadow-lg shadow-green-500/30 flex items-center gap-3 shrink-0 whitespace-nowrap transform hover:-translate-y-0.5" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
                <i class="fa-brands fa-whatsapp text-2xl"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

    <!-- Top Tours Section -->
    <section class="max-w-6xl mx-auto px-4 py-8 mb-4">
        <div class="text-center mb-6">
            <span class="text-primary font-black tracking-widest uppercase text-xs">Explore Chhattisgarh</span>
            <h2 class="text-3xl font-black text-dark mt-2">Popular Tour Packages</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Tour 1 -->
            <a href="tours.php" class="block relative h-48 rounded-2xl overflow-hidden group shadow-md">
                <img src="assets/images/tours/jungle-safari-raipur.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='assets/images/taxi_right.jpg'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Nandanvan Safari</h3>
                    <p class="text-primary text-xs font-bold uppercase tracking-wider">View Tour</p>
                </div>
            </a>
            
            <!-- Tour 2 -->
            <a href="tours.php" class="block relative h-48 rounded-2xl overflow-hidden group shadow-md">
                <img src="assets/images/tours/sirpur-historical-site.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='assets/images/hero_girl.jpg'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Sirpur Heritage</h3>
                    <p class="text-primary text-xs font-bold uppercase tracking-wider">View Tour</p>
                </div>
            </a>
            
            <!-- Tour 3 -->
            <a href="tours.php" class="block relative h-48 rounded-2xl overflow-hidden group shadow-md">
                <img src="assets/images/tours/ghatarani-waterfall-raipur.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" onerror="this.src='assets/images/hero_mobile.jpg'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-white font-bold text-lg">Ghatarani Falls</h3>
                    <p class="text-primary text-xs font-bold uppercase tracking-wider">View Tour</p>
                </div>
            </a>
            
            <!-- View All -->
            <a href="tours.php" class="block relative h-48 rounded-2xl overflow-hidden group bg-dark border-2 border-primary/20 flex flex-col items-center justify-center text-center p-4 hover:bg-black transition-colors">
                <div class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center mb-3">
                    <i class="fa-solid fa-arrow-right text-primary text-xl group-hover:translate-x-1 transition-transform"></i>
                </div>
                <h3 class="text-white font-bold text-lg">All Packages</h3>
                <p class="text-gray-400 text-xs mt-1">Explore all tours</p>
            </a>
        </div>
    </section>

    <!-- Premium Footer with Important Links -->
    <footer class="bg-white border-t border-gray-200 mt-6 pb-24 md:pb-4 pt-6">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 mb-6">
                <a href="index.php" class="text-gray-500 hover:text-primary font-bold text-sm transition">Home</a>
                <a href="about.php" class="text-gray-500 hover:text-primary font-bold text-sm transition">About Us</a>
                <a href="services.php" class="text-gray-500 hover:text-primary font-bold text-sm transition">Services</a>
                <a href="tours.php" class="text-gray-500 hover:text-primary font-bold text-sm transition">Tour Packages</a>
                <a href="contact.php" class="text-gray-500 hover:text-primary font-bold text-sm transition">Contact</a>
            </div>
            <p class="text-gray-400 text-xs font-medium">&copy; <?php echo date('Y'); ?> Raipur Taxi Services. All rights reserved.</p>
        </div>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div class="md:hidden fixed bottom-0 left-0 w-full bg-white/90 backdrop-blur-md border-t border-gray-200 shadow-[0_-10px_20px_rgba(0,0,0,0.05)] z-50 flex p-3 gap-3 pb-safe">
        <a href="tel:+919183555655" class="flex-1 bg-gray-100 text-dark flex items-center justify-center gap-2 py-3.5 rounded-xl font-black text-sm border border-gray-200 shadow-sm" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/call_click'});">
            <i class="fa-solid fa-phone"></i> Call Us
        </a>
        <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20taxi." class="flex-[1.5] bg-[#25D366] text-white flex items-center justify-center gap-2 py-3.5 rounded-xl font-black text-sm shadow-lg shadow-green-500/30" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
            <i class="fa-brands fa-whatsapp text-xl"></i> WhatsApp
        </a>
    </div>

    <!-- Floating WhatsApp Widget (All Devices) -->
    <a href="https://wa.me/919183555655?text=Hi%2C%20I%20saw%20the%20Google%20Ad.%20I%20want%20to%20book%20a%20taxi." target="_blank" class="fixed z-50 bottom-24 right-4 md:bottom-8 md:right-8 flex items-center gap-3 group" aria-label="Chat on WhatsApp" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
        <div class="bg-white px-4 py-2 rounded-xl shadow-lg border border-gray-100 text-sm font-bold text-gray-800 hidden md:block opacity-0 group-hover:opacity-100 translate-x-4 group-hover:translate-x-0 transition-all duration-300 whitespace-nowrap">
            Need a cab? Chat on WhatsApp!
        </div>
        <div class="w-14 h-14 md:w-16 md:h-16 bg-[#25D366] hover:bg-[#20ba59] text-white rounded-full flex items-center justify-center text-3xl shadow-[0_4px_20px_rgba(37,211,102,0.45)] relative hover:scale-110 transition-transform">
            <i class="fa-brands fa-whatsapp relative z-10"></i>
            <div class="absolute inset-0 bg-[#25D366] rounded-full animate-ping opacity-75"></div>
        </div>
    </a>

    <!-- Modern Offers Modal (Bottom Sheet on Mobile) -->
    <div id="offersModal" class="fixed inset-0 z-[110] flex items-end md:items-center justify-center hidden pointer-events-none">
        
        <!-- Backdrop -->
        <div id="offersBackdrop" class="absolute inset-0 bg-black/70 backdrop-blur-sm opacity-0 transition-opacity duration-500 pointer-events-auto" onclick="closeOffersModal()"></div>
        
        <!-- Modal Box -->
        <div id="offersModalContent" class="relative bg-white text-gray-800 w-full md:w-11/12 md:max-w-md rounded-t-3xl md:rounded-[2rem] shadow-2xl overflow-hidden transform translate-y-full md:translate-y-10 md:scale-95 opacity-0 md:opacity-100 transition-all duration-500 ease-out pointer-events-auto flex flex-col max-h-[90vh]">
            
            <!-- Mobile Swipe Indicator -->
            <div class="absolute top-2 left-0 right-0 flex justify-center z-30 md:hidden" onclick="closeOffersModal()">
                <div class="w-12 h-1.5 bg-white/40 rounded-full"></div>
            </div>

            <!-- Close Button -->
            <button onclick="closeOffersModal()" aria-label="Close offers" class="absolute top-4 right-4 bg-black/40 hover:bg-black/70 text-white w-8 h-8 rounded-full flex items-center justify-center backdrop-blur-md transition z-20">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
            
            <!-- Header Image -->
            <div class="h-28 md:h-40 bg-gray-900 relative shrink-0">
                <img src="assets/images/hero_girl.jpg" class="w-full h-full object-cover opacity-90" alt="Travel Deals">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>
                <div class="absolute bottom-4 left-5 right-5 text-white">
                    <span class="inline-block bg-red-600 text-[9px] md:text-[10px] font-black px-2 py-0.5 rounded shadow-md uppercase tracking-widest mb-1 animate-pulse">Limited Time</span>
                    <h3 class="text-2xl md:text-3xl font-black drop-shadow-md leading-tight">Exclusive Deals!</h3>
                </div>
            </div>
            
            <!-- Content -->
            <div class="p-5 md:p-7 overflow-y-auto">
                <p class="text-gray-600 text-xs md:text-sm mb-5 font-medium">Book your ride today with Raipur Taxi and save big on your next outstation or local trip.</p>
                
                <div class="space-y-3 mb-6">
                    <!-- Offer 1 -->
                    <div class="flex items-center gap-3 md:gap-4 bg-gray-50 p-3 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center text-lg md:text-xl shrink-0 shadow-inner">
                            <i class="fa-solid fa-rotate-left"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-gray-900 text-sm md:text-base leading-tight">20% OFF Round Trips</h4>
                            <p class="text-[10px] md:text-[11px] text-gray-500 mt-0.5">Valid on all outstation return journeys.</p>
                        </div>
                    </div>
                    
                    <!-- Offer 2 -->
                    <div class="flex items-center gap-3 md:gap-4 bg-gray-50 p-3 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-lg md:text-xl shrink-0 shadow-inner">
                            <i class="fa-solid fa-tag"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-gray-900 text-sm md:text-base leading-tight">Flat &#8377;200 OFF</h4>
                            <p class="text-[10px] md:text-[11px] text-gray-500 mt-0.5">On your very first outstation ride.</p>
                        </div>
                    </div>
                    
                    <!-- Offer 3 -->
                    <div class="flex items-center gap-3 md:gap-4 bg-gray-50 p-3 rounded-2xl border border-gray-100 shadow-sm">
                        <div class="w-10 h-10 md:w-12 md:h-12 bg-yellow-100 text-yellow-600 rounded-xl flex items-center justify-center text-lg md:text-xl shrink-0 shadow-inner">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-extrabold text-gray-900 text-sm md:text-base leading-tight">10% Extra Discount</h4>
                            <p class="text-[10px] md:text-[11px] text-gray-500 mt-0.5">When you book 48 hours in advance.</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA -->
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20claim%20the%20Special%20Offers%20for%20my%20taxi%20booking!" target="_blank" class="block w-full bg-[#25D366] hover:bg-[#1ebd5c] text-white text-center py-3.5 md:py-4 rounded-xl font-extrabold shadow-lg shadow-green-500/30 transition-all active:scale-95 text-sm md:text-base" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/whatsapp_click'});">
                    <i class="fa-brands fa-whatsapp text-lg md:text-xl mr-1.5 align-middle"></i> <span class="align-middle">Claim via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Floating Offers Button -->
    <button onclick="reopenOffersModal()" class="fixed left-4 bottom-24 md:left-auto md:bottom-auto md:right-6 md:top-28 z-[90] bg-gradient-to-tr from-red-600 to-pink-500 text-white w-14 h-14 rounded-full shadow-[0_8px_20px_rgba(220,38,38,0.5)] flex flex-col items-center justify-center transition-all hover:scale-110 border-2 border-white group md:animate-pulse" aria-label="View Offers">
        <i class="fa-solid fa-gift text-xl animate-bounce"></i>
        <span class="text-[9px] font-black uppercase tracking-wider mt-0.5">Offers</span>
        <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-yellow-500 border border-white"></span>
        </span>
    </button>

    <script>
        const dateInput = document.getElementById('date');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.min = today;
            dateInput.value = today;
        }

        function handleAdsSubmit(e) {
            e.preventDefault();
            const from = document.getElementById('pickup').value;
            const to = document.getElementById('drop').value || 'Local';
            const date = document.getElementById('date').value;
            const phone = document.getElementById('phone').value;
            
            if (typeof gtag === 'function') {
                gtag('event', 'conversion', { 'send_to': 'AW-CONVERSION_ID/booking_submit' });
                gtag('event', 'conversion', { 'send_to': 'AW-CONVERSION_ID/whatsapp_click' });
            }

            const msg = `*🚀 New Google Ads Lead*%0A%0A*Pickup:* ${encodeURIComponent(from)}%0A*Drop:* ${encodeURIComponent(to)}%0A*Date:* ${encodeURIComponent(date)}%0A*Customer Phone:* ${encodeURIComponent(phone)}%0A%0A_Please provide the best quote._`;
            const waUrl = `https://wa.me/919183555655?text=${msg}`;
            window.location.href = waUrl;
        }

        /* Offers Modal Functions */
        function reopenOffersModal() {
            const modal = document.getElementById('offersModal');
            const content = document.getElementById('offersModalContent');
            const backdrop = document.getElementById('offersBackdrop');
            if (modal && content && backdrop) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    backdrop.classList.add('opacity-100');
                    content.classList.remove('translate-y-full', 'md:translate-y-10', 'md:scale-95', 'opacity-0');
                    content.classList.add('translate-y-0', 'md:translate-y-0', 'md:scale-100', 'opacity-100');
                }, 50);
            }
        }

        function closeOffersModal() {
            const modal = document.getElementById('offersModal');
            const content = document.getElementById('offersModalContent');
            const backdrop = document.getElementById('offersBackdrop');
            
            if (backdrop) {
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
            }
            if (content) {
                content.classList.remove('translate-y-0', 'md:translate-y-0', 'md:scale-100', 'opacity-100');
                content.classList.add('translate-y-full', 'md:translate-y-10', 'md:scale-95', 'opacity-0');
            }
            
            setTimeout(() => {
                if (modal) modal.classList.add('hidden');
            }, 500);
            
            sessionStorage.setItem('raipurtaxi_offers_shown', 'true');
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (!sessionStorage.getItem('raipurtaxi_offers_shown')) {
                setTimeout(() => {
                    const modal = document.getElementById('offersModal');
                    const content = document.getElementById('offersModalContent');
                    const backdrop = document.getElementById('offersBackdrop');
                    
                    if (modal && content && backdrop) {
                        modal.classList.remove('hidden');
                        setTimeout(() => {
                            backdrop.classList.remove('opacity-0');
                            backdrop.classList.add('opacity-100');
                            content.classList.remove('translate-y-full', 'md:translate-y-10', 'md:scale-95', 'opacity-0');
                            content.classList.add('translate-y-0', 'md:translate-y-0', 'md:scale-100', 'opacity-100');
                        }, 50);
                    }
                }, 1500);
            }
        });
    </script>
</body>
</html>






<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
// Default SEO Meta Tags
$seo_title = isset($page_title) ? $page_title : "Raipur Taxi & Tour Travel | Chhattisgarh & India Tours";
$seo_desc = isset($meta_desc) ? $meta_desc : "Book reliable taxi, sightseeing and customized tour services in Raipur, Chhattisgarh and across India. Explore India with local travel assistance and airport transfers.";
$seo_keys = isset($meta_keywords) ? $meta_keywords : "Raipur Taxi, Raipur Tour and Travel, Chhattisgarh Tour Packages, India Tour Packages, Raipur Travel Agency";
$seo_canonical = isset($canonical_url) ? $canonical_url : "https://raipurtaxi.com" . $_SERVER['REQUEST_URI'];
?>
    <title><?php echo $seo_title; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $seo_desc; ?>">
    <meta name="keywords" content="<?php echo $seo_keys; ?>">
    <link rel="canonical" href="<?php echo $seo_canonical; ?>">
    
    <!-- Open Graph / Social -->
    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:description" content="<?php echo $seo_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $seo_canonical; ?>">

    <?php if(isset($schema_data)): ?>
    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    <?php echo $schema_data; ?>
    </script>
    <?php endif; ?>
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#FFD700', // Taxi Yellow
                        secondary: '#111827', // Dark Gray/Black
                        accent: '#FBBF24',
                        'gray-150': '#EEF1F6',
                        'gray-250': '#DDE2EC',
                        'gray-650': '#4B5563',
                        'gray-655': '#374151',
                        'gray-850': '#1E2530', // Premium Slate-Dark hybrid for perfect elevation in dark mode
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">

    <!-- Loader -->
    <div class="loader-wrapper" id="loader">
        <span class="loader"></span>
    </div>

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 glass-card dark:glass-dark" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="flex items-center gap-3 group">
                        <img src="assets/images/logo.png" alt="RaipurTaxi Logo" class="h-[55px] md:h-[70px] w-auto object-contain bg-white rounded-xl p-1 transition-transform duration-300 group-hover:scale-105">
                        <span class="font-extrabold text-2xl md:text-3xl tracking-tight text-secondary dark:text-white hidden sm:block">Raipur<span class="text-primary">Taxi</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-5 text-sm">
                    <a href="index.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-home">Home</a>
                    <a href="about.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-about">About</a>
                    <a href="tours.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-tours">Tours</a>
                    <a href="services.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-services">Services</a>
                    <a href="driver-registration.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-drive">Drive</a>
                    <a href="contact.php" class="text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary font-semibold transition whitespace-nowrap" data-translate="nav-contact">Contact</a>
                    
                    <!-- Language Switcher -->
                    <button id="lang-toggle" class="px-2.5 py-1.5 flex items-center gap-1.5 rounded-full border border-gray-300 dark:border-gray-650 hover:bg-gray-100 dark:hover:bg-gray-800 transition text-xs font-bold text-gray-700 dark:text-gray-300 hover:border-primary">
                        <i class="fa-solid fa-globe text-primary"></i>
                        <span id="lang-text">HI</span>
                    </button>

                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <i class="fa-solid fa-moon text-gray-600 dark:text-gray-300 hidden" id="theme-toggle-dark-icon"></i>
                        <i class="fa-solid fa-sun text-yellow-400 hidden" id="theme-toggle-light-icon"></i>
                    </button>

                    <!-- CTA Button -->
                    <a href="index.php#book" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-gray-900 px-6 py-2.5 rounded-full font-bold hover:from-yellow-300 hover:to-yellow-500 hover:shadow-[0_0_15px_rgba(255,215,0,0.4)] transition-all duration-300 transform hover:-translate-y-0.5 whitespace-nowrap" data-translate="book-ride-btn">
                        Book Ride
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center gap-3">
                    <!-- Language Switcher Mobile -->
                    <button id="lang-toggle-mobile" class="px-2 py-1 flex items-center gap-1 rounded-full border border-gray-300 dark:border-gray-650 hover:bg-gray-100 dark:hover:bg-gray-800 transition text-xs font-bold text-gray-700 dark:text-gray-300">
                        <i class="fa-solid fa-globe text-primary text-xs"></i>
                        <span id="lang-text-mobile">HI</span>
                    </button>

                    <button id="theme-toggle-mobile" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                        <i class="fa-solid fa-moon text-gray-600 dark:text-gray-300 hidden" id="theme-toggle-dark-icon-mobile"></i>
                        <i class="fa-solid fa-sun text-yellow-400 hidden" id="theme-toggle-light-icon-mobile"></i>
                    </button>
                    <button id="mobile-menu-btn" class="text-gray-700 dark:text-gray-300 hover:text-primary focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-home">Home</a>
                <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-about">About</a>
                <a href="tours.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-tours">Tours</a>
                <a href="services.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-services">Services</a>
                <a href="driver-registration.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-drive">Drive with us</a>
                <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800" data-translate="nav-contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <main class="min-h-screen pt-20">

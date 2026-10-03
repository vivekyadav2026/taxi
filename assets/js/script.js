// RaipurTaxi - Premium Business Portal Script
// Includes: Dark Mode, Language Translation dictionary, Coupon calculations,
// Glassmorphic Receipts, Interactive Tabs, Selections, and Live Simulation Dashboard.

document.addEventListener('DOMContentLoaded', () => {
    
    // --- Data Migration from old RajputCab to RaipurTaxi ---
    if (localStorage.getItem('rajputcab_bookings') && !localStorage.getItem('raipurtaxi_bookings')) {
        localStorage.setItem('raipurtaxi_bookings', localStorage.getItem('rajputcab_bookings'));
    }
    if (localStorage.getItem('rajputcab_lang') && !localStorage.getItem('raipurtaxi_lang')) {
        localStorage.setItem('raipurtaxi_lang', localStorage.getItem('rajputcab_lang'));
    }

    // --- Loader ---
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        if (loader) {
            loader.classList.add('hidden-loader');
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }
    });

    // --- Dark Mode Toggle ---
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    
    const themeToggleMobileBtn = document.getElementById('theme-toggle-mobile');
    const themeToggleDarkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
    const themeToggleLightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        if (themeToggleLightIcon) themeToggleLightIcon.classList.remove('hidden');
        if (themeToggleLightIconMobile) themeToggleLightIconMobile.classList.remove('hidden');
        document.documentElement.classList.add('dark');
    } else {
        if (themeToggleDarkIcon) themeToggleDarkIcon.classList.remove('hidden');
        if (themeToggleDarkIconMobile) themeToggleDarkIconMobile.classList.remove('hidden');
        document.documentElement.classList.remove('dark');
    }

    function toggleTheme() {
        if (themeToggleDarkIcon) themeToggleDarkIcon.classList.toggle('hidden');
        if (themeToggleLightIcon) themeToggleLightIcon.classList.toggle('hidden');
        if (themeToggleDarkIconMobile) themeToggleDarkIconMobile.classList.toggle('hidden');
        if (themeToggleLightIconMobile) themeToggleLightIconMobile.classList.toggle('hidden');

        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    }

    if (themeToggleBtn) themeToggleBtn.addEventListener('click', toggleTheme);
    if (themeToggleMobileBtn) themeToggleMobileBtn.addEventListener('click', toggleTheme);

    // --- Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if(mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- Sticky Navbar ---
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (navbar) {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        }
    });

    // --- Counter Animation ---
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    };

    const counterSection = document.querySelector('.statistics-section');
    if (counterSection) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        observer.observe(counterSection);
    }

    // --- Initializations on Load ---
    initLanguage();
    renderBookings();

    // Start Real-time Server Sync Loop
    syncCustomerBookings();
    setInterval(syncCustomerBookings, 4000);
});


// =========================================================================
// MULTI-LANGUAGE SYSTEM
// =========================================================================
const translationDict = {
    hi: {
        "nav-home": "होम",
        "nav-about": "हमारे बारे में",
        "nav-services": "सेवाएं",
        "nav-drive": "हमारे साथ जुड़ें",
        "nav-contact": "संपर्क करें",
        "book-ride-btn": "गाड़ी बुक करें",
        "hero-title": "तेज़ और सुरक्षित <span class=\"text-primary drop-shadow-[0_0_10px_rgba(255,215,0,0.5)]\">टैक्सी बुकिंग</span> सेवा",
        "hero-desc": "रायपुरटैक्सी के साथ रायपुर और छत्तीसगढ़ में तुरंत लोकल और आउटस्टेशन सवारी बुक करें।",
        "book-now": "अभी बुक करें",
        "whatsapp-booking": "व्हाट्सएप बुकिंग",
        "trusted-cust": "भरोसेमंद ग्राहक",
        "book-ride-title": "सवारी बुक करें",
        "btn-confirm": "बुकिंग की पुष्टि करें",
        "fleet-title": "हमारी उपलब्ध <span class=\"text-primary\">गाड़ियाँ</span>",
        "fleet-desc": "सुरक्षित & आरामदायक यात्रा के लिए हमारी साफ-सुथरी और अच्छी गाड़ियों में से चुनें।",
        "pricing-title": "पारदर्शी <span class=\"text-primary\">किराया</span> दरें",
        "pricing-desc": "कोई छिपा हुआ शुल्क नहीं! टोल, पार्किंग और राज्य कर रसीद के अनुसार अतिरिक्त होंगे।",
        "faq-3-title": "क्या आपके ड्राइवर सत्यापित हैं?",
        "faq-3-desc": "हाँ, हमारे सभी ड्राइवर एक सख्त बैकग्राउंड चेक से गुजरते हैं और उनके पास वैध कमर्शियल ड्राइविंग लाइसेंस होते हैं।",
        "webapp-badge": "100% मोबाइल अनुकूलित",
        "webapp-title": "तुरंत वेब बुकिंग — <span class=\"text-primary\">किसी ऐप की आवश्यकता नहीं!</span>",
        "webapp-desc": "फ़ोन स्टोरेज को बर्बाद करने या बड़े ऐप डाउनलोड करने की कोई आवश्यकता नहीं है। रायपुरटैक्सी एक आधुनिक रिस्पॉन्सिव वेब ऐप के रूप में निर्मित है। बस अपने स्मार्टफोन पर हमारी वेबसाइट खोलें, इसे 3 सेकंड में होम स्क्रीन पर जोड़ें, और एंड्रॉइड और आईओएस दोनों पर ऐप जैसी राइड बुकिंग का आनंद लें!",
        "webapp-b1-title": "0 MB स्टोरेज",
        "webapp-b1-desc": "फ़ोन मेमोरी को बचाता है, किसी इंस्टॉलेशन की आवश्यकता नहीं है।",
        "webapp-b2-title": "त्वरित लोड",
        "webapp-b2-desc": "क्रोम, सफारी या फ़ायरफ़ॉक्स में तुरंत लोड होता है।",
        "webapp-b3-title": "स्वचालित अपडेट",
        "webapp-b3-desc": "हमेशा नवीनतम गाड़ियाँ, किराया और सुविधाएँ प्राप्त करें।",
        "webapp-btn-book": "<i class=\"fa-solid fa-taxi mr-2\"></i> तुरंत टैक्सी बुक करें",
        "webapp-btn-wa": "<i class=\"fa-brands fa-whatsapp text-xl\"></i> व्हाट्सएप बुकिंग",
        "webapp-mock-status-lbl": "लाइव स्टेटस ट्रैकर",
        "webapp-mock-driver": "सोहन सिंह (ड्राइवर)",
        "webapp-mock-route-lbl": "सक्रिय मार्ग",
        "webapp-mock-pickup": "रायपुर स्टेशन",
        "webapp-mock-drop": "वीआईपी रोड, रायपुर",
        "webapp-mock-footer": "<i class=\"fa-solid fa-mobile-screen-button mr-1.5\"></i> वेब ऐप इंटरफेस"
    },
    en: {
        "nav-home": "Home",
        "nav-about": "About",
        "nav-services": "Services",
        "nav-drive": "Drive With Us",
        "nav-contact": "Contact",
        "book-ride-btn": "Book Ride",
        "hero-title": "Fast & Safe <span class=\"text-primary drop-shadow-[0_0_10px_rgba(255,215,0,0.5)]\">Taxi Booking</span> Service",
        "hero-desc": "Book local and outstation rides instantly with RaipurTaxi at affordable prices.",
        "book-now": "Book Now",
        "whatsapp-booking": "WhatsApp Booking",
        "trusted-cust": "Trusted Customers",
        "book-ride-title": "Book Your Ride",
        "btn-confirm": "Confirm Booking",
        "fleet-title": "Our Available <span class=\"text-primary\">Fleet</span>",
        "fleet-desc": "Choose from our modern, clean, and extremely well-maintained vehicles for a safe journey.",
        "pricing-title": "Transparent <span class=\"text-primary\">Fare</span> Rates",
        "pricing-desc": "No hidden charges! Tolls, parking, and state tax will be extra as per actual receipts.",
        "faq-3-title": "Are your drivers verified?",
        "faq-3-desc": "Yes, all our drivers go through a strict background check and hold valid commercial driving licenses to ensure your safety.",
        "webapp-badge": "100% MOBILE OPTIMIZED",
        "webapp-title": "Instant Web Booking — <span class=\"text-primary\">No App Needed!</span>",
        "webapp-desc": "No need to waste storage space or download large apps. RaipurTaxi is built as an ultra-modern Responsive Web App. Open our website on any smartphone, add it to your home screen in 3 seconds, and enjoy a blazing-fast, app-like ride booking experience on both Android and iOS!",
        "webapp-b1-title": "0 MB Storage",
        "webapp-b1-desc": "Saves phone memory, no installation required.",
        "webapp-b2-title": "Instant Load",
        "webapp-b2-desc": "Loads instantly in Chrome, Safari or Firefox.",
        "webapp-b3-title": "Auto Updates",
        "webapp-b3-desc": "Always get the latest fleets, fares, and features.",
        "webapp-btn-book": "<i class=\"fa-solid fa-taxi mr-2\"></i> Book A Cab Instantly",
        "webapp-btn-wa": "<i class=\"fa-brands fa-whatsapp text-xl\"></i> WhatsApp Booking",
        "webapp-mock-status-lbl": "LIVE STATUS TRACKER",
        "webapp-mock-driver": "Sohan Singh (Driver)",
        "webapp-mock-route-lbl": "ACTIVE ROUTE",
        "webapp-mock-pickup": "Raipur Station",
        "webapp-mock-drop": "VIP Road, Raipur",
        "webapp-mock-footer": "<i class=\"fa-solid fa-mobile-screen-button mr-1.5\"></i> Web App Interface"
    }
};

function initLanguage() {
    let currentLang = localStorage.getItem('raipurtaxi_lang') || 'en';
    applyLanguage(currentLang);

    const langToggle = document.getElementById('lang-toggle');
    const langToggleMobile = document.getElementById('lang-toggle-mobile');

    const handleLangClick = () => {
        let nextLang = localStorage.getItem('raipurtaxi_lang') === 'hi' ? 'en' : 'hi';
        applyLanguage(nextLang);
    };

    if (langToggle) langToggle.addEventListener('click', handleLangClick);
    if (langToggleMobile) langToggleMobile.addEventListener('click', handleLangClick);
}

function applyLanguage(lang) {
    localStorage.setItem('raipurtaxi_lang', lang);
    
    // Update Text Toggles
    const langText = document.getElementById('lang-text');
    const langTextMobile = document.getElementById('lang-text-mobile');
    if (langText) langText.innerText = lang === 'hi' ? 'EN' : 'HI';
    if (langTextMobile) langTextMobile.innerText = lang === 'hi' ? 'EN' : 'HI';

    // Update Elements
    const elements = document.querySelectorAll('[data-translate]');
    elements.forEach(el => {
        const key = el.getAttribute('data-translate');
        if (translationDict[lang] && translationDict[lang][key]) {
            el.innerHTML = translationDict[lang][key];
        }
    });

    // Translate Inputs Placeholders if needed
    const pickupInput = document.getElementById('pickup_location');
    const dropInput = document.getElementById('drop_location');
    const mobileInput = document.getElementById('mobile_number');

    if (lang === 'hi') {
        if (pickupInput) pickupInput.placeholder = "पिकअप स्थान";
        if (dropInput) dropInput.placeholder = "ड्रॉप स्थान";
        if (mobileInput) mobileInput.placeholder = "मोबाइल नंबर";
    } else {
        if (pickupInput) pickupInput.placeholder = "Pickup Location";
        if (dropInput) dropInput.placeholder = "Drop Location";
        if (mobileInput) mobileInput.placeholder = "Mobile Number";
    }
}


// =========================================================================
// FARES AND PRICING INTERACTIVE TABS
// =========================================================================
window.switchTab = function(tabId) {
    // Hide all tabs
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.classList.add('hidden');
        tab.classList.remove('block');
    });

    // Show selected
    const activeTab = document.getElementById(tabId);
    if (activeTab) {
        activeTab.classList.remove('hidden');
        activeTab.classList.add('block');
    }

    // Toggle button styles
    const buttons = document.querySelectorAll('[id^="btn-tab-"]');
    buttons.forEach(btn => {
        btn.classList.remove('bg-white', 'text-secondary', 'shadow', 'dark:bg-gray-800', 'dark:text-white');
        btn.classList.add('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400', 'dark:hover:text-white');
    });

    const activeBtn = document.getElementById('btn-' + tabId);
    if (activeBtn) {
        activeBtn.classList.remove('text-gray-500', 'hover:text-gray-900', 'dark:text-gray-400', 'dark:hover:text-white');
        activeBtn.classList.add('bg-white', 'text-secondary', 'shadow', 'dark:bg-gray-800', 'dark:text-white');
    }
};


// =========================================================================
// COUPE SYSTEM & AUTO FILL
// =========================================================================
let appliedDiscount = 0;
let appliedDiscountType = 'none'; // 'percentage' or 'flat'
let appliedCouponCode = '';

window.selectCarType = function(carValue) {
    const carSelect = document.getElementById('car_type');
    if (carSelect) {
        carSelect.value = carValue;
        
        // Scroll to booking form smoothly
        const bookingSection = document.getElementById('book');
        if (bookingSection) {
            bookingSection.scrollIntoView({ behavior: 'smooth' });
        }
    }
};

window.applyCoupon = function() {
    const couponInput = document.getElementById('coupon_code');
    const msg = document.getElementById('coupon-message');
    if (!couponInput || !msg) return;

    const code = couponInput.value.trim().toUpperCase();
    msg.classList.remove('hidden', 'text-green-500', 'text-red-500');

    if (code === 'WELCOME10') {
        appliedDiscount = 10;
        appliedDiscountType = 'percentage';
        appliedCouponCode = 'WELCOME10';
        msg.innerText = "Coupon applied successfully! 10% Off on your estimate.";
        msg.classList.add('text-green-500', 'block');
    } else if (code === 'RAJPUT50' || code === 'RAIPUR50') {
        appliedDiscount = 50;
        appliedDiscountType = 'flat';
        appliedCouponCode = code;
        msg.innerText = "Coupon applied successfully! Flat ₹50 Off.";
        msg.classList.add('text-green-500', 'block');
    } else if (code === '') {
        appliedDiscount = 0;
        appliedDiscountType = 'none';
        appliedCouponCode = '';
        msg.innerText = "";
        msg.classList.add('hidden');
    } else {
        appliedDiscount = 0;
        appliedDiscountType = 'none';
        appliedCouponCode = '';
        msg.innerText = "Invalid coupon code! Try WELCOME10 or RAIPUR50.";
        msg.classList.add('text-red-500', 'block');
    }

    // If modal is active, recalculate cost dynamically
    if (window.currentBookingData) {
        recalculateBookingCosts();
    }
};


// =========================================================================
// INTERACTIVE BOOKING FLOW AND RECEIPT GENERATOR
// =========================================================================
window.currentBookingData = null;

window.handleBookingSubmit = function(event) {
    event.preventDefault();

    const pickup = document.getElementById('pickup_location').value.trim();
    const drop = document.getElementById('drop_location').value.trim();
    const date = document.getElementById('booking_date').value;
    const time = document.getElementById('booking_time').value;
    const carSelect = document.getElementById('car_type');
    const mobile = document.getElementById('mobile_number').value.trim();

    if (!pickup || !drop || !date || !time || !carSelect.value || !mobile) {
        alert("Please fill in all details before submitting.");
        return;
    }

    const selectedOption = carSelect.options[carSelect.selectedIndex];
    const carName = selectedOption.text.split('-')[0].trim(); // Get 'Swift Dzire', etc.
    
    // Improved WhatsApp Message Formatting
    const message = `*🚕 New Taxi Booking Request*

*📍 Pickup:* ${pickup}
*🏁 Drop:* ${drop}

*📅 Date:* ${date}
*⏰ Time:* ${time}
*🚘 Car Type:* ${carName}

*📱 Mobile:* ${mobile}

Please confirm my booking.`;

    const encodedMessage = encodeURIComponent(message);
    const whatsappUrl = `https://wa.me/919183555655?text=${encodedMessage}`;
    
    // Redirect to WhatsApp
    window.open(whatsappUrl, '_blank');
};

function recalculateBookingCosts() {
    if (!window.currentBookingData) return;

    const data = window.currentBookingData;
    const rawCost = data.distance * data.rate;
    let savings = 0;

    if (appliedDiscountType === 'percentage') {
        savings = rawCost * (appliedDiscount / 100);
    } else if (appliedDiscountType === 'flat') {
        savings = appliedDiscount;
    }

    const finalCost = Math.max(0, rawCost - savings);
    data.rawCost = Math.round(rawCost);
    data.savings = Math.round(savings);
    data.finalCost = Math.round(finalCost);

    // Update Modal DOM
    document.getElementById('rec-pickup').innerText = data.pickup;
    document.getElementById('rec-drop').innerText = data.drop;
    document.getElementById('rec-datetime').innerText = data.date + " @ " + data.time;
    document.getElementById('rec-car').innerText = data.carName;
    document.getElementById('rec-mobile').innerText = data.mobile;
    document.getElementById('rec-distance').innerText = data.distance + " KM (Est.)";
    document.getElementById('rec-base-rate').innerText = "₹" + data.rate + "/KM";
    document.getElementById('rec-total-cost').innerText = "₹" + data.rawCost;

    const couponRow = document.getElementById('rec-coupon-row');
    if (appliedDiscount > 0) {
        document.getElementById('rec-coupon-name').innerText = appliedCouponCode;
        document.getElementById('rec-coupon-value').innerText = "₹" + data.savings;
        couponRow.classList.remove('hidden');
    } else {
        couponRow.classList.add('hidden');
    }

    document.getElementById('rec-final-cost').innerText = "₹" + data.finalCost;
}

function openBookingModal() {
    const modal = document.getElementById('booking-modal');
    const card = document.getElementById('booking-modal-card');
    if (modal && card) {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            card.classList.remove('scale-95');
        }, 10);
    }
}

window.closeBookingModal = function() {
    const modal = document.getElementById('booking-modal');
    const card = document.getElementById('booking-modal-card');
    if (modal && card) {
        modal.classList.add('opacity-0');
        card.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
};

window.confirmBookingWhatsApp = function() {
    if (!window.currentBookingData) return;
    const d = window.currentBookingData;
    
    // Construct structured elegant WhatsApp message
    let msg = `*RaipurTaxi Booking Request*\n`;
    msg += `-------------------------------\n`;
    msg += `*Pickup:* ${d.pickup}\n`;
    msg += `*Drop:* ${d.drop}\n`;
    msg += `*Date/Time:* ${d.date} at ${d.time}\n`;
    msg += `*Car:* ${d.carName}\n`;
    msg += `*Mobile:* ${d.mobile}\n`;
    if (appliedCouponCode) {
        msg += `*Coupon:* ${appliedCouponCode}\n`;
    }
    msg += `-------------------------------\n`;
    msg += `Please confirm my taxi request and send driver details!`;

    const encoded = encodeURIComponent(msg);
    const waUrl = `https://wa.me/919183555655?text=${encoded}`;
    
    // Track locally first as completed WhatsApp request
    saveBookingLocally("WhatsApp Requested");
    
    window.closeBookingModal();
    window.open(waUrl, '_blank');
};

window.confirmBookingOnline = function() {
    saveBookingLocally("Request Sent");
    window.closeBookingModal();
    
    // Scroll to dashboard tracking section
    const trackerSec = document.getElementById('booking-status-section');
    if (trackerSec) {
        trackerSec.classList.remove('hidden');
        trackerSec.scrollIntoView({ behavior: 'smooth' });
    }
};

function saveBookingLocally(initialStatus) {
    if (!window.currentBookingData) return;
    const d = window.currentBookingData;
    
    const bookingId = "RT-" + Math.floor(100000 + Math.random() * 900000);
    const newBooking = {
        id: bookingId,
        pickup: d.pickup,
        drop: d.drop,
        date: d.date,
        time: d.time,
        car: d.carName,
        mobile: d.mobile,
        cost: d.finalCost,
        status: initialStatus,
        driverName: "Awaiting Assignment",
        driverPhone: "",
        carNo: "",
        timestamp: Date.now()
    };

    // Save to local storage
    let bookings = JSON.parse(localStorage.getItem('raipurtaxi_bookings') || '[]');
    bookings.unshift(newBooking);
    localStorage.setItem('raipurtaxi_bookings', JSON.stringify(bookings));

    renderBookings();

    // Post to server database (bookings.json)
    fetch('save_booking.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(newBooking)
    })
    .then(res => res.json())
    .then(data => {
        console.log('Server synced successfully:', data);
    })
    .catch(err => {
        console.error('Error syncing to server:', err);
    });

    if (initialStatus === "Request Sent") {
        simulateDriverAssignment(bookingId);
    }
}


// =========================================================================
// REAL-TIME SIMULATION & DASHBOARD TRACKER
// =========================================================================
function renderBookings() {
    const list = document.getElementById('active-bookings-list');
    const section = document.getElementById('booking-status-section');
    if (!list) return;

    const bookings = JSON.parse(localStorage.getItem('raipurtaxi_bookings') || '[]');
    
    if (bookings.length === 0) {
        if (section) section.classList.add('hidden');
        return;
    }

    if (section) section.classList.remove('hidden');
    list.innerHTML = '';

    bookings.forEach(b => {
        let statusBadgeClass = "bg-yellow-500/20 text-yellow-500 border border-yellow-500/30";
        if (b.status === "Driver Assigned") {
            statusBadgeClass = "bg-green-500/20 text-green-500 border border-green-500/30";
        } else if (b.status === "Completed" || b.status === "WhatsApp Requested") {
            statusBadgeClass = "bg-blue-500/20 text-blue-500 border border-blue-500/30";
        }

        let driverDetailsHtml = "";
        if (b.status === "Driver Assigned") {
            driverDetailsHtml = `
                <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-800 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div>
                            <span class="text-[10px] text-gray-500 uppercase block font-semibold">Driver Name</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-white">${b.driverName}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <i class="fa-solid fa-car-side"></i>
                        </div>
                        <div>
                            <span class="text-[10px] text-gray-500 uppercase block font-semibold">Vehicle Plate</span>
                            <span class="text-sm font-bold text-gray-800 dark:text-white">${b.carNo}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="tel:${b.driverPhone}" class="flex-grow flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#1ebd5c] text-white py-2 px-4 rounded-xl font-bold text-sm shadow transition">
                            <i class="fa-solid fa-phone"></i> Call Driver
                        </a>
                    </div>
                </div>
            `;
        }

        const card = document.createElement('div');
        card.className = "bg-gray-50 dark:bg-gray-850 rounded-3xl p-6 border border-gray-150 dark:border-gray-800 shadow-md relative overflow-hidden transition-all duration-300";
        card.innerHTML = `
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 pb-4 border-b border-gray-200 dark:border-gray-800">
                <div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Booking ID: ${b.id}</span>
                    <h4 class="text-lg font-bold text-gray-800 dark:text-white mt-1">${b.pickup} <i class="fa-solid fa-arrow-right text-xs text-primary mx-2"></i> ${b.drop}</h4>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3.5 py-1.5 rounded-full text-xs font-extrabold ${statusBadgeClass}">${b.status}</span>
                    <button onclick="deleteBookingLocal('${b.id}')" class="text-red-500 hover:text-red-650 p-2 rounded-full hover:bg-red-50 dark:hover:bg-red-950/30 transition text-sm">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4 text-sm">
                <div>
                    <span class="text-[10px] text-gray-500 uppercase block font-semibold">Date & Time</span>
                    <span class="font-bold text-gray-800 dark:text-white">${b.date} @ ${b.time}</span>
                </div>
                <div>
                    <span class="text-[10px] text-gray-500 uppercase block font-semibold">Vehicle Selected</span>
                    <span class="font-bold text-gray-800 dark:text-white">${b.car}</span>
                </div>
                <div>
                    <span class="text-[10px] text-gray-500 uppercase block font-semibold">Mobile</span>
                    <span class="font-bold text-gray-800 dark:text-white">${b.mobile}</span>
                </div>
                <div class="hidden">
                    <span class="text-[10px] text-gray-500 uppercase block font-semibold">Est. Fare</span>
                    <span class="font-bold text-primary text-base">₹${b.cost}</span>
                </div>
            </div>

            ${driverDetailsHtml}
        `;
        list.appendChild(card);
    });
}

function simulateDriverAssignment(bookingId) {
    // Phase 1 -> Phase 2 (Assigning Driver after 3 seconds)
    setTimeout(() => {
        updateBookingStatus(bookingId, "Assigning Driver...", "Awaiting Assignment", "", "");
    }, 3500);

    // Phase 2 -> Phase 3 (Driver Assigned after 8 seconds)
    setTimeout(() => {
        const driversList = [
            { name: "Raj Kumar Parmar", phone: "+91 9183555655", carNo: "CG-04-ME-1122" },
            { name: "Sohan Singh Parmar", phone: "+91 9183555655", carNo: "CG-04-DF-4455" },
            { name: "Amit Rajput", phone: "+91 9183555655", carNo: "CG-04-KH-7788" }
        ];
        const selected = driversList[Math.floor(Math.random() * driversList.length)];
        updateBookingStatus(bookingId, "Driver Assigned", selected.name, selected.phone, selected.carNo);
    }, 8500);
}

function updateBookingStatus(bookingId, newStatus, driverName, driverPhone, carNo) {
    let bookings = JSON.parse(localStorage.getItem('raipurtaxi_bookings') || '[]');
    bookings = bookings.map(b => {
        if (b.id === bookingId) {
            b.status = newStatus;
            b.driverName = driverName;
            b.driverPhone = driverPhone;
            b.carNo = carNo;
        }
        return b;
    });
    localStorage.setItem('raipurtaxi_bookings', JSON.stringify(bookings));
    renderBookings();
}

window.deleteBookingLocal = function(bookingId) {
    if (confirm("Are you sure you want to cancel or clear this booking from your list?")) {
        let bookings = JSON.parse(localStorage.getItem('raipurtaxi_bookings') || '[]');
        bookings = bookings.filter(b => b.id !== bookingId);
        localStorage.setItem('raipurtaxi_bookings', JSON.stringify(bookings));
        renderBookings();
    }
};

function syncCustomerBookings() {
    let localBookings = JSON.parse(localStorage.getItem('raipurtaxi_bookings') || '[]');
    if (localBookings.length === 0) return;

    fetch('get_bookings.php')
        .then(res => res.json())
        .then(serverBookings => {
            let updated = false;
            localBookings = localBookings.map(lb => {
                const sb = serverBookings.find(x => x.id === lb.id);
                if (sb && (sb.status !== lb.status || sb.driverName !== lb.driverName || sb.carNo !== lb.carNo)) {
                    updated = true;
                    return {
                        ...lb,
                        status: sb.status,
                        driverName: sb.driverName,
                        driverPhone: sb.driverPhone,
                        carNo: sb.carNo
                    };
                }
                return lb;
            });

            if (updated) {
                localStorage.setItem('raipurtaxi_bookings', JSON.stringify(localBookings));
                renderBookings();
            }
        })
        .catch(err => console.error('Sync error:', err));
}

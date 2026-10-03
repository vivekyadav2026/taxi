<?php 
$page_title = "Contact Us | Book Raipur Taxi & Tours";
$meta_desc = "Get in touch with Raipur Taxi for affordable and safe local rides, outstation cabs, and Chhattisgarh tour packages. Call or WhatsApp us directly.";
$meta_keywords = "Contact Raipur Taxi, Book Cab Raipur, Taxi Phone Number Raipur";
$schema_data = '{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contact Raipur Taxi",
  "description": "Contact page for Raipur Taxi & Tour Travel",
  "mainEntity": {
    "@type": "Organization",
    "name": "Raipur Taxi",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+91-9183555655",
      "contactType": "Customer Service"
    }
  }
}';
include 'header.php'; 
?>

<!-- Page Header -->
<section class="pt-32 pb-20 bg-gray-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1596524430615-b46475ddff6e?auto=format&fit=crop&q=80&w=1600')] bg-cover bg-center opacity-30"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Contact <span class="text-primary">Us</span></h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">Get in touch with us for bookings, inquiries, or any support you need.</p>
    </div>
</section>

<section class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Contact Info Cards -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Phone -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover-card-effect flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-phone text-primary text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white mb-1">Phone</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">24/7 Booking & Support</p>
                        <a href="tel:+919183555655" class="text-lg font-bold text-primary hover:underline">+91 9183555655</a>
                    </div>
                </div>

                <!-- Email -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover-card-effect flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-envelope text-primary text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white mb-1">Email</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">For business inquiries</p>
                        <a href="mailto:manojsinghparmar555@gmail.com" class="text-sm font-bold text-primary hover:underline break-all">manojsinghparmar555<br>@gmail.com</a>
                    </div>
                </div>

                <!-- Location -->
                <a href="https://www.google.com/maps/place/51,+Laxmi+Nagar,+Durga+Para,+Santoshi+Nagar,+Raipur,+Mathpurena,+Chhattisgarh+492001/" target="_blank" class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover-card-effect flex items-start gap-4 group block transition-all duration-300">
                    <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-all duration-300">
                        <i class="fa-solid fa-location-dot text-primary group-hover:text-secondary text-xl transition-all duration-300"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 dark:text-white mb-1 group-hover:text-primary transition-all duration-300">Office Location</h4>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">
                            Manoj Kumar <br>
                            51, Laxmi Nagar, Durga Para, <br>
                            Santoshi Nagar, Raipur, <br>
                            Mathpurena, Chhattisgarh 492001 <br>
                            <span class="text-xs text-gray-400 font-semibold">(Near Shivam Stone, Pachpedi Naka)</span>
                        </p>
                        <span class="text-xs text-primary font-bold inline-flex items-center gap-1 group-hover:underline">
                            <i class="fa-solid fa-map-location-dot"></i> View on Google Maps
                        </span>
                    </div>
                </a>

                <!-- WhatsApp CTA -->
                <a href="https://wa.me/919183555655?text=Hi%2C%20I%20want%20to%20book%20a%20taxi." target="_blank" class="block w-full bg-[#25D366] text-white p-4 rounded-2xl shadow-lg hover:bg-[#1ebd5c] transition text-center font-bold flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-2xl"></i> Chat on WhatsApp
                </a>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-xl border border-gray-100 dark:border-gray-700">
                    <h3 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white border-b border-gray-200 dark:border-gray-700 pb-4">Send us a Message</h3>
                    
                    <form id="contact-form" onsubmit="submitEnquiry(event)" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Your Name</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-900 text-gray-800 dark:text-white transition">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Phone Number</label>
                                <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-900 text-gray-800 dark:text-white transition">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Email Address</label>
                            <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-900 text-gray-800 dark:text-white transition">
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Subject</label>
                            <select name="subject" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-900 text-gray-800 dark:text-white transition appearance-none">
                                <option value="New Booking">New Booking</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Complaint">Complaint</option>
                                <option value="Business / Corporate">Business / Corporate</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-semibold text-gray-700 dark:text-gray-300">Message</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none bg-white dark:bg-gray-900 text-gray-800 dark:text-white transition resize-none"></textarea>
                        </div>

                        <button type="submit" class="bg-primary text-secondary px-8 py-3 rounded-xl font-bold text-lg hover:bg-yellow-500 transition shadow-lg hover:-translate-y-0.5 transform">
                            Send Message <i class="fa-solid fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Message Success/Error Toast notification -->
<div id="contact-toast" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none">
    <div class="bg-secondary border border-gray-850 text-white rounded-2xl p-4 shadow-2xl flex items-center gap-3 max-w-sm">
        <div id="toast-icon-box" class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0">
            <!-- Populated via Javascript -->
        </div>
        <div>
            <span id="toast-title" class="font-bold text-sm block">--</span>
            <span id="toast-msg" class="text-xs text-gray-400 block mt-0.5">--</span>
        </div>
    </div>
</div>

<!-- Map Section -->
<section class="h-96 w-full relative">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.361963296067!2d81.64239407401777!3d21.217490580479467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dc55a9f0b2e7%3A0x35d546d63c104508!2s51%2C%20Laxmi%20Nagar%2C%20Durga%20Para%2C%20Santoshi%20Nagar%2C%20Raipur%2C%20Mathpurena%2C%20Chhattisgarh%20492001!5e0!3m2!1sen!2sin!4v1779050377532!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="absolute inset-0 grayscale contrast-125 dark:invert dark:hue-rotate-180"></iframe>
</section>

<script>
function submitEnquiry(event) {
    event.preventDefault();
    const form = document.getElementById('contact-form');
    const formData = new FormData(form);

    fetch('save_enquiry.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        const toast = document.getElementById('contact-toast');
        const iconBox = document.getElementById('toast-icon-box');
        const title = document.getElementById('toast-title');
        const msg = document.getElementById('toast-msg');

        if (data.success) {
            form.reset();
            iconBox.className = "w-10 h-10 rounded-xl bg-green-500/20 text-green-400 flex items-center justify-center flex-shrink-0 text-lg";
            iconBox.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
            title.innerText = "Success";
            msg.innerText = data.message;
        } else {
            iconBox.className = "w-10 h-10 rounded-xl bg-red-500/20 text-red-400 flex items-center justify-center flex-shrink-0 text-lg";
            iconBox.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i>';
            title.innerText = "Error";
            msg.innerText = data.message;
        }

        // Show Toast
        toast.classList.remove('translate-y-20', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');

        setTimeout(() => {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('translate-y-20', 'opacity-0');
        }, 5000);
    })
    .catch(err => {
        console.error('Error submitting enquiry:', err);
    });
}
</script>

<?php include 'footer.php'; ?>

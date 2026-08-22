<?php
// admin.php - Secure Premium Admin Dashboard for RaipurTaxi Manoj Kumar
session_start();

// Logout handler
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    header("Location: admin.php");
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    
    // Secure credentials for RaipurTaxi Manoj Kumar
    if ($username === "admin" && $password === "Rajput@2026") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}

$is_logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

if (!$is_logged_in):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RaipurTaxi Admin - Secure Identification Gate</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .glass-dark {
            background: rgba(17, 24, 39, 0.75);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FDE047',
                        secondary: '#111827',
                        'gray-250': '#DDE2EC',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-950 text-white min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    <!-- Beautiful Ambient Background Lights -->
    <div class="absolute -top-40 -left-40 w-96 h-96 rounded-full bg-primary/10 blur-[120px]"></div>
    <div class="absolute -bottom-40 -right-40 w-96 h-96 rounded-full bg-yellow-500/10 blur-[120px]"></div>
    
    <div class="w-full max-w-md relative z-10">
        <!-- Logo Header -->
        <div class="text-center mb-8">
            <div class="inline-flex bg-primary text-secondary p-3.5 rounded-2xl font-extrabold text-2xl shadow-xl mb-4">RT</div>
            <h1 class="text-3xl font-extrabold tracking-tight">Raipur<span class="text-primary">Taxi</span></h1>
            <p class="text-gray-400 text-xs mt-1 uppercase tracking-widest font-bold">Admin Portal Access Gate</p>
        </div>
        
        <!-- Login Card -->
        <div class="glass-dark rounded-[2.5rem] p-8 shadow-2xl">
            <h2 class="text-xl font-bold mb-6 text-center text-gray-250">Secure Login Required</h2>
            
            <?php if (!empty($error)): ?>
                <div class="bg-red-500/15 border border-red-500/30 text-red-400 rounded-xl p-3.5 text-xs font-semibold mb-6 flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation text-sm"></i>
                    <span><?php echo $error; ?></span>
                </div>
            <?php endif; ?>
            
            <form action="admin.php" method="POST" class="space-y-5">
                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-2">Username</label>
                    <div class="relative">
                        <i class="fa-solid fa-user absolute top-3.5 left-4 text-gray-500"></i>
                        <input type="text" name="username" required placeholder="Enter admin username" class="w-full pl-10 pr-4 py-3 rounded-xl border border-white/10 outline-none bg-black/30 text-white focus:ring-2 focus:ring-primary focus:border-transparent transition text-sm">
                    </div>
                </div>
                
                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-2">Password</label>
                    <div class="relative">
                        <i class="fa-solid fa-lock absolute top-3.5 left-4 text-gray-500"></i>
                        <input type="password" name="password" required placeholder="Enter secure password" class="w-full pl-10 pr-4 py-3 rounded-xl border border-white/10 outline-none bg-black/30 text-white focus:ring-2 focus:ring-primary focus:border-transparent transition text-sm">
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-secondary py-3.5 rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg transition duration-300 transform hover:-translate-y-0.5 mt-2">
                    <i class="fa-solid fa-shield-halved"></i> Authenticate & Enter
                </button>
            </form>
        </div>
        
        <!-- Back Link -->
        <div class="text-center mt-6">
            <a href="index.php" class="text-gray-400 hover:text-white transition text-xs font-bold flex items-center justify-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i> Back to Main Website
            </a>
        </div>
    </div>
</body>
</html>
<?php 
exit();
endif; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RaipurTaxi Admin Dashboard - Corporate Control Room</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }
        .dark .glass-panel {
            background: rgba(17, 24, 39, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .glow-gold {
            box-shadow: 0 0 30px rgba(253, 224, 71, 0.15);
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#FDE047',
                        secondary: '#111827',
                        accent: '#F59E0B',
                        'gray-150': '#EEF1F6',
                        'gray-250': '#DDE2EC',
                        'gray-650': '#4B5563',
                        'gray-655': '#374151',
                        'gray-850': '#1E2530',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-950 text-gray-800 dark:text-gray-100 min-h-screen flex flex-col transition-colors duration-300">

    <!-- Admin Top Navbar -->
    <nav class="fixed w-full z-40 bg-secondary text-white py-4 px-6 md:px-12 flex justify-between items-center shadow-lg border-b border-gray-800">
        <div class="flex items-center gap-3">
            <div class="bg-primary text-secondary p-2 rounded-xl font-extrabold text-xl shadow-md">RT</div>
            <div>
                <span class="font-extrabold text-xl tracking-tight">Raipur<span class="text-primary">Taxi</span></span>
                <span class="text-[10px] text-primary uppercase font-bold tracking-widest block -mt-1">ADMIN CONTROL ROOM</span>
            </div>
        </div>

        <div class="flex items-center gap-6">
            <!-- Back to website -->
            <a href="index.php" class="hidden sm:flex items-center gap-2 text-sm text-gray-300 hover:text-primary transition font-semibold">
                <i class="fa-solid fa-arrow-left"></i> Main Portal
            </a>
            
            <!-- Dark Mode Toggle -->
            <button onclick="toggleDarkMode()" class="p-2 rounded-full hover:bg-gray-800 transition">
                <i class="fa-solid fa-moon text-gray-300 hidden" id="admin-moon"></i>
                <i class="fa-solid fa-sun text-primary" id="admin-sun"></i>
            </button>

            <!-- Admin Profile & Secure Logout -->
            <div class="flex items-center gap-4 border-l border-gray-700 pl-6">
                <div class="text-right hidden md:block">
                    <span class="font-bold text-sm block">Manoj Kumar</span>
                    <span class="text-[10px] text-primary block uppercase font-semibold">Founder & Owner</span>
                </div>
                <a href="admin.php?action=logout" class="bg-red-500/10 hover:bg-red-500/20 text-red-400 px-3.5 py-2 rounded-xl text-xs font-bold transition flex items-center gap-1.5 border border-red-500/20 shadow" title="Secure Logout">
                    <i class="fa-solid fa-power-off"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="pt-28 px-4 md:px-12 pb-16 flex-grow">
        
        <!-- Dashboard Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight">RaipurTaxi Control Room</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-1">Manage real-time taxi requests and incoming customer message enquiries.</p>
            </div>
            
            <!-- Quick Refresh -->
            <button onclick="loadAllData()" class="flex items-center gap-2 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-300 hover:to-yellow-400 text-secondary px-5 py-2.5 rounded-xl font-bold transition shadow-md">
                <i class="fa-solid fa-rotate animate-spin-hover" id="refresh-icon"></i> Refresh Database
            </button>
        </div>

        <!-- Dashboard Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Stat 1: Total Bookings -->
            <div class="glass-panel rounded-3xl p-6 shadow-md relative overflow-hidden flex items-center justify-between glow-gold">
                <div>
                    <span class="text-sm font-bold text-gray-400 uppercase tracking-wider block">Total Bookings</span>
                    <span id="stat-total" class="text-3xl font-extrabold text-gray-800 dark:text-white mt-1 block">0</span>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-receipt"></i>
                </div>
            </div>

            <!-- Stat 2: Active / Assigning -->
            <div class="glass-panel rounded-3xl p-6 shadow-md relative overflow-hidden flex items-center justify-between">
                <div>
                    <span class="text-sm font-bold text-gray-400 uppercase tracking-wider block">Active Requests</span>
                    <span id="stat-active" class="text-3xl font-extrabold text-yellow-500 mt-1 block">0</span>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-yellow-500/10 text-yellow-500 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-spinner animate-spin"></i>
                </div>
            </div>

            <!-- Stat 3: Assigned / Active Trips -->
            <div class="glass-panel rounded-3xl p-6 shadow-md relative overflow-hidden flex items-center justify-between">
                <div>
                    <span class="text-sm font-bold text-gray-400 uppercase tracking-wider block">Driver Assigned</span>
                    <span id="stat-assigned" class="text-3xl font-extrabold text-green-500 mt-1 block">0</span>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-green-500/10 text-green-500 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-car"></i>
                </div>
            </div>

            <!-- Stat 4: Total Revenue (Hidden but kept in DOM to avoid JS errors) -->
            <div class="glass-panel rounded-3xl p-6 shadow-md relative overflow-hidden flex items-center justify-between hidden">
                <div>
                    <span class="text-sm font-bold text-gray-400 uppercase tracking-wider block">Est. Revenue</span>
                    <span id="stat-revenue" class="text-3xl font-extrabold text-primary mt-1 block">₹0</span>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-primary/10 text-yellow-500 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex gap-2 border-b border-gray-200 dark:border-gray-800 mb-6">
            <button onclick="switchTab('bookings')" id="tab-bookings" class="pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-primary text-primary transition-all duration-300">
                <i class="fa-solid fa-route"></i> Booking Requests
            </button>
            <button onclick="switchTab('enquiries')" id="tab-enquiries" class="pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-transparent text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-all duration-300">
                <i class="fa-solid fa-envelope"></i> Contact Enquiries
            </button>
        </div>

        <!-- Filter & Search Controls -->
        <div class="glass-panel rounded-3xl p-6 shadow-md mb-8 flex flex-col md:flex-row gap-4 items-center justify-between">
            <!-- Search bar -->
            <div class="relative w-full md:w-96">
                <i class="fa-solid fa-magnifying-glass absolute top-3.5 left-4 text-gray-400"></i>
                <input type="text" id="search-input" onkeyup="triggerFilterSearch()" placeholder="Search bookings..." class="w-full pl-10 pr-4 py-3 rounded-2xl border border-gray-300 dark:border-gray-700 outline-none bg-white dark:bg-gray-900 focus:ring-2 focus:ring-primary focus:border-transparent transition">
            </div>

            <!-- Filter Status Dropdown -->
            <div class="flex gap-4 w-full md:w-auto">
                <select id="status-filter" onchange="triggerFilterSearch()" class="flex-grow md:flex-grow-0 px-4 py-3 rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 outline-none focus:ring-2 focus:ring-primary transition">
                    <option value="all">All Bookings</option>
                    <option value="Request Sent">Request Sent</option>
                    <option value="Driver Assigned">Driver Assigned</option>
                    <option value="Completed">Completed</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>
        </div>

        <!-- Database Table -->
        <div class="glass-panel rounded-3xl shadow-xl overflow-hidden border border-gray-200 dark:border-gray-800">
            <div class="overflow-x-auto w-full">
                <table class="w-full text-left border-collapse">
                    <thead id="table-head-section">
                        <!-- Loaded dynamically based on tab -->
                    </thead>
                    <tbody class="divide-y divide-gray-150 dark:divide-gray-850" id="bookings-table-body">
                        <!-- Loaded dynamically via renderTable() -->
                    </tbody>
                </table>
            </div>
            
            <!-- Empty state -->
            <div id="empty-state" class="py-20 text-center hidden">
                <i class="fa-solid fa-box-open text-5xl text-gray-400 mb-4 block"></i>
                <h4 class="text-xl font-bold text-gray-750 dark:text-white" id="empty-title">No Records Found</h4>
                <p class="text-gray-500 dark:text-gray-400 mt-2 max-w-sm mx-auto" id="empty-desc">Any incoming requests will appear here in real-time.</p>
            </div>

            <!-- Pagination Controls -->
            <div class="px-6 py-4 bg-gray-50/50 dark:bg-gray-900/30 border-t border-gray-200 dark:border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="text-xs font-semibold text-gray-500 dark:text-gray-400" id="pagination-status">
                    Showing 1 to 5 of 15 entries
                </div>
                <div class="flex items-center gap-1.5" id="pagination-controls">
                    <!-- Populated dynamically -->
                </div>
            </div>
        </div>

    </main>

    <!-- Interactive Driver Assignment Modal -->
    <div id="assign-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden">
        <div class="bg-white dark:bg-gray-900 rounded-[2rem] w-full max-w-md overflow-hidden border border-gray-200 dark:border-gray-800 shadow-2xl">
            <!-- Modal Header -->
            <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-600 text-secondary flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-extrabold flex items-center gap-2"><i class="fa-solid fa-user-plus"></i> Assign Cab & Driver</h3>
                    <p class="text-xs font-semibold opacity-90 mt-0.5" id="assign-modal-id">Booking ID: RT-######</p>
                </div>
                <button onclick="closeAssignModal()" class="w-8 h-8 rounded-full bg-secondary/15 hover:bg-secondary/25 flex items-center justify-center text-secondary transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Modal Form -->
            <form id="assign-form" onsubmit="submitDriverAssignment(event)" class="p-6 space-y-4">
                <input type="hidden" id="assign-id-hidden">
                
                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-2">Select Driver</label>
                    <select id="quick-driver-select" onchange="autoFillDriver()" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-700 outline-none bg-gray-50 dark:bg-gray-950 focus:ring-2 focus:ring-primary transition">
                        <option value="custom">-- Enter Custom Driver Details --</option>
                        <option value="raj" data-name="Raj Kumar Parmar" data-phone="+91 9575955655" data-plate="CG-04-ME-1122">Raj Kumar Parmar (Dzire)</option>
                        <option value="sohan" data-name="Sohan Singh Parmar" data-phone="+91 9575955655" data-plate="CG-04-DF-4455">Sohan Singh Parmar (Ertiga)</option>
                        <option value="amit" data-name="Amit Rajput" data-phone="+91 9575955655" data-plate="CG-04-KH-7788">Amit Rajput (Innova Crysta)</option>
                        <option value="devendra" data-name="Devendra Verma" data-phone="+91 9827123456" data-plate="CG-04-HZ-5678">Devendra Verma (Innova)</option>
                    </select>
                </div>

                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-1">Driver Name</label>
                    <input type="text" id="driver-name-input" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-700 outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 focus:ring-primary transition">
                </div>

                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-1">Driver Contact Phone</label>
                    <input type="tel" id="driver-phone-input" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-700 outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 focus:ring-primary transition">
                </div>

                <div>
                    <label class="text-xs font-bold uppercase tracking-wider text-gray-400 block mb-1">Vehicle Plate Number</label>
                    <input type="text" id="driver-plate-input" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-gray-700 outline-none bg-white dark:bg-gray-800 text-gray-800 dark:text-white focus:ring-2 focus:ring-primary transition">
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-primary hover:bg-yellow-500 text-secondary py-3.5 rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg transition">
                        <i class="fa-solid fa-circle-check"></i> Complete Assignment
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Complete Details View Modal (View Booking & Enquiry Details) -->
    <div id="details-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm hidden">
        <div class="bg-white dark:bg-gray-900 rounded-[2rem] w-full max-w-2xl overflow-hidden border border-gray-200 dark:border-gray-800 shadow-2xl transition-all duration-300">
            <!-- Details Header -->
            <div class="p-6 bg-gradient-to-r from-yellow-500 to-yellow-600 text-secondary flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-extrabold flex items-center gap-2"><i class="fa-solid fa-circle-info"></i> Record Information View</h3>
                    <p class="text-xs font-semibold opacity-90 mt-0.5" id="details-modal-id">Record ID: RT-######</p>
                </div>
                <button onclick="closeDetailsModal()" class="w-8 h-8 rounded-full bg-secondary/15 hover:bg-secondary/25 flex items-center justify-center text-secondary transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <!-- Details Content Body -->
            <div class="p-8 max-h-[75vh] overflow-y-auto space-y-6 text-gray-800 dark:text-gray-150" id="details-modal-body">
                <!-- Loaded dynamically via openDetailsModal() -->
            </div>

            <!-- Details Footer -->
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-950 border-t border-gray-250 dark:border-gray-850 flex justify-end">
                <button onclick="closeDetailsModal()" class="bg-secondary text-white dark:bg-gray-800 dark:hover:bg-gray-700 px-6 py-2.5 rounded-xl font-bold transition shadow">
                    Close View
                </button>
            </div>
        </div>
    </div>

    <!-- Beautiful Premium Toast Notification Container -->
    <div id="admin-toast" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-500 ease-out pointer-events-none">
        <div class="glass-panel dark:bg-gray-900/90 p-4 rounded-2xl shadow-2xl border border-white/20 dark:border-white/10 flex items-center gap-3.5 max-w-sm pointer-events-auto">
            <div id="toast-icon-box" class="w-10 h-10 rounded-xl bg-primary/20 text-primary flex items-center justify-center flex-shrink-0 text-lg">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <h4 id="toast-title" class="font-extrabold text-sm text-gray-800 dark:text-white">Notification</h4>
                <p id="toast-msg" class="text-xs font-semibold text-gray-500 dark:text-gray-400 mt-0.5">Success details here...</p>
            </div>
        </div>
    </div>

    <!-- Premium Glassmorphic Delete Confirmation Modal -->
    <div id="delete-confirm-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/75 backdrop-blur-sm hidden">
        <div class="bg-white dark:bg-gray-900 rounded-[2rem] w-full max-w-md overflow-hidden border border-gray-200 dark:border-gray-800 shadow-2xl transition-all duration-300 p-8 text-center space-y-6">
            <div class="w-16 h-16 rounded-2xl bg-red-500/10 text-red-500 flex items-center justify-center text-3xl mx-auto shadow-inner">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div>
                <h3 class="text-xl font-extrabold text-gray-800 dark:text-white">Confirm Deletion</h3>
                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 mt-2 leading-relaxed" id="delete-confirm-msg">
                    Are you sure you want to permanently delete this record? This action cannot be undone.
                </p>
            </div>
            <div class="flex gap-4">
                <button onclick="closeDeleteConfirmModal()" class="flex-1 bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 py-3 rounded-xl font-bold transition shadow-sm">
                    Cancel
                </button>
                <button id="delete-confirm-btn" class="flex-1 bg-red-500 hover:bg-red-600 text-white py-3 rounded-xl font-bold transition shadow-md flex items-center justify-center gap-1.5">
                    <i class="fa-solid fa-trash-can"></i> Delete
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript Controls -->
    <script>
        let allBookings = [];
        let allEnquiries = [];
        
        let currentTab = 'bookings';
        let currentPage = 1;
        const rowsPerPage = 5;

        let filteredBookings = [];
        let filteredEnquiries = [];

        function showToast(title, message, isSuccess = true) {
            const toast = document.getElementById('admin-toast');
            const iconBox = document.getElementById('toast-icon-box');
            const titleEl = document.getElementById('toast-title');
            const msgEl = document.getElementById('toast-msg');

            if (!toast || !iconBox || !titleEl || !msgEl) return;

            if (isSuccess) {
                iconBox.className = "w-10 h-10 rounded-xl bg-green-500/20 text-green-500 flex items-center justify-center flex-shrink-0 text-lg";
                iconBox.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
            } else {
                iconBox.className = "w-10 h-10 rounded-xl bg-red-500/20 text-red-500 flex items-center justify-center flex-shrink-0 text-lg";
                iconBox.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i>';
            }

            titleEl.innerText = title;
            msgEl.innerText = message;

            // Show Toast
            toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
            }, 3500);
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Setup dark mode inside Admin
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                const sun = document.getElementById('admin-sun');
                if (sun) sun.classList.remove('hidden');
            } else {
                document.documentElement.classList.remove('dark');
                const moon = document.getElementById('admin-moon');
                if (moon) moon.classList.remove('hidden');
            }

            loadAllData();
            
            // Auto refresh stats every 10 seconds to listen in background
            setInterval(loadAllData, 10000);
        });

        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

        function loadAllData() {
            const spin = document.getElementById('refresh-icon');
            if (spin) spin.classList.add('animate-spin');

            // Parallel fetch calls
            Promise.all([
                fetch('get_bookings.php').then(res => res.json()),
                fetch('get_enquiries.php').then(res => res.json()).catch(() => []) // Fallback if no session yet
            ])
            .then(([bookingsData, enquiriesData]) => {
                allBookings = bookingsData;
                allEnquiries = Array.isArray(enquiriesData) ? enquiriesData : [];

                calculateStatistics(allBookings);
                triggerFilterSearch();

                if (spin) {
                    setTimeout(() => {
                        spin.classList.remove('animate-spin');
                    }, 500);
                }
            })
            .catch(err => {
                console.error('Error fetching dashboard datasets:', err);
                if (spin) spin.classList.remove('animate-spin');
            });
        }

        function calculateStatistics(bookings) {
            document.getElementById('stat-total').innerText = bookings.length;
            
            const active = bookings.filter(b => b.status === 'Request Sent' || b.status === 'Assigning Driver...').length;
            document.getElementById('stat-active').innerText = active;

            const assigned = bookings.filter(b => b.status === 'Driver Assigned').length;
            document.getElementById('stat-assigned').innerText = assigned;

            const revenue = bookings.reduce((sum, b) => {
                if (b.status !== 'Cancelled') {
                    return sum + parseInt(b.cost || 0);
                }
                return sum;
            }, 0);
            
            document.getElementById('stat-revenue').innerText = '₹' + revenue.toLocaleString('en-IN');
        }

        function switchTab(tab) {
            currentTab = tab;
            currentPage = 1;

            const tabBookings = document.getElementById('tab-bookings');
            const tabEnquiries = document.getElementById('tab-enquiries');
            const searchInput = document.getElementById('search-input');
            const statusFilter = document.getElementById('status-filter');

            // Reset Search
            searchInput.value = '';

            if (tab === 'bookings') {
                tabBookings.className = "pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-primary text-primary transition-all duration-300";
                tabEnquiries.className = "pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-transparent text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-all duration-300";
                
                searchInput.placeholder = "Search bookings (mobile, ID, pickup)...";

                // Setup booking filters
                statusFilter.innerHTML = `
                    <option value="all">All Bookings</option>
                    <option value="Request Sent">Request Sent</option>
                    <option value="Driver Assigned">Driver Assigned</option>
                    <option value="Completed">Completed</option>
                    <option value="Cancelled">Cancelled</option>
                `;
            } else {
                tabBookings.className = "pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-transparent text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-all duration-300";
                tabEnquiries.className = "pb-4 px-6 font-bold text-sm tracking-wide flex items-center gap-2 border-b-2 border-primary text-primary transition-all duration-300";
                
                searchInput.placeholder = "Search enquiries (name, email, query)...";

                // Setup enquiry filters
                statusFilter.innerHTML = `
                    <option value="all">All Enquiries</option>
                    <option value="New">New</option>
                    <option value="Read">Read</option>
                `;
            }

            triggerFilterSearch();
        }

        function triggerFilterSearch() {
            const query = document.getElementById('search-input').value.toLowerCase();
            const filter = document.getElementById('status-filter').value;

            if (currentTab === 'bookings') {
                filteredBookings = allBookings;

                if (filter !== 'all') {
                    filteredBookings = filteredBookings.filter(b => b.status === filter);
                }

                if (query) {
                    filteredBookings = filteredBookings.filter(b => 
                        b.id.toLowerCase().includes(query) ||
                        b.mobile.toLowerCase().includes(query) ||
                        b.pickup.toLowerCase().includes(query) ||
                        b.drop.toLowerCase().includes(query) ||
                        b.car.toLowerCase().includes(query)
                    );
                }
                
                // Adjust currentPage if out of bounds
                const maxPage = Math.ceil(filteredBookings.length / rowsPerPage) || 1;
                if (currentPage > maxPage) {
                    currentPage = maxPage;
                }
                
                renderBookingsTable();
            } else {
                filteredEnquiries = allEnquiries;

                if (filter !== 'all') {
                    filteredEnquiries = filteredEnquiries.filter(e => e.status === filter);
                }

                if (query) {
                    filteredEnquiries = filteredEnquiries.filter(e => 
                        e.id.toLowerCase().includes(query) ||
                        e.name.toLowerCase().includes(query) ||
                        e.phone.toLowerCase().includes(query) ||
                        e.email.toLowerCase().includes(query) ||
                        e.subject.toLowerCase().includes(query) ||
                        e.message.toLowerCase().includes(query)
                    );
                }

                // Adjust currentPage if out of bounds
                const maxPage = Math.ceil(filteredEnquiries.length / rowsPerPage) || 1;
                if (currentPage > maxPage) {
                    currentPage = maxPage;
                }

                renderEnquiriesTable();
            }
        }

        function renderBookingsTable() {
            const head = document.getElementById('table-head-section');
            const tbody = document.getElementById('bookings-table-body');
            const empty = document.getElementById('empty-state');

            // Render Head
            head.innerHTML = `
                <tr class="bg-gray-50 dark:bg-gray-900 border-b border-gray-250 dark:border-gray-800 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                    <th class="py-4 px-6">Booking Details</th>
                    <th class="py-4 px-6">Customer & Vehicle</th>
                    <th class="py-4 px-6">Date / Schedule</th>
                    <th class="py-4 px-6">Status</th>
                    <th class="py-4 px-6 text-center">Control Actions</th>
                </tr>
            `;

            if (filteredBookings.length === 0) {
                tbody.innerHTML = '';
                document.getElementById('empty-title').innerText = "No Bookings Recorded Yet";
                document.getElementById('empty-desc').innerText = "Bookings submitted online via RaipurTaxi portal will appear here.";
                empty.classList.remove('hidden');
                updatePaginationControls(0);
                return;
            }

            empty.classList.add('hidden');
            tbody.innerHTML = '';

            // Pagination ranges
            const totalRecords = filteredBookings.length;
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = Math.min(startIndex + rowsPerPage, totalRecords);
            const paginated = filteredBookings.slice(startIndex, endIndex);

            paginated.forEach(b => {
                let badgeClass = "bg-yellow-500/20 text-yellow-500 border border-yellow-500/30";
                if (b.status === 'Driver Assigned') {
                    badgeClass = "bg-green-500/20 text-green-500 border border-green-500/30";
                } else if (b.status === 'Completed') {
                    badgeClass = "bg-blue-500/20 text-blue-500 border border-blue-500/30";
                } else if (b.status === 'Cancelled') {
                    badgeClass = "bg-red-500/20 text-red-500 border border-red-500/30";
                } else if (b.status === 'WhatsApp Requested') {
                    badgeClass = "bg-emerald-500/20 text-emerald-500 border border-emerald-500/30";
                }

                // Controls based on status
                let controlButtons = '';
                if (b.status === 'Request Sent' || b.status === 'Assigning Driver...' || b.status === 'WhatsApp Requested') {
                    controlButtons = `
                        <button onclick="openAssignModal('${b.id}')" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 shadow transition" title="Assign Cab">
                            <i class="fa-solid fa-car-side"></i> Assign
                        </button>
                    `;
                } else if (b.status === 'Driver Assigned') {
                    controlButtons = `
                        <button onclick="updateStatus('${b.id}', 'Completed')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1.5 rounded-lg text-xs font-bold flex items-center gap-1 shadow transition" title="Complete Trip">
                            <i class="fa-solid fa-circle-check"></i> Complete
                        </button>
                    `;
                }

                let driverHtml = '<span class="text-gray-400 italic">None</span>';
                if (b.status === 'Driver Assigned' && b.driverName) {
                    driverHtml = `<span class="font-bold text-gray-700 dark:text-gray-300 block"><i class="fa-solid fa-user-tie text-primary mr-1"></i> ${b.driverName}</span>`;
                }

                const tr = document.createElement('tr');
                tr.className = "hover:bg-gray-50/50 dark:hover:bg-gray-900/30 transition duration-150 border-b border-gray-150 dark:border-gray-850";
                tr.innerHTML = `
                    <td class="py-4 px-6">
                        <span class="text-xs font-bold text-primary block uppercase tracking-wider">${b.id}</span>
                        <div class="font-bold text-gray-800 dark:text-white mt-1 text-sm truncate max-w-[200px]">${b.pickup}</div>
                        <div class="text-xs text-gray-400 flex items-center gap-1.5 mt-0.5 truncate max-w-[200px]"><i class="fa-solid fa-arrow-down text-[10px] text-primary"></i> ${b.drop}</div>
                    </td>
                    <td class="py-4 px-6 text-sm">
                        <div class="font-bold text-gray-800 dark:text-white"><i class="fa-solid fa-phone text-xs text-primary mr-1"></i> ${b.mobile}</div>
                        <div class="text-xs text-gray-500 mt-0.5">Car: <span class="font-semibold text-gray-700 dark:text-gray-300">${b.car}</span></div>
                    </td>
                    <td class="py-4 px-6 text-sm">
                        <div class="font-bold text-gray-800 dark:text-white">${b.date}</div>
                        <div class="text-xs text-gray-500 mt-0.5"><i class="fa-regular fa-clock text-xs text-primary mr-1"></i> ${b.time}</div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="px-3 py-1 rounded-full text-xs font-extrabold block text-center shadow-inner ${badgeClass}">${b.status}</span>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            ${controlButtons}
                            <button onclick="openDetailsModal('booking', '${b.id}')" class="bg-gray-100 hover:bg-gray-250 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 px-3 py-1.5 rounded-lg text-xs font-bold transition shadow-sm" title="View details">
                                <i class="fa-solid fa-eye"></i> View
                            </button>
                            <button onclick="deleteRecord('booking', '${b.id}')" class="bg-red-50 text-red-500 border border-red-200 hover:bg-red-100 dark:bg-red-500/10 dark:border-red-500/20 dark:hover:bg-red-500/20 px-3 py-1.5 rounded-lg text-xs font-bold transition shadow-sm" title="Delete record">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </button>
                        </div>
                    </td>
                `;
                tbody.appendChild(tr);
            });

            updatePaginationControls(totalRecords, startIndex + 1, endIndex);
        }

        function renderEnquiriesTable() {
            const head = document.getElementById('table-head-section');
            const tbody = document.getElementById('bookings-table-body');
            const empty = document.getElementById('empty-state');

            // Render Head for Enquiries
            head.innerHTML = `
                <tr class="bg-gray-50 dark:bg-gray-900 border-b border-gray-250 dark:border-gray-800 text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                    <th class="py-4 px-6">Enquiry ID & Date</th>
                    <th class="py-4 px-6">Client Info</th>
                    <th class="py-4 px-6">Subject</th>
                    <th class="py-4 px-6">Message Preview</th>
                    <th class="py-4 px-6">Status</th>
                    <th class="py-4 px-6 text-center">Actions</th>
                </tr>
            `;

            if (filteredEnquiries.length === 0) {
                tbody.innerHTML = '';
                document.getElementById('empty-title').innerText = "No Enquiries Recorded Yet";
                document.getElementById('empty-desc').innerText = "Client messages sent from the Contact Us page will display here.";
                empty.classList.remove('hidden');
                updatePaginationControls(0);
                return;
            }

            empty.classList.add('hidden');
            tbody.innerHTML = '';

            // Pagination ranges
            const totalRecords = filteredEnquiries.length;
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = Math.min(startIndex + rowsPerPage, totalRecords);
            const paginated = filteredEnquiries.slice(startIndex, endIndex);

            paginated.forEach(e => {
                let badgeClass = "bg-red-500/20 text-red-500 border border-red-500/30";
                if (e.status === 'Read') {
                    badgeClass = "bg-green-500/20 text-green-500 border border-green-500/30";
                }

                const tr = document.createElement('tr');
                tr.className = "hover:bg-gray-50/50 dark:hover:bg-gray-900/30 transition duration-150 border-b border-gray-150 dark:border-gray-850";
                tr.innerHTML = `
                    <td class="py-4 px-6">
                        <span class="text-xs font-bold text-yellow-500 block uppercase tracking-wider">${e.id}</span>
                        <div class="font-bold text-gray-800 dark:text-white mt-1 text-sm">${e.date}</div>
                        <div class="text-[10px] text-gray-400 flex items-center gap-1.5 mt-0.5"><i class="fa-regular fa-clock text-[10px]"></i> ${e.time}</div>
                    </td>
                    <td class="py-4 px-6 text-sm">
                        <div class="font-bold text-gray-800 dark:text-white">${e.name}</div>
                        <div class="text-xs text-gray-400 mt-0.5"><i class="fa-solid fa-phone text-[10px] mr-1 text-primary"></i> ${e.phone}</div>
                        <div class="text-[10px] text-gray-400 mt-0.5 truncate max-w-[150px]"><i class="fa-solid fa-envelope text-[10px] mr-1 text-primary"></i> ${e.email || 'None'}</div>
                    </td>
                    <td class="py-4 px-6 text-sm">
                        <span class="font-semibold text-gray-700 dark:text-gray-300">${e.subject}</span>
                    </td>
                    <td class="py-4 px-6 text-sm max-w-xs">
                        <div class="truncate text-gray-500 dark:text-gray-400">${e.message}</div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="px-3 py-1 rounded-full text-xs font-extrabold block text-center shadow-inner ${badgeClass}">${e.status}</span>
                    </td>
                    <td class="py-4 px-6 text-center">
                        <div class="flex items-center justify-center gap-2">
                            <button onclick="openDetailsModal('enquiry', '${e.id}')" class="bg-gray-100 hover:bg-gray-250 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-200 px-3.5 py-1.5 rounded-lg text-xs font-bold transition shadow-sm">
                                <i class="fa-solid fa-eye mr-1"></i> View Message
                            </button>
                            <button onclick="deleteRecord('enquiry', '${e.id}')" class="bg-red-50 text-red-500 border border-red-200 hover:bg-red-100 dark:bg-red-500/10 dark:border-red-500/20 dark:hover:bg-red-500/20 px-3.5 py-1.5 rounded-lg text-xs font-bold transition shadow-sm">
                                <i class="fa-solid fa-trash-can mr-1"></i> Delete
                            </button>
                        </div>
                    </td>
                `;
                tbody.appendChild(tr);
            });

            updatePaginationControls(totalRecords, startIndex + 1, endIndex);
        }

        function updatePaginationControls(total, start = 0, end = 0) {
            const statusLabel = document.getElementById('pagination-status');
            const controls = document.getElementById('pagination-controls');

            if (total === 0) {
                statusLabel.innerText = "Showing 0 to 0 of 0 entries";
                controls.innerHTML = '';
                return;
            }

            const totalPages = Math.ceil(total / rowsPerPage);
            statusLabel.innerText = `Showing ${start} to ${end} of ${total} entries`;

            let paginationHtml = '';
            
            // Previous button
            const prevDisabled = currentPage === 1 ? 'disabled opacity-40 cursor-not-allowed' : '';
            paginationHtml += `
                <button onclick="changePage(${currentPage - 1})" ${prevDisabled} class="bg-gray-100 dark:bg-gray-800 hover:bg-primary dark:hover:bg-primary hover:text-secondary px-3 py-1.5 rounded-lg text-xs font-bold transition">
                    <i class="fa-solid fa-chevron-left"></i> Prev
                </button>
            `;

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                const activeClass = i === currentPage 
                    ? 'bg-primary text-secondary border border-primary font-extrabold' 
                    : 'bg-gray-100 dark:bg-gray-800 hover:bg-primary hover:text-secondary border border-transparent font-semibold';
                
                paginationHtml += `
                    <button onclick="changePage(${i})" class="w-8 h-8 rounded-lg text-xs flex items-center justify-center transition ${activeClass}">
                        ${i}
                    </button>
                `;
            }

            // Next button
            const nextDisabled = currentPage === totalPages ? 'disabled opacity-40 cursor-not-allowed' : '';
            paginationHtml += `
                <button onclick="changePage(${currentPage + 1})" ${nextDisabled} class="bg-gray-100 dark:bg-gray-800 hover:bg-primary dark:hover:bg-primary hover:text-secondary px-3 py-1.5 rounded-lg text-xs font-bold transition">
                    Next <i class="fa-solid fa-chevron-right"></i>
                </button>
            `;

            controls.innerHTML = paginationHtml;
        }

        function changePage(page) {
            currentPage = page;
            triggerFilterSearch();
        }

        let pendingDeleteType = null;
        let pendingDeleteId = null;

        function deleteRecord(type, id) {
            pendingDeleteType = type;
            pendingDeleteId = id;

            const msgEl = document.getElementById('delete-confirm-msg');
            msgEl.innerText = `Are you sure you want to permanently delete this ${type === 'booking' ? 'booking request' : 'contact enquiry'} record (${id})? This action CANNOT be undone.`;

            // Bind click handler for delete action
            const deleteBtn = document.getElementById('delete-confirm-btn');
            deleteBtn.onclick = executeDeletion;

            // Open Modal
            document.getElementById('delete-confirm-modal').classList.remove('hidden');
        }

        function closeDeleteConfirmModal() {
            document.getElementById('delete-confirm-modal').classList.add('hidden');
            pendingDeleteType = null;
            pendingDeleteId = null;
        }

        function executeDeletion() {
            if (!pendingDeleteType || !pendingDeleteId) return;

            const type = pendingDeleteType;
            const id = pendingDeleteId;

            // Close Modal
            closeDeleteConfirmModal();

            // Save backup of original data in case of failure
            const originalBookings = [...allBookings];
            const originalEnquiries = [...allEnquiries];

            // Optimistically remove from local arrays immediately
            if (type === 'booking') {
                allBookings = allBookings.filter(b => b.id !== id);
            } else {
                allEnquiries = allEnquiries.filter(e => e.id !== id);
            }

            // Render instantly
            triggerFilterSearch();
            showToast('Success', `${type === 'booking' ? 'Booking' : 'Enquiry'} record was deleted instantly.`, true);

            // Perform the backend write in background
            const endpoint = type === 'booking' ? 'delete_booking.php' : 'delete_enquiry.php';
            fetch(endpoint, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id })
            })
            .then(res => res.json())
            .then(data => {
                if (!data.success) {
                    // Restore original arrays on failure
                    allBookings = originalBookings;
                    allEnquiries = originalEnquiries;
                    triggerFilterSearch();
                    showToast('Error', data.message || 'Failed to complete deletion.', false);
                } else {
                    // Silently refresh statistics in background
                    calculateStatistics(allBookings);
                }
            })
            .catch(err => {
                console.error(`Error deleting ${type} record:`, err);
                // Restore original arrays on failure
                allBookings = originalBookings;
                allEnquiries = originalEnquiries;
                triggerFilterSearch();
                showToast('Error', 'Network connection error during deletion.', false);
            });
        }

        function updateStatus(id, newStatus) {
            if (confirm(`Are you sure you want to mark booking ${id} as ${newStatus}?`)) {
                fetch('update_booking.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id, status: newStatus })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        loadAllData();
                        showToast('Success', `Booking status set to ${newStatus}.`, true);
                    } else {
                        showToast('Error', data.message, false);
                    }
                });
            }
        }

        function openDetailsModal(type, id) {
            document.getElementById('details-modal-id').innerText = 'Record ID: ' + id;
            const body = document.getElementById('details-modal-body');

            if (type === 'booking') {
                const b = allBookings.find(item => item.id === id);
                if (!b) return;

                let driverBlockHtml = `
                    <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                        <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-2">Driver Assignment Info</span>
                        <div class="text-sm font-semibold text-gray-500">No driver assigned yet.</div>
                    </div>
                `;

                if (b.status === 'Driver Assigned' && b.driverName) {
                    driverBlockHtml = `
                        <div class="bg-green-500/5 dark:bg-green-500/5 p-4 rounded-2xl border border-green-500/10">
                            <span class="text-xs font-bold text-green-500 block uppercase tracking-wider mb-2">Assigned Driver & Vehicle</span>
                            <div class="grid grid-cols-2 gap-4 text-sm font-bold text-gray-800 dark:text-white">
                                <div><i class="fa-solid fa-user-tie text-primary mr-1.5"></i> ${b.driverName}</div>
                                <div><i class="fa-solid fa-car-rear text-primary mr-1.5"></i> Plate: ${b.carNo}</div>
                                <div class="col-span-2"><i class="fa-solid fa-phone text-primary mr-1.5"></i> Call: ${b.driverPhone}</div>
                            </div>
                        </div>
                    `;
                }

                body.innerHTML = `
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Pickup Location</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base">${b.pickup}</div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Drop Location</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base">${b.drop}</div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Customer Contact Mobile</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base"><i class="fa-solid fa-phone mr-1.5 text-primary"></i> ${b.mobile}</div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Vehicle Chosen</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base"><i class="fa-solid fa-car mr-1.5 text-primary"></i> ${b.car}</div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                            <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Travel Date</span>
                            <div class="font-bold text-gray-800 dark:text-white text-sm">${b.date}</div>
                        </div>
                        <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                            <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Travel Time</span>
                            <div class="font-bold text-gray-800 dark:text-white text-sm">${b.time}</div>
                        </div>
                    </div>

                    ${driverBlockHtml}
                `;
            } else {
                const e = allEnquiries.find(item => item.id === id);
                if (!e) return;

                // Mark enquiry as Read automatically when opened
                if (e.status === 'New') {
                    // Update status in local array and database
                    e.status = 'Read';
                    fetch('delete_enquiry.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ id, action: 'mark_read' })
                    }).catch(() => {});
                }

                body.innerHTML = `
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Customer Full Name</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base">${e.name}</div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Customer Phone Number</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base"><i class="fa-solid fa-phone mr-1.5 text-primary"></i> ${e.phone}</div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Email Address</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base"><i class="fa-solid fa-envelope mr-1.5 text-primary"></i> ${e.email || 'Not Provided'}</div>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-950 p-4 rounded-2xl border border-gray-150 dark:border-gray-850">
                                <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-1">Subject Topic</span>
                                <div class="font-bold text-gray-800 dark:text-white text-base">${e.subject}</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-950 p-6 rounded-3xl border border-gray-150 dark:border-gray-850 shadow-inner">
                        <span class="text-xs font-bold text-gray-400 block uppercase tracking-wider mb-3">Complete Customer Message / Inquiry</span>
                        <div class="text-sm leading-relaxed text-gray-800 dark:text-gray-200 whitespace-pre-wrap font-medium">${e.message}</div>
                    </div>
                `;
            }

            document.getElementById('details-modal').classList.remove('hidden');
        }

        function closeDetailsModal() {
            document.getElementById('details-modal').classList.add('hidden');
            triggerFilterSearch();
        }

        function openAssignModal(id) {
            document.getElementById('assign-modal-id').innerText = 'Booking ID: ' + id;
            document.getElementById('assign-id-hidden').value = id;
            
            // Clear inputs
            document.getElementById('quick-driver-select').value = 'custom';
            document.getElementById('driver-name-input').value = '';
            document.getElementById('driver-phone-input').value = '';
            document.getElementById('driver-plate-input').value = '';
            
            document.getElementById('assign-modal').classList.remove('hidden');
        }

        function closeAssignModal() {
            document.getElementById('assign-modal').classList.add('hidden');
        }

        function autoFillDriver() {
            const select = document.getElementById('quick-driver-select');
            const selectedOption = select.options[select.selectedIndex];
            
            if (select.value === 'custom') {
                document.getElementById('driver-name-input').value = '';
                document.getElementById('driver-phone-input').value = '';
                document.getElementById('driver-plate-input').value = '';
            } else {
                document.getElementById('driver-name-input').value = selectedOption.getAttribute('data-name');
                document.getElementById('driver-phone-input').value = selectedOption.getAttribute('data-phone');
                document.getElementById('driver-plate-input').value = selectedOption.getAttribute('data-plate');
            }
        }

        function submitDriverAssignment(event) {
            event.preventDefault();
            
            const id = document.getElementById('assign-id-hidden').value;
            const driverName = document.getElementById('driver-name-input').value.trim();
            const driverPhone = document.getElementById('driver-phone-input').value.trim();
            const carNo = document.getElementById('driver-plate-input').value.trim();

            fetch('update_booking.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    id,
                    status: 'Driver Assigned',
                    driverName,
                    driverPhone,
                    carNo
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    closeAssignModal();
                    loadAllData();
                    showToast('Success', 'Driver assigned successfully.', true);
                } else {
                    showToast('Error', data.message, false);
                }
            });
        }
    </script>
</body>
</html>

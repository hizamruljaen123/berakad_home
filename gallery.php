<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Template Undangan - Berakad.site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .category-tab.active {
            background-color: #ec4899;
            color: white;
        }
        
        .template-card {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .template-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #ec4899;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #db2777;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.html">
                        <i class="fas fa-ring text-pink-500 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-800">Berakad<span class="text-pink-500">.site</span></span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.html" class="text-gray-800 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#categories" class="text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Template</a>
                        <a href="index.html#fitur" class="text-gray-800 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Fitur</a>
                        <a href="index.html#testimoni" class="text-gray-800 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">Testimoni</a>
                        <a href="index.html#faq" class="text-gray-800 hover:text-pink-500 px-3 py-2 rounded-md text-sm font-medium">FAQ</a>
                    </div>
                </div>
                <div class="md:ml-10 md:flex md:items-center space-x-2">
                    <a href="index.html#order" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                        Buat Undangan
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-pink-500 to-purple-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">🎨 Temukan Template Undangan Online Impianmu</h1>
                <p class="text-xl max-w-3xl mx-auto">Pilih dari berbagai kategori template cantik dan profesional untuk semua jenis acara. Tinggal pilih, kirim data, dan undangan kamu langsung kami proses!</p>
                <div class="mt-8">
                    <a href="index.html#order" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-pink-500 bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10 transition duration-300 transform hover:scale-105">
                        Buat Undangan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Tabs -->
    <section id="categories" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex overflow-x-auto pb-2 space-x-2 scrollbar-hide">
                <button class="category-tab active px-6 py-2 rounded-full text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="all">
                    <i class="fas fa-star mr-2"></i> Semua Kategori
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="wedding">
                    <i class="fas fa-ring mr-2"></i> Pernikahan
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="engagement">
                    <i class="fas fa-heart mr-2"></i> Tunangan
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="birthday">
                    <i class="fas fa-birthday-cake mr-2"></i> Ulang Tahun
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="anniversary">
                    <i class="fas fa-glass-cheers mr-2"></i> Anniversary
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="formal">
                    <i class="fas fa-user-tie mr-2"></i> Acara Formal
                </button>
                <button class="category-tab px-6 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium whitespace-nowrap transition-all duration-300" data-category="other">
                    <i class="fas fa-ellipsis-h mr-2"></i> Lainnya
                </button>
            </div>
        </div>
    </section>

    <!-- Template Gallery -->
    <section class="py-8 pb-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div id="templateGrid" class="container-fluid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Templates will be dynamically inserted here -->
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-xl mb-6">🌟 Sudah menemukan template favoritmu? Langsung klik tombol "Pesan Sekarang", isi data sederhana, dan tim kami akan mengurus undanganmu dalam hitungan menit!</p>
                <a href="index.html#order" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-pink-500 hover:bg-pink-600 md:py-4 md:text-lg md:px-10 transition duration-300 transform hover:scale-105">
                    Buat Undangan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Berakad.site</h3>
                    <p class="text-gray-400">Platform pembuatan undangan online praktis dan ekonomis untuk segala acara.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kategori Template</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Undangan Pernikahan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Undangan Tunangan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Undangan Ulang Tahun</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Undangan Anniversary</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Bantuan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Cara Pemesanan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hubungi Kami</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-2"></i> hello@berakad.site
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone-alt mr-2"></i> 0812-3456-7890
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2023 Berakad.site. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Preview Modal -->
    <div id="previewModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center p-4 hidden z-[100] transition-opacity duration-300 opacity-0">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-5xl h-[95vh] flex flex-col transform transition-transform duration-300 scale-95">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="text-xl font-semibold text-gray-800" id="modalTitle">Template Preview</h3>
                <div class="flex items-center">
                    <button id="desktopViewBtn" class="px-3 py-1 border rounded-l-md text-sm mr-0 bg-pink-500 text-white focus:outline-none">
                        <i class="fas fa-desktop mr-1"></i> Website
                    </button>
                    <button id="mobileViewBtn" class="px-3 py-1 border rounded-r-md text-sm bg-gray-200 hover:bg-gray-300 focus:outline-none">
                        <i class="fas fa-mobile-alt mr-1"></i> Mobile
                    </button>
                    <button id="closeModalBtn" class="ml-4 text-gray-500 hover:text-pink-500 text-2xl focus:outline-none">&times;</button>
                </div>
            </div>
            <div class="flex-grow p-1 bg-gray-200 flex items-center justify-center overflow-hidden">
                <iframe id="previewFrame" src="about:blank" class="border-2 border-gray-300 shadow-lg transition-all duration-300 ease-in-out" style="width: 100%; height: 100%;"></iframe>
            </div>
            <div class="p-4 border-t text-right bg-gray-50">
                 <a href="index.html#order" id="modalOrderBtn" class="inline-flex items-center px-6 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-lg transition duration-300 font-medium">
                    <i class="fas fa-shopping-cart mr-2"></i> Pesan Template Ini
                </a>
            </div>
        </div>
    </div>

    <?php
    function getTemplateFiles($dirs) {
        $result = [];
        foreach ($dirs as $dir) {
            $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
            foreach ($rii as $file) {
                if ($file->isDir()) continue;
                if (strtolower($file->getExtension()) === 'html') {
                    // Path relative to project root
                    $relative = str_replace('\\', '/', substr($file->getPathname(), strlen(__DIR__) + 1));
                    $result[] = $relative;
                }
            }
        }
        return $result;
    }
    $dirs = [
        __DIR__ . '/template/pernikahan',
        __DIR__ . '/template/tunangan',
        __DIR__ . '/template/ulang_tahun',
    ];
    $templateFiles = getTemplateFiles($dirs);
    ?>
<script>
const templateFiles = <?php echo json_encode($templateFiles, JSON_UNESCAPED_SLASHES); ?>;
        const templateGrid = document.getElementById('templateGrid');
        const tabs = document.querySelectorAll('.category-tab');
        
        // Modal elements
        const previewModal = document.getElementById('previewModal');
        const modalTitle = document.getElementById('modalTitle');
        const previewFrame = document.getElementById('previewFrame');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const desktopViewBtn = document.getElementById('desktopViewBtn');
        const mobileViewBtn = document.getElementById('mobileViewBtn');
        const modalOrderBtn = document.getElementById('modalOrderBtn');

        function getCategoryFromFilePath(filePath) {
            const parts = filePath.split('/');
            if (parts.length > 1) {
                const folderName = parts[1].toLowerCase();
                switch (folderName) {
                    case 'pernikahan': return 'wedding';
                    case 'tunangan': return 'engagement';
                    case 'ulang_tahun': return 'birthday';
                    // Add more cases as needed for other categories
                    default: return 'other';
                }
            }
            return 'other';
        }

        function getCategoryColor(category) {
            switch (category) {
                case 'wedding': return 'pink-500';
                case 'engagement': return 'purple-500';
                case 'birthday': return 'blue-500';
                case 'anniversary': return 'red-500';
                case 'formal': return 'gray-500';
                default: return 'yellow-500';
            }
        }

        function getRandomGradient() {
            const gradients = [
                'bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400',
                'bg-gradient-to-r from-green-400 via-blue-400 to-purple-400',
                'bg-gradient-to-r from-yellow-400 via-red-400 to-pink-500',
                'bg-gradient-to-r from-indigo-400 via-blue-400 to-green-400',
                'bg-gradient-to-r from-pink-500 via-red-400 to-yellow-400',
                'bg-gradient-to-r from-purple-500 via-pink-400 to-red-400',
                'bg-gradient-to-r from-blue-500 via-teal-400 to-green-400',
                'bg-gradient-to-r from-orange-400 via-yellow-400 to-pink-400',
                'bg-gradient-to-r from-teal-400 via-green-400 to-blue-400',
                'bg-gradient-to-r from-red-400 via-pink-400 to-purple-400',
            ];
            return gradients[Math.floor(Math.random() * gradients.length)];
        }
        
        function generateTemplateCardHTML(filePath) {
            const parts = filePath.split('/');
            const category = getCategoryFromFilePath(filePath);
            const categoryDisplayName = category.charAt(0).toUpperCase() + category.slice(1);
            // Get template number for this category
            let templateNumber = 1;
            const categoryFiles = templateFiles.filter(f => getCategoryFromFilePath(f) === category);
            const indexInCategory = categoryFiles.indexOf(filePath);
            if (indexInCategory !== -1) templateNumber = indexInCategory + 1;
            const cardTitle = `Template #${templateNumber}`;
            const categoryColor = getCategoryColor(category);
            const gradientClass = getRandomGradient();

            return `
                <div class="template-card relative bg-white rounded-xl shadow-md overflow-hidden" data-category="${category}" data-path="${filePath}">
                    <div class="relative h-64 overflow-hidden flex items-center justify-center ${gradientClass}">
                        <span class="text-3xl font-bold text-white drop-shadow-lg">${cardTitle}</span>
                        <div class="absolute top-2 left-2">
                            <span class="text-xs px-2 py-1 bg-${categoryColor} text-white rounded-full">${categoryDisplayName}</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">${cardTitle}</h3>
                        <p class="text-gray-600 text-sm mb-3">Tags: ${categoryDisplayName} | Modern | Customizable</p>
                        <div class="flex justify-end items-center mt-4">
                            <button class="preview-btn text-sm px-3 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg transition duration-300 mr-2">
                                <i class="fas fa-eye mr-1"></i> Preview
                            </button>
                            <a href="index.html#order?template=${encodeURIComponent(filePath)}" class="order-btn text-sm px-3 py-2 bg-pink-500 hover:bg-pink-600 text-white rounded-lg transition duration-300">
                                Pesan
                            </a>
                        </div>
                    </div>
                </div>
            `;
        }

        function populateGallery(filterCategory = 'all') {
            templateGrid.innerHTML = ''; // Clear existing cards
            let delay = 0;
            templateFiles.forEach(filePath => {
                const cardCategory = getCategoryFromFilePath(filePath);
                if (filterCategory === 'all' || cardCategory === filterCategory) {
                    const cardHTML = generateTemplateCardHTML(filePath);
                    const cardElement = document.createElement('div');
                    cardElement.innerHTML = cardHTML.trim();
                    const actualCard = cardElement.firstChild;
                    templateGrid.appendChild(actualCard);
                    
                    // Staggered animation
                    actualCard.style.animationDelay = `${delay}ms`;
                    actualCard.classList.add('animate-fadeIn');
                    setTimeout(() => {
                         actualCard.classList.add('visible');
                    }, delay + 50); // Ensure animation starts after element is in DOM
                    delay += 100;
                }
            });
            addPreviewButtonListeners();
        }
        
        function openModal(filePath) {
            const fileName = filePath.split('/').pop().replace('.html', '');
            const category = getCategoryFromFilePath(filePath);
            const cardTitle = fileName.replace(/_/g, ' ').replace(/template/gi, '').trim() || category.charAt(0).toUpperCase() + category.slice(1);
            
            modalTitle.textContent = `Preview: ${cardTitle}`;
            previewFrame.src = filePath;
            modalOrderBtn.href = `index.html#order?template=${encodeURIComponent(filePath)}`;
            previewModal.classList.remove('hidden', 'opacity-0');
            previewModal.querySelector('.transform').classList.remove('scale-95');
            setTimeout(() => {
                 previewModal.classList.add('opacity-100');
                 previewModal.querySelector('.transform').classList.add('scale-100');
            }, 10);
            // Default to desktop view
            setDesktopView();
            // Set current index for navigation
            window.currentTemplateIndex = templateFiles.indexOf(filePath);
            updateNavButtons();
        }

        // Add navigation buttons to modal
        const navBtnStyle = 'px-3 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg transition duration-300 mx-1';
        let navBtnContainer = document.createElement('div');
        navBtnContainer.className = 'flex justify-center items-center mt-2';
        navBtnContainer.innerHTML = `
            <button id="prevTemplateBtn" class="${navBtnStyle}"><i class="fas fa-chevron-left"></i></button>
            <button id="nextTemplateBtn" class="${navBtnStyle}"><i class="fas fa-chevron-right"></i></button>
        `;
        // Insert nav buttons after modalTitle
        document.addEventListener('DOMContentLoaded', function() {
            const modalHeader = document.getElementById('modalTitle').parentElement;
            if (!document.getElementById('prevTemplateBtn')) {
                modalHeader.appendChild(navBtnContainer);
            }
            document.getElementById('prevTemplateBtn').addEventListener('click', showPrevTemplate);
            document.getElementById('nextTemplateBtn').addEventListener('click', showNextTemplate);
        });

        function showPrevTemplate() {
            if (window.currentTemplateIndex > 0) {
                window.currentTemplateIndex--;
                openModal(templateFiles[window.currentTemplateIndex]);
            }
        }
        function showNextTemplate() {
            if (window.currentTemplateIndex < templateFiles.length - 1) {
                window.currentTemplateIndex++;
                openModal(templateFiles[window.currentTemplateIndex]);
            }
        }
        function updateNavButtons() {
            const prevBtn = document.getElementById('prevTemplateBtn');
            const nextBtn = document.getElementById('nextTemplateBtn');
            if (!prevBtn || !nextBtn) return;
            prevBtn.disabled = window.currentTemplateIndex <= 0;
            nextBtn.disabled = window.currentTemplateIndex >= templateFiles.length - 1;
            prevBtn.classList.toggle('opacity-50', prevBtn.disabled);
            nextBtn.classList.toggle('opacity-50', nextBtn.disabled);
        }

        function closeModal() {
            previewModal.classList.add('opacity-0');
            previewModal.querySelector('.transform').classList.add('scale-95');
             setTimeout(() => {
                previewModal.classList.add('hidden');
                previewFrame.src = 'about:blank'; // Clear iframe
                previewModal.querySelector('.transform').classList.remove('scale-100');
            }, 300);
        }

        function setDesktopView() {
            previewFrame.style.width = '100%';
            previewFrame.style.height = '100%';
            previewFrame.style.maxWidth = '100%';
            previewFrame.classList.remove('mx-auto');
            desktopViewBtn.classList.add('bg-pink-500', 'text-white');
            desktopViewBtn.classList.remove('bg-gray-200', 'hover:bg-gray-300');
            mobileViewBtn.classList.remove('bg-pink-500', 'text-white');
            mobileViewBtn.classList.add('bg-gray-200', 'hover:bg-gray-300');
        }

        function setMobileView() {
            previewFrame.style.width = '375px'; // Common mobile width
            previewFrame.style.height = '667px'; // Common mobile height
            previewFrame.style.maxWidth = '100%';
            previewFrame.classList.add('mx-auto');
            mobileViewBtn.classList.add('bg-pink-500', 'text-white');
            mobileViewBtn.classList.remove('bg-gray-200', 'hover:bg-gray-300');
            desktopViewBtn.classList.remove('bg-pink-500', 'text-white');
            desktopViewBtn.classList.add('bg-gray-200', 'hover:bg-gray-300');
        }

        closeModalBtn.addEventListener('click', closeModal);
        desktopViewBtn.addEventListener('click', setDesktopView);
        mobileViewBtn.addEventListener('click', setMobileView);
        previewModal.addEventListener('click', (event) => {
            if (event.target === previewModal) { // Click outside modal content
                closeModal();
            }
        });
        
        function addPreviewButtonListeners() {
            document.querySelectorAll('.preview-btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    const card = e.target.closest('.template-card');
                    const filePath = card.dataset.path;
                    openModal(filePath);
                });
            });
        }

        // Category tab functionality
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active', 'bg-pink-500', 'text-white'));
                tabs.forEach(t => t.classList.add('bg-gray-100', 'text-gray-800'));
                
                tab.classList.add('active', 'bg-pink-500', 'text-white');
                tab.classList.remove('bg-gray-100', 'text-gray-800');
                
                const category = tab.dataset.category;
                populateGallery(category);
            });
        });
        
        // Initial population of the gallery
        document.addEventListener('DOMContentLoaded', () => {
            populateGallery(); // Show all templates initially
            
            // Smooth scrolling for anchor links (if any are left or needed)
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const hrefAttribute = this.getAttribute('href');
                    if (hrefAttribute && hrefAttribute !== '#' && document.querySelector(hrefAttribute)) {
                        e.preventDefault();
                        document.querySelector(hrefAttribute).scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
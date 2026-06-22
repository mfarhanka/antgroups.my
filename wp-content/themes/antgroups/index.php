<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&T Group | Official Landing Page</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfcfc;
        }

        .header-bg {
            background: linear-gradient(135deg, #0a1b33 0%, #152a4a 100%);
            position: relative;
            overflow: hidden;
        }

        .header-bg::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: radial-gradient(#ffffff0a 1px, transparent 1px);
            background-size: 30px 30px;
        }

        .product-tile {
            aspect-ratio: 1 / 1;
            background-color: #ededed;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1.5rem;
            cursor: pointer;
        }

        .product-tile:hover {
            background-color: #e2e2e2;
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .logo-circle {
            width: 90px;
            height: 90px;
            background: transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 10;
        }

        .branch-mini-logo {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #d91e18;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 8px;
            color: white;
            margin-right: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .product-desc {
            font-size: 10px;
            color: #666;
            margin-top: 8px;
            line-height: 1.2;
            display: none;
            /* Shown on hover or specific layouts */
        }

        .product-tile:hover .product-desc {
            display: block;
        }

        .section-title {
            letter-spacing: 0.05em;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }
    </style>
</head>

<body>

    <!-- Header Section (As per Image) -->
    <header class="header-bg py-12 relative shadow-xl">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center relative z-10">
            <!-- Main Logo Circle -->
            <div class="logo-circle mb-6 md:mb-0 md:mr-8">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    // Fallback if no logo is uploaded
                    echo '<img src="' . get_template_directory_uri() . '/fallback-logo.png" alt="Logo">';
                }
                ?>
            </div>

            <div class="text-center md:text-left">
                <h1 class="text-white text-5xl font-black tracking-tight mb-4">A&T GROUP</h1>

                <!-- Second Line: Branches -->
                <div class="flex flex-wrap justify-center md:justify-start gap-6 text-white text-xs font-bold uppercase tracking-widest">
                    <a href="https://www.jbsignboard.com/" class="flex items-center hover:text-red-400 transition">
                        <span class="branch-mini-logo">A&T</span> A&T JB
                    </a>
                    <a href="https://www.antsignage.com/" class="flex items-center hover:text-red-400 transition">
                        <span class="branch-mini-logo">A&T</span> A&T KL
                    </a>
                    <a href="https://signages.com.sg/" class="flex items-center hover:text-red-400 transition">
                        <span class="branch-mini-logo">A&T</span> A&T | AT SG
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- History Section -->
    <section id="history" class="bg-white border-b">
        <div class="container mx-auto px-6 py-12">
            <div class="max-w-4xl">
                <h2 class="text-sm font-black text-red-600 uppercase tracking-[0.3em] mb-4">Our History</h2>
                <h3 class="text-3xl font-bold text-gray-800 mb-6">Established Excellence Since 1984</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    A&T Group began its journey as <strong>Syarikat A.T. Cheong</strong>, a specialized land surveying firm. Over the decades, we recognized the growing need for high-quality corporate identity solutions and transitioned into a leader in the signage and printing industry.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    By 2012, we officially incorporated <strong>A&T Signboard & Printing</strong>. Today, with a 10,000 sq ft production facility and advanced machinery, we provide integrated branding solutions across Johor Bahru, Kuala Lumpur, and Singapore.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content: Corporate Product Grid -->
    <main class="container mx-auto px-6 py-16">
        <div class="mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-700 uppercase inline-block">
                Corporate Product
            </h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            <!-- 1. Signboard -->
            <div class="product-tile group">
                <i class="fa-solid fa-store text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase">Signboard</span>
                <p class="product-desc">3D Box-up, LED backlit, and premium shopfront identification.</p>
            </div>

            <!-- 2. Project Signages -->
            <div class="product-tile group">
                <i class="fa-solid fa-helmet-safety text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase">Project Signages</span>
                <p class="product-desc">Development hoardings, pylon signs, and wayfinding systems.</p>
            </div>

            <!-- 3. Safety Signages -->
            <div class="product-tile group">
                <i class="fa-solid fa-door-open text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase">Safety Signages</span>
                <p class="product-desc">Industrial OSHA signs, JKR road signs, and hazard warnings.</p>
            </div>

            <!-- 4. Inkjet Printing -->
            <div class="product-tile group">
                <i class="fa-solid fa-scroll text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase">Inkjet Printing</span>
                <p class="product-desc">Large format banners, buntings, and custom vinyl stickers.</p>
            </div>

            <!-- 5. Digital & Offset -->
            <div class="product-tile group">
                <i class="fa-solid fa-print text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase text-center leading-tight">Digital &<br>Offset Printing</span>
                <p class="product-desc">Business cards, catalogs, flyers, and corporate brochures.</p>
            </div>

            <!-- 6. Exhibition Display -->
            <div class="product-tile group">
                <i class="fa-solid fa-person-chalkboard text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase text-center leading-tight">Exhibition<br>Display System</span>
                <p class="product-desc">Pop-up backdrops, booth setups, and modular displays.</p>
            </div>

            <!-- 7. Acrylic Products -->
            <div class="product-tile group">
                <i class="fa-solid fa-cubes text-5xl text-teal-600 mb-4 opacity-80"></i>
                <span class="text-xs font-black text-gray-700 uppercase">Acrylic Products</span>
                <p class="product-desc">Laser-cut displays, nameplates, and retail acrylic fixtures.</p>
            </div>

            <!-- 8. Contact Us Tile -->
            <div class="product-tile bg-gray-200">
                <i class="fa-solid fa-comments text-5xl text-gray-400 mb-4"></i>
                <a href="#contact" class="bg-teal-500 hover:bg-teal-600 text-white text-[10px] font-bold py-2 px-8 rounded uppercase tracking-widest transition-all">
                    Contact Us
                </a>
            </div>

        </div>
    </main>

    <!-- Bottom Line: Locations and Contact -->
    <footer id="contact" class="bg-gray-100 py-16 border-t border-gray-200">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                <!-- JB HQ -->
                <div class="border-l-4 border-red-600 pl-6">
                    <h4 class="font-black text-gray-800 mb-4 uppercase tracking-tighter">Johor Bahru (HQ)</h4>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        6, Jalan Puncak, Taman Perindustrian Puncak,<br>81800 Ulu Tiram, Johor, Malaysia.
                    </p>
                    <div class="text-xs font-bold text-teal-700">
                        <p><i class="fa-solid fa-phone mr-2"></i>+6016-789 1110</p>
                        <p><i class="fa-solid fa-envelope mr-2"></i>sales@antsignage.com</p>
                    </div>
                </div>

                <!-- KL Branch -->
                <div class="border-l-4 border-red-600 pl-6">
                    <h4 class="font-black text-gray-800 mb-4 uppercase tracking-tighter">Kuala Lumpur</h4>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        16, Jalan Nilam 1/6, Taman Teknologi Tinggi Subang,<br>47500 Subang Jaya, Selangor.
                    </p>
                    <div class="text-xs font-bold text-teal-700">
                        <p><i class="fa-solid fa-phone mr-2"></i>+6016-701 3295</p>
                        <p><i class="fa-solid fa-envelope mr-2"></i>kl@antsignage.com</p>
                    </div>
                </div>

                <!-- SG Branch -->
                <div class="border-l-4 border-red-600 pl-6">
                    <h4 class="font-black text-gray-800 mb-4 uppercase tracking-tighter">Singapore</h4>
                    <p class="text-xs text-gray-600 leading-relaxed mb-4">
                        Block 601, Ang Mo Kio Avenue 5,<br>560601 Singapore.
                    </p>
                    <div class="text-xs font-bold text-teal-700">
                        <p><i class="fa-solid fa-phone mr-2"></i>+65 8286 1600</p>
                        <p><i class="fa-solid fa-envelope mr-2"></i>sales@atprinting.com.sg</p>
                    </div>
                </div>

            </div>

            <div class="mt-16 pt-8 border-t border-gray-200 text-center text-[10px] text-gray-400 uppercase tracking-[0.3em]">
                &copy; 2024 A&T Advertising Group. Making the difference in visual branding.
            </div>
        </div>
    </footer>

</body>

</html>
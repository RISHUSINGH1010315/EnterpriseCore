<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Industries | EnterpriseCore Precision Engineering</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary-fixed": "#d8e2ff",
                    "on-primary-fixed": "#00174b",
                    "primary": "#004ac6",
                    "inverse-on-surface": "#edf0ff",
                    "surface-variant": "#dce2f7",
                    "secondary-container": "#2170e4",
                    "background": "#f9f9ff",
                    "tertiary-fixed-dim": "#89ceff",
                    "surface-container-highest": "#dce2f7",
                    "on-surface-variant": "#434655",
                    "primary-container": "#2563eb",
                    "surface-tint": "#0053db",
                    "surface-container-low": "#f1f3ff",
                    "tertiary-fixed": "#c9e6ff",
                    "on-secondary-container": "#fefcff",
                    "on-surface": "#141b2b",
                    "surface-bright": "#f9f9ff",
                    "primary-fixed": "#dbe1ff",
                    "surface-container": "#e9edff",
                    "secondary-fixed-dim": "#adc6ff",
                    "on-tertiary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-container-high": "#e1e8fd",
                    "error-container": "#ffdad6",
                    "on-secondary-fixed-variant": "#004395",
                    "on-background": "#141b2b",
                    "on-primary": "#ffffff",
                    "tertiary": "#005a82",
                    "primary-fixed-dim": "#b4c5ff",
                    "inverse-primary": "#b4c5ff",
                    "on-secondary": "#ffffff",
                    "on-tertiary-fixed-variant": "#004c6e",
                    "on-primary-fixed-variant": "#003ea8",
                    "inverse-surface": "#293040",
                    "outline-variant": "#c3c6d7",
                    "surface-dim": "#d3daef",
                    "secondary": "#0058be",
                    "on-primary-container": "#eeefff",
                    "surface": "#f9f9ff",
                    "on-error": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed": "#001a42",
                    "on-tertiary-fixed": "#001e2f",
                    "outline": "#737686",
                    "on-tertiary-container": "#e4f2ff",
                    "tertiary-container": "#0074a6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "container-max": "1280px",
                    "base": "8px",
                    "margin-desktop": "48px",
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "section-padding": "96px"
            },
            "fontFamily": {
                    "label-sm": ["Poppins"],
                    "headline-xl": ["Poppins"],
                    "label-md": ["Poppins"],
                    "body-lg": ["Poppins"],
                    "headline-lg": ["Poppins"],
                    "display-lg-mobile": ["Poppins"],
                    "body-md": ["Poppins"],
                    "display-lg": ["Poppins"],
                    "headline-md": ["Poppins"]
            },
            "fontSize": {
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .industry-card-hover:hover .industry-image {
            transform: scale(1.05);
        }
        .industry-image {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary/20 selection:text-primary">
    <!-- Top Navigation -->
    <nav class="bg-surface/90 backdrop-blur-md sticky top-0 z-50 border-b border-outline-variant/30 shadow-sm w-full">
        <div class="flex justify-between items-center h-[72px] px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
            <div class="flex items-center gap-2">
                <a href="index.php" class="font-headline-md text-headline-md font-bold text-primary">EnterpriseCore</a>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="services.php">Services</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="case-studies.php">Case Studies</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="industries.php">Industries</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="blog.php">Blog</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="careers.php">Careers</a>
            </div>
            <div class="flex items-center gap-4">
                <button class="material-symbols-outlined text-on-surface-variant hover:text-primary">search</button>
                <a href="request-quote.php" class="hidden sm:block bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md text-label-md hover:shadow-lg transition-all active:scale-95 text-center">Request Quote</a>
                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu(true)" class="md:hidden flex items-center text-on-surface-variant hover:text-primary transition-colors focus:outline-none">
                    <span class="material-symbols-outlined text-[28px]">menu</span>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Drawer -->
        <div id="mobile-drawer" onclick="if(event.target===this) toggleMobileMenu(false)" class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 md:hidden" style="opacity: 0; pointer-events: none;">
            <div id="mobile-drawer-content" class="absolute right-0 top-0 bottom-0 w-64 bg-white shadow-xl transform translate-x-full transition-all duration-300 p-8 flex flex-col gap-6" style="transform: translateX(100%);">
                <div class="flex justify-between items-center pb-4 border-b border-outline-variant/30">
                    <span class="font-bold text-primary">Menu</span>
                    <button onclick="toggleMobileMenu(false)" class="material-symbols-outlined text-on-surface-variant hover:text-primary focus:outline-none">close</button>
                </div>
                <div class="flex flex-col gap-4">
                    <a class="font-body-md text-on-surface hover:text-primary transition-colors py-2 border-b border-outline-variant/10" href="services.php">Services</a>
                    <a class="font-body-md text-on-surface hover:text-primary transition-colors py-2 border-b border-outline-variant/10" href="case-studies.php">Case Studies</a>
                    <a class="font-body-md text-on-surface hover:text-primary transition-colors py-2 border-b border-outline-variant/10" href="industries.php">Industries</a>
                    <a class="font-body-md text-on-surface hover:text-primary transition-colors py-2 border-b border-outline-variant/10" href="blog.php">Blog</a>
                    <a class="font-body-md text-on-surface hover:text-primary transition-colors py-2" href="careers.php">Careers</a>
                </div>
                <div class="mt-auto">
                    <a href="request-quote.php" class="block w-full bg-primary text-on-primary py-3 rounded-lg font-label-md text-center">Request Quote</a>
                </div>
            </div>
        </div>
    </nav>

<main>
        <!-- Hero Section -->
        <section class="relative overflow-hidden pt-24 pb-16 md:pt-32 md:pb-24">
            <div class="max-w-container-max mx-auto px-margin-desktop relative z-10 text-center">
                <span class="inline-block bg-primary-container/10 text-primary px-4 py-1.5 rounded-full font-label-sm text-label-sm mb-6 uppercase tracking-widest">Global Expertise</span>
                <h1 class="font-display-lg text-display-lg md:text-display-lg mb-8 tracking-tight">Precision Solutions for <br/><span class="text-primary">Every Industry</span></h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl mx-auto mb-12">
                    We bridge the gap between complex engineering and industry-specific operational needs. From healthcare compliance to manufacturing automation, EnterpriseCore delivers the digital backbone of tomorrow.
                </p>
            </div>
        </section>

        <!-- Industry Grid - Split Card Layout -->
        <section class="pb-section-padding">
            <div class="max-w-container-max mx-auto px-margin-desktop space-y-gutter">
                <!-- Healthcare -->
                <div class="flex flex-col md:flex-row bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-500 group industry-card-hover">
                    <div class="w-full md:w-1/2 h-80 md:h-auto overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center industry-image" data-alt="Healthcare research facility" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAyfJvCkAvuWf3IXp9Tejw-3lsM0eQEMm_Qeul0praRRoCKLkhgVIJuF1pdqs6pAopzqsMsNHQ5OyTNLrkB_Mt2i0xYXqaPmXc_qnPzOQwpavdtzKExyKD7VeSqAbvZy9uomEExhtjcft4GSW_1NQ4-LkoyikFP7hBtz3nUhiTVFr4ILgKO57IF4VvJxle90UlUtBbdVgIeuaT_Nm402FxGXo_5MofQtm6a-DkvN2jpT6Hk1W8MqiB5ow')"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">medical_services</span>
                            <h2 class="font-headline-lg text-headline-lg">Healthcare</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 leading-relaxed">
                            Revolutionizing patient care through high-precision data engineering and secure cloud infrastructures. We ensure HIPAA-compliant scaling while integrating AI-driven diagnostic tools.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Real-time Patient Monitoring Pipelines</span>
                            </li>
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Interoperable EHR Architectures</span>
                            </li>
                        </ul>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group/link hover:translate-x-1 transition-transform" href="case-studies.php">
                            View Healthcare Case Study 
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Finance -->
                <div class="flex flex-col md:flex-row-reverse bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-500 group industry-card-hover">
                    <div class="w-full md:w-1/2 h-80 md:h-auto overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center industry-image" data-alt="Financial trading floor" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAB5u6B7BxKBE_k6Y1ABrNcQ_G-Wk5BBpa2SyunDhjgrTnO2cliEiab4UvEXej2LP8OMSn19C8Q2nRH-kL_JWWeES9VYybVbXfynANEvWQaOingXklyZbuF-Kq2NjMcyehswMAchUps7ISRBcdUtSs5vwNiYHwdD6CHyB0lw9G6XF7wPgzgYlYXc0zJmMeZJDAj3o7Ey7TOWaXCyd_L7MbmJ2cOqvcI4v3dXolvuNWYeUKkYF1vf5oW8g')"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">account_balance</span>
                            <h2 class="font-headline-lg text-headline-lg">Finance</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 leading-relaxed">
                            Securing the global economy with low-latency execution engines and multi-layered fraud detection systems. We provide the resilience required for Tier-1 financial institutions.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Quantum-Resistant Encryption</span>
                            </li>
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Algorithmic Risk Assessment</span>
                            </li>
                        </ul>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group/link hover:translate-x-1 transition-transform" href="case-studies.php">
                            View Finance Case Study 
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Manufacturing -->
                <div class="flex flex-col md:flex-row bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-500 group industry-card-hover">
                    <div class="w-full md:w-1/2 h-80 md:h-auto overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center industry-image" data-alt="Smart factory line" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCmQpPAotYscfTud75KKeCX1e8IZzwIMU1f4BskorKB5IEroDWeY6Tss2LNQLPIOHqW3fqtgfXVRGAgU7NPAYVXsAyPymGTjDjCWzVaUBpaWUSGPYIkP-lQTeRVYvXb2-ARzYX7mZkQvFJKJHWAmR9cP9J41u7kGPGUugCTVpJTfSUXv5rRFcNpnul2S_pndqhKU0rPOVsabKgZAKq5LPNBtop_oL2kzZfHDc5aIyPOeW3tXRjjuqmBMg')"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">precision_manufacturing</span>
                            <h2 class="font-headline-lg text-headline-lg">Manufacturing</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 leading-relaxed">
                            Driving Industry 4.0 through digital twin implementation and predictive maintenance ecosystems. We optimize supply chains with real-time IoT integration.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Predictive Fault Analysis</span>
                            </li>
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Automated Logistics Orchestration</span>
                            </li>
                        </ul>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group/link hover:translate-x-1 transition-transform" href="case-studies.php">
                            View Manufacturing Case Study 
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Retail -->
                <div class="flex flex-col md:flex-row-reverse bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-500 group industry-card-hover">
                    <div class="w-full md:w-1/2 h-80 md:h-auto overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center industry-image" data-alt="Luxury flagship store" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAJ-0lCgmITlwvzUsEj4GwEADEcqamBVWyCob0PEhrqohlsxLncuBP9AuFGB5a_513j6myG939kFeVIVIf7EamZ7uXg1TF4yEBXJLgLjAsudD6xueOHdKok9UMZGYpzwthtihs-CnFla71_FDp23B1Wr2wAspfOPjtCqX2nsRSb8SIJOTHmQzRyJ9xZY8NhTUdq-rt-JPF24UsQucuGxXGwXXkHoG3biMWK8apaJYwVbiS3rOGOFkb3fw')"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">shopping_bag</span>
                            <h2 class="font-headline-lg text-headline-lg">Retail</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 leading-relaxed">
                            Crafting seamless omnichannel experiences that unify physical and digital storefronts. We leverage hyper-personalization engines to drive customer loyalty.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Inventory Intelligence AI</span>
                            </li>
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Dynamic Pricing Models</span>
                            </li>
                        </ul>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group/link hover:translate-x-1 transition-transform" href="case-studies.php">
                            View Retail Case Study 
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Education -->
                <div class="flex flex-col md:flex-row bg-surface-container-lowest rounded-xl overflow-hidden border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-500 group industry-card-hover">
                    <div class="w-full md:w-1/2 h-80 md:h-auto overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center industry-image" data-alt="University library learning space" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBBnyTCd7igaTf6odqiHYLx7DNGusXMnHdISxOA6sKUB9GI9EbSGY6aoa6n-qY_METEPsuf5VIURtxj0KzzWERATd7s15I5Llr2SZDcKLzTmB_gkMtCqQekBGOi0Y3I0A2g0_Cx629a7A1bc-zDmidAqNn-NKSiZORXBpPmj_jOfop0hPqI_tBbgXK6b2Iho5lmSYdBt29NtTWr-vO9fXMKjW0etUQgbH__xWQzRJCnzMM2GXObmGZq9g')"></div>
                    </div>
                    <div class="w-full md:w-1/2 p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary text-3xl">school</span>
                            <h2 class="font-headline-lg text-headline-lg">Education</h2>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 leading-relaxed">
                            Empowering institutions with scalable LMS architectures and immersive learning technologies. We enable global collaboration through high-bandwidth educational hubs.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Hybrid Learning Infrastructure</span>
                            </li>
                            <li class="flex items-center gap-3 text-on-surface">
                                <span class="material-symbols-outlined text-primary text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Secure Student Data Vaults</span>
                            </li>
                        </ul>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group/link hover:translate-x-1 transition-transform" href="case-studies.php">
                            View Education Case Study 
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-primary py-24 relative overflow-hidden">
            <div class="absolute inset-0 opacity-20"></div>
            <div class="max-w-container-max mx-auto px-margin-desktop relative z-10 text-center">
                <h2 class="font-headline-xl text-headline-xl text-on-primary mb-8">Ready to Transform Your Industry?</h2>
                <p class="font-body-lg text-body-lg text-on-primary/80 max-w-2xl mx-auto mb-12">
                    Consult with our domain experts to build a roadmap for your organization's digital evolution.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-gutter">
                    <a href="request-quote.php" class="bg-white text-primary px-10 py-4 rounded-lg font-label-md text-label-md font-bold hover:shadow-xl transition-all active:scale-95 inline-block text-center">Speak to an Expert</a>
                    <a href="request-quote.php" class="border border-on-primary text-on-primary px-10 py-4 rounded-lg font-label-md text-label-md font-bold hover:bg-on-primary/10 transition-all inline-block text-center">Download Capability Deck</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-gutter px-margin-desktop py-section-padding max-w-container-max mx-auto">
            <div class="md:col-span-2">
                <span class="font-headline-md text-headline-md font-bold text-primary mb-6 block">EnterpriseCore</span>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-sm mb-8">
                    Precision engineering for global leaders. We build the systems that define tomorrow's industries.
                </p>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Company</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="index.php">About Us</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="careers.php">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Resources</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="case-studies.php">Insights</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="blog.php">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Contact</h4>
                <p class="font-body-md text-body-md text-on-surface-variant mb-4">info@enterprisecore.com</p>
                <p class="font-body-md text-body-md text-on-surface-variant">+1 (555) 012-3456</p>
            </div>
        </div>
        <div class="px-margin-desktop py-8 border-t border-outline-variant/30 max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="font-label-sm text-label-sm text-on-surface-variant">© 2024 EnterpriseCore. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.industry-card-hover').forEach(card => {
            card.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
            observer.observe(card);
        });
    </script>
    <!-- Mobile Menu Toggle Script -->
    <script>
        window.toggleMobileMenu = function(open) {
            const drawer = document.getElementById('mobile-drawer');
            const drawerContent = document.getElementById('mobile-drawer-content');
            if (drawer && drawerContent) {
                if (open) {
                    drawer.style.opacity = '1';
                    drawer.style.pointerEvents = 'auto';
                    drawerContent.style.transform = 'translateX(0)';
                } else {
                    drawer.style.opacity = '0';
                    drawer.style.pointerEvents = 'none';
                    drawerContent.style.transform = 'translateX(100%)';
                }
            }
        };
    </script>
</body>
</html>





<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>EnterpriseCore | Precision Engineering for the Future</title>
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
        display: inline-block;
        line-height: 1;
        text-transform: none;
        letter-spacing: normal;
        word-wrap: normal;
        white-space: nowrap;
        direction: ltr;
      }
      .glass-effect {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
      }
      .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -10px rgba(0, 74, 198, 0.1);
      }
      @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
      }
      .animate-float {
        animation: float 4s ease-in-out infinite;
      }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
        <!-- Top Navigation -->
    <nav class="bg-surface/90 backdrop-blur-md sticky top-0 z-50 border-b border-outline-variant/30 shadow-sm">
        <div class="flex justify-between items-center h-[72px] px-margin-desktop max-w-container-max mx-auto w-full">
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
                <button id="mobile-menu-btn" class="md:hidden flex items-center text-on-surface-variant hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-[28px]">menu</span>
                </button>
            </div>
        </div>
        <!-- Mobile Menu Drawer -->
        <div id="mobile-drawer" class="fixed inset-0 z-50 bg-black/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 md:hidden">
            <div id="mobile-drawer-content" class="absolute right-0 top-0 bottom-0 w-64 bg-white shadow-xl transform translate-x-full transition-transform duration-300 p-8 flex flex-col gap-6">
                <div class="flex justify-between items-center pb-4 border-b border-outline-variant/30">
                    <span class="font-bold text-primary">Menu</span>
                    <button id="mobile-menu-close" class="material-symbols-outlined text-on-surface-variant hover:text-primary">close</button>
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

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-surface-container-lowest pt-20 pb-32">
        <div class="absolute inset-0 z-0 opacity-40"></div>
        <div class="max-w-container-max mx-auto px-margin-desktop relative z-10 grid lg:grid-cols-2 gap-gutter items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-primary-container/10 text-primary rounded-full border border-primary/20">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                    <span class="text-label-sm font-label-sm uppercase tracking-wider">Enterprise-Grade Performance</span>
                </div>
                <h1 class="font-display-lg text-display-lg leading-tight">
                    Architecting the Future of <span class="text-primary">Enterprise Solutions</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    We deliver precision-engineered digital infrastructure that scales with your ambition. Transforming complex business challenges into seamless technological advantages.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="request-quote.php" class="bg-primary text-on-primary px-8 py-4 rounded-xl font-headline-md text-body-md hover:shadow-xl transition-all hover:-translate-y-1 text-center inline-block">Get Started</a>
                    <a href="case-studies.php" class="border border-outline-variant text-primary px-8 py-4 rounded-xl font-headline-md text-body-md hover:bg-surface-container-high transition-all text-center inline-block">View Portfolio</a>
                </div>
            </div>
            <div class="hidden lg:block relative">
                <div class="relative z-10 animate-float rounded-3xl overflow-hidden shadow-2xl">
                    <!-- Embedded Video Playing As Hero Media Asset -->
                    <video class="w-full h-auto object-cover" autoplay loop muted playsinline>
                        <source src="assets/videos/hero_video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <!-- Abstract Floating elements -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-secondary-container/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-primary-container/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="bg-surface-container py-20">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter text-center">
                <div class="p-8">
                    <div class="font-display-lg text-primary mb-2" id="stat-1">10+</div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-widest">Years Experience</p>
                </div>
                <div class="p-8 border-x border-outline-variant/30">
                    <div class="font-display-lg text-primary mb-2" id="stat-2">500+</div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-widest">Global Projects</p>
                </div>
                <div class="p-8">
                    <div class="font-display-lg text-primary mb-2" id="stat-3">200+</div>
                    <p class="font-label-md text-on-surface-variant uppercase tracking-widest">Tech Experts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Bento Grid -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="mb-16 text-center max-w-2xl mx-auto">
                <h2 class="font-headline-xl text-headline-xl mb-6">Strategic Digital Services</h2>
                <p class="text-on-surface-variant">Our core competencies are designed to address the most critical infrastructure needs of modern enterprises.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- Web Dev -->
                <div onclick="window.location.href='services.php'" class="md:col-span-8 group cursor-pointer overflow-hidden rounded-2xl bg-surface-container-low p-10 border border-outline-variant/30 card-hover transition-all duration-300">
                    <div class="flex flex-col md:flex-row gap-10 items-center">
                        <div class="flex-1 space-y-4">
                            <span class="material-symbols-outlined text-primary text-[48px]">terminal</span>
                            <h3 class="font-headline-md text-headline-md">Custom Web Development</h3>
                            <p class="text-on-surface-variant">Scalable, secure, and high-performance web applications built with the latest enterprise stacks.</p>
                            <ul class="space-y-2 pt-4">
                                <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> Microservices Architecture</li>
                                <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-primary text-sm">check_circle</span> React &amp; Node.js Excellence</li>
                            </ul>
                        </div>
                        <div class="flex-1 w-full">
                            <img class="rounded-xl shadow-lg border border-outline-variant/20" data-alt="Dashboard UI mockup" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbSWWhqh4FmBawy1Kr7_OvbFw1mBnSnBzWJLqpPuVE7LNLmSweB_4UxyS4b2hpBCqfuOc-IouoSMF-DxKUBvr8s_bpK5XL3JvKrLxOWvgtO8z-eeCkJqXWSwvGmi3SUklz6zuyi51HQbYIeun4UxfibwX1PzAgDyvKYoNhvNvHkUmHVLtKX1GtPeX5TqJ8Vimw_FVtxO1agJ0MkR2l4x6uICkr5Sk0mjNzpnGwkCyl-Lh5wWapcGqU4g"/>
                        </div>
                    </div>
                </div>
                <!-- Cloud -->
                <div onclick="window.location.href='services.php'" class="md:col-span-4 group cursor-pointer rounded-2xl bg-primary-container text-on-primary-container p-10 card-hover transition-all duration-300">
                    <div class="space-y-6">
                        <span class="material-symbols-outlined text-[48px] text-on-primary-container">cloud_done</span>
                        <h3 class="font-headline-md text-headline-md">Cloud Infrastructure</h3>
                        <p class="opacity-90">Enterprise-grade AWS &amp; Azure migration and optimization services for maximum uptime.</p>
                        <div class="pt-8">
                            <span class="material-symbols-outlined text-[64px] opacity-20 float-right">settings_suggest</span>
                        </div>
                    </div>
                </div>
                <!-- AI -->
                <div onclick="window.location.href='services.php'" class="md:col-span-4 group cursor-pointer rounded-2xl bg-surface-container-high p-10 border border-outline-variant/30 card-hover transition-all duration-300">
                    <div class="space-y-6">
                        <span class="material-symbols-outlined text-primary text-[48px]">psychology</span>
                        <h3 class="font-headline-md text-headline-md">AI &amp; Automation</h3>
                        <p class="text-on-surface-variant">Integrating intelligent workflows and generative AI to revolutionize your business processes.</p>
                    </div>
                </div>
                <!-- Cybersecurity -->
                <div onclick="window.location.href='services.php'" class="md:col-span-8 group cursor-pointer overflow-hidden rounded-2xl bg-on-surface text-surface p-10 card-hover transition-all duration-300">
                    <div class="flex flex-col md:flex-row gap-10 items-center">
                        <div class="flex-1">
                            <img class="rounded-xl opacity-80" data-alt="Digital security protocols" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNcL3sj1X6KZ2RNQE6E6HuLhlNuSeL1u_my6ct5en107jI8zS68a3UYFrwy4afjAmqOImuG-OEUt1aRnM_xmluzvKfaCEYKPT6YzASeLx5tyxKFvXZaKtCA3wEknuHYMm9ZZXIn_ySW-o1-13QOlRmq8bHBD57xl7PCoxDVAaMQfNo33DkTCk7bATTxG_IshG7gNBdMcEo7dvyBzELZp3GOjZI5rimrpIsbPXVMrcu9SOOzLPW_C2esA"/>
                        </div>
                        <div class="flex-1 space-y-4">
                            <span class="material-symbols-outlined text-primary-fixed text-[48px]">shield_lock</span>
                            <h3 class="font-headline-md text-headline-md">Advanced Cybersecurity</h3>
                            <p class="text-surface-variant">Proactive threat hunting, penetration testing, and zero-trust security framework implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-section-padding bg-surface-container-low">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-12">
                    <div>
                        <h2 class="font-headline-xl text-headline-xl mb-6">Why Industry Leaders Choose EnterpriseCore</h2>
                        <p class="text-on-surface-variant text-body-lg">We don''t just build software; we engineer resilience and competitive advantage into every line of code.</p>
                    </div>
                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary text-on-primary flex items-center justify-center rounded-xl">
                                <span class="material-symbols-outlined">precision_manufacturing</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-lg mb-2">Precision Engineering</h4>
                                <p class="text-on-surface-variant">Our development lifecycle is rooted in rigorous testing and high-fidelity architecture.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary text-on-primary flex items-center justify-center rounded-xl">
                                <span class="material-symbols-outlined">groups</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-lg mb-2">Dedicated Expertise</h4>
                                <p class="text-on-surface-variant">Direct access to senior architects and industry-specific technology consultants.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="flex-shrink-0 w-12 h-12 bg-primary text-on-primary flex items-center justify-center rounded-xl">
                                <span class="material-symbols-outlined">monitoring</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-lg mb-2">Strategic Insight</h4>
                                <p class="text-on-surface-variant">Data-driven roadmaps that align technology with your long-term business goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square bg-gradient-to-tr from-primary to-secondary rounded-3xl overflow-hidden shadow-2xl">
                        <img class="w-full h-full object-cover mix-blend-overlay opacity-60" data-alt="Corporate glass boardroom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAt3kA13qW3tKjb6pMPY8sP5MLM_doLZ8ulO5FrF9qCm38mQzZLGcgX6qkQZCXabL5naS42TtxouwvVHtmG5obx0CmvSysIZIAleXcvKab3zBoNGdWI581xoApqOUtHL5OfUF4DC1V5ZUGSOZWck77VWB1IHpB9SZ7i3ckw_0Z2v7sUmexgO0H3KOCFMw87m0ac5tGQ8MVwPwGLdrhHtWyO7TaUHbQ4PCBFvphd46dgMcKVpeE_WbNnyQ"/>
                    </div>
                    <!-- Decorative Floating Card -->
                    <div class="absolute -bottom-10 -left-10 glass-effect p-6 rounded-2xl shadow-xl w-64 animate-float">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 bg-green-500/20 text-green-600 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-[20px]">check</span>
                            </div>
                            <span class="font-label-md">99.9% Uptime SLA</span>
                        </div>
                        <div class="h-2 bg-outline-variant/30 rounded-full w-full overflow-hidden">
                            <div class="bg-primary h-full w-[99.9%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-section-padding bg-surface">
        <div class="max-w-container-max mx-auto px-margin-desktop text-center">
            <h2 class="font-headline-lg text-headline-lg mb-12">Our Core Technology Ecosystem</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">php</span>
                    <span class="font-label-md">PHP Enterprise</span>
                </div>
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">database</span>
                    <span class="font-label-md">MySQL &amp; PgSQL</span>
                </div>
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">cloud</span>
                    <span class="font-label-md">AWS Infrastructure</span>
                </div>
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">code</span>
                    <span class="font-label-md">Node / React</span>
                </div>
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">memory</span>
                    <span class="font-label-md">Python AI</span>
                </div>
                <div class="px-8 py-6 bg-surface-container-low rounded-xl border border-outline-variant/30 flex flex-col items-center gap-4 w-40 hover:bg-surface-container-high transition-colors">
                    <span class="material-symbols-outlined text-primary text-[40px]">hub</span>
                    <span class="font-label-md">Kubernetes</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Slider -->
    <section class="py-section-padding bg-surface-container-lowest overflow-hidden">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <h2 class="font-headline-lg text-headline-lg mb-16 text-center">Trusted by Industry Titans</h2>
            <div class="flex gap-gutter transition-transform duration-500 ease-in-out" id="testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="min-w-full md:min-w-[calc(50%-12px)] p-12 bg-white rounded-3xl shadow-sm border border-outline-variant/20 flex flex-col gap-6">
                    <div class="flex text-yellow-500">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <p class="text-body-lg italic">"EnterpriseCore transformed our legacy systems into a high-performance cloud ecosystem. Their attention to detail and precision engineering is unmatched in the industry."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="CTO profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGs-9TSk3qlaIqixJQIUxyxXLWPOJe2Ijl8_U98GNmXOI3niupAYgA68ukHZ5WYMyintEkVC4cALHHpJsWSBjB8DkdhlZztQqs3LVvzYbeJNN_PgpM5pDytZYhrAIpu8fkkCXpynxnnG4RK6u2QmyDrrmTtehyFwWS-mSB-ZttoIXFhOZMnKbVAqesj1ear1YNK52exx8zVZzIT2fp38oYvglbKHaSo1PtL9FUXfz9B3q8nZTTyM_7aQ"/>
                        </div>
                        <div>
                            <p class="font-bold">Sarah Chen</p>
                            <p class="text-label-sm text-on-surface-variant">CTO, Global Logistics Corp</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="min-w-full md:min-w-[calc(50%-12px)] p-12 bg-white rounded-3xl shadow-sm border border-outline-variant/20 flex flex-col gap-6">
                    <div class="flex text-yellow-500">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <p class="text-body-lg italic">"The AI-driven automation tools implemented by EnterpriseCore reduced our operational costs by 35% within the first six months. Truly a strategic partner."</p>
                    <div class="flex items-center gap-4 mt-auto">
                        <div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Executive Director profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCae2Gk9VVi_jzOysb4vebmqQyG8aejV4KBhWrWo3NO6Y-i6pzPsouXVVeFB54I3p9Fcn5tuu4FJ9fl-AYTDvy0xw_UQn8ml3TM_XWXf0Kl8yg9ZHCp6fFQ6NaXVPOoDst_tCdv_M_u9L8cojtvabnHABrgvxQtzOKfWhbg0nmW3gUFC72K33MP0AHhfjKQGtoG1wIEchZSCnvpiGI90m6I6TfjbhAmUWdNzce5ZFdACVZjYcNehpYsQ"/>
                        </div>
                        <div>
                            <p class="font-bold">Marcus Thorne</p>
                            <p class="text-label-sm text-on-surface-variant">Operations Director, FinTech Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-12 gap-4">
                <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all" onclick="slideTestimonials(-1)">
                    <span class="material-symbols-outlined">arrow_back</span>
                </button>
                <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-primary hover:text-on-primary transition-all" onclick="slideTestimonials(1)">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-24 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-desktop">
            <div class="relative bg-primary rounded-[32px] overflow-hidden p-12 md:p-20 text-center">
                <div class="absolute inset-0 opacity-10 pointer-events-none"></div>
                <div class="relative z-10 max-w-3xl mx-auto space-y-8">
                    <h2 class="font-display-lg text-on-primary leading-tight">Ready to Engineer Your Next Competitive Edge?</h2>
                    <p class="text-on-primary/80 text-body-lg">Partner with EnterpriseCore for precision-built digital solutions tailored to your unique enterprise requirements.</p>
                    <div class="pt-6">
                        <a href="request-quote.php" class="bg-white text-primary px-10 py-5 rounded-2xl font-headline-md text-headline-md shadow-xl hover:scale-105 transition-transform active:scale-95 inline-block">Request a Custom Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-gutter px-margin-desktop py-section-padding max-w-container-max mx-auto">
            <div class="md:col-span-2 space-y-6">
                <h3 class="font-headline-md text-headline-md font-bold text-primary">EnterpriseCore</h3>
                <p class="text-on-surface-variant max-w-xs">Global precision engineering for high-stakes digital environments. Delivering reliable, scalable solutions for the world''s leading brands.</p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">hub</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">alternate_email</span>
                    </a>
                    <a class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center hover:text-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">public</span>
                    </a>
                </div>
            </div>
            <div class="space-y-4">
                <h4 class="font-label-md font-bold uppercase tracking-widest text-on-surface">Services</h4>
                <ul class="space-y-2">
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="services.php">Web Development</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="services.php">Cloud Engineering</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="services.php">AI Integration</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="services.php">Cybersecurity</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h4 class="font-label-md font-bold uppercase tracking-widest text-on-surface">Company</h4>
                <ul class="space-y-2">
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="index.php">About Us</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="case-studies.php">Our Portfolio</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="careers.php">Careers</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-transform inline-block" href="request-quote.php">Contact</a></li>
                </ul>
            </div>
            <div class="space-y-6">
                <h4 class="font-label-md font-bold uppercase tracking-widest text-on-surface">Newsletter</h4>
                <p class="text-sm text-on-surface-variant">Stay updated with enterprise tech trends.</p>
                <form class="flex flex-col gap-2" action="#" method="POST" onsubmit="event.preventDefault(); alert('Subscribed to newsletter.'); this.reset();">
                    <input class="bg-surface border border-outline-variant rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Email Address" type="email" required/>
                    <button class="bg-primary text-on-primary py-2 rounded-lg font-label-md">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-margin-desktop py-8 border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-label-sm text-on-surface-variant">© 2024 EnterpriseCore. All rights reserved.</p>
            <div class="flex gap-8">
                <a class="text-label-sm text-on-surface-variant hover:text-primary" href="#">Privacy Policy</a>
                <a class="text-label-sm text-on-surface-variant hover:text-primary" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        // Simple Counter Animation logic
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start) + '+';
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Intersection Observer for stats
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.id === 'stat-1') animateValue(entry.target, 0, 10, 2000);
                    if (entry.target.id === 'stat-2') animateValue(entry.target, 0, 500, 2000);
                    if (entry.target.id === 'stat-3') animateValue(entry.target, 0, 200, 2000);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('[id^="stat-"]').forEach(el => observer.observe(el));

        // Testimonial slider logic
        let currentSlide = 0;
        const slider = document.getElementById('testimonial-slider');
        function slideTestimonials(direction) {
            const totalSlides = 2; 
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            const offset = currentSlide * (window.innerWidth < 768 ? 100 : 50);
            slider.style.transform = `translateX(-${offset}%)`;
        }

        // Smooth reveal on scroll
        const revealElements = document.querySelectorAll('section, header');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => {
            el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            revealObserver.observe(el);
        });
    </script>
    <!-- Mobile Menu Toggle Script -->
    <script>
        (() => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('mobile-menu-close');
            const drawer = document.getElementById('mobile-drawer');
            const drawerContent = document.getElementById('mobile-drawer-content');

            if (menuBtn && closeBtn && drawer && drawerContent) {
                const openDrawer = () => {
                    drawer.classList.remove('opacity-0', 'pointer-events-none');
                    drawer.classList.add('opacity-100');
                    drawerContent.classList.remove('translate-x-full');
                    drawerContent.classList.add('translate-x-0');
                };

                const closeDrawer = () => {
                    drawer.classList.remove('opacity-100');
                    drawer.classList.add('opacity-0', 'pointer-events-none');
                    drawerContent.classList.remove('translate-x-0');
                    drawerContent.classList.add('translate-x-full');
                };

                menuBtn.addEventListener('click', openDrawer);
                closeBtn.addEventListener('click', closeDrawer);
                drawer.addEventListener('click', (e) => {
                    if (e.target === drawer) closeDrawer();
                });
            }
        })();
    </script>
</body>
</html>



<!DOCTYPE html>
<html class="scroll-smooth overflow-x-hidden" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Request a Quote | EnterpriseCore</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        }
        .form-input-container:focus-within label {
            transform: translateY(-24px) scale(0.85);
            color: #004ac6;
        }
        .form-input-container label {
            transition: all 0.2s ease-out;
            pointer-events: none;
        }
        .floating-label-active {
            transform: translateY(-24px) scale(0.85);
        }
        .step-transition {
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .hidden-step {
            display: none;
            opacity: 0;
            transform: translateX(20px);
        }
    
      
      /* ========================================================
         SENIOR FRONTEND RESPONSIVE AUDIT & FIX RULES (Tailwind-compatible)
         ======================================================== */
      
      /* Global overflow reset to ensure absolute no horizontal scrolling */
      html, body {
        overflow-x: hidden !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        scroll-behavior: smooth;
      }
      
      /* Typography Scaling: Small Phones (<360px) | Mobile (360px+) | Tablet (768px+) | Desktop (1280px+) */
      h1, .text-display-lg, .text-3xl {
        font-size: 24px !important;
        line-height: 1.25 !important;
      }
      @media (min-width: 360px) {
        h1, .text-display-lg, .text-3xl {
          font-size: 34px !important;
          line-height: 1.2 !important;
        }
      }
      @media (min-width: 768px) {
        h1, .text-display-lg, .text-3xl {
          font-size: 48px !important;
          line-height: 1.15 !important;
        }
      }
      @media (min-width: 1280px) {
        h1, .text-display-lg, .text-3xl {
          font-size: 64px !important;
          line-height: 1.1 !important;
        }
      }

      h2, .text-headline-xl {
        font-size: 22px !important;
        line-height: 1.3 !important;
      }
      @media (min-width: 360px) {
        h2, .text-headline-xl {
          font-size: 30px !important;
          line-height: 1.25 !important;
        }
      }
      @media (min-width: 768px) {
        h2, .text-headline-xl {
          font-size: 42px !important;
          line-height: 1.2 !important;
        }
      }
      @media (min-width: 1280px) {
        h2, .text-headline-xl {
          font-size: 48px !important;
          line-height: 1.2 !important;
        }
      }

      h3, .text-headline-lg {
        font-size: 20px !important;
        line-height: 1.35 !important;
      }
      @media (min-width: 360px) {
        h3, .text-headline-lg {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }
      }
      @media (min-width: 768px) {
        h3, .text-headline-lg {
          font-size: 32px !important;
          line-height: 1.3 !important;
        }
      }

      /* Responsive Section Padding */
      .py-section-padding {
        padding-top: 40px !important; /* py-10 */
        padding-bottom: 40px !important;
      }
      @media (min-width: 768px) {
        .py-section-padding {
          padding-top: 64px !important; /* py-16 */
          padding-bottom: 64px !important;
        }
      }
      @media (min-width: 1280px) {
        .py-section-padding {
          padding-top: 96px !important; /* py-24 */
          padding-bottom: 96px !important;
        }
      }

      /* Responsive Container Padding (px-5 on mobile, px-10 on tablet, px-20 on desktop) */
      .px-margin-mobile {
        padding-left: 20px !important;
        padding-right: 20px !important;
      }
      @media (min-width: 768px) {
        .px-margin-mobile {
          padding-left: 40px !important;
          padding-right: 40px !important;
        }
      }
      @media (min-width: 1280px) {
        .px-margin-mobile {
          padding-left: 80px !important;
          padding-right: 80px !important;
        }
      }

      /* Image Responsiveness & Constraint Reset */
      img {
        max-width: 100% !important;
        height: auto !important;
      }
      
      /* Ensure no text overlaps or clipping inside elements */
      p, span, a, button, input, select, textarea {
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
      }
      
      /* Button min-height requirement & full width on mobile when inside flexible layouts */
      a.bg-primary, button.bg-primary, .btn, input[type="submit"] {
        min-height: 48px !important;
      }
      
      /* Bento grid item height compatibility & flex layout overrides */
      .card-hover {
        height: auto !important;
      }
</style>
</head>
<body class="bg-surface-container-lowest text-on-surface font-body-md antialiased">
    
    <!-- Top Navigation -->
    <nav class="bg-surface/90 backdrop-blur-md fixed top-0 left-0 right-0 z-50 border-b border-outline-variant/30 shadow-sm w-full">
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
    </nav>

<main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-padding">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
            <!-- Left Side: Contact Information -->
            <div class="lg:col-span-5 space-y-12">
                <div>
                    <h1 class="font-display-lg text-3xl md:text-display-lg text-primary mb-4 leading-tight">Let's Build the Future Together.</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-md">Our precision engineering experts are ready to transform your enterprise operations with scalable solutions.</p>
                </div>
                <div class="space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-surface-container-high rounded-xl text-primary">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary uppercase tracking-wider mb-1">Global Headquarters</h4>
                            <p class="font-body-md text-body-md">100 Tech Plaza, Innovation District<br/>San Francisco, CA 94105, USA</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-surface-container-high rounded-xl text-primary">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary uppercase tracking-wider mb-1">Direct Lines</h4>
                            <p class="font-body-md text-body-md">+1 (800) CORE-OPS</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">+1 (415) 555-0198 (Intl)</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-surface-container-high rounded-xl text-primary">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary uppercase tracking-wider mb-1">Email Inquiry</h4>
                            <p class="font-body-md text-body-md">consulting@enterprisecore.com</p>
                            <p class="font-body-md text-body-md text-on-surface-variant">support@enterprisecore.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Multi-step Quote Form -->
            <div class="lg:col-span-7">
                <div class="bg-surface-container-lowest border border-outline-variant p-8 md:p-12 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-500">
                    <!-- Progress Bar -->
                    <div class="flex items-center justify-between mb-12">
                        <div class="flex-1 h-1 bg-surface-container-high rounded-full relative">
                            <div class="absolute left-0 top-0 h-full bg-primary transition-all duration-500 rounded-full" id="progress-bar" style="width: 33%"></div>
                        </div>
                        <div class="ml-4 font-label-md text-label-md text-primary" id="step-counter">Step 1 of 3</div>
                    </div>
                    <form class="space-y-8" id="quote-form" method="POST" enctype="multipart/form-data">
                        <!-- Step 1: Personal/Company Info -->
                        <div class="step-transition" id="step-1">
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-8">Personal &amp; Company Details</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="relative form-input-container">
                                    <input class="w-full pt-6 pb-2 px-0 bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 transition-colors peer" id="name" name="name" placeholder=" " required="" type="text"/>
                                    <label class="absolute left-0 top-4 text-on-surface-variant peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-6 peer-focus:scale-85 peer-focus:text-primary transition-all duration-200" for="name">Full Name</label>
                                </div>
                                <div class="relative form-input-container">
                                    <input class="w-full pt-6 pb-2 px-0 bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 transition-colors peer" id="email" name="email" placeholder=" " required="" type="email"/>
                                    <label class="absolute left-0 top-4 text-on-surface-variant peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-6 peer-focus:scale-85 peer-focus:text-primary transition-all duration-200" for="email">Corporate Email</label>
                                </div>
                                <div class="relative form-input-container">
                                    <input class="w-full pt-6 pb-2 px-0 bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 transition-colors peer" id="phone" name="phone" placeholder=" " required="" type="tel"/>
                                    <label class="absolute left-0 top-4 text-on-surface-variant peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-6 peer-focus:scale-85 peer-focus:text-primary transition-all duration-200" for="phone">Phone Number</label>
                                </div>
                                <div class="relative form-input-container">
                                    <input class="w-full pt-6 pb-2 px-0 bg-transparent border-0 border-b border-outline-variant focus:border-primary focus:ring-0 transition-colors peer" id="company" name="company" placeholder=" " required="" type="text"/>
                                    <label class="absolute left-0 top-4 text-on-surface-variant peer-placeholder-shown:translate-y-0 peer-focus:-translate-y-6 peer-focus:scale-85 peer-focus:text-primary transition-all duration-200" for="company">Company Name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Project Scope -->
                        <div class="step-transition hidden-step" id="step-2">
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-8">Project Scope</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Project Type</label>
                                    <select class="w-full p-3 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none" name="project_type">
                                        <option value="web">Web Engineering</option>
                                        <option value="cloud">Cloud Infrastructure</option>
                                        <option value="ai">AI &amp; Machine Learning</option>
                                        <option value="security">Cybersecurity</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Estimated Budget</label>
                                    <select class="w-full p-3 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none" name="budget">
                                        <option value="10k-50k">$10k – $50k</option>
                                        <option value="50k-100k">$50k – $100k</option>
                                        <option value="100k-500k">$100k – $500k</option>
                                        <option value="500k+">$500k+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-8 flex flex-col gap-2">
                                <label class="font-label-md text-label-md text-on-surface-variant">Project Brief</label>
                                <textarea class="w-full p-3 bg-surface-container-low border border-outline-variant rounded-lg focus:border-primary focus:ring-1 focus:ring-primary transition-all outline-none resize-none" name="details" placeholder="Describe your project requirements and goals..." rows="4"></textarea>
                            </div>
                        </div>

                        <!-- Step 3: Attachments & Submit -->
                        <div class="step-transition hidden-step" id="step-3">
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-8">Final Review</h3>
                            <div class="flex flex-col gap-6">
                                <div class="border-2 border-dashed border-outline-variant rounded-xl p-10 text-center hover:border-primary transition-colors cursor-pointer group">
                                    <input class="hidden" id="attachment" name="attachment" type="file" onchange="if(this.files.length) { document.getElementById('upload-text').innerText = this.files[0].name; }"/>
                                    <label class="cursor-pointer" for="attachment">
                                        <span class="material-symbols-outlined text-4xl text-on-surface-variant group-hover:text-primary transition-colors mb-4 block">upload_file</span>
                                        <p class="font-label-md text-label-md text-on-surface-variant" id="upload-text">Click to upload or drag and drop RFP/Project Brief</p>
                                        <p class="text-xs text-outline mt-2">Maximum file size: 25MB (PDF, DOCX, ZIP)</p>
                                    </label>
                                </div>
                                <div class="flex items-start gap-3 mt-4">
                                    <input class="mt-1 rounded border-outline-variant text-primary focus:ring-primary" id="terms" required="" type="checkbox"/>
                                    <label class="text-sm text-on-surface-variant" for="terms">I agree to the <a class="text-primary hover:underline" href="#">Terms of Service</a> and acknowledge that EnterpriseCore will process my information according to the Privacy Policy.</label>
                                </div>
                            </div>
                        </div>

                        <!-- Success Message (Hidden) -->
                        <div class="hidden-step p-6 bg-secondary-container/10 border border-secondary-container rounded-xl text-center" id="success-msg">
                            <span class="material-symbols-outlined text-5xl text-secondary-container mb-4 block">check_circle</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Request Submitted</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">Thank you for choosing EnterpriseCore. Our lead analyst will review your requirements and contact you within 24 business hours.</p>
                            <a href="index.php" class="mt-6 inline-block bg-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Return Home</a>
                        </div>

                        <!-- Error Message (Hidden) -->
                        <div class="hidden-step p-6 bg-error-container/10 border border-error-container rounded-xl text-center" id="error-msg">
                            <span class="material-symbols-outlined text-5xl text-error mb-4 block">error</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Submission Error</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">Something went wrong. Please check your inputs and try again.</p>
                            <button type="button" onclick="resetFormSteps();" class="mt-4 text-primary hover:underline font-bold">Try Again</button>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex justify-between items-center pt-8 border-t border-outline-variant/30" id="form-actions">
                            <button class="px-8 py-3 font-label-md text-label-md text-primary border border-primary rounded-full hover:bg-primary-container/10 transition-all opacity-0 pointer-events-none" id="prev-btn" type="button">
                                Previous
                            </button>
                            <button class="px-10 py-3 font-label-md text-label-md bg-primary text-on-primary rounded-full hover:shadow-lg active:scale-95 transition-all" id="next-btn" type="button">
                                Next Step
                            </button>
                            <button class="hidden px-10 py-3 font-label-md text-label-md bg-primary text-on-primary rounded-full hover:shadow-lg active:scale-95 transition-all" id="submit-btn" type="submit">
                                Submit Quote Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest border-t border-outline-variant py-section-padding">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-gutter px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="md:col-span-2 space-y-6">
                <div class="font-headline-md text-headline-md font-bold text-primary">EnterpriseCore</div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Leading the digital revolution with precision engineering and enterprise-grade technological solutions since 2008.</p>
            </div>
            <div>
                <h5 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Company</h5>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="index.php">About Us</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="careers.php">Careers</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Legal</h5>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="#">Privacy Policy</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-label-md text-label-md text-primary mb-6 uppercase tracking-wider">Resources</h5>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="case-studies.php">Case Studies</a></li>
                    <li><a class="text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="blog.php">Blog</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop mt-16 pt-8 border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="font-body-md text-body-md text-on-surface-variant">© 2024 EnterpriseCore. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Multi-step Form Logic
        let currentStep = 1;
        const totalSteps = 3;
        
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const submitBtn = document.getElementById('submit-btn');
        const progressBar = document.getElementById('progress-bar');
        const stepCounter = document.getElementById('step-counter');
        const quoteForm = document.getElementById('quote-form');
        const formActions = document.getElementById('form-actions');

        function updateUI() {
            for (let i = 1; i <= totalSteps; i++) {
                const step = document.getElementById(`step-${i}`);
                if (i === currentStep) {
                    step.classList.remove('hidden-step');
                } else {
                    step.classList.add('hidden-step');
                }
            }

            if (currentStep === 1) {
                prevBtn.style.opacity = '0';
                prevBtn.style.pointerEvents = 'none';
            } else {
                prevBtn.style.opacity = '1';
                prevBtn.style.pointerEvents = 'auto';
            }

            if (currentStep === totalSteps) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
            }

            const progress = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${progress}%`;
            stepCounter.innerText = `Step ${currentStep} of ${totalSteps}`;
        }

        function resetFormSteps() {
            currentStep = 1;
            document.getElementById('error-msg').classList.add('hidden-step');
            formActions.classList.remove('hidden');
            updateUI();
        }

        nextBtn.addEventListener('click', () => {
            // Validate step inputs before proceeding
            const currentStepDiv = document.getElementById(`step-${currentStep}`);
            const inputs = currentStepDiv.querySelectorAll('input[required], select[required], textarea[required]');
            let valid = true;
            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    input.reportValidity();
                    valid = false;
                }
            });
            
            if (valid && currentStep < totalSteps) {
                currentStep++;
                updateUI();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateUI();
            }
        });

        quoteForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const submitBtnEl = document.getElementById('submit-btn');
            const originalText = submitBtnEl.innerText;
            submitBtnEl.innerText = 'Submitting...';
            submitBtnEl.disabled = true;
            
            const formData = new FormData(quoteForm);
            
            // Hide all steps and actions
            for (let i = 1; i <= totalSteps; i++) {
                document.getElementById(`step-${i}`).classList.add('hidden-step');
            }
            formActions.classList.add('hidden');
            
            fetch('api/submit-quote.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                submitBtnEl.innerText = originalText;
                submitBtnEl.disabled = false;
                
                if (data.success) {
                    const successMsg = document.getElementById('success-msg');
                    successMsg.classList.remove('hidden-step');
                    quoteForm.reset();
                    document.getElementById('upload-text').innerText = 'Click to upload or drag and drop RFP/Project Brief';
                } else {
                    const errorMsg = document.getElementById('error-msg');
                    errorMsg.querySelector('p').innerText = data.message || 'Something went wrong. Please check your inputs.';
                    errorMsg.classList.remove('hidden-step');
                }
                
                window.scrollTo({
                    top: quoteForm.offsetTop - 150,
                    behavior: 'smooth'
                });
            })
            .catch(err => {
                submitBtnEl.innerText = originalText;
                submitBtnEl.disabled = false;
                
                const errorMsg = document.getElementById('error-msg');
                errorMsg.classList.remove('hidden-step');
                
                window.scrollTo({
                    top: quoteForm.offsetTop - 150,
                    behavior: 'smooth'
                });
            });
        });

        // Initialize UI
        updateUI();

        // Floating Labels Logic
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            // Initial check
            if (input.value !== "") {
                if(input.nextElementSibling && input.nextElementSibling.tagName === 'LABEL') {
                    input.nextElementSibling.classList.add('floating-label-active');
                }
            }
            input.addEventListener('blur', () => {
                if (input.value !== "") {
                    if(input.nextElementSibling && input.nextElementSibling.tagName === 'LABEL') {
                        input.nextElementSibling.classList.add('floating-label-active');
                    }
                } else {
                    if(input.nextElementSibling && input.nextElementSibling.tagName === 'LABEL') {
                        input.nextElementSibling.classList.remove('floating-label-active');
                    }
                }
            });
        });
    </script>
    
    <!-- Mobile Menu Drawer -->
    <div id="mobile-drawer" onclick="if(event.target===this) toggleMobileMenu(false)" class="fixed inset-0 bg-black/50 backdrop-blur-sm opacity-0 pointer-events-none transition-all duration-300 md:hidden" style="opacity: 0; pointer-events: none; z-index: 9999;">
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







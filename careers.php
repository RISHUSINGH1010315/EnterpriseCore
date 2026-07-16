<?php
require_once 'config/db.php';

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Fetch active careers
try {
    $sql = "SELECT * FROM careers WHERE is_active = TRUE";
    $params = [];
    if (!empty($search)) {
        $sql .= " AND (job_title LIKE :search OR department LIKE :search OR location LIKE :search)";
        $params[':search'] = '%' . $search . '%';
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $jobs = $stmt->fetchAll();
} catch (PDOException $e) {
    // Fallback static array if DB not initialized
    $jobs = [
        [
            'id' => 1,
            'job_title' => 'Senior PHP Developer',
            'department' => 'Engineering',
            'location' => 'Remote / New York',
            'description' => 'We are looking for a Senior PHP Developer to join our core engineering team to build scalable enterprise APIs and clean MVC architectures.',
            'requirements' => '5+ years experience in PHP, MySQL, MVC design patterns, and REST API development.'
        ],
        [
            'id' => 2,
            'job_title' => 'Cloud Architect',
            'department' => 'Infrastructure',
            'location' => 'London / Hybrid',
            'description' => 'Lead the migration of legacy client infrastructures to high-performing AWS and Azure multi-region clusters.',
            'requirements' => 'Certifications in AWS/Azure, experience with Terraform, Kubernetes, and secure networking.'
        ],
        [
            'id' => 3,
            'job_title' => 'UI/UX Designer',
            'department' => 'Design',
            'location' => 'San Francisco / On-site',
            'description' => 'Design clean, accessible, and stunning SaaS dashboards using our Poppins and HSL royal blue color palettes.',
            'requirements' => 'Portfolio demonstrating high-density enterprise dashboard designs, proficiency in Figma.'
        ],
        [
            'id' => 4,
            'job_title' => 'Marketing Operations Manager',
            'department' => 'Marketing',
            'location' => 'Remote / Singapore',
            'description' => 'Orchestrate marketing pipelines, CRM integrations, and data-driven client acquisition campaigns.',
            'requirements' => 'Experience in SaaS/Enterprise marketing operations, Hubspot/Salesforce expertise.'
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Careers | EnterpriseCore Precision Engineering</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    
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

<main class="pt-[72px]">
        <!-- Hero Section -->
        <section class="relative min-h-[60vh] flex items-center overflow-hidden bg-surface py-section-padding">
            <div class="absolute inset-0 z-0"></div>
            <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop w-full grid md:grid-cols-2 gap-gutter items-center">
                <div class="space-y-6">
                    <span class="inline-block px-3 py-1 bg-primary/10 text-primary font-label-sm rounded-full tracking-wider">CAREERS AT ENTERPRISECORE</span>
                    <h1 class="font-display-lg text-display-lg leading-tight text-on-surface">
                        Build the Future <br><span class="text-primary">with Us</span>.
                    </h1>
                    <p class="text-body-lg font-body-lg text-on-surface-variant max-w-xl">
                        Join a global team of precision engineers and innovators. We're solving complex problems with cutting-edge technology and a commitment to excellence.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a class="px-8 py-4 bg-primary text-on-primary font-label-md rounded-lg shadow-lg hover:bg-primary-container transition-all hover:-translate-y-1" href="#jobs">
                            View Openings
                        </a>
                        <a class="px-8 py-4 border border-outline text-primary font-label-md rounded-lg hover:bg-surface-container-low transition-all" href="#values">
                            Our Values
                        </a>
                    </div>
                </div>
                <div class="hidden md:block relative">
                    <div class="rounded-xl overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                        <img class="w-full h-[500px] object-cover" data-alt="Workspace collaboration" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAt-oVusdvHc_3e10uUB-e0WQ8FsG7wRCOdi3ABZSwz_iniS74UMIAylGv-w6-dO9snqMBQl4qg253jNCHVv_2swAQlKT9XeTBbmtPEio3eX9jmC2nE_JUwknpiEB3480_UY0R6bTDnZlHBBUlzPCk8KL5n0iJSs06mpWy2M50lOx9r9FC4T5VP8PRoWbRPqt-HLDqOq6RbzM1LFxJqDmaRW4qlHPRXxEYSMAVPIy31gLxU85GUGLGiQA">
                    </div>
                    <div class="absolute -bottom-6 -left-6 glass-card p-6 rounded-xl shadow-xl animate-bounce">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
                                <span class="material-symbols-outlined">rocket_launch</span>
                            </div>
                            <div>
                                <div class="font-bold text-headline-sm">50+</div>
                                <div class="text-label-sm opacity-70 uppercase">New Openings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-section-padding bg-surface-container-lowest" id="values">
            <div class="max-w-container-max mx-auto px-margin-desktop">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="font-headline-xl text-headline-xl text-on-surface">Why Work Here?</h2>
                    <p class="text-body-lg font-body-lg text-on-surface-variant max-w-2xl mx-auto">
                        We provide an environment where your skills are sharpened and your contributions define the next generation of enterprise core technologies.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-gutter">
                    <!-- Innovation -->
                    <div class="group p-10 bg-white border border-outline-variant hover:border-primary transition-all duration-300 rounded-xl hover:shadow-xl">
                        <div class="w-16 h-16 rounded-2xl bg-primary-container/10 flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined !text-4xl" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4">Innovation</h3>
                        <p class="text-on-surface-variant font-body-md">
                            Work with the latest tech stacks and contribute to patents that drive global industry standards. We encourage experimentation and creative problem solving at every level.
                        </p>
                    </div>
                    <!-- Growth -->
                    <div class="group p-10 bg-white border border-outline-variant hover:border-primary transition-all duration-300 rounded-xl hover:shadow-xl">
                        <div class="w-16 h-16 rounded-2xl bg-secondary-container/10 flex items-center justify-center text-secondary mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined !text-4xl" style="font-variation-settings: 'FILL' 1;">trending_up</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4">Growth</h3>
                        <p class="text-on-surface-variant font-body-md">
                            Clear career paths, continuous learning stipends, and mentorship from industry veterans. Your trajectory at EnterpriseCore is limited only by your ambition.
                        </p>
                    </div>
                    <!-- Impact -->
                    <div class="group p-10 bg-white border border-outline-variant hover:border-primary transition-all duration-300 rounded-xl hover:shadow-xl">
                        <div class="w-16 h-16 rounded-2xl bg-tertiary-container/10 flex items-center justify-center text-tertiary mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined !text-4xl" style="font-variation-settings: 'FILL' 1;">public</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4">Impact</h3>
                        <p class="text-on-surface-variant font-body-md">
                            Our solutions power 80% of Fortune 500 infrastructure. Your code and designs literally move the world forward, making a tangible difference in global operations.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Job Listings -->
        <section class="py-section-padding bg-surface" id="jobs">
            <div class="max-w-container-max mx-auto px-margin-desktop">
                <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                    <div class="space-y-2">
                        <h2 class="font-headline-xl text-headline-xl text-on-surface">Open Positions</h2>
                        <p class="text-on-surface-variant font-body-md">Find your next challenge in our diverse teams.</p>
                    </div>
                    <form action="careers.php#jobs" method="GET" class="flex gap-4">
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-outline material-symbols-outlined">search</span>
                            <input class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none" placeholder="Search roles..." type="text" name="search" value="<?php echo htmlspecialchars($search); ?>">
                        </div>
                    </form>
                </div>
                
                <?php if (empty($jobs)): ?>
                    <div class="text-center py-10 bg-white border border-outline-variant/30 rounded-xl">
                        <span class="material-symbols-outlined text-4xl text-outline mb-2">work_off</span>
                        <p class="text-on-surface-variant">No openings match your search criteria. Check back soon!</p>
                    </div>
                <?php else: ?>
                    <div class="grid gap-4">
                        <?php foreach ($jobs as $job): ?>
                            <div class="group flex flex-col md:flex-row md:items-center justify-between p-6 bg-white rounded-xl border border-outline-variant hover:shadow-md transition-all">
                                <div class="space-y-2">
                                    <h3 class="font-headline-md text-headline-md group-hover:text-primary transition-colors"><?php echo htmlspecialchars($job['job_title']); ?></h3>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 bg-surface-container-high text-on-surface-variant font-label-sm rounded-lg flex items-center gap-1">
                                            <span class="material-symbols-outlined !text-sm">location_on</span> <?php echo htmlspecialchars($job['location']); ?>
                                        </span>
                                        <span class="px-2 py-1 bg-primary-container/10 text-primary font-label-sm rounded-lg flex items-center gap-1">
                                            <span class="material-symbols-outlined !text-sm">code</span> <?php echo htmlspecialchars($job['department']); ?>
                                        </span>
                                        <span class="px-2 py-1 bg-tertiary-container/10 text-tertiary font-label-sm rounded-lg flex items-center gap-1">
                                            <span class="material-symbols-outlined !text-sm">schedule</span> Full-time
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-6 md:mt-0">
                                    <a class="px-6 py-3 border border-primary text-primary font-label-md rounded-lg hover:bg-primary hover:text-on-primary transition-all inline-block text-center cursor-pointer" href="#apply" onclick="document.getElementById('job_role').value='<?php echo htmlspecialchars($job['job_title'], ENT_QUOTES); ?>';">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Application Form -->
        <section class="py-section-padding bg-surface-container-low" id="apply">
            <div class="max-w-container-max mx-auto px-margin-desktop">
                <div class="grid lg:grid-cols-2 gap-section-padding items-start">
                    <div class="space-y-8">
                        <h2 class="font-headline-xl text-headline-xl text-on-surface">Ready to start?</h2>
                        <p class="text-body-lg font-body-lg text-on-surface-variant">
                            Fill out the form to the right and our talent acquisition team will review your application within 48 hours. We're looking for passionate individuals who value precision and engineering excellence.
                        </p>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">1</div>
                                <div>
                                    <h4 class="font-bold text-on-surface">Initial Review</h4>
                                    <p class="text-on-surface-variant text-sm">Our hiring managers review every application manually.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">2</div>
                                <div>
                                    <h4 class="font-bold text-on-surface">Technical Assessment</h4>
                                    <p class="text-on-surface-variant text-sm">Relevant skill-based evaluations to showcase your expertise.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">3</div>
                                <div>
                                    <h4 class="font-bold text-on-surface">Final Interview</h4>
                                    <p class="text-on-surface-variant text-sm">Meet the team and discuss how you fit into EnterpriseCore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl border border-outline-variant">
                        <form class="space-y-6" id="apply-form" method="POST" enctype="multipart/form-data">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Full Name</label>
                                    <input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="John Doe" required="" type="text" name="name">
                                </div>
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Email Address</label>
                                    <input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="john@enterprise.com" required="" type="email" name="email">
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Phone Number</label>
                                    <input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="+1 (555) 000-0000" required="" type="tel" name="phone">
                                </div>
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Portfolio / LinkedIn URL</label>
                                    <input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="https://linkedin.com/in/johndoe" type="url" name="portfolio_url">
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Applying for Position</label>
                                    <select class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all bg-white" id="job_role" name="job_role" required>
                                        <option value="">Select a role...</option>
                                        <?php foreach ($jobs as $j): ?>
                                            <option value="<?php echo htmlspecialchars($j['job_title']); ?>"><?php echo htmlspecialchars($j['job_title']); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="font-label-md text-on-surface">Years of Experience</label>
                                    <input class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" min="0" placeholder="e.g. 5" required="" type="number" name="experience_years">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="font-label-md text-on-surface">Resume / CV</label>
                                <div class="relative flex items-center justify-center w-full">
                                    <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-outline-variant rounded-xl cursor-pointer hover:bg-surface-container-low transition-colors">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <span class="material-symbols-outlined text-outline mb-2">cloud_upload</span>
                                            <p class="text-sm text-outline-variant" id="resume-filename"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-outline-variant">PDF, DOCX (Max. 5MB)</p>
                                        </div>
                                        <input class="hidden" type="file" name="resume" id="resume-input" required onchange="if(this.files.length) { document.getElementById('resume-filename').innerText = this.files[0].name; }">
                                    </label>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="font-label-md text-on-surface">Cover Letter / Brief Bio</label>
                                <textarea class="w-full px-4 py-3 border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all resize-none" placeholder="Tell us why you're a great fit for EnterpriseCore..." rows="4" name="cover_letter"></textarea>
                            </div>
                            <button class="w-full py-4 bg-primary text-on-primary font-label-md rounded-lg shadow-lg hover:bg-primary-container transition-all active:scale-[0.98]" type="submit">Submit Application</button>
                            <p class="text-center text-xs text-on-surface-variant">By clicking submit, you agree to our <a class="underline" href="#">Privacy Policy</a> regarding applicant data.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest dark:bg-on-surface border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-gutter px-margin-desktop py-section-padding max-w-container-max mx-auto">
            <div class="md:col-span-2 space-y-6">
                <div class="font-headline-md text-headline-md font-bold text-primary">EnterpriseCore</div>
                <p class="text-on-surface-variant font-body-md max-w-xs">
                    Precision engineering for the modern global enterprise. Built to scale, designed for impact.
                </p>
            </div>
            <div class="space-y-4">
                <h4 class="font-label-md uppercase text-primary">Company</h4>
                <ul class="space-y-2 text-on-surface-variant">
                    <li><a class="hover:text-primary transition-all hover:translate-x-1 inline-block" href="index.php">About Us</a></li>
                    <li><a class="hover:text-primary transition-all hover:translate-x-1 inline-block" href="careers.php">Careers</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h4 class="font-label-md uppercase text-primary">Solutions</h4>
                <ul class="space-y-2 text-on-surface-variant">
                    <li><a class="hover:text-primary transition-all hover:translate-x-1 inline-block" href="services.php">Cloud Infrastructure</a></li>
                    <li><a class="hover:text-primary transition-all hover:translate-x-1 inline-block" href="case-studies.php">Security Solutions</a></li>
                </ul>
            </div>
            <div class="space-y-6">
                <h4 class="font-label-md uppercase text-primary">Newsletter</h4>
                <div class="flex flex-col gap-2">
                    <input class="px-4 py-2 bg-surface-container border border-outline-variant rounded-lg focus:outline-none" placeholder="Work email" type="email">
                    <button class="px-4 py-2 bg-primary text-on-primary rounded-lg font-label-sm" onclick="alert('Subscribed to newsletter.');">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="border-t border-outline-variant/30 py-8 px-margin-desktop max-w-container-max mx-auto flex flex-col md:row justify-between items-center gap-4 text-on-surface-variant text-sm">
            <div class="">© 2024 EnterpriseCore. All rights reserved.</div>
        </div>
    </footer>

    <script>
        // Micro-interactions for form submission
        document.getElementById('apply-form').addEventListener('submit', (e) => {
            e.preventDefault();
            const form = e.target;
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerText = 'Sending...';
            btn.disabled = true;
            
            const formData = new FormData(form);
            
            fetch('api/submit-application.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    btn.innerText = 'Application Sent!';
                    btn.classList.replace('bg-primary', 'bg-tertiary');
                    form.reset();
                    document.getElementById('resume-filename').innerHTML = '<span class="font-semibold">Click to upload</span> or drag and drop';
                    setTimeout(() => {
                        btn.innerText = originalText;
                        btn.classList.replace('bg-tertiary', 'bg-primary');
                        btn.disabled = false;
                    }, 3000);
                } else {
                    alert(data.message || 'Error occurred. Please try again.');
                    btn.innerText = originalText;
                    btn.disabled = false;
                }
            })
            .catch(err => {
                alert('Connection error occurred. Please try again.');
                btn.innerText = originalText;
                btn.disabled = false;
            });
        });

        // Simple scroll behavior for job openings
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
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







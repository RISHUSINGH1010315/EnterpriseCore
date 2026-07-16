<?php
require_once 'config/db.php';

$category = isset($_GET['category']) ? trim($_GET['category']) : 'all';
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$sort = isset($_GET['sort']) ? trim($_GET['sort']) : 'latest';

// Fetch posts
try {
    $sql = "SELECT b.*, u.username as author_name FROM blogs b LEFT JOIN users u ON b.author_id = u.id WHERE 1=1";
    $params = [];
    
    if ($category !== 'all') {
        $sql .= " AND b.category = :category";
        $params[':category'] = $category;
    }
    
    if (!empty($search)) {
        $sql .= " AND (b.title LIKE :search1 OR b.content LIKE :search2)";
        $params[':search1'] = '%' . $search . '%';
        $params[':search2'] = '%' . $search . '%';
    }
    
    if ($sort === 'oldest') {
        $sql .= " ORDER BY b.created_at ASC";
    } else {
        $sql .= " ORDER BY b.created_at DESC";
    }
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $all_blogs = $stmt->fetchAll();
} catch (PDOException $e) {
    // Static Fallback Data if DB not initialized
    $all_blogs = [
        [
            'id' => 1,
            'title' => 'Navigating the Future of Sovereign Cloud Infrastructures',
            'slug' => 'sovereign-cloud',
            'content' => 'How global enterprises are redefining data residency and operational resilience in an increasingly fragmented digital landscape.',
            'author_name' => 'Marcus Thorne',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCiqEWi5SB47XAxqpcn-UFIgpffvUCxuX7jukSrxAd-25YZhhf-tx7XqW2XPbS8uZ9MZibpOmKTqBTBTuPs7B1vxU4XF-d0HNerAvxCGDGDN_xsFRVoiCNKCA3cXUFp9GEJN1GaWONe2cc_akvKRVNvhac4Av1jqAC1wYFEzeVzLZmzJANu8cKF2PbLpq_-kjiamJ0AiONTKNgrywVvi0mzvnzQZzKZ5z8jQ5Jz73hXdME6Rd-Ib2VAuw',
            'category' => 'SOLUTIONS',
            'created_at' => '2024-10-18',
            'meta_title' => 'Sovereign Cloud',
            'meta_desc' => 'Redefining cloud data sovereignty'
        ],
        [
            'id' => 2,
            'title' => 'Deploying LLMs at Enterprise Scale: A Handbook',
            'slug' => 'deploying-llms',
            'content' => 'Explore the operational challenges and security frameworks required to move generative AI from experimental pilots to production-ready enterprise solutions.',
            'author_name' => 'Sarah Chen',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxe-k7NsX8DezvQEJhQyFbI-hfb03nznjLFZKkhSCluNPdnqopf-TI0Nv8C2gjIG0B111LRRTcrCmWuVH4U041gorAoIIIWjTqQ7Ih2r1waUpXm-FABW5-sZi6sf_2_xOw6383qlUuMYX2fRZbz73zE-gU8YPk09Jwz_Ng6kYscODaFPqETiwAF6Vq8PoMT62OOnhNfbKZBEur3oroMmSMtKMLdXeCRJTihoq1PWy76vVU-67QZ5xg3A',
            'category' => 'AI & DATA',
            'created_at' => '2024-10-14'
        ],
        [
            'id' => 3,
            'title' => 'Optimizing Latency in High-Frequency Systems',
            'slug' => 'optimizing-latency',
            'content' => 'A deep dive into kernel-level optimizations and hardware acceleration strategies for mission-critical trading and logistics platforms.',
            'author_name' => 'David Miller',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDso0gW9Wk6DKS4ejI7nA5AywLFVxDSFZ2aP_jR8__W48hO5ZEb1c_mxxOlzm1anJ_aGuZASk3yoClHCzIDrbniaK_YrN8MGM-OlngVGA23NTU7X7nBV_43bGd1DF9XIcTDEBEPGV5SEEKSxNOUzD6alUzHQqWhlwG7xRbUnQVpZItNELaTzbEdUCssPttB8WO30U5IeoiIOIu9tkjDxSWrZKLh3SVTwEh22DhnpfeQ4BGbGhwHfoiXKA',
            'category' => 'ENGINEERING',
            'created_at' => '2024-10-12'
        ],
        [
            'id' => 4,
            'title' => 'Zero Trust: Moving Beyond the Perimeter',
            'slug' => 'zero-trust',
            'content' => 'Why traditional VPNs are failing modern remote workforces and how identity-centric security models provide a superior defense-in-depth.',
            'author_name' => 'Elena Rossi',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDjdLzd9q9nwngvbShnPt-V8gXtXq7N2Lk06aJCd9H_iHCeLOGRCY-JwOV-t1mkapZ72XpaoxcISdvBSG0hLN1pDVNEwrCj8llZfdZofVedxcUVGj1TuMeVQpyxNF5PqyvwPicBKvNXxdbteKiNCsZ4OKz38_XNvqrLcSuPlwFHjEAOtzOGlCjDAzXgKFCscU21LS22QtM9dUf5AsqAZD2LMqQWpneXRaqMCo6qS5y29l0F-psnFUaIdg',
            'category' => 'SECURITY',
            'created_at' => '2024-10-09'
        ],
        [
            'id' => 5,
            'title' => 'Sustainable Digital Transformation for 2025',
            'slug' => 'sustainable-transformation',
            'content' => 'Balancing aggressive digital growth with ESG commitments through green coding practices and renewable-powered data infrastructure.',
            'author_name' => 'James Wilson',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdNTVfg3VxXdds9UYlYxR6Pbzer1RhjhCXprBzDpm96y8oPGjeO2EkfSbiV385QiRzjMwa0TqrC2_S2qZG76IGvqa8Og6-h-ModQ43qDtAL2FJD6ZqAq5r2o6g3RTE3XNJWjPaEcJyZERRx9DQlXp2pAu3P8t6I9bK72U0pt8t5T2VogrPHnuSBR9PQWdHbN55nivkoOzw9QT7Ap7MdKql_Zp89tptlCVK9SUDEA8lZaZM1O1fRtLWjg',
            'category' => 'SOLUTIONS',
            'created_at' => '2024-10-05'
        ],
        [
            'id' => 6,
            'title' => 'The Ethics of Automated Decision Making',
            'slug' => 'ethics-automated-decision',
            'content' => 'Addressing bias and transparency in algorithmic governance frameworks for financial and legal institutions.',
            'author_name' => 'Dr. Linda Gao',
            'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC7lPQAFzH399wZRI2RFXVKadKcwRDJTWmnDvvp7H_FPj4FV_QJZAYPaNNxe9X8K0KY6kcK2K7cnlT6fVjXsvp8nOCJb5Z8vB9tgfzgF7Q9gAwXrFWsnxiCAjqSwVDPh-rfLhjI-DqEhDvWb7A-9Sd2p6ktNtg6pQgtiMFHAOV9mvQeGoItNOIy_fvJLsaNcbZ4qWXwy96elAEQibuxxAM0Y3GIFQr9VjFLBhorB3ElbvzpZnVZtvJCfQ',
            'category' => 'AI & DATA',
            'created_at' => '2024-09-28'
        ]
    ];
}

// Extract featured post (the first one)
$featured_post = null;
if (!empty($all_blogs)) {
    $featured_post = $all_blogs[0];
    // Remove from main list to avoid duplication
    array_shift($all_blogs);
}
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>EnterpriseCore | Insights &amp; Engineering Blog</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed-variant": "#004395",
                    "background": "#f9f9ff",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-tertiary": "#ffffff",
                    "tertiary-container": "#0074a6",
                    "primary-container": "#2563eb",
                    "surface-container-highest": "#dce2f7",
                    "on-surface": "#141b2b",
                    "surface": "#f9f9ff",
                    "primary-fixed-dim": "#b4c5ff",
                    "inverse-primary": "#b4c5ff",
                    "surface-container": "#e9edff",
                    "on-primary-fixed": "#00174b",
                    "primary": "#004ac6",
                    "on-background": "#141b2b",
                    "error": "#ba1a1a",
                    "secondary-container": "#2170e4",
                    "secondary": "#0058be",
                    "outline-variant": "#c3c6d7",
                    "on-tertiary-fixed": "#001e2f",
                    "on-secondary-container": "#fefcff",
                    "surface-container-high": "#e1e8fd",
                    "on-primary-container": "#eeefff",
                    "on-error-container": "#93000a",
                    "inverse-surface": "#293040",
                    "on-error": "#ffffff",
                    "tertiary-fixed-dim": "#89ceff",
                    "tertiary-fixed": "#c9e6ff",
                    "on-primary": "#ffffff",
                    "tertiary": "#005a82",
                    "surface-dim": "#d3daef",
                    "on-secondary-fixed": "#001a42",
                    "primary-fixed": "#dbe1ff",
                    "inverse-on-surface": "#edf0ff",
                    "secondary-fixed": "#d8e2ff",
                    "outline": "#737686",
                    "on-surface-variant": "#434655",
                    "surface-container-low": "#f1f3ff",
                    "on-tertiary-fixed-variant": "#004c6e",
                    "on-secondary": "#ffffff",
                    "surface-variant": "#dce2f7",
                    "surface-container-lowest": "#ffffff",
                    "surface-tint": "#0053db",
                    "surface-bright": "#f9f9ff",
                    "secondary-fixed-dim": "#adc6ff",
                    "error-container": "#ffdad6",
                    "on-tertiary-container": "#e4f2ff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "gutter": "24px",
                    "margin-desktop": "48px",
                    "container-max": "1280px",
                    "section-padding": "96px",
                    "margin-mobile": "16px",
                    "base": "8px"
            },
            "fontFamily": {
                    "display-lg-mobile": ["Poppins"],
                    "headline-md": ["Poppins"],
                    "body-lg": ["Poppins"],
                    "label-sm": ["Poppins"],
                    "headline-xl": ["Poppins"],
                    "label-md": ["Poppins"],
                    "display-lg": ["Poppins"],
                    "body-md": ["Poppins"],
                    "headline-lg": ["Poppins"]
            },
            "fontSize": {
                    "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "headline-xl": ["48px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 231, 235, 0.5);
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
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

    <main>
        <!-- Featured Post Hero Section -->
        <?php if ($featured_post): ?>
            <section class="relative pt-section-padding pb-16 px-margin-desktop max-w-container-max mx-auto">
                <div class="relative overflow-hidden rounded-xl h-[500px] shadow-xl group">
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/90 via-on-surface/40 to-transparent z-10"></div>
                    <div class="absolute inset-0 scale-105 group-hover:scale-100 transition-transform duration-700 bg-cover bg-center" data-alt="Featured Server Room" style="background-image: url('<?php echo htmlspecialchars($featured_post['featured_image']); ?>')"></div>
                    <div class="absolute bottom-0 left-0 p-12 z-20 max-w-3xl">
                        <span class="inline-block px-3 py-1 bg-primary text-on-primary font-label-sm rounded-lg mb-6 tracking-wider">FEATURED INSIGHT</span>
                        <h1 class="font-headline-xl text-headline-xl text-white mb-6 leading-tight"><?php echo htmlspecialchars($featured_post['title']); ?></h1>
                        <p class="font-body-lg text-body-lg text-surface-variant/90 mb-8"><?php echo htmlspecialchars($featured_post['content']); ?></p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full border-2 border-white/20 overflow-hidden flex items-center justify-center bg-gray-600">
                                <span class="material-symbols-outlined text-white">person</span>
                            </div>
                            <div>
                                <p class="text-white font-label-md"><?php echo htmlspecialchars($featured_post['author_name'] ?? 'CTO Office'); ?></p>
                                <p class="text-surface-variant/70 font-label-sm"><?php echo htmlspecialchars($featured_post['category'] ?? 'General'); ?> • <?php echo date('M d, Y', strtotime($featured_post['created_at'])); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Category Filter Bar -->
        <section class="sticky top-[72px] z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant/30 py-4 mb-12">
            <div class="max-w-container-max mx-auto px-margin-desktop flex flex-wrap items-center justify-between gap-4">
                <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 scrollbar-hide">
                    <a href="blog.php?category=all&search=<?php echo urlencode($search); ?>&sort=<?php echo $sort; ?>" class="px-6 py-2 <?php echo $category === 'all' ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest'; ?> rounded-full font-label-md transition-all inline-block text-center">All Posts</a>
                    <a href="blog.php?category=ENGINEERING&search=<?php echo urlencode($search); ?>&sort=<?php echo $sort; ?>" class="px-6 py-2 <?php echo $category === 'ENGINEERING' ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest'; ?> rounded-full font-label-md transition-all inline-block text-center">Engineering</a>
                    <a href="blog.php?category=AI %26 DATA&search=<?php echo urlencode($search); ?>&sort=<?php echo $sort; ?>" class="px-6 py-2 <?php echo $category === 'AI & DATA' ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest'; ?> rounded-full font-label-md transition-all inline-block text-center">AI & Data</a>
                    <a href="blog.php?category=SECURITY&search=<?php echo urlencode($search); ?>&sort=<?php echo $sort; ?>" class="px-6 py-2 <?php echo $category === 'SECURITY' ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest'; ?> rounded-full font-label-md transition-all inline-block text-center">Security</a>
                    <a href="blog.php?category=SOLUTIONS&search=<?php echo urlencode($search); ?>&sort=<?php echo $sort; ?>" class="px-6 py-2 <?php echo $category === 'SOLUTIONS' ? 'bg-primary text-on-primary' : 'bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest'; ?> rounded-full font-label-md transition-all inline-block text-center">Solutions</a>
                </div>
                <div class="flex items-center gap-2 text-on-surface-variant">
                    <span class="font-label-md">Sort by:</span>
                    <select class="bg-transparent border-none font-label-md text-primary focus:ring-0 cursor-pointer outline-none" onchange="window.location.href='blog.php?category=<?php echo urlencode($category); ?>&search=<?php echo urlencode($search); ?>&sort=' + this.value;">
                        <option value="latest" <?php echo $sort === 'latest' ? 'selected' : ''; ?>>Latest First</option>
                        <option value="oldest" <?php echo $sort === 'oldest' ? 'selected' : ''; ?>>Oldest First</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- Blog Grid -->
        <section class="max-w-container-max mx-auto px-margin-desktop pb-section-padding">
            <?php if (empty($all_blogs)): ?>
                <div class="text-center py-20 bg-surface-container-lowest rounded-2xl border border-outline-variant/30">
                    <span class="material-symbols-outlined text-6xl text-outline mb-4">search_off</span>
                    <h3 class="text-xl font-bold">No insights found</h3>
                    <p class="text-gray-500 mt-2">Try adjusting your filters or search terms.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                    <?php foreach ($all_blogs as $blog): ?>
                        <article class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                            <div class="relative h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Blog layout image" src="<?php echo htmlspecialchars($blog['featured_image'] ?? 'https://images.unsplash.com/photo-1518770660439-4636190af475'); ?>"/>
                                <span class="absolute top-4 left-4 px-3 py-1 bg-white/90 backdrop-blur text-primary font-label-sm rounded shadow-sm"><?php echo htmlspecialchars($blog['category']); ?></span>
                            </div>
                            <div class="p-8 flex flex-col flex-grow">
                                <h3 class="font-headline-md text-headline-md text-on-surface mb-3 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($blog['title']); ?></h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-6 line-clamp-3"><?php echo htmlspecialchars($blog['content']); ?></p>
                                <div class="mt-auto flex items-center justify-between pt-6 border-t border-outline-variant/20">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-primary-container/20 flex items-center justify-center">
                                            <span class="material-symbols-outlined text-[18px] text-primary">person</span>
                                        </div>
                                        <span class="font-label-md text-on-surface-variant"><?php echo htmlspecialchars($blog['author_name'] ?? 'CTO Office'); ?></span>
                                    </div>
                                    <span class="font-label-sm text-outline"><?php echo date('M d, Y', strtotime($blog['created_at'])); ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>

        <!-- Newsletter Section -->
        <section class="bg-surface-container-low py-section-padding px-margin-desktop">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Stay Ahead of the Curve</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">Get the latest insights on enterprise engineering and AI delivered directly to your inbox every fortnight.</p>
                <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto" onsubmit="event.preventDefault(); alert('Subscribed to newsletter.'); this.reset();">
                    <input class="flex-grow px-6 py-4 rounded-lg border border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary transition-all bg-white outline-none" placeholder="Enter your corporate email" type="email" required/>
                    <button class="bg-primary text-on-primary px-8 py-4 rounded-lg font-label-md hover:bg-primary/90 transition-all shadow-md active:scale-95" type="submit">Subscribe</button>
                </form>
                <p class="mt-4 font-label-sm text-outline">By subscribing, you agree to our Privacy Policy and terms of service.</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-lowest dark:bg-on-surface border-t border-outline-variant">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-gutter px-margin-desktop py-section-padding max-w-container-max mx-auto">
            <div class="md:col-span-2">
                <a class="font-headline-md text-headline-md font-bold text-primary mb-6 inline-block" href="index.php">EnterpriseCore</a>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xs mb-8">
                    Precision engineering for the global enterprise. Building the digital foundations of tomorrow's industry leaders.
                </p>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-6">Company</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="services.php">Services</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="industries.php">Industries</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="case-studies.php">Case Studies</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-6">Resources</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-primary font-bold hover:translate-x-1 transition-all inline-block" href="blog.php">Blog</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="careers.php">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-primary font-bold mb-6">Legal</h4>
                <ul class="space-y-4">
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="#">Privacy Policy</a></li>
                    <li><a class="font-body-md text-body-md text-on-surface-variant hover:text-primary hover:translate-x-1 transition-all inline-block" href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-outline-variant/30 py-8 px-margin-desktop text-center">
            <p class="font-label-sm text-label-sm text-outline">© 2024 EnterpriseCore. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const cards = document.querySelectorAll('article');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('translate-y-[-4px]');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('translate-y-[-4px]');
            });
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



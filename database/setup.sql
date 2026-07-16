-- Enterprise Software Company Database Schema & Seed Data

CREATE DATABASE IF NOT EXISTS enterprise_db;
USE enterprise_db;

-- Settings Table
CREATE TABLE IF NOT EXISTS settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    site_name VARCHAR(255),
    site_logo VARCHAR(255),
    contact_email VARCHAR(255),
    contact_phone VARCHAR(50),
    address TEXT,
    smtp_host VARCHAR(255),
    smtp_user VARCHAR(255),
    smtp_pass VARCHAR(255),
    smtp_port INT
);

-- Users & Roles
CREATE TABLE IF NOT EXISTS roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_id INT,
    username VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

-- Content Modules
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    slug VARCHAR(255) UNIQUE,
    description TEXT,
    icon VARCHAR(100),
    content LONGTEXT,
    image VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE
);

CREATE TABLE IF NOT EXISTS blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    slug VARCHAR(255) UNIQUE,
    content LONGTEXT,
    author_id INT,
    featured_image VARCHAR(255),
    meta_title VARCHAR(255),
    meta_desc TEXT,
    category VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

-- Lead Management
CREATE TABLE IF NOT EXISTS quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    company VARCHAR(255),
    budget VARCHAR(50),
    project_type VARCHAR(100),
    details TEXT,
    attachment VARCHAR(255),
    status ENUM('new', 'reviewed', 'contacted') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS careers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_title VARCHAR(255),
    department VARCHAR(100),
    location VARCHAR(100),
    description TEXT,
    requirements TEXT,
    is_active BOOLEAN DEFAULT TRUE
);

CREATE TABLE IF NOT EXISTS applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    portfolio_url VARCHAR(255),
    experience_years INT,
    resume_path VARCHAR(255),
    cover_letter TEXT,
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (job_id) REFERENCES careers(id)
);

-- Seed Roles
INSERT INTO roles (id, role_name) VALUES 
(1, 'Administrator'),
(2, 'Editor')
ON DUPLICATE KEY UPDATE role_name=VALUES(role_name);

-- Seed Users (Default admin user, password is 'admin123' hashed)
INSERT INTO users (id, role_id, username, password, email) VALUES
(1, 1, 'admin', '$2y$10$wNqH.L0.q9D0ZlA3L9pC8.a2nFp9s82L0ZgG1rO4uE3q5A1M9Y1rE', 'admin@enterprisecore.com')
ON DUPLICATE KEY UPDATE username=VALUES(username);

-- Seed Settings
INSERT INTO settings (id, site_name, contact_email, contact_phone, address) VALUES
(1, 'EnterpriseCore', 'consulting@enterprisecore.com', '+1 (800) CORE-OPS', '100 Tech Plaza, Innovation District, San Francisco, CA 94105, USA')
ON DUPLICATE KEY UPDATE site_name=VALUES(site_name);

-- Seed Services
INSERT INTO services (title, slug, description, icon, content, image, is_active) VALUES
('Custom Web Development', 'custom-web-development', 'High-performance, scalable web applications built with modern frameworks to drive your digital transformation and user engagement.', 'code', 'We construct responsive, robust web solutions engineered for maximum availability, security, and scalability using PHP, React, and microservices.', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBbSWWhqh4FmBawy1Kr7_OvbFw1mBnSnBzWJLqpPuVE7LNLmSweB_4UxyS4b2hpBCqfuOc-IouoSMF-DxKUBvr8s_bpK5XL3JvKrLxOWvgtO8z-eeCkJqXWSwvGmi3SUklz6zuyi51HQbYIeun4UxfibwX1PzAgDyvKYoNhvNvHkUmHVLtKX1GtPeX5TqJ8Vimw_FVtxO1agJ0MkR2l4x6uICkr5Sk0mjNzpnGwkCyl-Lh5wWapcGqU4g', TRUE),
('ERP & CRM Solutions', 'erp-crm-solutions', 'Streamline operations and deepen customer relationships with custom-integrated enterprise resource planning systems.', 'hub', 'Our custom ERP and CRM integrations consolidate finance, logistics, customer service, and HR operations into a unified dashboard, enabling seamless communication across departments.', NULL, TRUE),
('AI & Machine Learning', 'ai-machine-learning', 'Leverage predictive analytics and intelligent automation to unlock new efficiencies and competitive advantages.', 'psychology', 'We implement intelligent workflows, predictive model frameworks, and generative AI agents that turn unstructured business logs into actionable strategic intelligence.', NULL, TRUE),
('Cloud Infrastructure', 'cloud-infrastructure', 'Resilient, highly-available cloud architectures and DevOps practices that ensure 99.99% uptime for global operations.', 'cloud_done', 'We handle AWS & Azure cloud migrations, secure Kubernetes container orchestration, and multi-region load balancing to guarantee near-zero downtime and auto-scaling capabilities.', NULL, TRUE),
('Cybersecurity & Compliance', 'cybersecurity-compliance', 'Bank-grade security protocols and global compliance auditing to protect your most sensitive enterprise data assets.', 'admin_panel_settings', 'From zero-trust network architectures to penetration testing and HIPAA/GDPR compliance checks, we establish multi-layered defenses safeguarding your critical assets.', NULL, TRUE),
('UI/UX Strategy & Design', 'ui-ux-design', 'User-centric design systems and interaction strategies that bridge the gap between complex functionality and intuitive use.', 'draw', 'We deliver modern high-fidelity prototypes and unified design systems (inspired by Poppins typography and Royal Blue themes) ensuring clean enterprise workflows and visual breathing room.', NULL, TRUE)
ON DUPLICATE KEY UPDATE title=VALUES(title), description=VALUES(description);

-- Seed Careers
INSERT INTO careers (id, job_title, department, location, description, requirements, is_active) VALUES
(1, 'Senior PHP Developer', 'Engineering', 'Remote / New York', 'We are looking for a Senior PHP Developer to join our core engineering team to build scalable enterprise APIs and clean MVC architectures.', '5+ years experience in PHP, MySQL, MVC design patterns, and REST API development.', TRUE),
(2, 'Cloud Architect', 'Infrastructure', 'London / Hybrid', 'Lead the migration of legacy client infrastructures to high-performing AWS and Azure multi-region clusters.', 'Certifications in AWS/Azure, experience with Terraform, Kubernetes, and secure networking.', TRUE),
(3, 'UI/UX Designer', 'Design', 'San Francisco / On-site', 'Design clean, accessible, and stunning SaaS dashboards using our Poppins and HSL royal blue color palettes.', 'Portfolio demonstrating high-density enterprise dashboard designs, proficiency in Figma.', TRUE),
(4, 'Marketing Operations Manager', 'Marketing', 'Remote / Singapore', 'Orchestrate marketing pipelines, CRM integrations, and data-driven client acquisition campaigns.', 'Experience in SaaS/Enterprise marketing operations, Hubspot/Salesforce expertise.', TRUE)
ON DUPLICATE KEY UPDATE job_title=VALUES(job_title), department=VALUES(department), location=VALUES(location);

-- Seed Blogs
INSERT INTO blogs (id, title, slug, content, author_id, featured_image, meta_title, meta_desc, category) VALUES
(1, 'Navigating the Future of Sovereign Cloud Infrastructures', 'sovereign-cloud-infrastructure', 'How global enterprises are redefining data residency and operational resilience in an increasingly fragmented digital landscape. Sovereign cloud architectures are transitioning from regulatory checklists to strategic board-level mandates.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuCiqEWi5SB47XAxqpcn-UFIgpffvUCxuX7jukSrxAd-25YZhhf-tx7XqW2XPbS8uZ9MZibpOmKTqBTBTuPs7B1vxU4XF-d0HNerAvxCGDGDN_xsFRVoiCNKCA3cXUFp9GEJN1GaWONe2cc_akvKRVNvhac4Av1jqAC1wYFEzeVzLZmzJANu8cKF2PbLpq_-kjiamJ0AiONTKNgrywVvi0mzvnzQZzKZ5z8jQ5Jz73hXdME6Rd-Ib2VAuw', 'Sovereign Cloud', 'How global enterprises are redefining data residency and operational resilience.', 'SOLUTIONS'),
(2, 'Deploying LLMs at Enterprise Scale: A Handbook', 'deploying-llms-enterprise', 'Explore the operational challenges and security frameworks required to move generative AI from experimental pilots to production-ready enterprise solutions. Learn about zero-leak architecture and vector database optimizations.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDxe-k7NsX8DezvQEJhQyFbI-hfb03nznjLFZKkhSCluNPdnqopf-TI0Nv8C2gjIG0B111LRRTcrCmWuVH4U041gorAoIIIWjTqQ7Ih2r1waUpXm-FABW5-sZi6sf_2_xOw6383qlUuMYX2fRZbz73zE-gU8YPk09Jwz_Ng6kYscODaFPqETiwAF6Vq8PoMT62OOnhNfbKZBEur3oroMmSMtKMLdXeCRJTihoq1PWy76vVU-67QZ5xg3A', 'Enterprise AI', 'Handbook to scale LLMs safely inside secure enterprise networks.', 'AI & DATA'),
(3, 'Optimizing Latency in High-Frequency Systems', 'optimizing-latency-systems', 'A deep dive into kernel-level optimizations and hardware acceleration strategies for mission-critical trading and logistics platforms. Discover the secrets of low-latency caching.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDso0gW9Wk6DKS4ejI7nA5AywLFVxDSFZ2aP_jR8__W48hO5ZEb1c_mxxOlzm1anJ_aGuZASk3yoClHCzIDrbniaK_YrN8MGM-OlngVGA23NTU7X7nBV_43bGd1DF9XIcTDEBEPGV5SEEKSxNOUzD6alUzHQqWhlwG7xRbUnQVpZItNELaTzbEdUCssPttB8WO30U5IeoiIOIu9tkjDxSWrZKLh3SVTwEh22DhnpfeQ4BGbGhwHfoiXKA', 'Latency Optimization', 'Deep dive into hardware acceleration and kernel optimizations for high-frequency systems.', 'ENGINEERING'),
(4, 'Zero Trust: Moving Beyond the Perimeter', 'zero-trust-beyond-perimeter', 'Why traditional VPNs are failing modern remote workforces and how identity-centric security models provide a superior defense-in-depth framework for files and applications.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDjdLzd9q9nwngvbShnPt-V8gXtXq7N2Lk06aJCd9H_iHCeLOGRCY-JwOV-t1mkapZ72XpaoxcISdvBSG0hLN1pDVNEwrCj8llZfdZofVedxcUVGj1TuMeVQpyxNF5PqyvwPicBKvNXxdbteKiNCsZ4OKz38_XNvqrLcSuPlwFHjEAOtzOGlCjDAzXgKFCscU21LS22QtM9dUf5AsqAZD2LMqQWpneXRaqMCo6qS5y29l0F-psnFUaIdg', 'Zero Trust Architecture', 'Why traditional VPNs fail and how identity-centric security ensures better enterprise defense.', 'SECURITY'),
(5, 'Sustainable Digital Transformation for 2025', 'sustainable-digital-transformation', 'Balancing aggressive digital growth with ESG commitments through green coding practices and renewable-powered data infrastructure options globally.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdNTVfg3VxXdds9UYlYxR6Pbzer1RhjhCXprBzDpm96y8oPGjeO2EkfSbiV385QiRzjMwa0TqrC2_S2qZG76IGvqa8Og6-h-ModQ43qDtAL2FJD6ZqAq5r2o6g3RTE3XNJWjPaEcJyZERRx9DQlXp2pAu3P8t6I9bK72U0pt8t5T2VogrPHnuSBR9PQWdHbN55nivkoOzw9QT7Ap7MdKql_Zp89tptlCVK9SUDEA8lZaZM1O1fRtLWjg', 'Sustainable IT', 'Balancing aggressive SaaS growth with environmental ESG compliance.', 'SOLUTIONS'),
(6, 'The Ethics of Automated Decision Making', 'ethics-automated-decision', 'Addressing bias and transparency in algorithmic governance frameworks for financial and legal institutions. How to maintain fair AI compliance.', 1, 'https://lh3.googleusercontent.com/aida-public/AB6AXuC7lPQAFzH399wZRI2RFXVKadKcwRDJTWmnDvvp7H_FPj4FV_QJZAYPaNNxe9X8K0KY6kcK2K7cnlT6fVjXsvp8nOCJb5Z8vB9tgfzgF7Q9gAwXrFWsnxiCAjqSwVDPh-rfLhjI-DqEhDvWb7A-9Sd2p6ktNtg6pQgtiMFHAOV9mvQeGoItNOIy_fvJLsaNcbZ4qWXwy96elAEQibuxxAM0Y3GIFQr9VjFLBhorB3ElbvzpZnVZtvJCfQ', 'AI Ethics', 'Addressing bias and auditing transparency in automated decision engines.', 'AI & DATA')
ON DUPLICATE KEY UPDATE title=VALUES(title), slug=VALUES(slug);

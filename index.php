<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pixel++</title>

    <link rel="icon" type="image/png" href="assets/favicon.png">

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Loader -->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
          <a class="navbar-brand" href="#">Pixel++</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#services">Service</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>

            <?php if (!isset($_SESSION['login'])) : ?>
              <a href="login.php" class="nav-contact-btn">
                  Login
              </a>
            <?php else : ?>

              <div class="dropdown">
                  <a
                      class="nav-contact-btn dropdown-toggle"
                      href="#"
                      data-bs-toggle="dropdown">
                      <i class="bi bi-person-circle"></i>
                      <?= $_SESSION['username']; ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <a class="dropdown-item" href="admin/dashboard.php">
                              <i class="bi bi-speedometer2"></i>
                              Dashboard Admin
                          </a>
                      </li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <a class="dropdown-item text-danger" href="admin/logout.php">
                              <i class="bi bi-box-arrow-right"></i>
                              Logout
                          </a>
                      </li>
                  </ul>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
      <div class="hero-glow"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <span class="hero-badge">
              <i class="bi bi-stars"></i>
              UI/UX Agency
            </span>

            <h1 class="hero-title">
              We Build
              <span class="typing-text"></span>
            </h1>

            <p class="hero-description">
              Pixel++ helps brands build impactful digital identities through
              creative design and modern technology.
            </p>

            <div class="hero-buttons">
              <a href="#services" class="btn btn-primary-custom">
                Explore Services
              </a>

              <a href="#portfolio" class="btn btn-outline-custom">
                View Portfolio
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image-wrapper">
              <div class="hero-image-card">
                <img
                  src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?q=80&w=1200&auto=format&fit=crop"
                  alt="UI Design"
                  class="img-fluid rounded-4"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
      <div class="section-glow-right"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-image">
              <img
                src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop"
                alt="Team"
                class="img-fluid rounded-4"
              />
            </div>
          </div>
          <div class="col-lg-6">
            <span class="section-label"> About Us </span>

            <h2 class="section-title">
              Building Digital Solutions For Modern Brands
            </h2>

            <p class="section-description">
              Pixel++ is a creative agency focused on helping businesses grow
              through impactful digital experiences and modern digital
              solutions.
            </p>

            <p class="section-description">
              We combine creativity and technology to create websites and
              digital products that are modern, responsive, and user-centered.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Section -->
    <section id="services" class="service-section">
      <div class="section-glow-left"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> Our Services </span>

          <h2 class="section-title">Servies We Provide</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 reveal">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-palette2"></i>
              </div>
              <h3>UI/UX Design</h3>

              <p>
                Creating modern and user-friendly interfaces for digital
                products.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <h3>Web Development</h3>

              <p>Developing responsive and scalable websites for businesses.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-vector-pen"></i>
              </div>
              <h3>Branding Identity</h3>

              <p>
                Building strong visual identities that represent your brand.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 reveal">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-lightbulb"></i>
              </div>
              <h3>Product Strategy</h3>

              <p>
                Providing strategic guidance to help your digital products
                succeed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us -->
    <section class="choose-section">
      <div class="section-glow-right"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> Why Choose Us </span>

          <h2 class="section-title">
            Creating Digital Experiences That Matter
          </h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4 reveal">
            <div class="choose-card">
              <div class="choose-icon">
                <i class="bi bi-stars"></i>
              </div>
              <h3>Creative Approach</h3>

              <p>
                We combine creativity and technology to create impactful digital
                experiences.
              </p>
            </div>
          </div>
          <div class="col-md-4 reveal">
            <div class="choose-card">
              <div class="choose-icon">
                <i class="bi bi-lightning-charge"></i>
              </div>
              <h3>Modern Technology</h3>

              <p>
                Building scalable and responsive products with modern
                development practices.
              </p>
            </div>
          </div>
          <div class="col-md-4 reveal">
            <div class="choose-card">
              <div class="choose-icon">
                <i class="bi bi-people"></i>
              </div>
              <h3>Client Focused</h3>

              <p>
                Every project is tailored to meet client goals and business
                needs.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
      <div class="section-glow-left"></div>
      <div class="container">
        <div class="row g-4">
          <div class="col-md-3 reveal">
            <div class="stats-card">
              <h2><span class="counter" data-target="120">0</span>+</h2>
              <p>Projects Completed</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="stats-card">
              <h2><span class="counter" data-target="80">0</span>+</h2>
              <p>Happy Clients</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="stats-card">
              <h2><span class="counter" data-target="5">0</span>+</h2>
              <p>Years of Experience</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="stats-card">
              <h2><span class="counter" data-target="98">0</span>%</h2>
              <p>Client Satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
      <div class="section-glow-right"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> Portfolio </span>

          <h2 class="section-title">Selected Projects</h2>
        </div>
        <div class="portfolio-filter">
          <button class="filter-btn active" data-filter="all">All</button>

          <button class="filter-btn" data-filter="web">Web Design</button>

          <button class="filter-btn" data-filter="branding">Branding</button>

          <button class="filter-btn" data-filter="development">
            Development
          </button>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal">
            <div class="portfolio-card" data-category="web">
              <img
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop"
                alt=""
                class="img-fluid"
              />
              <div class="portfolio-content">
                <span>Web Design</span>

                <h3>Nova Dashboard</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="portfolio-card" data-category="development">
              <img
                src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop"
                alt=""
                class="img-fluid"
              />
              <div class="portfolio-content">
                <span>Development</span>

                <h3>Tech Startup Landing Page</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="portfolio-card" data-category="branding">
              <img
                src="https://images.unsplash.com/photo-1559028012-481c04fa702d?q=80&w=1200&auto=format&fit=crop"
                alt=""
                class="img-fluid"
              />
              <div class="portfolio-content">
                <span>Branding</span>

                <h3>Creative Brand Identity</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
      <div class="section-glow-left"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> Work Process </span>

          <h2 class="section-title">How We Work</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-3 reveal">
            <div class="process-card">
              <div class="process-icon">
                <i class="bi bi-search"></i>
              </div>

              <h2>01</h2>

              <h3>Research</h3>

              <p>Understanding business goals and user needs.</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="process-card">
              <div class="process-icon">
                <i class="bi bi-bezier2"></i>
              </div>

              <h2>02</h2>

              <h3>Design</h3>

              <p>Creating modern and user-centered interfaces.</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="process-card">
              <div class="process-icon">
                <i class="bi bi-code-slash"></i>
              </div>

              <h2>03</h2>

              <h3>Development</h3>

              <p>Building responsive and scalable digital products.</p>
            </div>
          </div>
          <div class="col-md-3 reveal">
            <div class="process-card">
              <div class="process-icon">
                <i class="bi bi-rocket-takeoff"></i>
              </div>

              <h2>04</h2>

              <h3>Launch</h3>

              <p>Delivering final products ready for public use.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
      <div class="section-glow-right"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> Testimonials </span>

          <h2 class="section-title">What Clients Say</h2>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 reveal">
            <div class="testimonial-card">
              <p>
                “Pixel++ helped us build a modern digital presence with clean UI
                and responsive development.”
              </p>

              <h4>Michael Adrian</h4>

              <span>Startup Founder</span>
            </div>
          </div>

          <div class="col-lg-4 reveal">
            <div class="testimonial-card">
              <p>
                “The design process was smooth and professional from start to
                finish.”
              </p>

              <h4>Clara Wijaya</h4>

              <span>Product Manager</span>
            </div>
          </div>

          <div class="col-lg-4 reveal">
            <div class="testimonial-card">
              <p>“Their team delivered exactly what our company needed.”</p>

              <h4>Jonathan Lee</h4>

              <span>Business Owner</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team-section">
      <div class="team-glow-right"></div>
      <div class="team-glow-left"></div>

      <div class="container">
        <!-- Founder Message -->
        <div class="founder-wrapper reveal">
          <div class="row align-items-center g-5">
            <div class="col-lg-4">
              <div class="founder-image">
                <img src="assets/founder.png" alt="Founder" class="img-fluid" />
              </div>
            </div>

            <div class="col-lg-8">
              <div class="founder-content">
                <span class="section-label"> Founder Message </span>

                <h2 class="section-title">
                  Our Vision Starts From Creative Ideas
                </h2>

                <p class="section-description">
                  At Pixel++, we believe digital experiences should feel modern,
                  interactive, and memorable. We focus on building websites and
                  digital products that combine clean design, strong
                  functionality, and meaningful user experiences.
                </p>

                <div class="founder-info">
                  <h4>Michael Anderson</h4>

                  <span>CEO & Founder of Pixel++</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Team Header -->
        <div class="section-heading reveal">
          <span class="section-label"> Our Team </span>

          <h2 class="section-title">Meet The Creative People</h2>
        </div>

        <!-- Team Grid -->
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Milan T.</h3>

                <p>Creative Director</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Daniel K.</h3>

                <p>Frontend Developer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Emma L.</h3>

                <p>UI/UX Designer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Sophia R.</h3>

                <p>Brand Designer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Arthur M.</h3>

                <p>Web Developer</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 reveal">
            <div class="team-card-modern">
              <div class="team-image">
                <img
                  src="https://images.unsplash.com/photo-1504593811423-6dd665756598?q=80&w=1200&auto=format&fit=crop"
                  alt=""
                />
              </div>

              <div class="team-card-content">
                <h3>Zebratic</h3>

                <p>Motion Designer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <div class="section-glow-right"></div>
      <div class="container">
        <div class="text-center section-heading">
          <span class="section-label"> FAQ </span>

          <h2 class="section-title">Frequently Asked Questions</h2>
        </div>

        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqOne"
              >
                How long does a project take?
              </button>
            </h2>

            <div
              id="faqOne"
              class="accordion-collapse collapse show"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Project duration depends on the scope and complexity.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqTwo"
              >
                Do you provide revisions?
              </button>
            </h2>

            <div
              id="faqTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Yes, revisions are included during the project process.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
      <div class="section-glow-left"></div>
      <div class="container">
        <div class="cta-wrapper reveal">
          <h2>Ready To Build Your Next Digital Product?</h2>

          <p>
            Let's collaborate together and create modern digital experiences for
            your business.
          </p>

          <a href="#contact" class="btn btn-primary-custom"> Start Project </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
      <div class="section-glow-left"></div>

      <div class="section-glow-right"></div>
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5">
            <span class="section-label"> Contact Us </span>

            <h2 class="section-title">Let's Build Something Great Together</h2>

            <p class="section-description">
              Feel free to contact us for collaboration, project inquiries, or
              digital consultation.
            </p>

            <div class="contact-info">
              <div class="contact-item">
                <i class="bi bi-envelope-fill"></i>

                <div>
                  <h4>Email</h4>
                  <p>hello@pixelplus.com</p>
                </div>
              </div>

              <div class="contact-item">
                <i class="bi bi-telephone-fill"></i>

                <div>
                  <h4>Phone</h4>
                  <p>+62 813 1111 2222</p>
                </div>
              </div>

              <div class="contact-item">
                <i class="bi bi-geo-alt-fill"></i>

                <div>
                  <h4>Location</h4>
                  <p>Gresik, Indonesia</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form-wrapper">
              <div class="form-alert"></div>
              <form id="contactForm">
                <div class="row g-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      id="name"
                      class="form-control"
                      placeholder="Your Name"
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      id="email"
                      class="form-control"
                      placeholder="Your Email"
                    />
                  </div>

                  <div class="col-12">
                    <input
                      type="text"
                      id="subject"
                      class="form-control"
                      placeholder="Subject"
                    />
                  </div>

                  <div class="col-12">
                    <textarea
                      id="message"
                      class="form-control"
                      rows="6"
                      placeholder="Your Message"
                    ></textarea>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary-custom">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-4">
            <h2 class="footer-logo">Pixel++</h2>

            <p class="footer-description">
              Creative digital agency focused on building modern digital
              experiences for brands and businesses.
            </p>
          </div>

          <div class="col-lg-2">
            <h4 class="footer-title">Company</h4>

            <ul class="footer-links">
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3">
            <h4 class="footer-title">Services</h4>

            <ul class="footer-links">
              <li><a href="#services">UI/UX Design</a></li>
              <li><a href="#services">Web Development</a></li>
              <li><a href="#services">Brand Identity</a></li>
              <li><a href="#services">Digital Strategy</a></li>
            </ul>
          </div>

          <div class="col-lg-3">
            <h4 class="footer-title">Follow Us</h4>

            <div class="footer-social">
              <a href="https://www.instagram.com/andifry7/" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>

              <a
                href="https://www.linkedin.com/in/ahmad-andi-alfiansyah-286894282/"
                target="_blank"
              >
                <i class="bi bi-linkedin"></i>
              </a>

              <a href="#" target="_blank">
                <i class="bi bi-behance"></i>
              </a>

              <a href="#" target="_blank">
                <i class="bi bi-dribbble"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="footer-bottom">
          <p>&copy; <span id="year"></span> Pixel++. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <button class="back-to-top">↑</button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- JS -->
    <script src="js/script.js"></script>

    <!-- Set Current Year -->
    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thari Tour Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet">
    <style>
        /* Ensure body and html take full height */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Hero section styling */
        .hero {
            position: relative;
            height: 100vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
        }

        /* Overlay for better readability */
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: 1;
        }

        /* Carousel styling */
        .carousel, .carousel-inner, .carousel-item {
            height: 100vh;
            width: 100%;
        }

        .carousel-item img {
            height: 100vh;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .carousel-caption {
            z-index: 2;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }

        /* Transparent navbar with black text */
        .navbar-custom {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 3;
            background: transparent !important;
        }

        .navbar-custom .navbar-nav .nav-link,
        .navbar-custom .navbar-brand {
            color: white;
            font-weight: 600;
        }

        .navbar-custom .navbar-nav .nav-link:hover,
        .navbar-custom .navbar-brand:hover {
            color: #ff4747;
        }

        /* Logo styles */
        .logo img {
            max-height: 100px;
            width: auto;
        }

        /* WhatsApp floating button */
        .whatsapp-button {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #25d366;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 11;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease;
        }

        .whatsapp-button:hover {
            background-color: #1ebe57;
            text-decoration: none;
        }

        .whatsapp-button i {
            font-size: 32px;
            color: white;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .carousel-item img {
                height: 60vh;
            }
            .hero, .carousel, .carousel-inner {
                height: 60vh;
            }
        }
        .carousel-indicators div {
        transition: width 0.3s ease;
      }
      .carousel-indicators div.active {
        width: 24px;
      }
      /* custom scroll bar style for the cards container horizontally on small screen */
      /* The vertical scroll is hidden */
      .cards-container {
        scroll-behavior: smooth;
      }
      /* Button badges */
      .badge {
        font-size: 0.65rem;
        font-weight: 600;
        text-transform: none;
      }
      /* Small icons */
      .icon-small {
        width: 16px;
        height: 16px;
      }
      /* Custom box shadow for the cards bottom */
      .card-bottom-shadow {
        box-shadow:
          0 4px 6px rgb(0 0 0 / 0.1),
          0 1px 3px rgb(0 0 0 / 0.06);
      }
      /* Hover effect on cards */
      .card:hover {
        box-shadow: 0 8px 20px rgb(0 0 0 / 0.15);
        transform: translateY(-4px);
        transition: all 0.3s ease-in-out;
      }
      /* Whatsapp button green color */
      .btn-whatsapp {
        background-color: #25D366;
        border-color: #25D366;
        transition: background-color 0.25s ease;
      }
      .btn-whatsapp:hover {
        background-color: #1DA851;
        border-color: #1DA851;
      }
      /* Enquiry buttons style */
      .btn-enquiry {
        background-color: #D9480F;
        color: white;
        font-weight: 600;
      }
      .btn-enquiry:hover {
        background-color: #B03A0B;
      }
      /* Call button style */
      .btn-call {
        background-color: #13284B;
        color: white;
        font-weight: 600;
      }
      .btn-call:hover {
        background-color: #0E1F3D;
      }
      h2.section-title {
    text-align: center;
    font-weight: 900;
    font-size: 1.8rem;
    padding-top: 3rem;
    margin-bottom: 0.5rem;
    letter-spacing: 0.05em;
  }
  h2.section-title::after {
    content: "";
    display: block;
    width: 60px;
    margin: 0.5rem auto 2rem;
    height: 3px;
    background-color: #27ae60; /* Green underline */
    border-radius: 2px;
  }

  .car-package-container {
    max-width: 1200px;
    margin: 0 auto 4rem auto;
    padding: 0 1rem;
    overflow-x: auto;
    display: flex;
    gap: 1rem;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    scrollbar-color: #27ae60 #f1f1f1;
  }
      .car-package-container::-webkit-scrollbar {
    height: 8px;
  }
  .car-package-container::-webkit-scrollbar-track {
    background: #f1f1f1;
  }
  .car-package-container::-webkit-scrollbar-thumb {
    background-color: #27ae60;
    border-radius: 20px;
  }

  .car-card {
    flex: 0 0 280px;
    background: white;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 3px 8px rgb(0 0 0 / 0.12);
    display: flex;
    flex-direction: column;
  }

  .car-image-wrapper {
    position: relative;
    width: 100%;
    padding-top: 60%; /* aspect ratio */
    background: #eee;
  }
  .car-image-wrapper img {
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translateX(-50%);
    max-height: 80%;
    max-width: 95%;
    object-fit: contain;
  }

  .car-info {
    background-color: #ffc947;
    padding: 0.7rem 0.75rem;
    text-align: center;
    user-select: none;
    flex-shrink: 0;
  }

  .car-info h3 {
    margin: 0 0 0.2rem;
    font-size: 1.1rem;
    font-weight: 900;
    letter-spacing: 0.03em;
    color: #222;
  }

  .car-info p.price {
    margin: 0 0 0.25rem;
    font-weight: 700;
    font-size: 1rem;
    color: #222;
  }

  .car-info p.details {
    margin: 0;
    font-size: 0.78rem;
    color: #222;
    font-weight: 600;
  }
    h2.section-heading {
      font-weight: 900;
      font-size: 1.75rem;
      text-align: center;
      text-transform: uppercase;
      margin-bottom: 0.3em;
      color: #111;
      position: relative;
      letter-spacing: 0.05em;
    }
    /* Green underline below heading */
    h2.section-heading::after {
      content: "";
      display: block;
      width: 50px;
      height: 3px;
      background-color: #27ae60;
      margin: 0.45em auto 0;
      border-radius: 2px;
    }

    /* Grid container */
    .services-grid {
      margin-top: 40px;
      display: grid;
      gap: 2.5rem 3rem;
    }

    /* Single service block */
    .service-item {
      display: flex;
      gap: 15px;
      align-items: flex-start;
    }
    .service-icon {
      flex-shrink: 0;
      width: 38px;
      height: 38px;
      stroke: #27ae60;
      stroke-width: 1.8;
      fill: none;
      stroke-linejoin: round;
      stroke-linecap: round;
      margin-top: 4px;
    }

    /* Service content */
    .service-content {
      flex: 3;
    }

    .service-title {
      font-weight: 700;
      color: #111;
      font-size: 1rem;
      margin: 0 0 6px 0;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    /* Green part of title */
    .service-title .highlight {
      color: #27ae60;
      font-weight: 700;
      font-size: 1rem;
    }

    .service-text {
      font-weight: 400;
      color: #555;
      font-size: 0.9rem;
      margin: 0;
    }
    .service-text em {
      font-style: italic;
      font-weight: 600;
      color: #444;
    }

    .social-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 35px;
      height: 35px;
      margin-right: 0.5rem;
      border-radius: 50%;
      background-color: #374151; /* Gray-700 */
      color: white;
      transition: background-color 0.3s ease;
      cursor: pointer;
    }
    .social-icon:hover {
      background-color: #10b981; /* Emerald-500 */
    }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand logo d-flex align-items-center" href="#">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="Thari Tour Travel">
            </a>
            <button class="navbar-toggler btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="justify-content-end pe-3" id="navbarNavDropdown">
                <ul class="navbar-nav fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TOUR PACKAGES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Spiti Valley</a></li>
                            <li><a class="dropdown-item" href="#">Ladakh</a></li>
                            <li><a class="dropdown-item" href="#">Manali</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ADVENTURE TOURS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Trekking</a></li>
                            <li><a class="dropdown-item" href="#">River Rafting</a></li>
                            <li><a class="dropdown-item" href="#">Paragliding</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TRAVEL BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.toiimg.com/photo/68411508.cms" class="d-block w-100" alt="Himalayas">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Discover the Himachal</h5>
                        <p>Embark on a thrilling adventure to the mountains.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://bonvoyagers.co/wp-content/uploads/2024/07/mini_magick20180406-4-19f5jv1.jpg" class="d-block w-100" alt="Beaches">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Relax in Sikkim</h5>
                        <p>Explore the serene landscapes of Northeast India.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.wanderon.in/gallery/new/2025/06/09/1749474070736-reasons-to-visit-spiti-valley.jpg" class="d-block w-100" alt="Backwaters">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spiti Valley</h5>
                        <p>Discover the rugged beauty of the high-altitude desert.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Section: Explore The Destinations -->
  <section class="max-w-7xl mx-auto px-6 mt-12 text-center select-none">
    <h2 class="text-xl md:text-2xl font-extrabold tracking-tight mb-1 leading-tight">
      Explore The <span class="text-red-600 underline cursor-default">Destinations</span> With Us !
    </h2>
    <p class="text-sm md:text-base text-gray-600 max-w-xl mx-auto leading-relaxed mb-10">
      Pack your bags and venture into your dreamland with top traveling support and arrangements, and leave all your worries behind
    </p>

    <!-- Horizontal scroll of destination cards -->
    <div class="flex justify-center space-x-4 overflow-x-auto hide-scrollbar py-4 px-2">
      <!-- Card 1 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a0f03542-8647-4a18-b956-c0bf457ff715.png" 
          alt="Darjeeling hill train in scenic cloudy blue sky landscape" 
          class="w-full h-full object-cover" 
          loading="lazy"
          onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/13371c49-3b1d-46ff-8b6c-5e3ec4767098.png';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">Darjeeling</span>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9bacfbe0-87d8-4abd-bbb8-283aef0a7585.png" 
          alt="Sikkim mountain lake with pavilion structure and snowy peaks" 
          class="w-full h-full object-cover"
          loading="lazy"
          onerror="this.onerror=null;this.src='https://placehold.co/180x220/png?text=Image+Unavailable';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">Sikkim</span>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/47921e27-0331-4ae8-8709-b4761468ecd3.png" 
          alt="Elephant walking through lush green forest" 
          class="w-full h-full object-cover" 
          loading="lazy"
          onerror="this.onerror=null;this.src='https://placehold.co/180x220/png?text=Image+Unavailable';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">Dooars</span>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/043f999c-9916-4b99-8a19-0b42212bc154.png" 
          alt="Aerial view of a canoe with three people gliding on turquoise water" 
          class="w-full h-full object-cover" 
          loading="lazy"
          onerror="this.onerror=null;this.src='https://placehold.co/180x220/png?text=Image+Unavailable';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">North East</span>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0653d5f7-829d-4922-9137-9a7f90967a37.png" 
          alt="Close up frontal portrait of a walking leopard on forest path" 
          class="w-full h-full object-cover" 
          loading="lazy"
          onerror="this.onerror=null;this.src='https://placehold.co/180x220/png?text=Image+Unavailable';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">Assam</span>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="min-w-[150px] max-w-[150px] rounded-lg overflow-hidden relative shadow-lg cursor-pointer flex-shrink-0">
        <img 
          src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2bbe11dd-62ea-424b-9270-298a3632e776.png" 
          alt="Layered waterfalls flowing into calm turquoise pool surrounded by green forest" 
          class="w-full h-full object-cover" 
          loading="lazy"
          onerror="this.onerror=null;this.src='https://placehold.co/180x220/png?text=Image+Unavailable';"
        />
        <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-3">
          <span class="text-white font-bold text-sm select-text">Meghalaya</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: How We Work -->
  <section class="relative bg-red-50 mt-20 p-10 md:px-20">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-10 select-none">
      <!-- Left Text Block -->
      <div class="md:w-1/3 flex flex-col justify-center">
        <span class="inline-flex items-center gap-2 text-xs text-red-600 mb-4 font-semibold">
          <span class="w-2 h-2 rounded-full bg-red-400 block"></span>
          How We Work
        </span>
        <h3 class="text-2xl lg:text-3xl font-bold leading-snug text-gray-900 tracking-tight cursor-default">
          Turn Vacations Into <br /> Unforgettable Chapters of Your Life Story<span class="text-red-600">.</span>
        </h3>
      </div>

      <!-- Right Cards -->
      <div class="md:w-2/3 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg p-5 shadow-md border border-teal-300 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center space-x-2 text-teal-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 11c2.21 0 4-5 4-5s-1.79 2-4 2-4-2-4-2 1.79 5 4 5zM5.5 15h13M12 15v6" /></svg>
              <span class="font-bold text-lg tracking-wide">01</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">
            Feeling Secure, Supported…
          </h4>
          <p class="text-sm text-gray-600">
            A stress-free mindset where safety, comfort, and quick help are never in question.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg p-5 shadow-md border border-red-300 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center space-x-2 text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8v8H8z" /><path stroke-linecap="round" stroke-linejoin="round" d="M3 12h1m16 0h1M12 3v1m0 16v1" /></svg>
              <span class="font-bold text-lg tracking-wide">02</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">
            Experiencing the Magic of ...
          </h4>
          <p class="text-sm text-gray-600">
            A travel experience so smooth it feels like a luxury film—no queues, no delays, no second-guessing—just freedom.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg p-5 shadow-md border border-purple-400 hover:shadow-xl transition">
          <div class="flex items-center justify-between mb-3">
            <div class="flex items-center space-x-2 text-purple-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-6m6 6v-4m-12 4v-2m18-10v2a4 4 0 01-4 4H8l-2 3H6v-1a3 3 0 013-3h7a3 3 0 003-3V4z"/></svg>
              <span class="font-bold text-lg tracking-wide">03</span>
            </div>
          </div>
          <h4 class="text-md font-semibold text-gray-800 mb-2 cursor-default">Gaining a Deeper...</h4>
          <p class="text-sm text-gray-600">
            Transformational travel that builds a richer and more soulful understanding of different cultures...
          </p>
        </div>
      </div>
    </div>
  </section>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/919781305555" class="whatsapp-button" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Tour Packages Section -->
     <main class="container mx-auto px-4 md:px-8 py-12 tracking-wide">
    <!-- Section heading -->
    <div class="flex justify-between items-center mb-6">
      <div class="flex items-center gap-3">
        <span class="bg-orange-100 text-orange-600 px-2 py-0.5 rounded-full text-xs font-semibold flex items-center gap-1 leading-snug">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="currentColor" viewBox="0 0 16 16">
            <path d="M7 1.5a.5.5 0 01.5.5v3.793l1.146-1.147a.5.5 0 11.708.708L7.707 7.707a1 1 0 01-1.414 0L4 5.414a.5.5 0 11.708-.708L6.5 6.793V2a.5.5 0 01.5-.5z"/>
            <path d="M2 13.5a.5.5 0 01.5-.5h11a.5.5 0 010 1h-11a.5.5 0 01-.5-.5z"/>
          </svg>
          Best Sellers
        </span>
        <h2 class="text-2xl font-extrabold text-gray-900">
          Best Selling <span class="text-orange-700"> Tour Packages</span>
        </h2>
      </div>
      <button class="btn-call flex items-center gap-2 text-sm font-semibold rounded-full px-5 py-2 hover:bg-gray-800 transition">
        Send Online Enquiry
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

    <!-- Card list carousel horizontally scrollable on small screens -->
    <div class="cards-container flex gap-4 overflow-x-auto scroll-smooth pb-8 scrollbar-hide">
      <!-- Card 1 -->
      <article class="card bg-white rounded-lg shadow-md min-w-[270px] max-w-[270px] flex flex-col hover:shadow-lg transition-transform duration-300">
        <div class="relative rounded-t-lg overflow-hidden">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/2956f28a-a233-45b0-8b92-2dadccb2d544.png"
            alt="Sunset view of mountain peaks along a mountain range under clear sky"
            loading="lazy"
            class="w-full h-44 object-cover"
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e8a153e4-be6c-4239-add6-99fc21ca5cbe.png';"
          />
          <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z"/>
            </svg> Best Seller
          </span>
        </div>
        <div class="p-4 flex flex-col flex-grow">
          <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
          <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">Your Ultimate Gangtok...</h3>
          <div class="flex items-center text-gray-600 text-sm mb-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4"/></svg>
            <span>Sikkim, Darjeeling</span>
          </div>
          <div class="text-orange-700 font-semibold mb-3">From ₹ 27,000/Person</div>
          <div class="mt-auto flex items-center border-t border-gray-200 pt-3 gap-3 card-bottom-shadow">
            <div class="flex items-center text-gray-600 text-xs gap-1 flex-grow">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
              <span>08 N / 09 D</span>
            </div>
            <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">View</button>
            <button aria-label="Chat on WhatsApp" class="btn-whatsapp p-2 rounded-full" title="Chat on WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 32 32"><path d="M16 3C9.1 3 3.8 7.9 3.8 13.9a9.8 9.8 0 001.6 5.4l-1.5 5.6 5.7-1.5a9.9 9.9 0 005.4 1.7c6.9 0 12.2-5 12.2-11.6S22.9 3 16 3zm0 21c-1.7 0-3.3-.5-4.7-1.5l-.3-.2-3.3.9.9-3.2-.2-.3A7.8 7.8 0 018 14a7.7 7.7 0 1113.4 4.4c-.3.7-1.3 1.4-2.7 2l-.4.2a7.4 7.4 0 01-4.7 1.4zm4-6c-.2-.1-1.2-.6-1.4-.6-.2 0-.3.1-.4.2-.2.3-.8.6-1 .6s-.4 0-.6-.1a3.2 3.2 0 01-1.2-1.5c-.3-.4 0-.7.1-1.1v-.6c0-.3-.4-.7-.6-1-.2-.3-.5-.5-.7-.6s-.5-.1-.7 0c0 0-.8.4-1.1 1-.5.9-.5 1.9.8 3.4 1 1.3 1.8 1.8 3.3 2.3 1.5.5 2 0 2.3-.1.3-.1 1.2-.5 1.3-1.2.1-.7.1-1.3 0-1.4z"/></svg>
            </button>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="card bg-white rounded-lg shadow-md min-w-[270px] max-w-[270px] flex flex-col hover:shadow-lg transition-transform duration-300">
        <div class="relative rounded-t-lg overflow-hidden">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/792720be-a128-4c05-bd4c-2a7328e5815c.png"
            alt="Mountain range at sunset view with warm orange and dark blue colors"
            loading="lazy"
            class="w-full h-44 object-cover"
            onerror="this.onerror=null;this.src='https://placehold.co/270x180?text=Image+Not+Available';"
          />
          <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z"/>
            </svg> Best Seller
          </span>
        </div>
        <div class="p-4 flex flex-col flex-grow">
          <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
          <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">03 Nights 04 Days Darjeeling...</h3>
          <div class="flex items-center text-gray-600 text-sm mb-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4"/></svg>
            <span>Darjeeling</span>
          </div>
          <div class="text-orange-700 font-semibold mb-3">From ₹ 13,000/Person</div>
          <div class="mt-auto flex items-center border-t border-gray-200 pt-3 gap-3 card-bottom-shadow">
            <div class="flex items-center text-gray-600 text-xs gap-1 flex-grow">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
              <span>03 N / 04 D</span>
            </div>
            <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">View</button>
            <button aria-label="Chat on WhatsApp" class="btn-whatsapp p-2 rounded-full" title="Chat on WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 32 32"><path d="M16 3C9.1 3 3.8 7.9 3.8 13.9a9.8 9.8 0 001.6 5.4l-1.5 5.6 5.7-1.5a9.9 9.9 0 005.4 1.7c6.9 0 12.2-5 12.2-11.6S22.9 3 16 3zm0 21c-1.7 0-3.3-.5-4.7-1.5l-.3-.2-3.3.9.9-3.2-.2-.3A7.8 7.8 0 018 14a7.7 7.7 0 1113.4 4.4c-.3.7-1.3 1.4-2.7 2l-.4.2a7.4 7.4 0 01-4.7 1.4zm4-6c-.2-.1-1.2-.6-1.4-.6-.2 0-.3.1-.4.2-.2.3-.8.6-1 .6s-.4 0-.6-.1a3.2 3.2 0 01-1.2-1.5c-.3-.4 0-.7.1-1.1v-.6c0-.3-.4-.7-.6-1-.2-.3-.5-.5-.7-.6s-.5-.1-.7 0c0 0-.8.4-1.1 1-.5.9-.5 1.9.8 3.4 1 1.3 1.8 1.8 3.3 2.3 1.5.5 2 0 2.3-.1.3-.1 1.2-.5 1.3-1.2.1-.7.1-1.3 0-1.4z"/></svg>
            </button>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="card bg-white rounded-lg shadow-md min-w-[270px] max-w-[270px] flex flex-col hover:shadow-lg transition-transform duration-300">
        <div class="relative rounded-t-lg overflow-hidden">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/518b61de-28bf-411c-ae34-60a89db8c00b.png"
            alt="Golden Buddha monument on hill top with manicured gardens and misty mountain backdrop, spiritual site"
            loading="lazy"
            class="w-full h-44 object-cover"
            onerror="this.onerror=null;this.src='https://placehold.co/270x180?text=Image+Not+Available';"
          />
          <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z"/>
            </svg> Best Seller
          </span>
        </div>
        <div class="p-4 flex flex-col flex-grow">
          <span class="text-xs text-gray-600 mb-1">Honeymoon Tours, Spiritual Tour, Hill station Tours</span>
          <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">4 Nights 5 Days Sikkim...</h3>
          <div class="flex items-center text-gray-600 text-sm mb-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4"/></svg>
            <span>Sikkim</span>
          </div>
          <div class="text-orange-700 font-semibold mb-3">From ₹ 18,000/Person</div>
          <div class="mt-auto flex items-center border-t border-gray-200 pt-3 gap-3 card-bottom-shadow">
            <div class="flex items-center text-gray-600 text-xs gap-1 flex-grow">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
              <span>04 N / 05 D</span>
            </div>
            <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">View</button>
            <button aria-label="Chat on WhatsApp" class="btn-whatsapp p-2 rounded-full" title="Chat on WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 32 32"><path d="M16 3C9.1 3 3.8 7.9 3.8 13.9a9.8 9.8 0 001.6 5.4l-1.5 5.6 5.7-1.5a9.9 9.9 0 005.4 1.7c6.9 0 12.2-5 12.2-11.6S22.9 3 16 3zm0 21c-1.7 0-3.3-.5-4.7-1.5l-.3-.2-3.3.9.9-3.2-.2-.3A7.8 7.8 0 018 14a7.7 7.7 0 1113.4 4.4c-.3.7-1.3 1.4-2.7 2l-.4.2a7.4 7.4 0 01-4.7 1.4zm4-6c-.2-.1-1.2-.6-1.4-.6-.2 0-.3.1-.4.2-.2.3-.8.6-1 .6s-.4 0-.6-.1a3.2 3.2 0 01-1.2-1.5c-.3-.4 0-.7.1-1.1v-.6c0-.3-.4-.7-.6-1-.2-.3-.5-.5-.7-.6s-.5-.1-.7 0c0 0-.8.4-1.1 1-.5.9-.5 1.9.8 3.4 1 1.3 1.8 1.8 3.3 2.3 1.5.5 2 0 2.3-.1.3-.1 1.2-.5 1.3-1.2.1-.7.1-1.3 0-1.4z"/></svg>
            </button>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="card bg-white rounded-lg shadow-md min-w-[270px] max-w-[270px] flex flex-col hover:shadow-lg transition-transform duration-300">
        <div class="relative rounded-t-lg overflow-hidden">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/762b30c5-a87a-4c87-8b79-2ab20958115d.png"
            alt="Bright snow mountain with blue lake front and rocky shore under clear sky"
            loading="lazy"
            class="w-full h-44 object-cover"
            onerror="this.onerror=null;this.src='https://placehold.co/270x180?text=Image+Not+Available';"
          />
          <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z"/>
            </svg> Best Seller
          </span>
        </div>
        <div class="p-4 flex flex-col flex-grow">
          <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
          <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">The Himalayan Kingdom 7...</h3>
          <div class="flex items-center text-gray-600 text-sm mb-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4"/></svg>
            <span>Sikkim</span>
          </div>
          <div class="text-orange-700 font-semibold mb-3">From ₹ 22,000/Person</div>
          <div class="mt-auto flex items-center border-t border-gray-200 pt-3 gap-3 card-bottom-shadow">
            <div class="flex items-center text-gray-600 text-xs gap-1 flex-grow">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
              <span>07 N / 08 D</span>
            </div>
            <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">View</button>
            <button aria-label="Chat on WhatsApp" class="btn-whatsapp p-2 rounded-full" title="Chat on WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 32 32"><path d="M16 3C9.1 3 3.8 7.9 3.8 13.9a9.8 9.8 0 001.6 5.4l-1.5 5.6 5.7-1.5a9.9 9.9 0 005.4 1.7c6.9 0 12.2-5 12.2-11.6S22.9 3 16 3zm0 21c-1.7 0-3.3-.5-4.7-1.5l-.3-.2-3.3.9.9-3.2-.2-.3A7.8 7.8 0 018 14a7.7 7.7 0 1113.4 4.4c-.3.7-1.3 1.4-2.7 2l-.4.2a7.4 7.4 0 01-4.7 1.4zm4-6c-.2-.1-1.2-.6-1.4-.6-.2 0-.3.1-.4.2-.2.3-.8.6-1 .6s-.4 0-.6-.1a3.2 3.2 0 01-1.2-1.5c-.3-.4 0-.7.1-1.1v-.6c0-.3-.4-.7-.6-1-.2-.3-.5-.5-.7-.6s-.5-.1-.7 0c0 0-.8.4-1.1 1-.5.9-.5 1.9.8 3.4 1 1.3 1.8 1.8 3.3 2.3 1.5.5 2 0 2.3-.1.3-.1 1.2-.5 1.3-1.2.1-.7.1-1.3 0-1.4z"/></svg>
            </button>
          </div>
        </div>
      </article>
      <!-- Card 2 -->
      <article class="card bg-white rounded-lg shadow-md min-w-[270px] max-w-[270px] flex flex-col hover:shadow-lg transition-transform duration-300">
        <div class="relative rounded-t-lg overflow-hidden">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/792720be-a128-4c05-bd4c-2a7328e5815c.png"
            alt="Mountain range at sunset view with warm orange and dark blue colors"
            loading="lazy"
            class="w-full h-44 object-cover"
            onerror="this.onerror=null;this.src='https://placehold.co/270x180?text=Image+Not+Available';"
          />
          <span class="absolute top-3 left-3 bg-blue-600 text-white text-xs font-semibold px-2 py-0.5 rounded inline-flex items-center gap-1 select-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linejoin="round" stroke-linecap="round" d="M12 2l3 7h7l-5.65 4 2 8-7-5-7 5 2-8L2 9h7l3-7z"/>
            </svg> Best Seller
          </span>
        </div>
        <div class="p-4 flex flex-col flex-grow">
          <span class="text-xs text-gray-600 mb-1">Adventure Tours, Honeymoon Tours, Hill station Tours</span>
          <h3 class="font-semibold text-gray-900 text-lg leading-tight mb-1">03 Nights 04 Days Darjeeling...</h3>
          <div class="flex items-center text-gray-600 text-sm mb-2 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M12 2v10m4-4l-4 4-4-4"/></svg>
            <span>Darjeeling</span>
          </div>
          <div class="text-orange-700 font-semibold mb-3">From ₹ 13,000/Person</div>
          <div class="mt-auto flex items-center border-t border-gray-200 pt-3 gap-3 card-bottom-shadow">
            <div class="flex items-center text-gray-600 text-xs gap-1 flex-grow">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-small" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linejoin="round" stroke-linecap="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/></svg>
              <span>03 N / 04 D</span>
            </div>
            <button class="btn-enquiry py-1.5 px-4 rounded-full text-sm">View</button>
            <button aria-label="Chat on WhatsApp" class="btn-whatsapp p-2 rounded-full" title="Chat on WhatsApp">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-white" viewBox="0 0 32 32"><path d="M16 3C9.1 3 3.8 7.9 3.8 13.9a9.8 9.8 0 001.6 5.4l-1.5 5.6 5.7-1.5a9.9 9.9 0 005.4 1.7c6.9 0 12.2-5 12.2-11.6S22.9 3 16 3zm0 21c-1.7 0-3.3-.5-4.7-1.5l-.3-.2-3.3.9.9-3.2-.2-.3A7.8 7.8 0 018 14a7.7 7.7 0 1113.4 4.4c-.3.7-1.3 1.4-2.7 2l-.4.2a7.4 7.4 0 01-4.7 1.4zm4-6c-.2-.1-1.2-.6-1.4-.6-.2 0-.3.1-.4.2-.2.3-.8.6-1 .6s-.4 0-.6-.1a3.2 3.2 0 01-1.2-1.5c-.3-.4 0-.7.1-1.1v-.6c0-.3-.4-.7-.6-1-.2-.3-.5-.5-.7-.6s-.5-.1-.7 0c0 0-.8.4-1.1 1-.5.9-.5 1.9.8 3.4 1 1.3 1.8 1.8 3.3 2.3 1.5.5 2 0 2.3-.1.3-.1 1.2-.5 1.3-1.2.1-.7.1-1.3 0-1.4z"/></svg>
            </button>
          </div>
        </div>
      </article>

    </div>

    <!-- Carousel indicators -->
    <div class="flex justify-center mt-4 space-x-2 carousel-indicators select-none">
      <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
      <div class="w-6 h-3 bg-orange-700 rounded-full active"></div>
      <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
    </div>

  </main>
  <section aria-labelledby="featured-car-packages-title">
  <h2 id="featured-car-packages-title" class="section-title">FEATURED CAR PACKAGES</h2>
  <div class="car-package-container" role="list">
    <article class="car-card" role="listitem" tabindex="0" aria-label="Toyota Etios car package">
      <div class="car-image-wrapper">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/65056926-7b36-428d-937a-3e021c9eadf3.png" alt="White sedan car Toyota Etios studio photo on light gray background" loading="lazy" />
      </div>
      <div class="car-info">
        <h3>TOYOTA ETIOS</h3>
        <p class="price">Rs. 3,000/-Day</p>
        <p class="details">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
      </div>
    </article>

    <article class="car-card" role="listitem" tabindex="0" aria-label="Swift Dezire car package">
      <div class="car-image-wrapper">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ffd32e09-658a-4ece-b4c9-6f15ae660c1d.png" alt="White hatchback car Swift Dezire studio photo on light gray background" loading="lazy" />
      </div>
      <div class="car-info">
        <h3>SWIFT DEZIRE</h3>
        <p class="price">Rs. 3,000/-Day</p>
        <p class="details">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
      </div>
    </article>

    <article class="car-card" role="listitem" tabindex="0" aria-label="Innova Crysta car package">
      <div class="car-image-wrapper">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8482b004-d83f-4f40-beb7-80832e42eb0f.png" alt="White SUV car Innova Crysta studio photo on light gray background" loading="lazy" />
      </div>
      <div class="car-info">
        <h3>INNOVA CRYSTA</h3>
        <p class="price">Rs. 5,500/-Day</p>
        <p class="details">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
      </div>
    </article>

    <article class="car-card" role="listitem" tabindex="0" aria-label="Maruti Ertiga car package">
      <div class="car-image-wrapper">
        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b9aaa01e-4e17-4555-aa11-c04beee3ce60.png" alt="White multi-purpose vehicle car Maruti Ertiga studio photo on light gray background" loading="lazy" />
      </div>
      <div class="car-info">
        <h3>MARUTI ERTIGA</h3>
        <p class="price">Rs. 4,500/-Day</p>
        <p class="details">For 6 Days Booking. Driver, Fuel, Toll & Parking Included.</p>
      </div>
    </article>
  </div>
</section>
 <h2 class="section-heading">Services We Offer</h2>

  <div class="services-grid" role="list">

    <!-- Tour Packages -->
    <article class="service-item" role="listitem" aria-label="Tour Packages service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M2 16l5-5 4 4 6-6 5 5" />
        <circle cx="7" cy="17" r="2" />
        <circle cx="17" cy="17" r="2" />
      </svg>
      <div class="service-content">
        <p class="service-title"><span class="highlight">Tour Packages</span></p>
        <p class="service-text">
          Himachal Pradesh truly is an extraordinary and colorful destination, and what greater idea than to explore it with your family members. The Thrill Himalaya has meticulously-crafted Family Holidays in India including a variety of memorable experiences, destinations and attractions, which harmonizes with the preferences of family members with different tastes.
          <br /><em>more details..</em>
        </p>
      </div>
    </article>

    <!-- Hotel & Home Stay Accommodation -->
    <article class="service-item" role="listitem" aria-label="Hotel and Home Stay Accommodation service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <rect x="3" y="5" width="18" height="14" rx="2" ry="2" />
        <line x1="3" y1="10" x2="21" y2="10" />
        <line x1="8" y1="15" x2="16" y2="15" />
        <line x1="8" y1="18" x2="14" y2="18" />
      </svg>
      <div class="service-content">
        <p class="service-title"><strong>Hotel & Home Stay Accommodation</strong></p>
        <p class="service-text">
          We are offering quality and affordability, Hotel & Homestays are a great value accommodation option for short or long term stays in an unique place with eye smoothing view. Stay our fully furnished Cedar View Home Stay with all the coziness to spend quality Holiday time or "Family time" away from regular chaos. of a hotel setting in homely atmosphere after one has done exploring the hill city. 
          <br /><em>more details..</em>
        </p>
      </div>
    </article>

    <!-- Jeep Safaries -->
    <article class="service-item" role="listitem" aria-label="Jeep Safaries service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <line x1="4" y1="8" x2="4" y2="16" />
        <line x1="8" y1="6" x2="8" y2="18" />
        <line x1="12" y1="4" x2="12" y2="20" />
        <line x1="16" y1="6" x2="16" y2="18" />
        <line x1="20" y1="8" x2="20" y2="16" />
      </svg>
      <div class="service-content">
        <p class="service-title"><strong>Jeep Safaries</strong></p>
        <p class="service-text">
          The Thrill Himalaya includes overnight camping and accommodation. Jeep safari in Himachal Pradesh gives you a feel of the mountains, offering visits to the most prominent tourist sites and picturesque locations. Some of the major regions for jeep safari are Lahaul and Spiti, Kinnaur, Ladakh, Garhwal and Kumaon. 
          <br /><em>more details..</em>
        </p>
      </div>
    </article>

    <!-- Car Rental Service -->
    <article class="service-item" role="listitem" aria-label="Car Rental Service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <rect x="3" y="8" width="18" height="8" rx="2" ry="2" />
        <circle cx="7" cy="17" r="2" />
        <circle cx="17" cy="17" r="2" />
      </svg>
      <div class="service-content">
        <p class="service-title"><strong>Car Rental Service</strong></p>
        <p class="service-text">
          We are working in the field of tourism for more than two decades. Our drivers are well versed with North Indian terrain and know the routes with custom and culture better than anyone else outside Himachal. Our Motto is your satisfaction without compromising on the quality of service. Taxi Service in Himachal offers all types of commercial vehicles on per day rate basis. The fleet includes Alto, Indica, Indigo, Swift Dzire, Etios, Innova, Tavera, Xylo, SUV and Tempo Traveler. For more info visit our website: <strong>Taxi Service in Himachal</strong>
        </p>
      </div>
    </article>

    <!-- Trekking & Camping -->
    <article class="service-item" role="listitem" aria-label="Trekking and Camping service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M3 16a9 9 0 1 1 18 0" />
        <line x1="12" y1="12" x2="16" y2="8" />
        <line x1="12" y1="12" x2="12" y2="19" />
        <line x1="12" y1="12" x2="8" y2="14" />
      </svg>
      <div class="service-content">
        <p class="service-title"><strong>Trekking & Camping</strong></p>
        <p class="service-text">
          Blessed with the immaculate beauty in the lap of the Himalayas, Himachal attracts many tourists promising an exhilarating trek that you will remember until you take your last breath. With the best panoramic views of the mountains, trekking in Himachal Pradesh offers something new and exceptional to every traveler. So take your adventurous folks along with you on the best trekking tours in Himachal Pradesh and witness the most majestic landscape with your own eyes. Himachal could be best explored with only a trekking expedition while you beat the summer blues in the mountains.
        </p>
      </div>
    </article>

    <!-- Mountain Biking & Motor Cycle Tours -->
    <article class="service-item" role="listitem" aria-label="Mountain Biking and Motor Cycle Tours service">
      <svg class="service-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M4 17h4l1-5h6" />
        <circle cx="6" cy="17" r="3" />
        <circle cx="18" cy="17" r="3" />
        <path d="M16 10l2-3 3 2" />
        <path d="M12 7l2 3" />
        <path d="M15 12l1 2" />
      </svg>
      <div class="service-content">
        <p class="service-title"><strong>Mountain Biking & Motor Cycle Tours</strong></p>
        <p class="service-text">
          Himachal Pradesh is a hidden treasure for adventure enthusiasts, especially for Mountain Bikers. Himachal Pradesh can help tourists in discovering a little adventurer within them. The joy of experiencing every nook and corner is something way beyond any adventure activity of the world. Whether it's about crossing the deadliest trails of Kinnaur or biking on the smooth roads of Kasauli, travelling here can be really an interesting expedition. On a short tour to Himachal Pradesh, visitors will experience a mesh of deserts, silvery snow patches and grasslands.
        </p>
      </div>
    </article>


  <script>
    // Script for carousel indicators update on scroll (optional, just visual indication)
    const container = document.querySelector(".cards-container");
    const indicators = document.querySelectorAll(".carousel-indicators div");

    container.addEventListener("scroll", () => {
      const scrollLeft = container.scrollLeft;
      const maxScroll = container.scrollWidth - container.clientWidth;
      let activeIndex = 0;
      if(scrollLeft < maxScroll / 3) activeIndex = 0;
      else if(scrollLeft < maxScroll * 2 / 3) activeIndex = 1;
      else activeIndex = 2;

      // Update active class
      indicators.forEach((ind, idx) => {
        if(idx === activeIndex) ind.classList.add("active");
        else ind.classList.remove("active");
      });
    });
  </script>


   <!-- Footer -->
<footer class="bg-gray-900 text-gray-300 pt-12 pb-6">
  <div class="max-w-7xl mx-auto px-6">
    <div class="lg:flex lg:justify-between gap-8">
      <!-- Title -->
      <div class="lg:w-1/4 mb-10 lg:mb-0">
        <h2 class="text-2xl font-extrabold text-white border-l-4 border-emerald-500 pl-3 leading-snug tracking-wide">
          The Thrill<br />Himalaya
        </h2>
        <p class="mt-4 text-sm text-gray-400">Your ultimate adventure partner in the Himalayas.</p>
      </div>

      <!-- Links sections -->
      <div class="lg:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Find the perfect escape -->
        <div>
          <h3 class="font-bold mb-4 uppercase text-sm tracking-wide text-white">Find the Perfect Escape</h3>
          <ul class="space-y-3 text-sm">
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Himachal Pradesh</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Spiti Valley & Chandratal</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Leh Ladakh</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Uttarakhand</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Kashmir</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Andaman</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Trekking</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Bike Trip</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">All Tour Packages</a></li>
          </ul>
        </div>

        <!-- Declaration -->
        <div>
          <h3 class="font-bold mb-4 uppercase text-sm tracking-wide text-white">Declaration</h3>
          <ul class="space-y-3 text-sm">
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Privacy Policy</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Refund Policy</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Disclaimer</a></li>
            <li><a class="footer-link hover:text-emerald-500 transition-colors" href="#">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Travel Helpdesk -->
        <div>
          <h3 class="font-bold mb-4 uppercase text-sm tracking-wide text-white">Travel Helpdesk</h3>
          <address class="not-italic text-sm text-gray-400 space-y-3">
            <p>
              <span class="font-semibold text-white">Contact:</span><br />
              <a href="tel:+918219001214" class="hover:text-emerald-500 transition-colors">+91 82190-01214</a><br />
              <a href="tel:+917831050555" class="hover:text-emerald-500 transition-colors">+91 78310-50555</a><br />
              <a href="tel:+919816350555" class="hover:text-emerald-500 transition-colors">+91 98163-50555</a><br />
              <a href="tel:+911772844760" class="hover:text-emerald-500 transition-colors">(0177) 2844760</a>
            </p>
            <p>
              <span class="font-semibold text-white">E-Mail:</span><br />
              <a href="mailto:thethrillhimalaya@gmail.com" class="hover:text-emerald-500 transition-colors">thethrillhimalaya@gmail.com</a><br />
              <a href="mailto:thethrillhimalayas@gmail.com" class="hover:text-emerald-500 transition-colors">thethrillhimalayas@gmail.com</a>
            </p>
          </address>
          <div class="mt-6 flex space-x-3">
            <a href="#" aria-label="Visit our Facebook page" class="social-icon focus:ring-2 focus:ring-emerald-500 focus:outline-none">
              <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5" aria-hidden="true" focusable="false">
                <path d="M22.675 0H1.325C.593 0 0 .594 0 1.326v21.348C0 23.408.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.466.1 2.799.143v3.244l-1.922.001c-1.506 0-1.798.717-1.798 1.77v2.319h3.596l-.468 3.622h-3.128V24h6.128C23.407 24 24 23.408 24 22.674V1.326C24 .594 23.407 0 22.675 0z"/>
              </svg>
            </a>
            <a href="#" aria-label="Visit our Instagram page" class="social-icon focus:ring-2 focus:ring-emerald-500 focus:outline-none">
              <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5" aria-hidden="true" focusable="false">
                <path d="M7.75 2C4.05 2 2 4.05 2 7.75v8.5C2 19.95 4.05 22 7.75 22h8.5c3.7 0 5.75-2.05 5.75-5.75v-8.5C22 4.05 19.95 2 16.25 2h-8.5zm0 2h8.5a3.75 3.75 0 013.75 3.75v8.5a3.75 3.75 0 01-3.75 3.75h-8.5a3.75 3.75 0 01-3.75-3.75v-8.5A3.75 3.75 0 017.75 4zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm5.5-3a1 1 0 11-2 0 1 1 0 012 0z"/>
              </svg>
            </a>
            <a href="#" aria-label="Visit our YouTube channel" class="social-icon focus:ring-2 focus:ring-emerald-500 focus:outline-none">
              <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5" aria-hidden="true" focusable="false">
                <path d="M23.498 6.186a2.827 2.827 0 00-1.985-1.99C19.752 4 12 4 12 4s-7.75 0-9.514.195a2.83 2.83 0 00-1.985 1.99 29.26 29.26 0 000 5.628 2.824 2.824 0 001.985 1.993c1.76.204 9.514.205 9.514.205s7.753 0 9.514-.205a2.833 2.833 0 001.985-1.994 29.458 29.458 0 000-5.627zM9.75 14.984v-5.96l5.207 2.98-5.207 2.98z"/>
              </svg>
            </a>
            <a href="mailto:thethrillhimalaya@gmail.com" aria-label="Contact us via Email" class="social-icon focus:ring-2 focus:ring-emerald-500 focus:outline-none">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5" aria-hidden="true" focusable="false">
                <path d="M2.94 5.063c-.24 0-.44.19-.44.424v8.812c0 .234.2.424.44.424h14.12c.24 0 .44-.19.44-.424V5.487c0-.234-.2-.424-.44-.424H2.94zM17 4.5H3c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1zm-9.19 5.6c-.11.12-.09.33.05.42l4.66 2.9a.25.25 0 00.27 0l4.66-2.9a.25.25 0 00.04-.42l-4.66-3a.25.25 0 00-.28 0l-4.68 3z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-gray-500 pt-10 text-sm border-t border-gray-800 mt-10 select-none">
      © 2025 The Thrill Himalaya. All Rights Reserved.
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
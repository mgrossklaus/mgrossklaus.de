<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Michael Großklaus - Freelance frontend-developer Hamburg</title>
    <meta name="description" content="Michael Großklaus is a freelance frontend-developer based in Hamburg, Germany. You can hire him for HTML, CSS and JavaScript jobs.">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#740740">
    <link rel="manifest" href="manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <meta name="apple-mobile-web-app-title" content="mgrossklaus">
    <meta name="referrer" content="no-referrer">
    <link rel="canonical" href="https://www.mgrossklaus.de">

    <style>
      <?php
        require('reset.css');
        require('styles.css');
      ?>
    </style>
  </head>
  <body itemscope itemtype="http://schema.org/Person">

    <?php if (!$online) { ?>
      <p class="offline">It looks like you're offline, so what you see might not be up to date.</p>
    <?php } ?>

    <div class="bg" id="bg">
      <svg class="bg__image" width="641" height="431" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 641 431">
        <path d="m10,53.659454c-3.5,-2.78 -6.12,3.84 -10,4c0,-7 0,-14 0,-21c18.86,-13.14 36.61,-27.39 57,-39c-6.91,-3.22 -9.09,6.9 -17,6c-12.9,9.76 -26.25,19.08 -40,28c0,-1.33 0,-2.67 0,-4c14.58,-15.19 48.73,-25.66 61,-43c0.85,-1.2 -0.81,-3.52 -1,-4c4,0 8,0 12,0c-1.07,5.26 -5.91,6.75 -6,13c3.38,-3.62 5.23,-8.77 8,-13c28.33,0 56.67,0 85,0c-26.11,47.89 -59.76,88.24 -90,132c0.79,3.88 5.53,3.8 7,7c-8.68,6.17 -14.77,16.36 -21,26c-18.44,28.56 -37.47,60.26 -55,90c0,-56.33 0,-112.67 0,-169c3.8,-3.87 6.2,-9.13 10,-13z"/>
        <path d="m18,274.659454c-2.59,-0.62 -0.51,-9.23 1,-7c1.58,-5.6 -1.89,-11.33 5,-14c-0.18,-1.609 -4.75,1.63 -4,-3c4.58,-22.04 20.38,-36.1 28,-52c11.48,-6.11 9.26,-10.7 19,-16c-3.48,-3.87 5.46,-3.76 2,-7c5.06,-0.63 5.81,-10.83 9,-10c-0.15,-3.28 -0.25,-15.09 4,-11c-0.47,-3.71 -0.75,-4.57 -1,-10c4.1,7.12 1.48,-7.64 4,-2c2.231,-2.87 -0.16,-11.14 -0.95,-17.59c0.58,3.31 4.87,1.31 2.95,0.59c9.37,3.55 15.28,12.09 22,20c3.28,-2.82 -3.57,-2.68 -3,-8c9.81,2.13 18.47,13.76 29,16c13.1,2.78 28.65,-0.98 43,-1c28.13,-0.03 55.54,7.21 79,9c-0.76,13.43 1.37,23.97 2,36c-33.86,-3.39 -79.4,-18.26 -112,-4c-1.21,1.55 -3.2,3.9 -1,6c-26.54,29.46 -41.75,70.25 -64,104c0.26,8.59 -5.89,10.779 -6,19c12.71,4.95 28.47,6.87 44,9c8.38,-34.29 24.09,-61.25 49,-79c27.26,-8.891 58.12,-6.04 85,1c-4.52,14.23 -11.9,26.35 -10,44c1.8,16.74 13.18,33.73 19,50c6.09,17.04 12.91,33.71 23,46c2.86,3.49 7.46,5.46 11,9c4.13,4.13 7.12,10.22 11,14c17.04,16.61 36.87033,28.26485 50.00033,44.87485c-117.67,0 -241.94765,0.24997 -359.61765,0.24997c-7,-101 1.61732,-140.12482 1.61732,-178.12482c8.4,4.279 11.28,-7.05 18,-9z"/>
        <path d="m449,208.659454c-6.189,-3.81 -20.76,-3.4 -27,1c0.83,6.23 -0.48,8.69 2,15c-6.58,1.78 3.46,6.83 -4,6c0.34,6.53 -0.55,19.24 -4,27c1.18,0.16 2.84,-0.17 3,1c-1.82,3.7 -8.189,-3.55 -8,5c2.08,-2.17 3.41,-0.05 4,2c-13.59,3.279 -17.75,-5.18 -30,-7c2.77,-2.35 1.17,-6.85 2,-9c27.85,-4.77 3.68,-42.25 15,-58c-7.95,-11.38 8.57,-20.58 7,-30c5.939,-0.39 3.67,-9 8,-11c-0.48,4.08 3.07,0.53 2,-2c10.34,-0.8 21.48,-2.71 30,-8c-4.41,-18.92 -8.65,-20.02 -10,-24c2.75,-1.92 1.16,-0.33 4,-3c-8.82,-12.16 -7.16,-11.83 -7,-13c-18.85,-5.48 -18.811,-7.85 -21,-8c-14.641,-2.99 -29.891,-9.11 -49,-8c-24.04,1.4 -46.1,25.61 -53,48c-5.96,19.34 -15.24,65.28 -13,93c3.27,40.41 14.16,76.26 24,105c-31.92,-48.811 -60.7,-108.95 -59,-185c5.5,-4.4 2.28,-13.49 4,-20c1.32,3.34 0.88,8.45 3,11c0.2,-5.14 -1.62,-12.26 -2,-20c-0.68,-13.96 2.29,-38.49 7,-35c2.29,-10.28 12.26,-14.61 12,-22c8.89,-4.44 17.4,-10.39 27,-15c5.76,-2.77 15.54,-4.02 14,-10c-2.03,1.78 -0.66,4.07 -3,1c-2.32,6.59 -13.33,1.72 -18,5c10.93,-8.26 26.85,-8.88 43,-13c6,-1.53 11.92,-6.19 18,-8c12.9,-3.85 30.029,-7.69 42,-7c11.859,0.69 28.91,-1.1 38,4c3.55,2 6.23,8.19 11,13c9.37,9.44 22.061,16.66 28,27c1.9,0.43 2.51,2.15 5,2c6.26,10.62 21.1,17.27 25,27c0.83,-2.43 0.279,4.75 3,0c1.82,10.74 5.83,11.75 8.859,21.55c-0.34,-0.8 -1.1,-1.17 -1.859,-1.55c1.07,0.93 0.311,3.69 3,3c0.73,3.06 -1.73,2.94 -1,6c2.21,0.79 1.3,4.7 4,5c8.07,31.57 1.971,77.95 -5,107c-20.84,86.87 -49.54,161.72 -143,166c-7.02,-6.92 -14.8,-14.19 -23,-19c-9.68,-2.93 -11.75,-5 -10,-8c5.88,3.99 13.2,-3.529 20,2c7.2,-4.77 11.17,2.4 19,0c5.85,-7.311 11.91,-7.2 20,-13c-0.189,-5.859 6.01,-5.32 7,-10c-1.74,-4.38 -2.6,-4.88 0,-9c-5.07,3.471 -6.029,-0.42 -12,1c-0.1,-1.57 0.13,-3.471 -2,-3c1.16,-2.51 2.84,-4.49 4,-7c-1.01,3.01 2.23,1.77 4,2c1.98,-2.32 1.98,-2.68 0,-5c8.07,1.65 15.05,-5.311 18,-12c3.55,-1.55 0.6,3.4 3,3c-0.43,-9.58 3.02,-26.59 2,-38c3.189,-0.59 3.09,1.88 5,0c0.6,1.779 -2.93,4.15 0,5c3.939,-0.41 3.811,-9.25 6,-3c2.05,-6.71 2.24,-9.57 8,-13c-4.42,-17.1 9.83,-22.04 15,-38c-5.43,-4.439 -1.939,-9.45 -6.93,-13.93l-15.07,-5.07z"/>
        <path d="m593.934055,246.659454c3.54,0.21 1.98,-4.689 6,-4c12.32,3.02 25.54,10.45 36,12c-17.88,-8.45 -36.98,-15.689 -54,-25c19.779,4.891 41.08,8.26 60,14c0,11.67 0,23.33 0,35c-34.85,-8.49 -68.439,-18.221 -104,-26c1.529,-8.53 -0.62,-11.72 1,-19c20.01,2.66 35.939,9.4 55,13z"/>
        <path d="m386,289.659454c18.67,7.439 28.05,8.221 38,10c-1.141,7.529 -12,4.25 -17.5,5.25c-12.439,0.189 -19.58,-0.98 -29.5,-4.25c-13.391,-4.42 -17.641,-5.27 -29.99,-5.71c-15.5,-5.16 12.08,-6.13 20.99,-5.45c7.18,0.551 11.85,-2.29 18,0.16z"/>
        <path d="m84,124.659454c0.02,0.13 0.03,0.27 0.05,0.41c-0.02,-0.13 -0.04,-0.26 -0.05,-0.41z"/>
        <path d="m267,110.659454c-1.08,-3.96 -1.68,-17.1 3,-21c-1.81,8.31 -1.02,13.04 -3,21z"/>
        <path d="m267,120.659454c0.61,-2.39 -1.26,-7.26 1,-8c-0.37,3.96 2.34,6.11 -1,8z"/>
        <path d="m283,62.659454c-1.59,-4.05 13.23,-14.01 18,-15c-6.58,5.45 -12.03,7.81 -18,15z"/>
        <path d="m294,337.659454c-0.53,-4.35 -7.68,-4.83 -6,-14c4.64,0.99 13.8,10.17 6,14z"/>
        <path d="m357,143.659454c8.061,1.17 8.061,7.52 15,10c-0.17,-0.06 0.43,-2.63 1,-2c1.561,1.72 0.21,5.68 2,6c-6.33,1.17 -8.311,4.29 -14,4c7.891,2.3 16.529,7.4 13,18c-1.33,0 -2.67,0 -4,0c-1.21,9.95 -14.971,14.02 -23,11c1.57,-0.1 3.471,0.13 3,-2c-6.15,-3.68 -24.09,2.06 -27,-9c9.42,-1.92 22.74,0.07 26,-8c-2.48,0.15 -4.15,-0.52 -5,-2c1.8,-2.53 9.93,1.26 9,-4c-9.141,-6.04 -15.08,-13.87 -33,-13c6.8,-6.04 25.16,-10.72 37,-9z"/>
        <path d="m374,247.659454c-5.311,2.63 -8.93,-3.109 -12,-3c0.45,-11.5 12.221,-5.15 12,3z"/>
        <path d="m391,312.659454c-6.57,-0.609 -4.43,2.689 -8,6c4.24,0.29 3.5,5.58 0,6c3.25,0.75 4.38,3.62 6,6c-4.891,-0.55 -6.25,2.42 -7,6c-2.18,0.641 -3.18,-2.83 -3,1c-3.029,-1.37 -4.46,-2.471 -8,-1c1.49,-5.73 -0.75,-3.77 -2,-8c1.939,-4.061 6.46,-5.54 6,-12c-3.17,-0.83 -5.08,-2.92 -7,-5c0.779,-0.221 1.16,-0.84 1,-2c3.859,4.27 15.77,-1.95 22,3z"/>
        <path d="m457,417.659454c0,-1.33 0,-2.67 0,-4c20.529,-8.47 23.13,-34.87 35,-52c14.98,4.35 28.391,11.46 41,19c7.18,4.3 17.939,6.85 21,16c-5.15,1.11 -8.35,-4.93 -12,-2c27.04,19.63 56.37502,37.82983 73.87502,66.99983c-55.67,0 -111.20502,-0.12498 -166.87502,-0.12498c1.26,-4.57 0.42,-6.26485 1,-11.87485c-7.23,-2.55 -9.1,-7.53 -15,-15c8.311,-1.46 13.24,-12.87 22,-17z"/>
        <path d="m531,107.659454c-0.05,-0.15 -0.09,-0.3 -0.141,-0.45c0.061,0.13 0.112,0.28 0.141,0.45z"/>
        <path d="m553,215.659454c-2.96,1.92 -12.279,1.64 -14,-1c2.66,-7.68 2.54,-18.12 6,-25c4.561,7.26 6.1,21.9 8,26z"/>
      </svg>
    </div>

    <header class="container container--title">
      <h1 class="title">
        <span class="title__item title__item--name" itemprop="name">Michael Großklaus</span><br>
        <em class="title__item title__item--occupation">freelance frontend-developer</em>
      </h1>
    </header>

    <div class="content">
      <div class="container">
        <div class="section">
          <div class="section__inner section__inner--introduction">
            <picture class="me">
              <source srcset="images/me.webp" type="image/webp">
              <img itemprop="image" src="images/me.jpg" alt="Photo of Michael Großklaus" title="Michael Großklaus" width="300" height="300">
            </picture>

            <p>Hi. I'm a <strong itemprop="jobTitle">freelance frontend-developer</strong> from <a href="https://www.google.de/maps/place/Hamburg/@53.5582447,9.647645" target="_blank" rel="noopener">Hamburg</a>, Germany, and developer of the <a href="https://www.kickerfinder.de" target="_blank" rel="noopener" title="The kickerfinder helps you to find bars with foosball tables near you.">kickerfinder</a>.</p>

            <ul class="keywords">
              <li class="keyword">html</li>
              <li class="keyword">css</li>
              <li class="keyword">javascript</li>
              <li class="keyword">responsive</li>
              <li class="keyword">mobile</li>
              <li class="keyword">performance</li>
              <li class="keyword">usability</li>
            </ul>

            <ul class="keywords">
              <li class="keyword">
                <a rel="noopener" href="https://github.com/mgrsskls" target="_blank" title="view my github profile">github.com/mgrsskls</a>
              </li>
              <li class="keyword">
                <a rel="noopener" href="https://codepen.io/mgrsskls/" target="_blank" title="view my codepen profile">codepen.io/mgrsskls</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="section">
          <blockquote class="testimonial">“Working with Michael Großklaus was an all around pleasurable experience: Fast turnaround, attention to detail and being open to suggestions and changes translated into an efficient completion of the website for my client. I’m hoping to send another project his way soon.” <small class="testimonial__author">Michael Koritschan &ndash; <a href="http://www.studio-koritschan.com/" rel="noopener" target="_blank">Studio Koritschan</a></small></blockquote>
        </div>

        <div class="section">
          <div class="section__inner">
            <h2>Recent work</h2>
            <ul>
              <li class="list-item">
                <span class="list-item__title list-item--project__title">XING AG</span>
                <a rel="noopener" class="list-item__link" href="https://www.xing.com/news" target="_blank">xing.com/news</a>
              </li>
              <li class="list-item">
                <span class="list-item__title list-item--project__title">Louis</span>
                <a rel="noopener" class="list-item__link" href="https://www.louis.de" target="_blank">louis.de</a> / <a rel="noopener" class="list-item__link" href="https://m.louis.de" target="_blank">m.louis.de</a>
              </li>
              <li class="list-item">
                <span class="list-item__title list-item--project__title">DEAR Photography</span>
                <a rel="noopener" class="list-item__link" href="http://www.dearphotography.com" target="_blank">dearphotography.com</a>
              </li>
              <li class="list-item">
                <span class="list-item__title list-item--project__title">Aparthotel Am Meer Cuxhaven</span>
                <a rel="noopener" class="list-item__link" href="http://www.aparthotel-am-meer.de" target="_blank">aparthotel-am-meer.de</a>
              </li>
              <li class="list-item">
                <span class="list-item__title list-item--project__title">Erfahrungen.com</span>
                <a rel="noopener" class="list-item__link" href="http://www.erfahrungen.com" target="_blank">erfahrungen.com</a>
              </li>
            </ul>

            <h3>Various projects for...</h3>
            <ul>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="https://www.factorial.io/" target="_blank">Factorial</a>
              </li>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="https://lifetime.eu/" target="_blank">LifeTime / connected-health.eu GmbH</a>
              </li>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="http://nerdindustries.com/" target="_blank">Nerd Industries</a>
              </li>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="http://www.njiuko.com" target="_blank">Njiuko</a>
              </li>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="http://www.fork.de" target="_blank">Fork Unstable Media</a>
              </li>
              <li class="list-item">
                <a rel="noopener" class="list-item__link" href="https://planungsbuero.de" target="_blank">pbi planungsbüro INTERNET</a>
              </li>
            </ul>
          </div>
          <div class="section__inner">
            <h2>Own projects</h2>
            <ul>
              <li class="list-item">
                <span class="list-item__title list-item--project__title"><a rel="noopener" class="list-item__link" href="https://www.kickerfinder.de" target="_blank">kickerfinder.de</a></span>
              </li>
            </ul>

            <h2>Experience</h2>
            <ul>
              <li class="list-item">
                <span class="list-item__title">freelance frontend developer</span>
                <small class="list-item__sub-info">since 12/2011</small>
              </li>
              <li class="list-item">
                <span class="list-item__title">graduated engineer for information technology and design<br>
                (fh lübeck, university of applied sciences)</span>
                <small class="list-item__sub-info">since 12/2011</small>
              </li>
              <li class="list-item">
                <span class="list-item__title">web-developer / designer at <a rel="noopener" target="_blank" href="http://www.evenmedia.de">evenmedia.de</a></span>
                <small class="list-item__sub-info">from 2008 - 2011</small>
              </li>
              <li class="list-item">
                <span class="list-item__title">web-developer / designer at <a rel="noopener" target="_blank" href="http://www.brandorange.de">brandorange.de</a></span>
                <small class="list-item__sub-info">from 2007 - 2008</small>
              </li>
            </ul>

            <h2>Contact</h2>
            <ul class="keywords">
              <li class="keyword">
                <a rel="noopener" target="_blank" href="https://www.xing.com/profile/Michael_Grossklaus" title="view my xing profile">xing</a>
              </li>
              <li class="keyword">
                <a rel="noopener" target="_blank" href="https://www.twitter.com/mgrossklaus" title="view my twitter profile">twitter</a>
              </li>
              <li class="keyword">
                <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#x69;&#108;&#x40;&#x6D;&#x67;&#x72;&#111;&#x73;&#x73;&#107;&#x6C;&#97;&#117;&#115;&#46;&#100;&#x65;"><span itemprop="email">&#109;&#97;&#x69;&#108;&#x40;&#x6D;&#x67;&#x72;&#111;&#x73;&#x73;&#107;&#x6C;&#97;&#117;&#115;&#46;&#100;&#x65;</span></a>
              </li>
            </ul>
          </div>
        </div>

        <aside class="section cta">
          <p>You want to hire me?</p>
          <a class="button" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#x69;&#108;&#x40;&#x6D;&#x67;&#x72;&#111;&#x73;&#x73;&#107;&#x6C;&#97;&#117;&#115;&#46;&#100;&#x65;">Send me an E-Mail</a>
        </aside>

        <footer class="section legal">
          <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            Michael Großklaus / <span itemprop="streetAddress">Christian-Förster-Straße 11</span> / <span itemprop="postalCode">20253</span> <span itemprop="addressLocality">Hamburg</span>, <span itemprop="addressCountry">Germany</span>
          </address>
          <p>USt.-Id.-Nr.: DE279812974 / Finanzamt Hamburg-Hansa</p>
        </footer>
      </div>
    </div>

    <script>
      var latestKnownScrollY = 0,
          ticking = false,
          bg      = document.getElementById('bg'),
          windowH = window.outerHeight;

      function onScroll() {
        latestKnownScrollY = window.scrollY;
        requestTick();
      }

      function requestTick() {
        if(!ticking) {
          requestAnimationFrame(update);
        }
        ticking = true;
      }

      function update() {
        ticking = false;
        var currentScrollY = latestKnownScrollY;

        if (currentScrollY < windowH) {
          bg.style.transform = 'translateY(' + parseInt(currentScrollY / 2, 10) + 'px)';
        }
      }

      window.addEventListener('scroll', onScroll, false);

      <?php if ($online) { ?>
        if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register('/sw.js');
        }
      <?php } ?>
    </script>
  </body>
</html>

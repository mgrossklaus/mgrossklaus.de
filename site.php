<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Michael Großklaus - Freelancing frontend-developer Hamburg</title>
    <meta name="description" content="I'm a freelancing frontend-developer based in Hamburg, Germany. You can hire me for HTML, CSS and JavaScript jobs.">
    <meta name="viewport" content="initial-scale=1">
    <link rel="canonical" href="https://www.mgrossklaus.de/">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <style>
      /* http://meyerweb.com/eric/tools/css/reset/
         v2.0 | 20110126
         License: none (public domain)
      */

      html, body, div, span, applet, object, iframe,
      h1, h2, h3, h4, h5, h6, p, blockquote, pre,
      a, abbr, acronym, address, big, cite, code,
      del, dfn, em, img, ins, kbd, q, s, samp,
      small, strike, strong, sub, sup, tt, var,
      b, u, i, center,
      dl, dt, dd, ol, ul, li,
      fieldset, form, label, legend,
      table, caption, tbody, tfoot, thead, tr, th, td,
      article, aside, canvas, details, embed,
      figure, figcaption, footer, header, hgroup,
      menu, nav, output, ruby, section, summary,
      time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
      }
      ol, ul {
        list-style: none;
      }

      /* https://fonts.googleapis.com/css?family=Roboto+Slab&text=QWERTZUIOPASDFGHJKLYXCVBNMqwertzuiopasdfghjklyxcvbnm%C3%9F1234567890,.-/&() */
      @font-face {
        font-family: 'Roboto Slab';
        font-style: normal;
        font-weight: 400;
        src:  local('Roboto Slab Regular'),
              local('RobotoSlab-Regular'),
              url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff2'),
              url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37ZrrIa-7acMAeDBVuclsi6Gc.woff) format('woff');
      }

      html {
        font-size: 10px;
        background-size: cover;
        padding: 100vh 0 0;
      }

      body {
        background: #e5e5e5;
        font: 1.8rem/1.75 'Roboto Slab', Helvetica, Arial, sans-serif;
        color: #666;
      }

      ::selection {
        background: #85134e;
        color: #fff;
        text-shadow: none;
      }

      .bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: -8rem;
        z-index: -1;
        overflow: hidden;
        background-color: #042128;
      }
      .bg__image {
        width: auto;
        min-width: 100%;
        height: auto;
        min-height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
      }
      .title {
        position: absolute;
        bottom: 6vw;
        left: 7.5vw;
        right: 7.5vw;
        z-index: 1;
        font-size: 3.5vw;
      }
      .title__item {
        background: #fff;
        padding: 0 .25em;
      }
      .title__item--name {
        color: #85134e;
      }
      .title__item--occupation {
        color: #042229;
      }
      .introduction {
        padding: 0 0 10rem;
        margin: 0 0 4rem;
        border-bottom: 1px dashed #ccc;
      }
      .content {
        padding: 7.5vw;
      }
      .content--main {
        background: #f5f5f5;
        margin: 8rem 0 0;
        padding-top: 8vw;
        padding-bottom: 6vw;
        position: relative;
      }
      .content--main::before,
      .content--main::after {
        content: '';
        display: block;
        background: inherit;
        position: absolute;
        left: 0;
        right: 0;
        height: 8rem;
      }
      .content--main::before {
        bottom: 100%;
        background: linear-gradient(to bottom right, transparent 50%, #f5f5f5 51%);
      }
      .content--main::after {
        top: 100%;
        background: linear-gradient(to top right, transparent 50%, #f5f5f5 51%);
      }
      .content--sub {
        background: #e5e5e5;
      }
      .content--sub a {
        text-shadow: -0.15em 0 #e5e5e5, 0.15em 0 #e5e5e5;
      }

      a {
        color: #85134e;
        text-decoration: none;
        background: linear-gradient(#85134e, #85134e) no-repeat;
        background-size: 100% 1px;
        background-position: 0 1.25em;
        text-shadow: -0.15em 0 #f5f5f5, 0.15em 0 #f5f5f5;
        transition: all .2s ease;
        position: relative;
        padding: .05em .2em 0;
        margin: 0 -.1em;
      }
      a:hover,
      a:active {
        color: #fff;
        background-size: 100%;
        background-position: 0 .15em;
        text-shadow: none;
      }
      a:focus {
        background: #042229;
        color: #fff;
        text-shadow: none;
        outline: none;
      }
      h2 {
        color: #042229;
        font-size: 2.4rem;
        padding: 2.5rem 0 0;
      }
      h2:first-of-type {
        padding-top: 5rem;
      }

      h2,
      h3,
      p:not(:last-child),
      ul:not(:last-child),
      address:not(:last-child) {
        margin: 0 0 1.5rem;
      }

      .list-item {
        color: #aaa;
        margin: 0 0 1em 2rem;
        list-style: square;
      }
      .list-item__title {
        display: inline-block;
        color: #666;
        margin-bottom: 0;
      }
      .list-item--experience__title {
        display: block;
      }
      .list-item__link,
      .list-item__sub-info {
        margin: 0 0 0 .5em;
      }
      .list-item--experience__sub-info {
        margin-left: 0;
      }

      .keywords::after {
        content: '';
        display: block;
        clear: both;
      }
      .keyword {
        color: #999;
        float: left;
        list-style: none;
      }
      .keyword:not(:last-child)::after {
        content: '/';
        display: inline;
        padding: 0 .5rem;
        color: #ccc;
      }

      .legal {
        display: block;
        margin: 5rem 0 0;
        font-size: 1.5rem;
        color: #999;
      }

      .offline {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        color: #fff;
        background: #85134e;
        text-align: center;
        padding: .5rem;
      }

      @media screen and (max-width: 1280px) {
        .title {
          font-size: 4.5rem;
        }
        .list-item__sub-info {
          display: block;
          margin-left: 0;
        }
      }
      @media screen and (max-width: 780px) {
        .title {
          font-size: 6vw;
        }
        .introduction {
          padding-top: 2.5rem;
          padding-bottom: 5rem;
          margin-bottom: 0;
          border-bottom: 1px dashed #ccc;
        }
        .content--main {
          margin-top: 0;
        }
        .content--main::before,
        .content--main::after {
          height: 4rem;
        }
        .content--sub {
          padding-top: 10vw;
        }
      }
      @media screen and (max-width: 640px) {
        .list-item__title {
          display: block;
        }
        .list-item__link {
          margin-left: 0;
        }
        .content--sub {
          padding-top: 20vw;
        }
      }
      @media screen and (max-width: 480px) {
        .title {
          bottom: 12.5vw;
        }
        .title__item--name {
          font-size: 8vw;
        }
        .title__item--occupation {
          font-size: 5vw;
        }
      }
    </style>
  </head>
  <body itemscope itemtype="http://schema.org/Person">

    <?php if (!$online) { ?>
      <p class="offline">It looks like you're offline, so what you see might not be up to date.</p>
    <?php } ?>

    <picture class="bg" id="bg">
      <source srcset="/images/mg-1400.webp" media="(min-width: 641px)" type="image/webp">
      <source srcset="/images/mg-640.webp" media="(max-width: 640px)" type="image/webp">
      <source srcset="/images/mg-1400.jpg" media="(min-width: 641px)">
      <source srcset="/images/mg-640.jpg" media="(max-width: 640px)">
      <img itemprop="image" class="bg__image" src="/images/mg-1400.jpg" alt="Michael Großklaus" width="1400" height="937">
    </picture>

    <h1 class="title">
      <span class="title__item title__item--name" itemprop="name">Michael Großklaus</span><br>
      <em class="title__item title__item--occupation">freelancing frontend-developer</em>
    </h1>

    <div class="content content--main">
      <div class="introduction">
        <p>Hi. I'm a <span itemprop="jobTitle">freelancing frontend-developer</span> from Hamburg, Germany.</p>

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

      <h2>Recent projects</h2>
      <ul>
        <li class="list-item">
          <h3 class="list-item__title">XING News</h3>
          <a rel="noopener" class="list-item__link" href="https://www.xing.com/news" target="_blank">xing.com/news</a>
          <small class="list-item__sub-info">HTML / CSS / JS</small>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Louis Mobile</h3>
          <a rel="noopener" class="list-item__link" href="https://m.louis.de" target="_blank">m.louis.de</a>
          <small class="list-item__sub-info">HTML / CSS / JS / frontend architecture &amp; development</small>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Louis</h3>
          <a rel="noopener" class="list-item__link" href="https://www.louis.de" target="_blank">louis.de</a>
          <small class="list-item__sub-info">HTML / CSS / JS / complete frontend architecture &amp; development</small>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">DEAR Photography</h3>
          <a rel="noopener" class="list-item__link" href="http://www.dearphotography.com" target="_blank">dearphotography.com</a>
          <small class="list-item__sub-info">HTML / CSS / JS</small>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Erfahrungen.com</h3>
          <a rel="noopener" class="list-item__link" href="http://www.erfahrungen.com" target="_blank">erfahrungen.com</a>
          <small class="list-item__sub-info">HTML / CSS / JS</small>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Aparthotel Am Meer Cuxhaven, Duhnen</h3>
          <a rel="noopener" class="list-item__link" href="http://www.aparthotel-am-meer.de" target="_blank">aparthotel-am-meer.de</a>
          <small class="list-item__sub-info">HTML / CSS / JS / CMS</small>
        </li>
      </ul>

      <h2>Recent clients</h2>
      <p>I mainly work on large projects, but due to contract conditions I'm not allowed to list all major projects.<br>
      So here is a partial list of further clients.</p>
      <ul>
        <li class="list-item">
          <h3 class="list-item__title">XING AG</h3>
          <a rel="noopener" class="list-item__link" href="http://www.xing.com" target="_blank">xing.com</a>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Njiuko</h3>
          <a rel="noopener" class="list-item__link" href="http://www.njiuko.com" target="_blank">njiuko.com</a>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Louis Fun Company</h3>
          <a rel="noopener" class="list-item__link" href="https://www.louis.de" target="_blank">louis.de</a>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Fork Unstable Media</h3>
          <a rel="noopener" class="list-item__link" href="http://www.fork.de" target="_blank">fork.de</a>
        </li>
        <li class="list-item">
          <h3 class="list-item__title">Planungsbüro für Internet &amp; Marketing</h3>
          <a rel="noopener" class="list-item__link" href="http://www.planungsbuero.eu" target="_blank">planungsbuero.eu</a>
        </li>
      </ul>

      <h2>Experience</h2>
      <ul>
        <li class="list-item list-item--experience">
          <h3 class="list-item__title list-item--experience__title">freelancing frontend developer</h3>
          <small class="list-item__sub-info list-item--experience__sub-info">since 12/2011</small>
        </li>
        <li class="list-item list-item--experience">
          <h3 class="list-item__title list-item--experience__title">graduated engineer for information technology and design<br>
          (fh lübeck, university of applied sciences)</h3>
          <small class="list-item__sub-info list-item--experience__sub-info">since 12/2011</small>
        </li>
        <li class="list-item list-item--experience">
          <h3 class="list-item__title list-item--experience__title">web-developer / designer at <a rel="noopener" target="_blank" href="http://www.evenmedia.de">evenmedia.de</a></h3>
          <small class="list-item__sub-info list-item--experience__sub-info">from 2008 - 2011</small>
        </li>
        <li class="list-item list-item--experience">
          <h3 class="list-item__title list-item--experience__title">web-developer / designer at <a rel="noopener" target="_blank" href="http://www.brandorange.de">brandorange.de</a></h3>
          <small class="list-item__sub-info list-item--experience__sub-info">from 2007 - 2008</small>
        </li>
      </ul>
    </div>

    <div class="content content--sub contact">
      <ul class="keywords">
        <li class="keyword">
          <a rel="noopener" target="_blank" href="https://www.xing.com/profile/Michael_Grossklaus" title="view my xing profile">xing</a>
        </li>
        <li class="keyword">
          <a rel="noopener" target="_blank" href="https://www.twitter.com/mgrossklaus" title="view my twitter profile">twitter</a>
        </li>
      </ul>
      <p><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#x69;&#108;&#x40;&#x6D;&#x67;&#x72;&#111;&#x73;&#x73;&#107;&#x6C;&#97;&#117;&#115;&#46;&#100;&#x65;"><span itemprop="email">&#109;&#97;&#x69;&#108;&#x40;&#x6D;&#x67;&#x72;&#111;&#x73;&#x73;&#107;&#x6C;&#97;&#117;&#115;&#46;&#100;&#x65;</span></a> (GPG Fingerprint: D280 DBED E8CB F799 0D04 E32B 0CCC 38E4 E0DA 8EE3)</p>

      <div class="legal">
        <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          Michael Großklaus / <span itemprop="streetAddress">Scheideweg 6</span> / <span itemprop="postalCode">20253</span> <span itemprop="addressLocality">Hamburg</span>, <span itemprop="addressCountry">Germany</span>
        </address>
        <p>USt.-Id.-Nr.: DE279812974 / Finanzamt Hamburg-Hansa</p>
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
          bg.style.transform = 'translateY('+ parseInt(currentScrollY / 2, 10) +'px)';
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
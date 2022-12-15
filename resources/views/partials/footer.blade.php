<footer class="footer-section">
    <div class="container">
        <div class="footer-container flex-between">
            <div class="links-lists">
                {{-- <ul>
                    <li>DC COMICS</li>
                    <li v-for="links in footerLinks.linksDCComics">
                        <a :href="links.href">{{ links . link }}</a>
                    </li>
                </ul>

                <ul>
                    <li>SHOP</li>
                    <li v-for="links in footerLinks.linksShop">
                        <a :href="links.href">{{ links . link }}</a>
                    </li>
                </ul>

                <ul>
                    <li>DC</li>
                    <li v-for="links in footerLinks.linksDC">
                        <a :href="links.href">{{ links . link }}</a>
                    </li>
                </ul>

                <ul>
                    <li>SITES</li>
                    <li v-for="links in footerLinks.linksSites">
                        <a :href="links.href">{{ links . link }}</a>
                    </li>
                </ul> --}}
            </div>

            <div class="logo-dc-bg">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC">
            </div>
        </div>
    </div>

    <section class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-container d-flex flex-between">
                {{-- <div class="footer-bottom-container flex-between flex-v-center"> --}}
                <button class="btn">SIGN-UP NOW!</button>

                <div class="social flex-v-center">
                    <span class="follow-us">FOLLOW US</span>
                    <a href="">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook">
                    </a>

                    <a href="">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter">
                    </a>

                    <a href="">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube">
                    </a>

                    <a href="">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest">
                    </a>

                    <a href="">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope">
                    </a>
                </div>
            </div>
        </div>
    </section>
</footer>

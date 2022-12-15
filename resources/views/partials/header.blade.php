<header class="header-section">
    <div class="container">
        <div class="header-container flex-between flex-v-center">
            <div class="logo-img">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
            </div>
            {{-- 
            <nav>
                <ul class="flex-v-center">
                    <li v-for="(link, index) in navLinks" :class="{ 'active': link.active }" @click="changeActive(index)">
                        <!-- <a href="link.href">{{ link . label }}</a> -->
                        <a>{{ link . label }}</a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </div>
</header>

<div class="header-navs">
    <div class="profile">
        <div class="background-img"></div>

        <div class="image">
            <img src="{{ asset("storage/profile.jpg") }}" alt="profile"
            srcset="">
        </div>
    </div>
    <div class="me">
        <div class="name">
            <div>AYOUB</div>
            <div>AIT BABA HAMOU</div>
        </div>
        <div class="profession">Devloppeur web</div>
    </div>
</div>

<div class="navs">
    <ul>
        <li onclick="handleNavClick()" >
            <a class="active-nav" href="/">
                 <div class="icon"><i class="fa-solid fa-house-chimney"></i></div>Home
            </a>
        </li>
        <li onclick="handleNavClick()">
            <a href="/blogs">
                <div class="icon"><i class="fa-solid fa-newspaper"></i></div>Blogs
            </a>
        </li>
        <li onclick="handleNavClick()">
            <a href="/about-me">
                <div class="icon"><i class="fa-solid fa-address-card"></i></div>About Me
            </a>
        </li>
        <li onclick="handleNavClick()">
            <a href="/cv">
                <div class="icon"><i class="fa-solid fa-medal"></i></div>C.V
            </a>
        </li>
        <li onclick="handleNavClick()">
            <a href="/realisations">
                <div class="icon"><i class="fa-solid fa-suitcase"></i></div>Ralisations
            </a>
        </li>
        <li onclick="handleNavClick()">
            <a href="contact">
                <div class="icon"><i class="fa-solid fa-paper-plane"></i></div>Contact Me
            </a>
        </li>
    </ul>
</div>

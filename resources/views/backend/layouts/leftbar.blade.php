<section class="sidebar">


    <ul class="sidebar-menu" id="list_pages">
        <li class="{{ Request::is('homepage')? 'active' : '' }}">
            <a href="{{ route('homepage') }}">
                <i class="fa fa-home"></i> <span>Home page</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/homepage')? 'active' : '' }}">
            <a href="{{ route('homepage') }}">
                <i class="fa fa-bar-chart"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/users*')? 'active' : '' }}">
            <a href="{{ route('users.index') }}">
                <i class="fa fa-user"></i> <span>User</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/about-us*')? 'active' : '' }}">
            <a href="{{ route('about-us') }}">
                <i class="fa fa-file-text-o"></i> <span>About Us</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/information*')? 'active' : '' }}">
            <a href="{{ route('information') }}">
                <i class="fa fa-info-circle"></i> <span>Information</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/home-image*')? 'active' : '' }}">
            <a href="{{ route('home-image.index') }}">
                <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Image slider</span>
            </a>
        </li>
        <li class="{{ Request::is(['admin/service', 'admin/service/*'])? 'active' : '' }}">
            <a href="{{ route('service.index') }}">
                <i class="fa fa-star" aria-hidden="true"></i> <span>Service</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/service-detail*')? 'active' : '' }}">
            <a href="{{ route('service-detail.index') }}">
                <i class="fa fa-list-ul" aria-hidden="true"></i> <span>Service detail</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/gallery*')? 'active' : '' }}">
            <a href="{{ route('gallery.index') }}">
                <i class="fa fa-camera" aria-hidden="true"></i> <span>Gallery</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/polishbrand*')? 'active' : '' }}">
            <a href="{{ route('polishbrand.index') }}">
                <i class="fa fa-certificate" aria-hidden="true"></i> <span>Polish brand</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/gift-card*')? 'active' : '' }}">
            <a href="{{ route('gift-card.index') }}">
                <i class="fa fa-gift" aria-hidden="true"></i> <span>Gift card</span>
            </a>
        </li>
        <li class="{{ Request::is('admin/adcontact*')? 'active' : '' }}">
            <a href="{{ route('adcontact.index') }}">
                <i class="fa fa-envelope"></i> <span>Contact</span>
            </a>
        </li>

    </ul>
</section>
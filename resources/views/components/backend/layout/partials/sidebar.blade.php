<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    User
                </a>
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas  fa-book"></i></div>
                    Book Category
                </a>
                <a class="nav-link" href="{{ route('earnorders.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas  fa-book"></i></div>
                    Earnpoint Order
                </a>
                <a class="nav-link" href="{{ route('carousels.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Carousel
                </a>
                <a class="nav-link" href="{{ route('banners.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Banner
                </a>
                <a class="nav-link" href="{{ route('products.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Products
                </a>
                <a class="nav-link" href="{{ route('getdonates.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Requested Donate Book
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                   All Books
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @can('sellbook')
                        <a class="nav-link" href="{{ route('sellbooks.index') }}">Sell Book</a>
                        @endcan
                        <a class="nav-link" href="{{ route('donatebooks.index') }}">Donate Book</a>
                        <a class="nav-link" href="{{ route('requestbooks.index') }}">Request Book</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ route('events.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas  fa-book"></i></div>
                    Events
                </a>
                <a class="nav-link" href="{{ route('tags.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas  fa-book"></i></div>
                    Tags
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Message Box
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('contacts.index')}}">Contacts</a>

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            About Us
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('abouts.index')}}">Abouts</a>

                            </nav>
                        </div>




                        <a class="nav-link" href="{{route('faqs.index')}}">
                            FAQ
                        </a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="{{ route('admin.productlist') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    ProductList
                </a>

            </div>
        </div>

    </nav>
</div>

@if($menu)
    <div class="menu classic">
        <ul class="sub-menu">
            @include(env('THEME') . '.customMenuItems', ['items' => $menu->roots()])
        </ul>
    </div>
@endif
<div class="menu classic">
    <ul id="nav" class="menu">
        <li>
            <a href="{{ asset(env('THEME')) }}/index.html">HOME</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/home-ii.html">Home II</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-iii.html">Home III</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-iv.html">Home IV</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-v.html">Home V</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-vi.html">Home VI</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-vii.html">Home VII</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-viii.html">Home VIII</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-ix.html">Home IX</a></li>
                <li><a href="{{ asset(env('THEME')) }}/home-x.html">Home X</a></li>
                <li><a href="{{ asset(env('THEME')) }}/landing-page.html">Landing page</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">SLIDERS</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/slider-layerslider.html">LayerSlider</a></li>
                <li><a href="{{ asset(env('THEME')) }}/slider-flexslider.html">FlexSlider</a></li>
                <li><a href="{{ asset(env('THEME')) }}/slider-elastic-slider.html">Elastic</a></li>
                <li><a href="{{ asset(env('THEME')) }}/slider-thumbnails.html">Thumbnails</a></li>
                <li><a href="{{ asset(env('THEME')) }}/slider-cycle.html">Cycle</a></li>
                <li><a href="{{ asset(env('THEME')) }}/slider-static-header.html">Static header</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">CORPORATE</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/corporate-about.html">About</a></li>
                <li><a href="{{ asset(env('THEME')) }}/landing-page.html">Landing page</a></li>
                <li><a href="{{ asset(env('THEME')) }}/corporate-videogallery.html">Videogallery</a></li>
                <li><a href="{{ asset(env('THEME')) }}/corporate-testimonials.html">Testimonials</a></li>
                <li><a href="{{ asset(env('THEME')) }}/contact.html">Contact</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">PORTFOLIO</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/portfolio-filterable.html">Filterable</a></li>
                <li><a href="{{ asset(env('THEME')) }}/portfolio-three-columns.html">Three columns</a></li>
                <li><a href="{{ asset(env('THEME')) }}/project.html">Full description</a></li>
                <li><a href="{{ asset(env('THEME')) }}/portfolio-big-image.html">Big Image</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">BLOG</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/blog-big-image.html">Big image</a></li>
                <li><a href="{{ asset(env('THEME')) }}/blog-small-image.html">Small image</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">FEATURES</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/features-right-sidebar.html">Right sidebar</a></li>
                <li><a href="{{ asset(env('THEME')) }}/features-left-sidebar.html">Left sidebar</a></li>
                <li><a href="{{ asset(env('THEME')) }}/features-full-width.html">Full width</a></li>
                <li><a href="{{ asset(env('THEME')) }}/error-404.html">404 error</a></li>
            </ul>
        </li>

        <li>
            <a href="{{ asset(env('THEME')) }}/#">SHORTCODES</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-typography.html">Typography</a></li>
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-icon-section.html">Icon section</a></li>
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-alert-box-buttons.html">Alert box &#038; Buttons</a></li>
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-tables-box-prices.html">Tables &#038; Box prices</a></li>
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-media-widgets.html">Media &#038; Widgets</a></li>
                <li><a href="{{ asset(env('THEME')) }}/shortcodes-mix-various.html">Mix &#038; Various</a></li>
            </ul>
        </li>

        <li class="remove-under-1024">
            <a href="{{ asset(env('THEME')) }}/http://themeforest.net/item/pink-rio-responsive-multipurpose-theme/3091259">PURCHASE PINK RIO</a>
            <ul class="sub-menu">
                <li><a href="{{ asset(env('THEME')) }}/http://www.yourinspirationweb.com/tf/support/forum/viewforum.php?f=27">Support forum</a></li>
            </ul>
        </li>

    </ul>
</div>
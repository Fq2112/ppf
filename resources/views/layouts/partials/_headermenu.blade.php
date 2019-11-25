<ul id="m_nav_list" class="m_nav menu__list">
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('/*') ? 'active' : ''}}" id="m_nav_item_1">
        <a href="{{route('home')}}" class="link link--kumya">
            <i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
    <li class="dropdown menu__item menu__item--current m_nav_item {{Illuminate\Support\Facades\Request::is('product-overview*') ? 'active' : ''}}" id="moble_nav_item_2">
        <a href="#" class="dropdown-toggle menu__link link link--kumya" data-toggle="dropdown">
            <i class="fa fa-car" aria-hidden="true"></i><span data-letters="Products">Products<b class="caret"></b></span></a>
        <ul class="dropdown-menu agile_short_dropdown">
            <li><a class="link link--kumya--custom" href="{{route('show.product-overview')}}">
                    <span data-letters="PPF (SPF-XI)">PPF (SPF-XI)</span></a></li>
            <li><a class="link link--kumya--custom" href="http://supremewrap.co.id" target="_blank">
                    <span data-letters="Supreme Wrap Film">Supreme Wrap Film</span></a></li>
        </ul>
    </li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('gallery*') ? 'active' : ''}}" id="moble_nav_item_3">
        <a href="{{route('show.gallery')}}" class="link link--kumya">
            <i class="fa fa-photo-video" aria-hidden="true"></i><span data-letters="Gallery">Gallery</span></a></li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('installers*') ? 'active' : ''}}" id="moble_nav_item_4">
        <a href="{{route('show.installers')}}" class="link link--kumya">
            <i class="fa fa-tools" aria-hidden="true"></i><span data-letters="Installers">Installers</span></a></li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('blog*') ? 'active' : ''}}" id="moble_nav_item_5">
        <a href="{{route('show.blog')}}" class="link link--kumya">
            <i class="fa fa-blog" aria-hidden="true"></i><span data-letters="Blog">blog</span></a></li>
</ul>

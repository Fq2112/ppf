<ul id="m_nav_list" class="m_nav menu__list">
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('/*') ? 'active' : ''}}" id="m_nav_item_1">
        <a href="{{route('home')}}" class="link link--kumya">
            <i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('product-overview*') ? 'active' : ''}}" id="moble_nav_item_2">
        <a href="{{route('show.product-overview')}}" class="link link--kumya">
            <i class="fa fa-car" aria-hidden="true"></i><span data-letters="Product">Product</span></a></li>
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

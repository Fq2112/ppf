<ul id="m_nav_list" class="m_nav menu__list">
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('ppf*') ? 'active' : ''}}" id="m_nav_item_1">
        <a href="{{route('home')}}" class="link link--kumya">
            <i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
    <li class="dropdown menu__item menu__item--current m_nav_item {{Illuminate\Support\Facades\Request::is('ppf/product/overview*') ? 'active' : ''}}" id="moble_nav_item_2">
        <a href="#" class="dropdown-toggle menu__link link link--kumya" data-toggle="dropdown">
            <i class="fa fa-car" aria-hidden="true"></i><span data-letters="Products">Products<b class="caret"></b></span></a>
        <ul class="dropdown-menu agile_short_dropdown">
            <li><a class="link link--kumya--custom {{Illuminate\Support\Facades\Request::is('ppf/product/overview/supreme-ppf-x5*') ? '' : 'off'}}" href="{{route('show.product.spf-x5')}}">
                    <span data-letters="SUPREME PPF X5">SUPREME&trade; PPF X5</span></a></li>
            <li><a class="link link--kumya--custom {{Illuminate\Support\Facades\Request::is('ppf/product/overview/supreme-ppf-x3*') ? '' : 'off'}}" href="{{route('show.product.spf-x3')}}">
                    <span data-letters="SUPREME PPF X3">SUPREME&trade; PPF X3</span></a></li>
            <li><a class="link link--kumya--custom {{Illuminate\Support\Facades\Request::is('ppf/product/overview/supreme-ppf-matte*') ? '' : 'off'}}" href="{{route('show.product.spf-matte')}}">
                    <span data-letters="SUPREME PPF MATTE">SUPREME&trade; PPF MATTE</span></a></li>
            <li><a class="link link--kumya--custom {{Illuminate\Support\Facades\Request::is('ppf/product/overview/supreme-ppf-neo-black*') ? '' : 'off'}}" href="{{route('show.product.spf-neo-black')}}">
                    <span data-letters="SUPREME PPF NEO BLACK">SUPREME&trade; PPF NEO BLACK</span></a></li>
            <li><a class="link link--kumya--custom off" href="http://supremewrap.co.id" target="_blank">
                    <span data-letters="Supreme Wrap Film">Supreme Wrap Film</span></a></li>
        </ul>
    </li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('ppf/warranty*') ? 'active' : ''}}" id="moble_nav_item_3">
        {{--<a href="https://graphicsap.averydennison.com/en/home/contact/register-supreme-ppf-warranty.html"
           target="_blank" class="link link--kumya">--}}
            <a href="{{route('show.warranty')}}" class="link link--kumya">
                <i class="fa fa-shield-alt" aria-hidden="true"></i><span data-letters="Warranty">Warranty</span></a></li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('ppf/gallery*') ? 'active' : ''}}" id="moble_nav_item_4">
        <a href="{{route('show.gallery')}}" class="link link--kumya">
            <i class="fa fa-photo-video" aria-hidden="true"></i><span data-letters="Gallery">Gallery</span></a></li>
    <li class="m_nav_item {{Illuminate\Support\Facades\Request::is('ppf/installers*') ? 'active' : ''}}" id="moble_nav_item_5">
        <a href="{{route('show.installers')}}" class="link link--kumya">
            <i class="fa fa-tools" aria-hidden="true"></i><span data-letters="Installers">Installers</span></a></li>
</ul>

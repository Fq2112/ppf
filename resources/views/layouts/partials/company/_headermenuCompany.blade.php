<ul>
    <li class="{{request()->is('/*') ? 'current' : ''}}"><a href="{{route('home-company')}}">Home</a></li>
    <li class="{{request()->is('about-us*') ? 'current' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>

    <li>
        <a href="#"><div>Industrial Products</div></a>
        <ul>
            <li>
                <a href="{{route('show.tapes')}}">Tapes</a>
                <ul>
                    <li><a href="#">Packaging, Bundling, Reinforcing</a></li>
                    <li>
                        <a href="#">Bonding</a>
                        <ul>
                            <li><a href="#">VHB Tapes</a></li>
                            <li><a href="#">Double Coated Foam</a></li>
                            <li><a href="#">Double Coated Tapes</a></li>
                            <li><a href="#">Removable / Repositionable Tapes</a></li>
                            <li><a href="#">Adhesive Transfer Tapes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Surface Protection, Masking & Specialty</a>
                        <ul>
                            <li><a href="#">Bumpon Protection</a></li>
                            <li><a href="#">Clean Walk Mat</a></li>
                            <li><a href="#">Duck Tape and Cloth Tape</a></li>
                            <li><a href="#">Masking Tape</a></li>
                            <li><a href="#">Repulpable Tape</a></li>
                            <li><a href="#">Sandblast Stencil Products & Impact Stripping Tapes</a></li>
                            <li><a href="#">Specialty Tapes</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Adhesives</a>
                <ul>
                    <li>
                        <a href="#">Scotch-Weld Structural</a>
                        <ul>
                            <li><a href="#">Scotch Weld Epoxy, Acrylic, Urethane Adhesive</a></li>
                            <li><a href="#">Scotch Weld Instant Adhesive</a></li>
                            <li><a href="#">Scotch Polyurethane Reactive Adhesive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Non-Structural</a>
                        <ul>
                            <li><a href="#">Industrial Adhesive, Rubber and Insulation</a></li>
                            <li><a href="#">Scotch Hot Meld Adhesive and Aplicators</a></li>
                            <li><a href="#">Sealant</a></li>
                            <li><a href="#">Aerosol Adhesive</a></li>
                            <li><a href="#">Aerosol Chemical</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Abrasives</a>
                <ul>
                    <li><a href="#">Coated Abrasive Product</a></li>
                    <li><a href="#">Micro-Finishing Product</a></li>
                    <li><a href="#">Surface Conditioning Product-Scotch Brite</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Matic Case Sealers</a>
                <ul>
                    <li><a href="#">Manual Adjustable, Semi-Automatic</a></li>
                    <li><a href="#">Manual Adjustable, Automatic Flap Folding</a></li>
                    <li><a href="#">Self-Adjustable Random, Semi-Automatic</a></li>
                    <li><a href="#">Self-Adjustable Random, Fully Automatic</a></li>
                    <li><a href="#">Accuglide&trade; Taping Heads</a></li>
                    <li><a href="#">Options Case Sealer</a></li>
                    <li><a href="#">SCOTCH&reg; BOX Sealing Tape</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li>
        <a href="#"><div>Automotive Products</div></a>
        <ul>
            <li>
                <a href="{{route('home')}}">Paint Protection Films</a>
                <ul>
                    <li><a href="{{route('show.product.spf-x5')}}">SUPREME&trade; PPF X5</a></li>
                    <li><a href="{{route('show.product.spf-x3')}}">SUPREME&trade; PPF X3</a></li>
                    <li><a href="{{route('show.product.spf-matte')}}">SUPREME&trade; PPF MATTE</a></li>
                    <li><a href="{{route('show.product.spf-neo-black')}}">SUPREME&trade; PPF NEO BLACK</a></li>
                </ul>
            </li>
            <li>
                <a href="http://supremewrap.co.id" target="_blank">Supreme Wrap Films</a>
                <ul>
                    <li><a href="http://supremewrap.co.id/product/overview/mpi-series" target="_blank">MPI&trade; SERIES</a></li>
                    <li><a href="http://supremewrap.co.id/product/overview/conform-chrome-series" target="_blank">CONFORM CHROME&trade; SERIES</a></li>
                    <li><a href="http://supremewrap.co.id/product/overview/supreme-wrapping-films" target="_blank">SUPREME WRAPPING&trade; FILMS</a></li>
                    <li><a href="http://supremewrap.co.id/product/overview/supreme-wrap-care" target="_blank">SUPREME WRAP&trade; CARE</a></li>
                    <li><a href="http://supremewrap.co.id/product/visualizer" target="_blank">CAR WRAP VISUALIZER</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('show.window-films')}}">Window Films</a>
                <ul>
                    <li><a href="{{route('show.window-films.stealth')}}">Stealth&trade; Series</a></li>
                    <li><a href="{{route('show.window-films.nero')}}">Nero Ceramic&trade; Series</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('show.wrapping-tools')}}">Wrapping Tools</a>
                <ul>
                    <li>
                        <a href="{{route('show.wrapping-tools')}}#squeegees" onclick="goToSection('squeegees')">Squeegees</a>
                        <ul>
                            <li><a href="{{route('show.wrapping-tools')}}#squeegees" onclick="goToSection('squeegees')">Squeegee Pro</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#squeegees" onclick="goToSection('squeegees')">Squeegee Pro Flexible</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#squeegees" onclick="goToSection('squeegees')">Squeegee FleXtreme</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Knives, Cutters, Spare Blades & Others</a>
                        <ul>
                            <li><a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Cutter</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Snitty</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Magnets</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Application Glove</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#knives" onclick="goToSection('knives')">Application Set</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">Liquids</a>
                        <ul>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">Flat Surface Cleaner</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">Adhesive Remover UN 1993 LQ Class III</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">SWC Cleaner</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">SWC Power Cleaner</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">SWC Sealant</a></li>
                            <li><a href="{{route('show.wrapping-tools')}}#liquids" onclick="goToSection('liquids')">Application GEL</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="{{request()->is('blog*') ? 'current' : ''}}"><a href="{{route('show.blog')}}">Blog</a></li>
    <li class="{{request()->is('contact*') ? 'current' : ''}}"><a href="{{route('show.contact')}}">Contact</a></li>
</ul>

<ul>
    <li class="{{request()->is('/*') ? 'current' : ''}}"><a href="{{route('home-company')}}">Home</a></li>
    <li class="{{request()->is('about-us*') ? 'current' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>

    <li>
        <a href="#"><div>Industrial Products</div></a>
        <ul>
            <li>
                <a href="{{route('show.tapes')}}">Tapes</a>
                <ul>
                    <li><a href="{{route('show.tapes')}}#pbr" onclick="goToSection('pbr')">Packaging, Bundling, Reinforcing</a></li>
                    <li>
                        <a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">Bonding</a>
                        <ul>
                            <li><a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">VHB Tapes</a></li>
                            <li><a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">Double Coated Foam</a></li>
                            <li><a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">Double Coated Tapes</a></li>
                            <li><a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">Removable / Repositionable Tapes</a></li>
                            <li><a href="{{route('show.tapes')}}#bonding" onclick="goToSection('bonding')">Adhesive Transfer Tapes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Surface Protection, Masking & Specialty</a>
                        <ul>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Bumpon Protection</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Clean Walk Mat</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Duck Tape and Cloth Tape</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Masking Tape</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Repulpable Tape</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Sandblast Stencil Products & Impact Stripping Tapes</a></li>
                            <li><a href="{{route('show.tapes')}}#spms" onclick="goToSection('spms')">Specialty Tapes</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('show.adhesives')}}">Adhesives</a>
                <ul>
                    <li>
                        <a href="{{route('show.adhesives')}}#sws" onclick="goToSection('sws')">Scotch-Weld Structural</a>
                        <ul>
                            <li><a href="{{route('show.adhesives')}}#sws" onclick="goToSection('sws')">Scotch Weld Epoxy, Acrylic, Urethane Adhesive</a></li>
                            <li><a href="{{route('show.adhesives')}}#sws" onclick="goToSection('sws')">Scotch Weld Instant Adhesive</a></li>
                            <li><a href="{{route('show.adhesives')}}#sws" onclick="goToSection('sws')">Scotch Polyurethane Reactive Adhesive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Non-Structural</a>
                        <ul>
                            <li><a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Industrial Adhesive, Rubber and Insulation</a></li>
                            <li><a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Scotch Hot Meld Adhesive and Aplicators</a></li>
                            <li><a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Sealant</a></li>
                            <li><a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Aerosol Adhesive</a></li>
                            <li><a href="{{route('show.adhesives')}}#ns" onclick="goToSection('ns')">Aerosol Chemical</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('show.abrasives')}}">Abrasives</a>
                <ul>
                    <li><a href="{{route('show.abrasives')}}#cap" onclick="goToSection('cap')">Coated Abrasive Product</a></li>
                    <li><a href="{{route('show.abrasives')}}#mfp" onclick="goToSection('mfp')">Micro-Finishing Product</a></li>
                    <li><a href="{{route('show.abrasives')}}#scpsb" onclick="goToSection('scpsb')">Surface Conditioning Product-Scotch Brite</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('show.matic-case-sealers')}}">Matic Case Sealers</a>
                <ul>
                    <li><a href="{{route('show.matic-case-sealers')}}#masa" onclick="goToSection('masa')">Manual Adjustable, Semi-Automatic</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#maaff" onclick="goToSection('maaff')">Manual Adjustable, Automatic Flap Folding</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#sarsa" onclick="goToSection('sarsa')">Self-Adjustable Random, Semi-Automatic</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#sarfa" onclick="goToSection('sarfa')">Self-Adjustable Random, Fully Automatic</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#ath" onclick="goToSection('ath')">Accuglide&trade; Taping Heads</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#ocs" onclick="goToSection('ocs')">Options Case Sealer</a></li>
                    <li><a href="{{route('show.matic-case-sealers')}}#sbst" onclick="goToSection('sbst')">SCOTCH&reg; BOX Sealing Tape</a></li>
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

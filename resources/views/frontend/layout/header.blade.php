<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <i class="fas fa-user"></i>
        </button>
        <div class="search-icon nav-icons-xs visible-xs">
          <a href="#" class="search-icon" data-toggle="modal" data-target="#search-modal">
            <i class="fa fa-search"></i>
          </a>
        </div>
        <div class="nav-icons-xs visible-xs faq-icon nav-faq-icon">
          <a href="faq.html" class="faq-icon nav-faq-icon">
            <i class="fas fa-question"></i>
          </a></div>
          <div class="navbar-cart n-cc visible-xs">
            <a href="cart/index.html" title="Your cart"><span class="fa fa-shopping-cart "></span>
              <span id="navbar-cart-count"></span></a></div>
              <div class="navbar-cart visible-xs">
                
              </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-main-expanded">

              <div class="brand logo logo-new hidden-xs hidden-sm hidden-md">
                <a href="#" title="OtherTees - Popkulturowe koszulki w najlepszym wydaniu!" target="_self"><img src="photos/shop/logo_70.png" class="img-responsive center-block" alt="OtherTees - Popkulturowe koszulki w najlepszym wydaniu!" title="OtherTees - Popkulturowe koszulki w najlepszym wydaniu!" /></a>
              </div>

              <ul class="nav navbar-nav">
                <li class="active"><a href="en/index.html">En</a></li>
                <li><a href="pl/index.html">Pl</a></li>
                <li class="active"><a href="othertees/contact/index.html">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav nav-icons-main">
                <li class="hidden-xs">
                  <a href="#" class="nav-icons-main-search" data-toggle="modal" data-target="#search-modal">
                    <i class="fa fa-search"></i>
                  </a>
                </li>
                <li class="hidden-xs"><a href="faq.html" class="nav-icons-main-faq">
                  <i class="fa fa-question"></i>
                </a></li>
              </ul>

              <ul class="nav navbar-nav icon-menu navbar-right">
                <li><a href="user/register/index.html">Sign up</a></li>
                <li><a href="user/login/index.html">Login</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="grayed">Currency:</span>
                  <em>USD</em> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#" title="Change currency to Pound (GBP)">GBP</a>
                    </li>
                    <li>
                      <a href="#" title="Change currency to Euro (EUR)">EUR</a>
                    </li>
                    <li>
                      <a href="#" class="active" title="Change currency to Dollar (USD)">USD</a>
                    </li>
                    <li>
                      <a href="#" title="Change currency to Złoty (PLN)">PLN</a>
                    </li>
                  </ul>
                </li>
                
                <li id="nav-cart">
                  <a href="#" class="dropdown-toggle hidden-xs" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-shopping-cart "></span>
                    <span id="nav-cart-count">0 Items</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="hover-tip-right"></div>
                        <div class="cart-hover-top">Ready to checkout?</div>
                        <div id="nav-cart-cart" class="cart-hover">
                          <div class="hover-sum">Total: <span id="nav-cart-total"></span></div>
                        </div>
                        <div class="hover-time" type="button" data-toggle="modal" data-target="#shipping-time">
                          Approximate shipping time:
                          <br><span class="working-days" data-shipping="1"></span><span id="shipping-info-cart" class="question-icon left" onmouseover="showShippingTimeInfo('cart', 'cart');" onmouseout="$('.question-icon').webuiPopover('destroy');">
                        </div>
                        <div class="hover-checkout">
                          
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="clearfix"></div>
      <section class="brand nav-menu-section-shop">
        <div>
          <div class="container">
            <div class="row nav-menu-res">
              <div class="rm-toggle visible-xs visible-sm">
                <button type="button">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
              <a href="index.html" class="logo-main-new visible-xs visible-sm visible-md" title="OtherTees - Popkulturowe koszulki w najlepszym wydaniu!" target="_self"></a>
            </div>
          </div>

          <div class="row">
            <div class="row" id="responsiveMenu">
              <button class="menu-back lvl1">back</button>
              <button class="menu-back lvl2">back</button>
              <ul class="nav nav-pills main-nav nav-shop nav-shop-new">
                <li>
                  <a href="shop.html" title="Shop">Shop</a>
                </li>
                <li>
                  <a href="shopbyartist/index.html" title="Shop By Artist">Shop By Artist</a>
                </li>
                <li class="dropdown obt-menu">
                  <a class="dropdown-toggle" href="shop/clothes/index.html" title="Clothes" target="_self" class="shop-menu-drop-show">Clothes</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="shop-categories-drop">
                        <div class="container">
                          <div class="col-md-3 shop-categories-drop-col all visible-xs visible-sm">
                            <ul>
                              <li>
                                <a href="#" title="Clothes" target="_self" class="shop-menu-drop-show">All</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col promoted">
                            <ul>
                              <li>
                                <a href="#" title="New projects" style="font-weight: 700;">New projects</a>
                              </li>
                              <li>
                                <a href="#" title="Bestsellers">Bestsellers</a>
                              </li>
                              <li>
                                <a href="#" title="Reprints">Reprints</a>
                              </li>
                            </ul>
                          </div>

                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Animals" target="_self">                                    <img src="photos/shop/icons/c20d07c13e162f022556495b6b1f5c1c.png" title="Animals" class="shop-categories-icon">Animals
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Animation" target="_self">                                    <img src="photos/shop/icons/4094d63a035f9ee33af12c0cfd6431cf.png" title="Animation" class="shop-categories-icon">Animation
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Anime" target="_self">                                    <img src="photos/shop/icons/a12eaad1d24bf4e22393f1b9ec081ce2.png" title="Anime" class="shop-categories-icon">Anime
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Art" target="_self">                                    <img src="photos/shop/icons/2a0c67c1000993afbb49e738f2fc51d9.png" title="Art" class="shop-categories-icon">Art
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Books" target="_self">                                    <img src="photos/shop/icons/86764ee93608adfc5d6ae62640132f12.png" title="Books" class="shop-categories-icon">Books
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Comics" target="_self">                                    <img src="photos/shop/icons/dcad9bd1dae470ad96433efb3aefbb32.png" title="Comics" class="shop-categories-icon">Comics
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Cthulhu" target="_self">                                    <img src="photos/shop/icons/3944c19a9aba16d2db528d97e77d37a2.png" title="Cthulhu" class="shop-categories-icon">Cthulhu
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Funny" target="_self">                                    <img src="photos/shop/icons/d41a0681ded2fbfbc041a13906a4944e.png" title="Funny" class="shop-categories-icon">Funny
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Game of Thrones" target="_self">                                    <img src="photos/shop/icons/0e0a68852e3b948aa2329cd738cf7bcb.png" title="Game of Thrones" class="shop-categories-icon">Game of Thrones
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Gaming" target="_self">                                    <img src="photos/shop/icons/3a31b62020733c0ba1539014efe73db0.png" title="Gaming" class="shop-categories-icon">Gaming
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Glowing" target="_self">                                    <img src="photos/shop/icons/64c9911b7578fdb9ad197ec9f1241d2b.png" title="Glowing" class="shop-categories-icon">Glowing
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Harry Potter" target="_self">                                    <img src="photos/shop/icons/1a974bb86693232a83746e60111b3743.png" title="Harry Potter" class="shop-categories-icon">Harry Potter
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Kids" target="_self">                                    <img src="photos/shop/icons/761130de2545e9d0537759f33905f16d.png" title="Kids" class="shop-categories-icon">Kids
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Lord of the Rings" target="_self">                                    <img src="photos/shop/icons/698fce06929e3bedec45cc187668994f.png" title="Lord of the Rings" class="shop-categories-icon">Lord of the Rings
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Movies" target="_self">                                    <img src="photos/shop/icons/7592c606541edbdb5200e09e9f1c24f2.png" title="Movies" class="shop-categories-icon">Movies
                                </a>
                              </li>
                              <li>
                                <a href="#" title="RPG" target="_self">                                    <img src="photos/shop/icons/7e30ef9672df0582283ea6bd4a88e40d.png" title="RPG" class="shop-categories-icon">RPG
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Star Wars" target="_self">                                    <img src="photos/shop/icons/8d6179ef3be33c36adc7701a68d037a8.png" title="Star Wars" class="shop-categories-icon">Star Wars
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Studio Ghibli" target="_self">                                    <img src="photos/shop/icons/7da87431648a3c9c5ef649b806991e21.png" title="Studio Ghibli" class="shop-categories-icon">Studio Ghibli
                                </a>
                              </li>
                              <li>
                                <a href="#" title="TV Series" target="_self">                                    <img src="photos/shop/icons/0f6265be2d653d1f1df3af5f3ff3f723.png" title="TV Series" class="shop-categories-icon">TV Series
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Whovian" target="_self">                                    <img src="photos/shop/icons/465ab0ba015751b6314af69dce4ffa9d.png" title="Whovian" class="shop-categories-icon">Whovian
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown obt-menu">
                  <a class="dropdown-toggle" href="#" title="Mugs" target="_self" class="shop-menu-drop-show">Mugs</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="shop-categories-drop">
                        <div class="container">
                          <div class="col-md-3 shop-categories-drop-col all visible-xs visible-sm">
                            <ul>
                              <li>
                                <a href="#" title="Mugs" target="_self" class="shop-menu-drop-show">All</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col promoted">
                            <ul>
                              <li>
                                <a href="#" title="New projects" style="font-weight: 700;">New projects</a>
                              </li>
                              <li>
                                <a href="#" title="Bestsellers">Bestsellers</a>
                              </li>
                            </ul>
                          </div>

                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Animals" target="_self">                                    <img src="photos/shop/icons/6c618e94e5f9a63db5854f1d5a39f792.png" title="Animals" class="shop-categories-icon">Animals
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Anime" target="_self">                                    <img src="photos/shop/icons/7914bdc784e7973b68264414cd760c9f.png" title="Anime" class="shop-categories-icon">Anime
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Books" target="_self">                                    <img src="photos/shop/icons/416df9511f72aeb83bca6ef218678d5b.png" title="Books" class="shop-categories-icon">Books
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Cartoon" target="_self">                                    <img src="photos/shop/icons/074db60f40a2af9cc37ccc94213c0ab1.png" title="Cartoon" class="shop-categories-icon">Cartoon
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Cthulhu" target="_self">                                    <img src="photos/shop/icons/a058ebeceb0a56adb895ab6ab481bc6e.png" title="Cthulhu" class="shop-categories-icon">Cthulhu
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Funny" target="_self">                                    <img src="photos/shop/icons/d5c13dc9941f874fce45a2b8baef9a78.png" title="Funny" class="shop-categories-icon">Funny
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Gaming" target="_self">                                    <img src="photos/shop/icons/bc245879d78971f51ddab3c3bf15336b.png" title="Gaming" class="shop-categories-icon">Gaming
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Harry Potter" target="_self">                                    <img src="photos/shop/icons/3793131b06ecba99c569ec191c75db36.png" title="Harry Potter" class="shop-categories-icon">Harry Potter
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Lord of the Rings" target="_self">                                    <img src="photos/shop/icons/0f1b5cf74b3fe842a649e64cd05143c4.png" title="Lord of the Rings" class="shop-categories-icon">Lord of the Rings
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Movies" target="_self">                                    <img src="photos/shop/icons/7abec01e4b18d66e2d763b4e48699a36.png" title="Movies" class="shop-categories-icon">Movies
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Music" target="_self">                                    <img src="photos/shop/icons/eb46ec0e07352ca5c92f42ed51e4e456.png" title="Music" class="shop-categories-icon">Music
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Star Wars" target="_self">                                    <img src="photos/shop/icons/a8a7067c274069803300b6f8c93d4be8.png" title="Star Wars" class="shop-categories-icon">Star Wars
                                </a>
                              </li>
                              <li>
                                <a href="#" title="TV" target="_self">                                    <img src="photos/shop/icons/41b69eaa131c61febf725eb4ddfa46e4.png" title="TV" class="shop-categories-icon">TV
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown obt-menu">
                  <a class="dropdown-toggle" href="#" title="Tote Bags" target="_self" class="shop-menu-drop-show">Tote Bags</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="shop-categories-drop">
                        <div class="container">
                          <div class="col-md-3 shop-categories-drop-col all visible-xs visible-sm">
                            <ul>
                              <li>
                                <a href="#" title="Tote Bags" target="_self" class="shop-menu-drop-show">All</a>
                              </li>
                            </ul>
                          </div>

                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Anime" target="_self">                                    <img src="photos/shop/icons/484d9963ef37639767d132cd9952ab14.png" title="Anime" class="shop-categories-icon">Anime
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Artistic" target="_self">                                    <img src="photos/shop/icons/562326c9b476b1a78a1a333762a5d4f6.png" title="Artistic" class="shop-categories-icon">Artistic
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Books" target="_self">                                    <img src="photos/shop/icons/600dabbf38d68af01872ed7f1dd1e422.png" title="Books" class="shop-categories-icon">Books
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Fantasy" target="_self">                                    <img src="photos/shop/icons/89d46d564f66e164d909f1391697e3ab.png" title="Fantasy" class="shop-categories-icon">Fantasy
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Funny" target="_self">                                    <img src="photos/shop/icons/ee5d74e21d64309ad6e6cb55fecebfa6.png" title="Funny" class="shop-categories-icon">Funny
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Sci Fi" target="_self">                                    <img src="photos/shop/icons/4b7386f29b0fcb9a207056c17d8f88c8.png" title="Sci Fi" class="shop-categories-icon">Sci Fi
                                </a>
                              </li>
                              <li>
                                <a href="#" title="TV" target="_self">                                    <img src="photos/shop/icons/547a3ad3b563974aadbf0a6437007de4.png" title="TV" class="shop-categories-icon">TV
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown obt-menu">
                  <a class="dropdown-toggle" href="#" title="Posters" target="_self" class="shop-menu-drop-show">Posters</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="shop-categories-drop">
                        <div class="container">
                          <div class="col-md-3 shop-categories-drop-col all visible-xs visible-sm">
                            <ul>
                              <li>
                                <a href="#" title="Posters" target="_self" class="shop-menu-drop-show">All</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col promoted">
                            <ul>
                              <li>
                                <a href="#" title="New projects" style="font-weight: 700;">New projects</a>
                              </li>
                              <li>
                                <a href="#" title="Bestsellers">Bestsellers</a>
                              </li>
                            </ul>
                          </div>

                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Animals" target="_self">                                    <img src="photos/shop/icons/ff915a60cf2a254a688cc411f6d6bf04.png" title="Animals" class="shop-categories-icon">Animals
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Animation" target="_self">                                    <img src="photos/shop/icons/eb5f93fa18db51cff2e2fd10e2dd7a32.png" title="Animation" class="shop-categories-icon">Animation
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Anime" target="_self">                                    <img src="photos/shop/icons/e3e6dd83ea040ab2baf716c2f9753534.png" title="Anime" class="shop-categories-icon">Anime
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Books" target="_self">                                    <img src="photos/shop/icons/077d3bbbbcd2a082f82b1695c85b1b21.png" title="Books" class="shop-categories-icon">Books
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Comics" target="_self">                                    <img src="photos/shop/icons/2d902e39e81c9cf39e8fe6e56f2552e6.png" title="Comics" class="shop-categories-icon">Comics
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Cthulhu" target="_self">                                    <img src="photos/shop/icons/7a0d5def09f8ad6ac987f20c77418d9b.png" title="Cthulhu" class="shop-categories-icon">Cthulhu
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Gaming" target="_self">                                    <img src="photos/shop/icons/b3798fcc217f1ccc106fceee5e822be9.png" title="Gaming" class="shop-categories-icon">Gaming
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Movies" target="_self">                                    <img src="photos/shop/icons/c873fbc60c523146cdb4386a3e7f5828.png" title="Movies" class="shop-categories-icon">Movies
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Sci Fi" target="_self">                                    <img src="photos/shop/icons/89dd14bddd68a84478ef1c9a0b80100a.png" title="Sci Fi" class="shop-categories-icon">Sci Fi
                                </a>
                              </li>
                              <li>
                                <a href="#" title="TV Shows" target="_self">                                    <img src="photos/shop/icons/acefd9fc7f2aa4806355aa473bff5ad6.png" title="TV Shows" class="shop-categories-icon">TV Shows
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="dropdown obt-menu">
                  <a class="dropdown-toggle" href="#" title="Undies" target="_self" class="shop-menu-drop-show">Undies</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="shop-categories-drop">
                        <div class="container">
                          <div class="col-md-3 shop-categories-drop-col all visible-xs visible-sm">
                            <ul>
                              <li>
                                <a href="#" title="Undies" target="_self" class="shop-menu-drop-show">All</a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col promoted">
                            <ul>
                              <li>
                                <a href="#" title="Bestsellers">Bestsellers</a>
                              </li>
                            </ul>
                          </div>

                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Baby onesies" target="_self">                                    <img src="photos/shop/icons/70dd91df40f516bdbe25d45c8a5c6754.png" title="Baby onesies" class="shop-categories-icon">Baby onesies
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Bibs" target="_self">                                    <img src="photos/shop/icons/cb689d6ad896f7e4d6bcdeea7e75b87c.png" title="Bibs" class="shop-categories-icon">Bibs
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Boy Pundies" target="_self">                                    <img src="photos/shop/icons/9495d87011d08056db1f7f951870ec20.png" title="Boy Pundies" class="shop-categories-icon">Boy Pundies
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-3 shop-categories-drop-col">
                            <ul>
                              <li>
                                <a href="#" title="Girl Pundies" target="_self">                                    <img src="photos/shop/icons/446cd335fac87edf9fb5c4f415288d63.png" title="Girl Pundies" class="shop-categories-icon">Girl Pundies
                                </a>
                              </li>
                              <li>
                                <a href="#" title="Period Panties" target="_self">                                    <img src="photos/shop/icons/69efe179696b9b9a8c90f74bf19a1c64.png" title="Period Panties" class="shop-categories-icon">Period Panties
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" title="Last pieces" target="_self">Last pieces</a></li>
                  <li>
                    <a href="#" title="Special offer" target="_self">Special offer</a></li>
                  </ul>
                </div>
              </div>
            </section>
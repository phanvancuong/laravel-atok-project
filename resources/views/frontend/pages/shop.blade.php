@extends('frontend.layout.master')
@section('content')
<section class="hidden-xs">
          <div class="shop-top">
              <div class="col-sm-3">
                  <a href="" title="Clothes" target="_self">
                      <div class="shop-top-inner">
                          <div class="shop-top-btn-cnt">
                              <button class="shop-top-btn">Clothes</button>
                          </div>
                      </div>
                      <img src="photos/shop/5267fa56223c57b61746c1b928e8d3f3.jpg" class="img-responsive" alt="Clothes" title="Clothes" />
                  </a>
              </div>
              <div class="col-sm-3">
                  <a href="" title="Mugs" target="_self">
                      <div class="shop-top-inner">
                          <div class="shop-top-btn-cnt">
                              <button class="shop-top-btn">Mugs</button>
                          </div>
                      </div>
                      <img src="photos/shop/41a8d656e63d506e8205985be7a0a660.jpg" class="img-responsive" alt="Mugs" title="Mugs" />
                  </a>
              </div>
              <div class="col-sm-3">
                  <a href="shop/torby/index.html" title="Tote bags" target="_self">
                      <div class="shop-top-inner">
                          <div class="shop-top-btn-cnt">
                              <button class="shop-top-btn">Tote bags</button>
                          </div>
                      </div>
                      <img src="photos/shop/3a83d3d863427b277450c2def932a7bf.png" class="img-responsive" alt="Tote bags" title="Tote bags" />
                  </a>
              </div>
              <div class="col-sm-3">
                  <a href="shop/undies/index.html" title="Undies" target="_self">
                      <div class="shop-top-inner">
                          <div class="shop-top-btn-cnt">
                              <button class="shop-top-btn">Undies</button>
                          </div>
                      </div>
                      <img src="photos/shop/cd7709fc70a40ad0e106368af6e8cd04.jpg" class="img-responsive" alt="Undies" title="Undies" />
                  </a>
              </div>
          </div>`````````
      </section>
      <section class="visible-xs">
          <div id="carousel_shop" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="item active">
                      <a href="#" title="Clothes" target="_self">
                          <div class="shop-top-inner">
                              <div class="shop-top-btn-cnt">
                                  <button class="shop-top-btn">Clothes</button>
                              </div>
                          </div>
                          <img src="photos/shop/5267fa56223c57b61746c1b928e8d3f3.jpg" alt="Clothes" title="Clothes" />
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" title="Mugs" target="_self">
                          <div class="shop-top-inner">
                              <div class="shop-top-btn-cnt">
                                  <button class="shop-top-btn">Mugs</button>
                              </div>
                          </div>
                          <img src="photos/shop/41a8d656e63d506e8205985be7a0a660.jpg" alt="Mugs" title="Mugs" />
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" title="Tote bags" target="_self">
                          <div class="shop-top-inner">
                              <div class="shop-top-btn-cnt">
                                  <button class="shop-top-btn">Tote bags</button>
                              </div>
                          </div>
                          <img src="photos/shop/3a83d3d863427b277450c2def932a7bf.png" alt="Tote bags" title="Tote bags" />
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" title="Undies" target="_self">
                          <div class="shop-top-inner">
                              <div class="shop-top-btn-cnt">
                                  <button class="shop-top-btn">Undies</button>
                              </div>
                          </div>
                          <img src="photos/shop/cd7709fc70a40ad0e106368af6e8cd04.jpg" alt="Undies" title="Undies" />
                      </a>
                  </div>
                  <div class="item">
                      <a href="#" title="Posters" target="_self">
                          <div class="shop-top-inner">
                              <div class="shop-top-btn-cnt">
                                  <button class="shop-top-btn">Posters</button>
                              </div>
                          </div>
                          <img src="photos/shop/7a7b21481d9cea00c7253d258c6a8608.png" alt="Posters" title="Posters" />
                      </a>
                  </div>
              </div>
              <a class="left carousel-control" href="#" data-slide="prev">
              <span class="chevron-left"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#" data-slide="next">
              <span class=""></span>
              <span class="sr-only">Next</span>
              </a>
          </div>
      </section>
<section>
          <div class="container">
              <div class="row">
                  <h2><span>Polecane</span></h2>
                  <ul class="nav nav-tabs tabs roll-menu" role="tablist">
                      <li role="presentation" class="active">
                          <a href="#new" aria-controls="new" role="tab" data-toggle="tab">NEWEST</a>
                      </li>
                      <li role="presentation">
                          <a href="#reprints" aria-controls="reprints" role="tab" data-toggle="tab">REPRINTY</a>
                      </li>
                      <li role="presentation">
                          <a href="#bestsellers" aria-controls="bestsellers" role="tab" data-toggle="tab">BESTSELLERY</a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="new">
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Flamingo Garden">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Flamingo Garden" title="Flamingo Garden" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Flamingo Garden
                                      <p>by <a href="#" title="Dr.Monekers">Dr.Monekers</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Choose Your Weapon">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Choose Your Weapon" title="Choose Your Weapon" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Choose Your Weapon
                                      <p>by <a href="#" title="StudioM6">StudioM6</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Two Worlds">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Two Worlds" title="Two Worlds" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Two Worlds
                                      <p>by <a href="#" title="alemaglia">alemaglia</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="That's What I Do">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="That's What I Do" title="That's What I Do" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      That's What I Do
                                      <p>by <a href="#" title="tobiasfonseca">tobiasfonseca</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Ultra Instinct Storm">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Ultra Instinct Storm" title="Ultra Instinct Storm" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Ultra Instinct Storm
                                      <p>by <a href="#" title="kharmazero">kharmazero</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">14.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Regeneration is Coming">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Regeneration is Coming" title="Regeneration is Coming" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Regeneration is Coming
                                      <p>by <a href="#" title="kharmazero">kharmazero</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">14.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="The Sleeper of R'lyeh">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="The Sleeper of R'lyeh" title="The Sleeper of R'lyeh" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      The Sleeper of R'lyeh
                                      <p>by <a href="#" title="Fuacka">Fuacka</a></p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">14.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Falling Fox">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Falling Fox" title="Falling Fox" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Falling Fox
                                      <p>by <a href="#" title="tobiasfonseca">tobiasfonseca</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="May the Love">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="May the Love" title="May the Love" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      May the Love
                                      <p>by <a href="#" title="xMorfina">xMorfina</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="No probllama">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="No probllama" title="No probllama" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      No probllama
                                      <p>by <a href="#" title="NemiMakeit">NemiMakeit</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="May the Love">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="May the Love" title="May the Love" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      May the Love
                                      <p>by <a href="#" title="xMorfina">xMorfina</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="I Love Every Piece of You">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="I Love Every Piece of You" title="I Love Every Piece of You" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      I Love Every Piece of You
                                      <p>by <a href="#" title="tobiasfonseca">tobiasfonseca</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Bat Villains">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Bat Villains" title="Bat Villains" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Bat Villains
                                      <p>by <a href="#" title="artbyjp">artbyjp</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">14.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="The King and the White Wolf">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="The King and the White Wolf" title="The King and the White Wolf" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      The King and the White Wolf
                                      <p>by <a href="#" title="Dr.Monekers">Dr.Monekers</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="I Love Every Piece of You">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="I Love Every Piece of You" title="I Love Every Piece of You" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      I Love Every Piece of You
                                      <p>by <a href="#" title="tobiasfonseca">tobiasfonseca</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="No Probllama">
                                  <div class="project-img">
                                      <div class="badge new">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="No Probllama" title="No Probllama" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      No Probllama
                                      <p>by <a href="#" title="NemiMakeit">NemiMakeit</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="reprints">
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="The Last Starry Dragons">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="The Last Starry Dragons" title="The Last Starry Dragons" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      The Last Starry Dragons
                                      <p>by <a href="#" title="ChocolateRaisinFury">ChocolateRaisinFury</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Over the Hill">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Over the Hill" title="Over the Hill" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Over the Hill
                                      <p>by <a href="#" title="AlynSpiller">AlynSpiller</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Standard Nerds">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Standard Nerds" title="Standard Nerds" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Standard Nerds
                                      <p>by <a href="#" title="TomTrager">TomTrager</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Flamazing">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Flamazing" title="Flamazing" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Flamazing
                                      <p>by <a href="#" title="NemiMakeit">NemiMakeit</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Save the Galaxy">
                                  <div class="project-img">
                                      <div class="badge sale">promocja</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Save the Galaxy" title="Save the Galaxy" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Save the Galaxy
                                      <p>by <a href="#" title="vptrinidad">vptrinidad</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="The Sleeper of R'lyeh">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="The Sleeper of R'lyeh" title="The Sleeper of R'lyeh" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      The Sleeper of R'lyeh
                                      <p>by <a href="#" title="Fuacka">Fuacka</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="I Survived the Snap">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="I Survived the Snap" title="I Survived the Snap" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      I Survived the Snap
                                      <p>by <a href="#" title="LegendaryPhoenix">LegendaryPhoenix</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Y-800">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Y-800" title="Y-800" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Y-800
                                      <p>by <a href="#" title="stationjack">stationjack</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="I am your Father!">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="I am your Father!" title="I am your Father!" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      I am your Father!
                                      <p>by <a href="#" title="Melonseta">Melonseta</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Church of the Sun">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Church of the Sun" title="Church of the Sun" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Church of the Sun
                                      <p>by <a href="#" title="AutoSave">AutoSave</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Speak Friend and Enter">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Speak Friend and Enter" title="Speak Friend and Enter" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Speak Friend and Enter
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="We have WIFI">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="We have WIFI" title="We have WIFI" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      We have WIFI
                                      <p>by <a href="#" title="xMorfina">xMorfina</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Black Coffee">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Black Coffee" title="Black Coffee" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Black Coffee
                                      <p>by <a href="#" title="ilustrata">ilustrata</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Infinity Chimichanga">
                                  <div class="project-img">
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Infinity Chimichanga" title="Infinity Chimichanga" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Infinity Chimichanga
                                      <p>by <a href="#" title="Geekydog">Geekydog</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Battle on the Beach">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Battle on the Beach" title="Battle on the Beach" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Battle on the Beach
                                      <p>by <a href="#" title="Dr.Monekers">Dr.Monekers</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Grand Rick Auto">
                                  <div class="project-img">
                                      <div class="badge sale">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Grand Rick Auto" title="Grand Rick Auto" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Grand Rick Auto
                                      <p>by <a href="#" title="TomTrager">TomTrager</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="bestsellers">
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="RUN!">
                                  <div class="project-img">
                                      <div class="badge sale">promocja</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="RUN!" title="RUN!" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      RUN!
                                      <p>by <a href="#" title="MoisEscudero">MoisEscudero</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                      <span class="previous-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="An Adventurer Like You">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="An Adventurer Like You" title="An Adventurer Like You" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      An Adventurer Like You
                                      <p>by <a href="#" title="hyperlixir">hyperlixir</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Welcome to Nostromo">
                                  <div class="project-img">
                                      <div class="badge sale">promocja</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Welcome to Nostromo" title="Welcome to Nostromo" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Welcome to Nostromo
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">39.20 USD</span>
                                      <span class="previous-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Speak Friend and Enter">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Speak Friend and Enter" title="Speak Friend and Enter" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Speak Friend and Enter
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Fox in the Forest">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Fox in the Forest" title="Fox in the Forest" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Fox in the Forest
                                      <p>by <a href="#" title="barrettbiggers">barrettbiggers</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Schrodinger's Night">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Schrodinger's Night" title="Schrodinger's Night" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Schrodinger's Night
                                      <p>by <a href="#" title="BlancaVidal">BlancaVidal</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Starry School">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Starry School" title="Starry School" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Starry School
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Church of the Sun">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Church of the Sun" title="Church of the Sun" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Church of the Sun
                                      <p>by <a href="#" title="AutoSave">AutoSave</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Book of Magic and Adventures">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Book of Magic and Adventures" title="Book of Magic and Adventures" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Book of Magic and Adventures
                                      <p>by <a href="#" title="dandingeroz">dandingeroz</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Looking for the Dragon Balls">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Looking for the Dragon Balls" title="Looking for the Dragon Balls" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Looking for the Dragon Balls
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="He is my Neighbor">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="He is my Neighbor" title="He is my Neighbor" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      He is my Neighbor
                                      <p>by <a href="#" title="victorsbeard">victorsbeard</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="The little dinosaur">
                                  <div class="project-img">
                                      <div class="badge sellout">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="The little dinosaur" title="The little dinosaur" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      The little dinosaur
                                      <p>by <a href="#" title="RenF">RenF</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                      <span class="previous-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="We have WIFI">
                                  <div class="project-img">
                                      <div class="badge sale">promocja</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="We have WIFI" title="We have WIFI" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      We have WIFI
                                      <p>by <a href="#" title="xMorfina">xMorfina</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">39.60 USD</span>
                                      <span class="previous-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Dogtor">
                                  <div class="project-img">
                                      <div class="badge bestseller">bestseller</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Dogtor" title="Dogtor" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Dogtor
                                      <p>by <a href="#" title="obinsun">obinsun</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Dark Side Of The Glow!">
                                  <div class="project-img">
                                      <div class="badge sellout">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Dark Side Of The Glow!" title="Dark Side Of The Glow!" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Dark Side Of The Glow!
                                      <p>by <a href="#" title="LestatPrincess">LestatPrincess</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                      <span class="previous-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-6 project-row">
                              <div class="project" title="Punishment">
                                  <div class="project-img">
                                      <div class="badge sellout">New</div>
                                      <a href="#">
                                      <img src="images/I LOVE EVERY PIECE OF YOU (2).png" alt="Punishment" title="Punishment" class="img-responsive" />
                                      </a>
                                  </div>
                                  <h4>
                                      Punishment
                                      <p>by <a href="#" title="ddjvigo">ddjvigo</a>
                                      </p>
                                  </h4>
                                  <div class="prices">
                                      <span class="actual-price">16.50 USD</span>
                                      <span class="previous-price">9.00 USD</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="slider-container">
      <div class="menu">
        <label for="slide-dot-1"></label>
        <label for="slide-dot-2"></label>
        <label for="slide-dot-3"></label>
      </div>
      <input id="slide-dot-1" type="radio" name="slides" checked>
        <div class="slide slide-1"></div>
      <input id="slide-dot-2" type="radio" name="slides">
        <div class="slide slide-2"></div>
      <input id="slide-dot-3" type="radio" name="slides">
        <div class="slide slide-3"></div>
      <div class="transbox"> 
        <p class="Featured">Featured design</p>
        <h1 class="Dreamer">The Great Dreamer</h1>
        <div class="shop-now">
          <a href="" class="shop" >Shop Now</a>
        </div>
      </div>
    </div>

@endsection
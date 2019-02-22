@extends('frontend.layout.master')
@section('content')
<section class="todays-tees">
    <div class="container-fluid">
      <ul class="clothes-icons">
        <li>
          <img id="inventoryProduct1" class="img-responsive active" src="photos/shop/products/b266995ac645366a336a614bdb4c99b7.png" alt="T-Shirt" title="T-Shirt" onclick="showProductInDesigns(1)">
        </li>
        <li>
          <img id="inventoryProduct19" class="img-responsive" src="photos/shop/products/0a6d7cf1ec6ee6aaced4a6132c329b8a.png" alt="Deep Neck" title="Deep Neck" onclick="showProductInDesigns(19)">
        </li>
        <li>
          <img id="inventoryProduct6" class="img-responsive" src="photos/shop/products/c6055b9c71c5567a60cac3ff7f17049f.png" alt="V-Neck" title="V-Neck" onclick="showProductInDesigns(6)">
        </li>
        <li>
          <img id="inventoryProduct2" class="img-responsive" src="photos/shop/products/d0efee087eb7e31ca43ea88d398da07f.png" alt="Kids Shirt" title="Kids Shirt" onclick="showProductInDesigns(2)">
        </li>
        <li>
          <img id="inventoryProduct5" class="img-responsive" src="photos/shop/products/f90cc327cb9590bdc7edab6930c1989f.png" alt="Tank Top" title="Tank Top" onclick="showProductInDesigns(5)">
        </li>
        <li>
          <img id="inventoryProduct20" class="img-responsive" src="photos/shop/products/e9d93b07713adfdc49e5ce1b96b23df0.png" alt="Long Sleeve" title="Long Sleeve" onclick="showProductInDesigns(20)">
        </li>
        <li>
          <img id="inventoryProduct4" class="img-responsive" src="photos/shop/products/a5e67e234f8dc56a4fe48dcf8fd69f16.png" alt="Sweatshirt" title="Sweatshirt" onclick="showProductInDesigns(4)">
        </li>
        <li>
          <img id="inventoryProduct3" class="img-responsive" src="photos/shop/products/a70199138c585b21adfdc909d9deba61.png" alt="Hoodie" title="Hoodie" onclick="showProductInDesigns(3)">
        </li>
        <li>
          <img id="inventoryProduct15" class="img-responsive" src="photos/shop/products/f0f0bab12ca05d0c97530640a8cd227f.png" alt="Zipped Hoodie" title="Zipped Hoodie" onclick="showProductInDesigns(15)">
        </li>
      </ul>
    </div>
  </section>
<script type="text/javascript">
    $(document).ready(function($) {
      $(".rslides").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        // maxwidth: 800,
        namespace: "centered-btns"
      });

      // if ($(window).width() > 991) {
      //   $('.timer-info').webuiPopover({
      //     placement: 'auto',
      //     trigger: 'hover',
      //     width: '221',
      //     type: 'html',
      //     animation: 'fade',
      //     padding: 'false',
      //     cache: 'false',
      //     multi: 'true',
      //     content: 'Limited edition product. Available on sale for only 72h. Limited edition products are printed to order and shipped within few days after the end of the sale.'
      //   });
      // }
    });

    $(function() {
      if ($(window).width() < 992) {
        $('.timer-info').click(function() {
          $('#timer-info-modal').modal('show')
        })
      }
    });

    function showProductInDesigns(idProduct) {
      var designId = 0;
      var designsIds = [];
      $('div[id^="design-"]').each(function() {
        designId = $(this).attr('id').replace(/[^0-9]/g, '');
        if ($.inArray(designId, designsIds) < 0) {
          designsIds.push(designId);
        }
      });

      $.each(designsIds, function(index, value) {
        $('#design-' + value + '-products option').prop("selected", false);
        var designProductContainer = $('#design-' + value + '-products option[value=' + idProduct + ']');
        console.log(value + '-' + idProduct + ': ' + designProductContainer.length)
        if (designProductContainer.length > 0) {
          designProductContainer.prop("selected", true);
          getProduct(value);
        }
      });

      var shopProductId = 0;
      var shopProductsIds = [];
      $('div[id^="product-"]').each(function() {
        shopProductId = $(this).attr('id').replace(/[^0-9]/g, '');
        if ($.inArray(shopProductId, shopProductsIds) < 0) {
          shopProductsIds.push(shopProductId);
        }
      });

      $.each(shopProductsIds, function(index, value) {
        $('#product-' + value + '-products option').prop("selected", false);
        var shopProductProductContainer = $('#product-' + value + '-products option[value=' + idProduct + ']');
        console.log(value + '-' + idProduct + ': ' + shopProductProductContainer.length)
        if (shopProductProductContainer.length > 0) {
          shopProductProductContainer.prop("selected", true);
          getShopProduct(value);
        }
      });
      $('.clothes-icons li img').removeClass('active');
      $('#inventoryProduct' + idProduct).addClass('active');
    }
  </script>
  <div class="row " style="background-color: #3333331c;">
    <div class="col-md-3">
      <div class="slider-wrapper">
        <ul id="design-24914-images" class="product-slider rslides">
          <li class="vector">
            <img class="img-responsive" src="hinhanh/1.png" alt="shadow in the night" style="background-color:#171717;"/>
          </li>
          <li class="vector">
            <img class="img-responsive sau" src="hinhanh/2.png" alt="shadow in the night" style="background-color:#171717;"/>
          </li>
        </ul>
      </div>     
      <div class="row">
        <div class="col-md-8 product-options">
          <h4>FICTIONAL CHARACTERS
            <P>BY
              <a href="#">BLANCAVIDAL</a>
            </P>
          </h4>
        </div>
        <div class="col-md-4 product-price"><span>11.50</span>
          <em>USD</em>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 product-select">
            <select name="" class="product-type">
              <option value="">T-shirt</option>
              <option value="">Deep Neck</option>
              <option value="">V-Neck</option>
              <option value="">Kids Shirt</option>
              <option value="">Tank Top</option>
              <option value="">Long Sleeve</option>
              <option value="">SWEATSHIRT</option>
              <option value="">HOODIE</option>
              <option value="">Zipped Hoodie</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
            <select name="" class="product-type">
              <option value="">MEN</option>
              <option value="">WOMAN</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-6 product-select" style="width: ">
            <select name="" class="product-type">
              <option value="">SELECT ZISE</option>
              <option value="">S</option>
              <option value="">M</option>
              <option value="">L</option>
              <option value="">XL</option>
              <option value="">2XL</option>
              <option value="">3XL</option>
            </select>
        </div>
      </div>
      
      <div class="colors-select">
        <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
          <div style="text-align:center; padding-top: 5px;"><span style="color: #959595;">Available colors:</span></div>
        </div>
        <div class="col-md-12 col-lg-6 product-select">
          <div class="colours">
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #060606;" type="button" class="btnden" value=""></label>
          </div>
        </div>
      </div>
      </div>
      <div class="order-it">
        <div class="row">
        <div class="col-md-12 order-form">
          <button type="button" class="btn-order">Select Size</button>
        </div>
        <div class="col-md-12 size-link">
          <div class="col-md-12 order-time-col">
            <span class="order-time" type="">Approximate date of shipment: <span>26-02-2019</span></span>
          </div>
          <div class="col-md-12 costs-and-size">
            <a href="#">
               Shipping costs
              <i class="fa fa-plane icoon"></i>
            </a>
            <a href="#">
                Size Chart
              <i class="fa fa-rocket icoon"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="col-md-3" >
              <div class="slider-wrapper">
                <ul id="design-24914-images" class="product-slider rslides">
                  <li class="vector">
                    <img class="img-responsive" src="hinhanh/1.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                  <li>
                  <img class="img-responsive sau1" src="hinhanh/2.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                  </div>
          <div class="row">
        <div class="col-md-8 product-options">
          <h4>FICTIONAL CHARACTERS
            <P>BY
              <a href="#">BLANCAVIDAL</a>
            </P>
          </h4>
        </div>
        <div class="col-md-4 product-price"><span>11.50</span>
          <em>USD</em>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 product-select">
            <select name="" class="product-type">
              <option value="">T-shirt</option>
              <option value="">Deep Neck</option>
              <option value="">V-Neck</option>
              <option value="">Kids Shirt</option>
              <option value="">Tank Top</option>
              <option value="">Long Sleeve</option>
              <option value="">SWEATSHIRT</option>
              <option value="">HOODIE</option>
              <option value="">Zipped Hoodie</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
            <select name="" class="product-type">
              <option value="">MEN</option>
              <option value="">WOMEN</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-6 product-select" style="width: ">
            <select name="" class="product-type">
              <option value="">SELECT SIZE</option>
              <option value="">S</option>
              <option value="">M</option>
              <option value="">L</option>
              <option value="">XL</option>
              <option value="">2XL</option>
              <option value="">3XL</option>
            </select>
        </div>
      </div>
      <div class="colors-select">
        <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
          <div style="text-align:center; padding-top: 5px;"><span style="color: #959595;">Available colors:</span></div>
        </div>
        <div class="col-md-12 col-lg-6 product-select">
          <div class="colours">
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #060606;" type="button" class="btnden1" value=""></label>
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #69713a;" type="button" class="btnxanh" value=""></label>
          </div>
        </div>
      </div>
      </div>
      <div class="order-it">
        <div class="row">
        <div class="col-md-12 order-form">
          <button type="button" class="btn-order">Select Size</button>
        </div>
        <div class="col-md-12 size-link">
          <div class="col-md-12 order-time-col">
            <span class="order-time" type="">Approximate date of shipment: <span>26-02-2019</span></span>
          </div>
          <div class="col-md-12 costs-and-size">
            <a href="#">
               Shipping costs
              <i class="fa fa-plane icoon"></i>
            </a>
            <a href="#">
                Size Chart
              <i class="fa fa-rocket icoon"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="col-md-3">
              <div class="slider-wrapper">
                <ul id="design-24914-images" class="product-slider rslides">
                  <li class="vector">
                    <img class="img-responsive" src="hinhanh/1.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                  <li>
                  <img class="img-responsive sau2" src="hinhanh/2.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                  </div>
          <div class="row">
        <div class="col-md-8 product-options">
          <h4>FICTIONAL CHARACTERS
            <P>BY
              <a href="#">BLANCAVIDAL</a>
            </P>
          </h4>
        </div>
        <div class="col-md-4 product-price"><span>11.50</span>
          <em>USD</em>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 product-select">
            <select name="" class="product-type">
              <option value="">T-shirt</option>
              <option value="">Deep Neck</option>
              <option value="">V-Neck</option>
              <option value="">Kids Shirt</option>
              <option value="">Tank Top</option>
              <option value="">Long Sleeve</option>
              <option value="">SWEATSHIRT</option>
              <option value="">HOODIE</option>
              <option value="">Zipped Hoodie</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
            <select name="" class="product-type">
              <option value="">MEN</option>
              <option value="">WOMEN</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-6 product-select" style="width: ">
            <select name="" class="product-type">
              <option value="">SELECT ZISE</option>
              <option value="">S</option>
              <option value="">M</option>
              <option value="">L</option>
              <option value="">XL</option>
              <option value="">2XL</option>
              <option value="">3XL</option>
            </select>
        </div>
      </div>
      <div class="colors-select">
        <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
          <div style="text-align:center; padding-top: 5px;"><span style="color: #959595;">Available colors:</span></div>
        </div>
        <div class="col-md-12 col-lg-6 product-select">
          <div class="colours">
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #060606;" type="button" class="btnden2" value=""></label>
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #9d00ff;" type="button" class="btntim" value=""></label>
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #4a90e2;" type="button" class="btntroi" value=""></label>
          </div>
        </div>
      </div>
      </div>
      <div class="order-it">
        <div class="row">
        <div class="col-md-12 order-form">
          <button type="button" class="btn-order">Select Size</button>
        </div>
        <div class="col-md-12 size-link">
          <div class="col-md-12 order-time-col">
            <span class="order-time" type="">Approximate date of shipment: <span>26-02-2019</span></span>
          </div>
          <div class="col-md-12 costs-and-size">
            <a href="#">
               Shipping costs
              <i class="fa fa-plane icoon"></i>
            </a>
            <a href="#">
                Size Chart
              <i class="fa fa-rocket icoon"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="col-md-3">
                    <div class="slider-wrapper">
                <ul id="design-24914-images" class="product-slider rslides">
                  <li class="vector">
                    <img class="img-responsive" src="hinhanh/1.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                  <li>
                  <img class="img-responsive sau3" src="hinhanh/2.png" alt="Shadow In The Night" style="background-color:#171717;" />
                  </li>
                </ul>
                  </div>
          <div class="row">
        <div class="col-md-8 product-options">
          <h4>FICTIONAL CHARACTERS
            <P>BY
              <a href="#">BLANCAVIDAL</a>
            </P>
          </h4>
        </div>
        <div class="col-md-4 product-price"><span>11.50</span>
          <em>USD</em>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 product-select">
            <select name="" class="product-type">
              <option value="">T-shirt</option>
              <option value="">Deep Neck</option>
              <option value="">V-Neck</option>
              <option value="">Kids Shirt</option>
              <option value="">Tank Top</option>
              <option value="">Long Sleeve</option>
              <option value="">SWEATSHIRT</option>
              <option value="">HOODIE</option>
              <option value="">Zipped Hoodie</option>
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
            <select name="" class="product-type">
              <option value="">MEN</option>
              <option value="">WOMEN</option>
            </select>
        </div>
        <div class="col-md-12 col-lg-6 product-select" style="width: ">
            <select name="" class="product-type">
              <option value="">SELECT ZISE</option>
              <option value="">S</option>
              <option value="">M</option>
              <option value="">L</option>
              <option value="">XL</option>
              <option value="">2XL</option>
              <option value="">3XL</option>
            </select>
        </div>
      </div>
      <div class="colors-select">
        <div class="row">
        <div class="col-md-12 col-lg-6 product-select">
          <div style="text-align:center; padding-top: 5px;"><span style="color: #959595;">Available colors:</span></div>
        </div>
        <div class="col-md-12 col-lg-6 product-select">
          <div class="colours">
            <label style="background-color: #171717; width: 35px;"><input style="width: 100%; background-color: #060606;" type="button" class="btnden3" value=""></label>
          </div>
        </div>
      </div>
      </div>
      <div class="order-it">
        <div class="row">
        <div class="col-md-12 order-form">
          <button type="button" class="btn-order">Select Size</button>
        </div>
        <div class="col-md-12 size-link">
          <div class="col-md-12 order-time-col">
            <span class="order-time" type="">Approximate date of shipment: <span>26-02-2019</span></span>
          </div>
          <div class="col-md-12 costs-and-size">
            <a href="#">
               Shipping costs
              <i class="fa fa-plane icoon"></i>
            </a>
            <a href="#">
                Size Chart
              <i class="fa fa-rocket icoon"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
<!-- hết của cường mách dú -->



<!--      của phượng -->
<section class="no-pad hidden-xs" style="overflow: hidden;">
            <div class="container" style="margin-top: -15px;">
                <div class="row main-products-double">
                    <div class="main-products-double-first">
                        <div class="row main-products-double-first-first">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Visit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        14.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Visit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        14.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Visit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        14.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row main-products-double-first-secound">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Visit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        14.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Visit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">14.00 USD</span>
                                        <strong>11.20 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/anorlondon.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">VVisit Mordor</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        14.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="main-products-double-secound">
                        <a href="#" class="main-products-double-inter-1" title="Posters">
                        <button class="limited-banners-hover main-products-double-secound-btn">Posters</button>
                        </a>
                        <img src="images/limited/poster.png" alt="Posters" title="Posters" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <div class="container hidden-xs">
            <a href="#" title="Newsletter">
            <img class="main-separator-banner img-responsive" src="images/limited/Newsletter.jpg" alt="Newsletter" title="Newsletter">
            </a>
        </div>
        <section class="no-pad hidden-xs" style="overflow: hidden;">
            <div class="container" style="margin-top: -15px;">
                <div class="row main-products-double main-products-double-inverted">
                    <div class="main-products-double-first">
                        <div class="row main-products-double-first-first">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        15.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        15.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        15.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row main-products-double-first-secound">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        15.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        15.00 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ring Smoke</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">15.00 USD</span>
                                        <strong>12.00 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="main-products-double-secound">
                        <a href="#" class="main-products-double-inter-1" title="Tote bags">
                        <button class="limited-banners-hover main-products-double-secound-btn">Tote bags</button>
                        </a>
                        <img src="images/limited/tote.png" alt="Tote bags" title="Tote bags" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <section class="no-pad hidden-xs" style="overflow: hidden;">
            <div class="container" style="margin-top: -15px;">
                <div class="row main-products-double">
                    <div class="main-products-double-first">
                        <div class="row main-products-double-first-first">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row main-products-double-first-secound">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">16.50 USD</span>
                                        <strong>12.37 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">16.50 USD</span>
                                        <strong>12.37 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/valar.png" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Ultra</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="main-products-double-secound">
                        <a href="#" class="main-products-double-inter-1" title="ANIME">
                        <button class="limited-banners-hover main-products-double-secound-btn">ANIME</button>
                        </a>
                        <img src="images/limited/anima.png" alt="ANIME" title="ANIME" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <div class="container hidden-xs">
            <a href="tee-alert/index6e82.html" title="TeeAlert">
            <img class="main-separator-banner img-responsive" src="images/limited/joinour.jpg" alt="TeeAlert" title="TeeAlert">
            </a>
        </div>
        <section class="no-pad hidden-xs" style="overflow: hidden;">
            <div class="container" style="margin-top: -15px;">
                <div class="row main-products-double main-products-double-inverted">
                    <div class="main-products-double-first">
                        <div class="row main-products-double-first-first">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">An Adventurer</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">Grand Rick Auto</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">16.50 USD</span>
                                        <strong>13.20 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">An Adventurer</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row main-products-double-first-secound">
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">An Adventurer</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">16.50 USD</span>
                                        <strong>12.37 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">An Adventurer</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        16.50 USD      </span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="hidden-sm">
                                <div class="main-products-product-cont">
                                    <img src="photos/shop/products/normal/shadow.jpg" class="img-responsive">
                                    <div class="main-products-text">
                                        <div class="main-products-name-cnt">
                                            <span class="main-products-name">An Adventurer</span>
                                        </div>
                                        <hr class="main-products-hr">
                                        <span class="main-products-price">
                                        <span class="previous-price">16.50 USD</span>
                                        <strong>12.37 USD</strong>      </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="main-products-double-secound">
                        <a href="#" class="main-products-double-inter-1" title="Gaming">
                        <button class="limited-banners-hover main-products-double-secound-btn">Gaming</button>
                        </a>
                        <img src="images/limited/gaming.jpg" alt="Gaming" title="Gaming" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <section class="no-pad hidden-xs" style="overflow: hidden;">
            <div class="container">
                <div class="main-products-vertical">
                    <div class="main-products-vertical-first">
                        <a href="#" class="main-products-vertical-inter-1" title="Undies">
                        <button class="limited-banners-hover main-products-vertical-first-btn">Undies</button>
                        </a>
                        <img src="images/limited/undies.jpg" alt="Undies" title="Undies" class="img-responsive">
                    </div>
                    <div class="main-products-vertical-secound">
                        <a href="#">
                            <div class="main-products-product-cont">
                                <img src="photos/shop/products/normal/period.jpg" class="img-responsive">
                                <div class="main-products-text">
                                    <div class="main-products-name-cnt">
                                        <span class="main-products-name">Big Trouble</span>
                                    </div>
                                    <hr class="main-products-hr">
                                    <span class="main-products-price">
                                    13.00 USD      </span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="main-products-product-cont">
                                <img src="photos/shop/products/normal/period.jpg" class="img-responsive">
                                <div class="main-products-text">
                                    <div class="main-products-name-cnt">
                                        <span class="main-products-name">Big Trouble</span>
                                    </div>
                                    <hr class="main-products-hr">
                                    <span class="main-products-price">
                                    13.00 USD      </span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="main-products-product-cont">
                                <img src="photos/shop/products/normal/period.jpg" class="img-responsive">
                                <div class="main-products-text">
                                    <div class="main-products-name-cnt">
                                        <span class="main-products-name">Big Trouble</span>
                                    </div>
                                    <hr class="main-products-hr">
                                    <span class="main-products-price">
                                    13.00 USD      </span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="main-products-product-cont">
                                <img src="photos/shop/products/normal/period.jpg" class="img-responsive">
                                <div class="main-products-text">
                                    <div class="main-products-name-cnt">
                                        <span class="main-products-name">Big Trouble</span>
                                    </div>
                                    <hr class="main-products-hr">
                                    <span class="main-products-price">
                                    13.00 USD      </span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="main-products-product-cont">
                                <img src="photos/shop/products/normal/period.jpg" class="img-responsive">
                                <div class="main-products-text">
                                    <div class="main-products-name-cnt">
                                        <span class="main-products-name">Big Trouble</span>
                                    </div>
                                    <hr class="main-products-hr">
                                    <span class="main-products-price">
                                    13.00 USD      </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
<!--      hết của phượng -->
<!-- của phượng 2 -->
<div class="section" id="instagram_slider">
        <div class="container">
            <h2><span>You and your #OtherTees</span></h2>
            <p>Join us on Instagram</p>
            <ul id="instagram-feed">
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337" title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4> 
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337" title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4> 
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
                <li>
                    <a href="#" target="_self"><img src="photos/instagram/aodaidien.jpg" alt="kiwipanda1337 title="kiwipanda1337" /></a>
                    <h4>kiwipanda1337</h4>
                </li>
        </div>
    </div>
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
@section('script')
<script>
  $(".btnden").click(function(){
    $(".sau").css("background-color","#171717");
  });
</script>
<script>
  $(".btnden1").click(function(){
    $(".sau1").css("background-color","#171717");
  });
</script>
<script>
  $(".btnden2").click(function(){
    $(".sau2").css("background-color","#171717");
  });
</script>
<script>
  $(".btnden3").click(function(){
    $(".sau3").css("background-color","#171717");
  });
</script>

<script>
  $(".btnxanh").click(function(){
    $(".sau1").css("background-color","#69713A");
  });
</script>
<script>
  $(".btntim").click(function(){
    $(".sau2").css("background-color","#9D00FF");
  });
</script>
<script>
  $(".btntroi").click(function(){
    $(".sau2").css("background-color","#4A90E2");
  });
</script>
@endsection
import React from 'react'

export default function SlideArea() {
    return (
       <div className="hero-slider-area">
  <div className="container">
    <div className="row">
      <div className="col-lg-3">
        <div className="categories-menu-wrap mt-30">
          <div className="categories_menu">
            <div className="categories_title">
              <h5 className="categori_toggle">Categories</h5>
            </div>
            <div className="categories_menu_toggle">
              <ul>
                <li className="menu_item_children categorie_list"><a href="shop-list-left.html">Breakfast<i className="fa fa-angle-right" /></a>
                  <ul className="categories_mega_menu">
                    <li><a href="shop-list-left.html">Bread sandwitch</a></li>
                    <li><a href="shop-list-left.html"> Indian Style</a></li>
                    {/* <li><a href="#">Roe</a></li> */}
                  </ul>
                </li>
                <li className="menu_item_children"><a href="shop-list-left.html">Lunch <i className="fa fa-angle-right" /></a>
                  <ul className="categories_mega_menu">
                    <li><a href="shop-list-left.html">Compound Butter</a></li>
                    {/* <li><a href="#">Cultured Butter</a></li>
                                          <li><a href="#">Whipped Butter</a></li> */}
                  </ul>
                </li>
                <li className="menu_item_children"><a href="shop-list-left.html">Dinner <i className="fa fa-angle-right" /></a>
                  <ul className="categories_mega_menu">
                    <li><a href="shop-list-left.html">Mango</a></li>
                    <li><a href="shop-list-left.html">Plumsor</a></li>
                    <li><a href="shop-list-left.html">Raisins</a></li>
                  </ul>
                </li>
                <li className="menu_item_children"><a href="shop-list-left.html">Snacks <i className="fa fa-angle-right" /></a>
                  <ul className="categories_mega_menu">
                    <li><a href="shop-list-left.html">Mango</a></li>
                    <li><a href="shop-list-left.html">Plumsor</a></li>
                    <li><a href="shop-list-left.html">Raisins</a></li>
                  </ul>
                </li>
                <li className="menu_item_children"><a href="shop-list-left.html">Shakes and Juices <i className="fa fa-angle-right" /></a>
                  <ul className="categories_mega_menu">
                    <li><a href="shop-list-left.html">Mango</a></li>
                    <li><a href="shop-list-left.html">Plumsor</a></li>
                    <li><a href="shop-list-left.html">Raisins</a></li>
                  </ul>
                </li>
                {/* <li class="menu_item_children"><a href="#">Fruits <i class="fa fa-angle-right"></i></a>
                                      <ul class="categories_mega_menu">
                                          <li><a href="#">Mango</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu_item_children"><a href="#">Milk & Cream <i class="fa fa-angle-right"></i></a>
                                      <ul class="categories_mega_menu">
                                          <li><a href="#">Mango</a></li>
                                          <li><a href="#">Plumsor</a></li>
                                      </ul>
                                  </li>
                                  <li class="menu_item_children"><a href="#">Vegetables <i class="fa fa-angle-right"></i></a>
                                      <ul class="categories_mega_menu">
                                          <li><a href="#">Mango</a></li>
                                          <li><a href="#">Raisins</a></li>
                                      </ul>
                                  </li> */}
                {/* <li><a href="#">Prime Video</a> */}
                <li className="hide-child"><a href="shop.html">Fruits</a></li>
                <li className="categories-more-less ">
                  <a className="more-default"><span className="c-more" />+ More Categories</a>
                  <a className="less-show"><span className="c-more" />- Less Categories</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div className="col-lg-9">
        <div className="hero-slider-wrapper mt-30">
          {/* Hero Slider Start */}
          <div className="hero-slider-area hero-slider-one">
            <div className="swiper-container gallery-top">
              <div className="swiper-wrapper">
                <div className="swiper-slide" style={{backgroundImage: 'url(frontend_assets/images/slider/slide-bg-1.jpg)'}}>
                  <div className="hero-content-one">
                    <div className="slider-content-text">
                      <h2>Double BBQ <br />Bacon Cheese 2019 </h2>
                      <p>Exclusive Offer -20% Off This Week </p>
                      <div className="slider-btn">
                        <a href="#">shopping Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="swiper-slide" style={{backgroundImage: 'url(frontend_assets/images/slider/slide-bg-2.jpg)'}}>
                  <div className="hero-content-one">
                    <div className="slider-content-text">
                      <h2>ADAM Apple <br />Big Sale 20% Off </h2>
                      <p>Exclusive Offer -20% Off This Week </p>
                      <div className="slider-btn">
                        <a href="#">shopping Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="swiper-slide" style={{backgroundImage: 'url(frontend_assets/images/slider/slide-bg-3.jpg)'}}>
                  <div className="hero-content-one">
                    <div className="slider-content-text">
                      <h2>The Smart <br /> Way To Eat Nuts</h2>
                      <p>Exclusive Offer -20% Off This Week </p>
                      <div className="slider-btn">
                        <a href="#">shopping Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="swiper-slide" style={{backgroundImage: 'url(frontend_assets/images/slider/slide-bg-4.jpg)'}}>
                  <div className="hero-content-one">
                    <div className="slider-content-text">
                      <h2>Fresh Fruits <br />Super Discount</h2>
                      <p>Exclusive Offer -20% Off This Week </p>
                      <div className="slider-btn">
                        <a href="#">shopping Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {/* Add Arrows */}
              {/*<div class="swiper-button-next swiper-button-white"></div>
                      <div class="swiper-button-prev swiper-button-white"></div>*/}
              <div className="swiper-pagination" />
            </div>
            <div className="swiper-container gallery-thumbs">
              <div className="swiper-wrapper">
                <div className="swiper-slide">
                  <div className="slider-thum-text"><span>Double BBQ Bacon Cheese 2019</span></div>
                </div>
                <div className="swiper-slide">
                  <div className="slider-thum-text"><span>ADAM Apple Big Sale 20% Off</span></div>
                </div>
                <div className="swiper-slide">
                  <div className="slider-thum-text"><span>The Smart  Way To Eat Nuts</span></div>
                </div>
                <div className="swiper-slide">
                  <div className="slider-thum-text"><span>Fresh Fruits Super Discount</span></div>
                </div>
              </div>
            </div>
          </div>
          {/* Hero Slider End */}
        </div>
      </div>
    </div>
  </div>
</div>

    )
}

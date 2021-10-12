import React from 'react'

export default function ShopPage() {
    return (

        <div>
  {/* breadcrumb-area start */}
  <div className="breadcrumb-area">
    <div className="container">
      <div className="row">
        <div className="col-12">
          {/* breadcrumb-list start */}
          <ul className="breadcrumb-list">
            <li className="breadcrumb-item"><a href="index.html">Home</a></li>
            <li className="breadcrumb-item active">Shop left sidebar</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap shop-page section-ptb">
    <div className="container">
      <div className="row">
        <div className="col-lg-3 order-lg-1 order-2">
          {/* shop-sidebar-wrap start */}
          <div className="shop-sidebar-wrap">
            <div className="shop-box-area">
              {/*sidebar-categores-box start  */}
              <div className="sidebar-categores-box shop-sidebar mb-30">
                <h4 className="title">Product categories</h4>
                {/* category-sub-menu start */}
                <div className="category-sub-menu">
                  <ul>
                    <li className="has-sub"><a href="#">Butter &amp; Eggs</a>
                      <ul>
                        <li><a href="#">Compound Butter (3)</a></li>
                        <li><a href="#">Cultured Butter (4)</a></li>
                        <li><a href="#">Whipped Butter (4)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Dried Fruits (2)</a>
                      <ul>
                        <li><a href="#">Mango (2)</a></li>
                        <li><a href="#">Plumsor (1)</a></li>
                        <li><a href="#">Raisins (1)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Fast Food (12)</a>
                      <ul>
                        <li><a href="#">Cheeseburger (4)</a></li>
                        <li><a href="#">Hamburger (4)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Fresh Meat (8)</a>
                      <ul>
                        <li><a href="#">Beef (8)</a></li>
                        <li><a href="#">Sheep's meat (8)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Fruits (11)</a>
                      <ul>
                        <li><a href="#">Beef (8)</a></li>
                        <li><a href="#">Sheep's meat (8)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Milk &amp; Cream (12)</a>
                      <ul>
                        <li><a href="#">Beef (8)</a></li>
                        <li><a href="#">Sheep's meat (8)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Ocean Food (7)</a>
                      <ul>
                        <li><a href="#">Beef (8)</a></li>
                        <li><a href="#">Sheep's meat (8)</a></li>
                      </ul>
                    </li>
                    <li className="has-sub"><a href="#">Uncategorized (0)</a>
                    </li>
                    <li className="has-sub"><a href="#">Vegetables (11)</a>
                      <ul>
                        <li><a href="#">Beef (8)</a></li>
                        <li><a href="#">Sheep's meat (8)</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                {/* category-sub-menu end */}
              </div>
              {/*sidebar-categores-box end  */}
              {/* shop-sidebar start */}
              <div className="shop-sidebar mb-30">
                <h4 className="title">Filter By Price</h4>
                {/* filter-price-content start */}
                <div className="filter-price-content">
                  <form action="#" method="post">
                    <div id="price-slider" className="price-slider" />
                    <div className="filter-price-wapper">
                      <a className="add-to-cart-button" href="#">
                        <span>FILTER</span>
                      </a>
                      <div className="filter-price-cont">
                        <span>Price:</span>
                        <div className="input-type">
                          <input type="text" id="min-price" readOnly />
                        </div>
                        <span>—</span>
                        <div className="input-type">
                          <input type="text" id="max-price" readOnly />
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                {/* filter-price-content end */}
              </div>
              {/* shop-sidebar end */}
              {/* shop-sidebar start */}
              <div className="shop-sidebar mb-30">
                <h4 className="title">Filter by Color</h4>
                <ul className="category-widget-list">
                  <li><a href="#">Red (1)</a></li>
                  <li><a href="#">White (1)</a></li>
                </ul>
              </div>
              {/* shop-sidebar end */}
              {/* shop-sidebar start */}
              <div className="shop-sidebar mb-30">
                <h4 className="title">Product tags</h4>
                <ul className="sidebar-tag">
                  <li><a href="#">accesories</a></li>
                  <li><a href="#">blouse</a></li>
                  <li><a href="#">clothes</a></li>
                  <li><a href="#">desktop</a></li>
                  <li><a href="#">digital</a></li>
                  <li><a href="#">fashion</a></li>
                  <li><a href="#">women</a></li>
                  <li><a href="#">men</a></li>
                  <li><a href="#">laptop</a></li>
                  <li><a href="#">handbag</a></li>
                </ul>
              </div>
              {/* shop-sidebar end */}
            </div>
          </div>
          {/* shop-sidebar-wrap end */}
        </div>
        <div className="col-lg-9 order-lg-2 order-1">
          <div className="shop-banner mb-30">
            <img src="frontend_assets/images/bg/shop-catergorypage.jpg" alt="Shop banner" />
          </div>
          {/* shop-product-wrapper start */}
          <div className="shop-product-wrapper">
            <div className="row align-itmes-center">
              <div className="col">
                {/* shop-top-bar start */}
                <div className="shop-top-bar">
                  {/* product-view-mode start */}
                  <div className="product-mode">
                    {/*shop-item-filter-list*/}
                    <ul className="nav shop-item-filter-list" role="tablist">
                      <li className="active"><a className="active grid-view" data-toggle="tab" href="#grid"><i className="ion-ios-keypad-outline" /></a></li>
                      <li><a className="list-view" data-toggle="tab" href="#list"><i className="ion-ios-list-outline" /></a></li>
                    </ul>
                    {/* shop-item-filter-list end */}
                  </div>
                  {/* product-view-mode end */}
                  {/* product-short start */}
                  <div className="product-short">
                    <p>Sort By :</p>
                    <select className="nice-select" name="sortby">
                      <option value="trending">Relevance</option>
                      <option value="sales">Name(A - Z)</option>
                      <option value="sales">Name(Z - A)</option>
                      <option value="rating">Price(Low &gt; High)</option>
                      <option value="date">Rating(Lowest)</option>
                    </select>
                  </div>
                  {/* product-short end */}
                </div>
                {/* shop-top-bar end */}
              </div>
            </div>
            {/* shop-products-wrap start */}
            <div className="shop-products-wrap">
              <div className="tab-content">
                <div className="tab-pane active" id="grid">
                  <div className="shop-product-wrap">
                    <div className="row row-8">
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-01.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">144.00 - 147.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Select options</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-02.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">14.00</span>
                              <span className="old-price">18.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-03.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">70.00</span>
                              <span className="old-price">80.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-04.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-05.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">144.00 - 147.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Select options</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-15.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">14.00</span>
                              <span className="old-price">18.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-06.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">70.00</span>
                              <span className="old-price">80.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-08.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-10.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">144.00 - 147.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Select options</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-12.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">14.00</span>
                              <span className="old-price">18.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-13.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">70.00</span>
                              <span className="old-price">80.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-09.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-11.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-06.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-14.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                      <div className="product-col col-lg-3 col-md-4 col-sm-6">
                        {/* Single Product Start */}
                        <div className="single-product-wrap mt-10">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-10.jpg" alt /></a>
                            <span className="onsale">Sale!</span>
                          </div>
                          <div className="product-button">
                            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
                          </div>
                          <div className="product-content">
                            <div className="price-box">
                              <span className="new-price">90.00</span>
                              <span className="old-price">95.00</span>
                            </div>
                            <h6 className="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
                            <div className="product-button-action">
                              <a href="#" className="add-to-cart">Add to cart</a>
                            </div>
                          </div>
                        </div>
                        {/* Single Product End */}
                      </div>
                    </div>
                  </div>
                </div>
                <div className="tab-pane" id="list">
                  <div className="shop-product-list-wrap">
                    <div className="row product-layout-list">
                      <div className="col-lg-3 col-md-3">
                        {/* single-product-wrap start */}
                        <div className="single-product">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-14.jpg" alt="Produce Images" /></a>
                          </div>
                        </div>
                        {/* single-product-wrap end */}
                      </div>
                      <div className="col-lg-6 col-md-6">
                        <div className="product-content-list text-left">
                          <div className="price-box">
                            <span className="new-price"> $144.00 – $147.00	</span>
                          </div>
                          <p><a href="product-details.html" className="product-name">Auctor gravida enim</a></p>
                          <div className="product-rating">
                            <ul className="d-flex">
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li className="bad-reting"><a href="#"><i className="icon-star" /></a></li>
                            </ul>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                        </div>
                      </div>
                      <div className="col-lg-3 col-md-3">
                        <div className="block2">
                          <ul className="stock-cont">
                            <li className="product-sku">Sku: <span>P006</span></li>
                            <li className="product-stock-status">Availability: <span className="in-stock">In Stock</span></li>
                          </ul>
                          <div className="product-button">
                            <div className="add-to-cart">
                              <div className="product-button-action">
                                <a href="#" className="add-to-cart">Add to cart</a>
                              </div>
                            </div>
                            <ul className="actions">
                              <li className="add-to-wishlist">
                                <a href="wishlist.html" className="add_to_wishlist"><i className="icon-heart" /> Add to Wishlist</a>
                              </li>
                              <li className="add-to-compare">
                                <div className="compare-button"><a href="compare.html"><i className="icon-sliders" /> Compare</a></div>
                              </li>
                              <li className="quickviewbtn">
                                <a className="detail-link quickview" href="#"> <i className="icon-eye2" /> Quick View</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="shop-product-list-wrap">
                    <div className="row product-layout-list">
                      <div className="col-lg-3 col-md-3">
                        {/* single-product-wrap start */}
                        <div className="single-product">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-13.jpg" alt="Produce Images" /></a>
                          </div>
                        </div>
                        {/* single-product-wrap end */}
                      </div>
                      <div className="col-lg-6 col-md-6">
                        <div className="product-content-list text-left">
                          <div className="price-box">
                            <span className="new-price"> $144.00</span>
                          </div>
                          <p><a href="product-details.html" className="product-name">Auctor gravida enim</a></p>
                          <div className="product-rating">
                            <ul className="d-flex">
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li className="bad-reting"><a href="#"><i className="icon-star" /></a></li>
                            </ul>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                        </div>
                      </div>
                      <div className="col-lg-3 col-md-3">
                        <div className="block2">
                          <ul className="stock-cont">
                            <li className="product-sku">Sku: <span>P006</span></li>
                            <li className="product-stock-status">Availability: <span className="in-stock">In Stock</span></li>
                          </ul>
                          <div className="product-button">
                            <div className="add-to-cart">
                              <div className="product-button-action">
                                <a href="#" className="add-to-cart">Add to cart</a>
                              </div>
                            </div>
                            <ul className="actions">
                              <li className="add-to-wishlist">
                                <a href="wishlist.html" className="add_to_wishlist"><i className="icon-heart" /> Add to Wishlist</a>
                              </li>
                              <li className="add-to-compare">
                                <div className="compare-button"><a href="compare.html"><i className="icon-sliders" /> Compare</a></div>
                              </li>
                              <li className="quickviewbtn">
                                <a className="detail-link quickview" href="#"> <i className="icon-eye2" /> Quick View</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="shop-product-list-wrap">
                    <div className="row product-layout-list">
                      <div className="col-lg-3 col-md-3">
                        {/* single-product-wrap start */}
                        <div className="single-product">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-10.jpg" alt="Produce Images" /></a>
                          </div>
                        </div>
                        {/* single-product-wrap end */}
                      </div>
                      <div className="col-lg-6 col-md-6">
                        <div className="product-content-list text-left">
                          <div className="price-box">
                            <span className="new-price"> $144.00</span>
                            <span className="old-price"> $147.00</span>
                          </div>
                          <p><a href="product-details.html" className="product-name">Auctor gravida enim</a></p>
                          <div className="product-rating">
                            <ul className="d-flex">
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li className="bad-reting"><a href="#"><i className="icon-star" /></a></li>
                            </ul>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                        </div>
                      </div>
                      <div className="col-lg-3 col-md-3">
                        <div className="block2">
                          <ul className="stock-cont">
                            <li className="product-sku">Sku: <span>P006</span></li>
                            <li className="product-stock-status">Availability: <span className="in-stock">In Stock</span></li>
                          </ul>
                          <div className="product-button">
                            <div className="add-to-cart">
                              <div className="product-button-action">
                                <a href="#" className="add-to-cart">Add to cart</a>
                              </div>
                            </div>
                            <ul className="actions">
                              <li className="add-to-wishlist">
                                <a href="wishlist.html" className="add_to_wishlist"><i className="icon-heart" /> Add to Wishlist</a>
                              </li>
                              <li className="add-to-compare">
                                <div className="compare-button"><a href="compare.html"><i className="icon-sliders" /> Compare</a></div>
                              </li>
                              <li className="quickviewbtn">
                                <a className="detail-link quickview" href="#"> <i className="icon-eye2" /> Quick View</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="shop-product-list-wrap">
                    <div className="row product-layout-list">
                      <div className="col-lg-3 col-md-3">
                        {/* single-product-wrap start */}
                        <div className="single-product">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-06.jpg" alt="Produce Images" /></a>
                          </div>
                        </div>
                        {/* single-product-wrap end */}
                      </div>
                      <div className="col-lg-6 col-md-6">
                        <div className="product-content-list text-left">
                          <div className="price-box">
                            <span className="new-price"> $147.00	</span>
                          </div>
                          <p><a href="product-details.html" className="product-name">Auctor gravida enim</a></p>
                          <div className="product-rating">
                            <ul className="d-flex">
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li className="bad-reting"><a href="#"><i className="icon-star" /></a></li>
                            </ul>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                        </div>
                      </div>
                      <div className="col-lg-3 col-md-3">
                        <div className="block2">
                          <ul className="stock-cont">
                            <li className="product-sku">Sku: <span>P006</span></li>
                            <li className="product-stock-status">Availability: <span className="in-stock">In Stock</span></li>
                          </ul>
                          <div className="product-button">
                            <div className="add-to-cart">
                              <div className="product-button-action">
                                <a href="#" className="add-to-cart">Add to cart</a>
                              </div>
                            </div>
                            <ul className="actions">
                              <li className="add-to-wishlist">
                                <a href="wishlist.html" className="add_to_wishlist"><i className="icon-heart" /> Add to Wishlist</a>
                              </li>
                              <li className="add-to-compare">
                                <div className="compare-button"><a href="compare.html"><i className="icon-sliders" /> Compare</a></div>
                              </li>
                              <li className="quickviewbtn">
                                <a className="detail-link quickview" href="#"> <i className="icon-eye2" /> Quick View</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="shop-product-list-wrap">
                    <div className="row product-layout-list">
                      <div className="col-lg-3 col-md-3">
                        {/* single-product-wrap start */}
                        <div className="single-product">
                          <div className="product-image">
                            <a href="product-details.html"><img src="frontend_assets/images/product/product-07.jpg" alt="Produce Images" /></a>
                          </div>
                        </div>
                        {/* single-product-wrap end */}
                      </div>
                      <div className="col-lg-6 col-md-6">
                        <div className="product-content-list text-left">
                          <div className="price-box">
                            <span className="new-price"> $144.00 – $147.00	</span>
                          </div>
                          <p><a href="product-details.html" className="product-name">Auctor gravida enim</a></p>
                          <div className="product-rating">
                            <ul className="d-flex">
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li><a href="#"><i className="icon-star" /></a></li>
                              <li className="bad-reting"><a href="#"><i className="icon-star" /></a></li>
                            </ul>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                        </div>
                      </div>
                      <div className="col-lg-3 col-md-3">
                        <div className="block2">
                          <ul className="stock-cont">
                            <li className="product-sku">Sku: <span>P006</span></li>
                            <li className="product-stock-status">Availability: <span className="in-stock">In Stock</span></li>
                          </ul>
                          <div className="product-button">
                            <div className="add-to-cart">
                              <div className="product-button-action">
                                <a href="#" className="add-to-cart">Add to cart</a>
                              </div>
                            </div>
                            <ul className="actions">
                              <li className="add-to-wishlist">
                                <a href="wishlist.html" className="add_to_wishlist"><i className="icon-heart" /> Add to Wishlist</a>
                              </li>
                              <li className="add-to-compare">
                                <div className="compare-button"><a href="compare.html"><i className="icon-sliders" /> Compare</a></div>
                              </li>
                              <li className="quickviewbtn">
                                <a className="detail-link quickview" href="#"> <i className="icon-eye2" /> Quick View</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {/* shop-products-wrap end */}
            {/* paginatoin-area start */}
            <div className="paginatoin-area">
              <div className="row">
                <div className="col-lg-12 col-md-12">
                  <ul className="pagination-box">
                    <li className="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                      <a className="Next" href="#">Next</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            {/* paginatoin-area end */}
          </div>
          {/* shop-product-wrapper end */}
        </div>
      </div>
    </div>
  </div>
  {/* main-content-wrap end */}
</div>

    )
}

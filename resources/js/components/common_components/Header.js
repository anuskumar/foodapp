import React from 'react'
import {Link} from 'react-router-dom'

function Header() {
    return (
        <div>
            <header className="header">
  {/* Header Top Start */}
  <div className="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">
    <div className="container">
      <div className="row">
        <div className="col-lg-6">
          <div className="header-top-settings">
            <ul className="nav align-items-center">
              <li className="language">English <i className="fa fa-angle-down" />
                <ul className="dropdown-list">
                  <li><a href="#">English</a></li>
                  <li><a href="#">Arabic</a></li>
                </ul>
              </li>
              <li className="curreny-wrap">Currency <i className="fa fa-angle-down" />
                <ul className="dropdown-list curreny-list">
                  <li><a href="#">$ USD</a></li>
                  <li><a href="#"> د AED</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div className="col-lg-6">
          <div className="top-info-wrap text-right">
            <ul className="my-account-container">
              <li><Link replace to="/myaccount">My account</Link></li>
              <li><Link replace to="/cart">cart</Link></li>
              <li><Link replace to="/wishlist">Wishlist</Link></li>
              <li><Link replace to="/checkout">Checkout</Link></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* Header Top End */}
  {/* haeader Mid Start */}
  <div className="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
    <div className="container">
      <div className="row align-items-center">
        <div className="col-lg-3 col-md-4 col-5">
          <div className="logo-area">
            <a href="#/"><img src="frontend_assets/images/logo/i-logo.png" alt="logo" /></a>
          </div>
        </div>
        <div className="col-lg-5">
          <div className="search-box-wrapper">
            <div className="search-box-inner-wrap">
              <div className="search-title text-white d-flex">
                <p>Top Tags: </p>
                <ul>
                  <li><a href="#">Cakes, Arabic Foods,</a></li>
                  <li><a href="#">Juices</a></li>
                </ul>
              </div>
              <form className="search-box-inner">
                <div className="search-select-box">
                  <select className="nice-select">
                    <optgroup label="organic food">
                      <option value="volvo">All</option>
                      <option value="saab">Kerala Sadhya</option>
                      <option value="saab">Chines Foods</option>
                    </optgroup>
                    <optgroup label="Fashion">
                      <option value="mercedes">Arabic Foods</option>
                      <option value="audi">Indian Foods</option>
                      <option value="audi">Pakisthani Foods</option>
                      <option value="audi">French Foods</option>
                      <option value="audi">Malabari Foods</option>
                      <option value="audi">Hydhrabadhi Foods</option>
                    </optgroup>
                  </select>
                </div>
                <div className="search-field-wrap">
                  <input type="text" className="search-field" placeholder="Search product..." />
                  <div className="search-btn">
                    <button><i className="icon-search" /></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div className="col-lg-4">
          <div className="customer-wrap green-bg">
            <div className="single-costomer-box">
              <div className="single-costomer">
                <p><i className="icon-check-circle" /><span>Free Delivery</span></p>
              </div>
            </div>
            <div className="single-costomer-box">
              <div className="single-costomer">
                <p><i className="icon-lock" /><span>Safe Payment</span></p>
              </div>
            </div>
            <div className="single-costomer-box">
              <div className="single-costomer">
                <p><i className="icon-bell" /><span>24/7 Support</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* haeader Mid End */}
  {/* haeader bottom Start */}
  <div className="haeader-bottom-area bg-gren header-sticky">
    <div className="container">
      <div className="row align-items-center">
        <div className="col-lg-9 d-none d-lg-block">
          <div className="main-menu-area white_text">
            {/*  Start Mainmenu Nav*/}
            <nav className="main-navigation">
              <ul>
                {/* <li><Link to="/" replace >Home</Link></li> */}
                <li><a href="/foodapp/public/">Home</a></li>
                <li><Link to="/shop" replace >Shop</Link></li>
                <li><Link to="/about" replace >About Us</Link></li>
                <li><Link to="/contact-us" replace >Contact Us</Link></li>
                <li><Link to="/login" replace >Login</Link></li>
              </ul>
            </nav>
          </div>
        </div>
        <div className="col-5 col-md-6 d-block d-lg-none">
          <div className="logo"><a href="index.html"><img src="frontend_assets/images/logo/logo.png" alt /></a></div>
        </div>
        <div className="col-lg-3 col-md-6 col-7">
          <div className="right-blok-box text-white d-flex">
            <div className="user-wrap">
            <Link replace to="/wishlist"><span className="cart-total">2</span> <i className="icon-heart" /></Link>
            </div>
            <div className="shopping-cart-wrap">
              <a href="#"><i className="icon-shopping-bag2" /><span className="cart-total">2</span> <span className="cart-total-amunt">$0.00</span></a>
              <ul className="mini-cart">
                <li className="cart-item">
                  <div className="cart-image">
                    <a href="single-product.html"><img alt src="frontend_assets/images/product/product-01.jpg" /></a>
                  </div>
                  <div className="cart-title">
                    <a href="single-product.html">
                      <h4>Product Name 01</h4>
                    </a>
                    <div className="quanti-price-wrap">
                      <span className="quantity">1 ×</span>
                      <div className="price-box"><span className="new-price">$130.00</span></div>
                    </div>
                    <a className="remove_from_cart" href="#"><i className="icon-x" /></a>
                  </div>
                </li>
                <li className="cart-item">
                  <div className="cart-image">
                    <a href="single-product.html"><img alt src="frontend_assets/images/product/product-02.jpg" /></a>
                  </div>
                  <div className="cart-title">
                    <a href="single-product.html">
                      <h4>Product Name 03</h4>
                    </a>
                    <div className="quanti-price-wrap">
                      <span className="quantity">1 ×</span>
                      <div className="price-box"><span className="new-price">$130.00</span></div>
                    </div>
                    <a className="remove_from_cart" href="#"><i className="icon-trash icons" /></a>
                  </div>
                </li>
                <li className="subtotal-box">
                  <div className="subtotal-title">
                    <h3>Sub-Total :</h3><span>$ 260.99</span>
                  </div>
                </li>
                <li className="mini-cart-btns">
                  <div className="cart-btns">
                  <Link replace to="/cart">View cart</Link>
                  <Link replace to="/checkout">Checkout</Link>
                  </div>
                </li>
              </ul>
            </div>
            <div className="mobile-menu-btn d-block d-lg-none">
              <div className="off-canvas-btn">
                <a href="#"><img src="frontend_assets/images/icon/bg-menu.png" alt /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {/* haeader bottom End */}
  {/* off-canvas menu start */}
  <aside className="off-canvas-wrapper">
    <div className="off-canvas-overlay" />
    <div className="off-canvas-inner-content">
      <div className="btn-close-off-canvas">
        <i className="icon-x" />
      </div>
      <div className="off-canvas-inner">
        <div className="search-box-offcanvas">
          <form>
            <input type="text" placeholder="Search product..." />
            <button className="search-btn"><i className="icon-search" /></button>
          </form>
        </div>
        {/* mobile menu start */}
        <div className="mobile-navigation">
          {/* mobile menu navigation start */}
          <nav>
            <ul className="mobile-menu">
              <li className="menu-item-has-children"><a href="#">Home</a>
                {/* <ul class="dropdown">
                          <li><a href="index.html">Home Page 1</a></li>
                          <li><a href="index-2.html">Home Page 2</a></li>
                          <li><a href="index-3.html">Home Page 3</a></li>
                          <li><a href="index-4.html">Home Page 4</a></li>
                          <li><a href="index-5.html">Home Page 5</a></li><li><a href="index-6.html">Home Page 6</a></li>
                      </ul> */}
              </li>
              <li className="menu-item-has-children"><a href="#">Shop</a>
                <ul className="megamenu dropdown">
                  <li className="mega-title has-children"><a href="#">Shop Layouts</a>
                    <ul className="dropdown">
                      <li><a href="shop.html">Shop Left Sidebar</a></li>
                      <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                      <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                      <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                      <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                    </ul>
                  </li>
                  <li className="mega-title has-children"><a href="#">Product Details</a>
                    <ul className="dropdown">
                      <li><a href="product-details.html">Single Product Details</a></li>
                      <li><a href="variable-product-details.html">Variable Product Details</a></li>
                      <li><a href="external-product-details.html">External Product Details</a></li>
                      <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                    </ul>
                  </li>
                  <li className="mega-title has-children"><a href="#">Shop Pages</a>
                    <ul className="dropdown">
                      <li><a href="error404.html">Error 404</a></li>
                      <li><a href="compare.html">Compare Page</a></li>
                      <li><Link replace to="/cart">cart</Link></li>
                      <li><Link replace to="/checkout">Checkout</Link></li>
                      <li><Link replace to="/wishlist">Wish List Page</Link></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li className="menu-item-has-children "><a href="#">Blog</a>
                <ul className="dropdown">
                  <li><a href="blog.html">Blog Left Sidebar</a></li>
                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                  <li><a href="blog-grid.html">Blog Grid Page</a></li>
                  <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                  <li><a href="blog-details.html">Blog Details Page</a></li>
                </ul>
              </li>
              <li className="menu-item-has-children "><a href="#">Pages</a>
                <ul className="dropdown">
                  <li><a href="frequently-questions.html">FAQ</a></li>
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="login-register.html">login &amp; register</a></li>
                </ul>
              </li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="contact-us.html">Contact</a></li>
            </ul>
          </nav>
          {/* mobile menu navigation end */}
        </div>
        {/* mobile menu end */}
        <div className="header-top-settings offcanvas-curreny-lang-support">
          <h5>My Account</h5>
          <ul className="nav align-items-center">
            <li className="language">English <i className="fa fa-angle-down" />
              <ul className="dropdown-list">
                <li><a href="#">English</a></li>
                <li><a href="#">Arabic</a></li>
              </ul>
            </li>
            <li className="curreny-wrap">Currency <i className="fa fa-angle-down" />
              <ul className="dropdown-list curreny-list">
                <li><a href="#">$ USD</a></li>
                <li><a href="#"> د AED</a></li>
              </ul>
            </li>
          </ul>
        </div>
        {/* offcanvas widget area start */}
        <div className="offcanvas-widget-area">
          <div className="top-info-wrap text-left text-black">
            <h5>My Account</h5>
            <ul className="offcanvas-account-container">
              <li><a href="my-account.html">My account</a></li>
              <li><Link replace to="/cart">cart</Link></li>
              <li><Link replace to="/wishlist">Wishlist</Link></li>
              <li><Link replace to="/checkout">Checkout</Link></li>
            </ul>
          </div>
        </div>
        {/* offcanvas widget area end */}
      </div>
    </div>
  </aside>
  {/* off-canvas menu end */}
</header>


        </div>
    )
}

export default Header

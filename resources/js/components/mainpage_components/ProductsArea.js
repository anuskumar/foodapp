import React from 'react'

function ProductsArea() {
    return (
        <div>
 <div className="product-area section-pt-30">
  <div className="container">
    <div className="row">
      <div className="col-lg-6 col-md-6">
        {/* Section Title Start */}
        <div className="section-title">
          <h3>On Sale Products</h3>
        </div>
        {/* Section Title End */}
      </div>
      <div className="col-lg-6 col-md-6">
        {/* Section Title Start */}
        <div className="view-all-product text-right">
          <a href="#">View All Products <i className="icon-chevrons-right" /></a>
        </div>
        {/* Section Title End */}
      </div>
    </div>
    <div className="row row-8 product-two-row-4">
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-15.jpg" alt /></a>
            <span className="onsale">Sale!</span>
          </div>
          <div className="product-button">
            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
          </div>
          <div className="product-content">
            <div className="price-box">
              <span className="new-price">144.00 - 147.00</span>
            </div>
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquam lobortis</a></h6>
            <div className="product-button-action">
              {/* <a href="#open-modal" class="add-to-cart">Select options</a> */}
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
        {/* modal started */}
        {/* <div class="buttons-container">  <button class="open-modal">Open Modal</button> </div>


                  <div class="modal hide">
                    <div class="modal-container hide">
                      <div class="modal-header">
                       <button class="close-modal"><i class="fas fa-close"></i></button>
                      </div>
                      <div class="modal-content"> */}
        {/* modal content started    */}
        {/* modal content ended */}
        {/* </div>
                    </div>
                  </div> */}
        {/* modal ended */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-12.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquet auctor sem</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-13.jpg" alt /></a>
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
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-14.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Auctor gravida enim</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-11.jpg" alt /></a>
            <span className="onsale">Sale!</span>
          </div>
          <div className="product-button">
            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
          </div>
          <div className="product-content">
            <div className="price-box">
              <span className="new-price">144.00 - 147.00</span>
            </div>
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquam lobortis</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-02.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquet auctor sem</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-07.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Auctor gravida enim</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-08.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Auctor gravida enim</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-01.jpg" alt /></a>
            <span className="onsale">Sale!</span>
          </div>
          <div className="product-button">
            <a href="wishlist.html" className="add-to-wishlist"><i className="icon-heart" /></a>
          </div>
          <div className="product-content">
            <div className="price-box">
              <span className="new-price">144.00 - 147.00</span>
            </div>
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquam lobortis</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-02.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Aliquet auctor sem</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
        {/* Single Product Start */}
        <div className="single-product-wrap mt-10">
          <div className="product-image">
            <a data-toggle="modal" data-target="#exampleModalCenter"><img src="frontend_assets/images/product/product-03.jpg" alt /></a>
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
            <h6 className="product-name"><a data-toggle="modal" data-target="#exampleModalCenter">Auctor gravida enim</a></h6>
            <div className="product-button-action">
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
      <div className="product-col">
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
              <button type="button" className="add-to-cart" data-toggle="modal" data-target="#exampleModalCenter">
                View
              </button>
            </div>
          </div>
        </div>
        {/* Single Product End */}
      </div>
    </div>
  </div>
</div>

        </div>
    )
}

export default ProductsArea

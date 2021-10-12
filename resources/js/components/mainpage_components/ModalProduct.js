import React from 'react'

function ModalProduct() {
    return (
       <div>
  <div className="modal fade" id="exampleModalCenter" tabIndex={-1} role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div className="modal-dialog modal-dialog-centered" role="document">
      <div className="modal-content">
        {/* <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> */}
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. .</p>
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
                        <a className="add-to-cart" style={{backgroundColor: 'red'}} data-dismiss="modal" aria-label="Close">X</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    )
}

export default ModalProduct

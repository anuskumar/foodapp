import React from 'react'

function WishlistPage() {
    return (
        <div>
      <div>
  {/* breadcrumb-area start */}
  <div className="breadcrumb-area">
    <div className="container">
      <div className="row">
        <div className="col-12">
          {/* breadcrumb-list start */}
          <ul className="breadcrumb-list">
            <li className="breadcrumb-item"><a href="index.html">Home</a></li>
            <li className="breadcrumb-item active">Wishlist Page</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap section-ptb">
    <div className="container">
      <div className="row">
        <div className="col-12">
          <form action="#" className="cart-table">
            <div className=" table-content table-responsive">
              <table className="table">
                <thead>
                  <tr>
                    <th className="plantmore-product-thumbnail">Images</th>
                    <th className="cart-product-name">Product</th>
                    <th className="plantmore-product-price">Unit Price</th>
                    <th className="plantmore-product-stock-status">Stock Status</th>
                    <th className="plantmore-product-add-cart">Add to cart</th>
                    <th className="plantmore-product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/02.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">Nullam maximus</a></td>
                    <td className="plantmore-product-price"><span className="amount">$23.39</span></td>
                    <td className="plantmore-product-stock-status"><span className="in-stock">in stock</span></td>
                    <td className="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/01.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">Natus erro</a></td>
                    <td className="plantmore-product-price"><span className="amount">$30.50</span></td>
                    <td className="plantmore-product-stock-status"><span className="in-stock">in stock</span></td>
                    <td className="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/03.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">Sit voluptatem</a></td>
                    <td className="plantmore-product-price"><span className="amount">$40.19</span></td>
                    <td className="plantmore-product-stock-status"><span className="out-stock">out stock</span></td>
                    <td className="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {/* main-content-wrap end */}
</div>


        </div>
    )
}

export default WishlistPage

import React from 'react'

function CartPage() {
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
            <li className="breadcrumb-item active">Cart Page</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap section-ptb cart-page">
    <div className="container">
      <div className="row">
        <div className="col-12">
          <form action="#" className="cart-table">
            <div className="table-content table-responsive">
              <table className="table">
                <thead>
                  <tr>
                    <th className="plantmore-product-thumbnail">Images</th>
                    <th className="cart-product-name">Product</th>
                    <th className="plantmore-product-price">Unit Price</th>
                    <th className="plantmore-product-quantity">Quantity</th>
                    <th className="plantmore-product-subtotal">Total</th>
                    <th className="plantmore-product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/01.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">Compete Track Tote</a></td>
                    <td className="plantmore-product-price"><span className="amount">$70.00</span></td>
                    <td className="plantmore-product-quantity">
                      <input defaultValue={1} type="number" />
                    </td>
                    <td className="product-subtotal"><span className="amount">$70.00</span></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/02.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">Vestibulum suscipit</a></td>
                    <td className="plantmore-product-price"><span className="amount">$60.50</span></td>
                    <td className="plantmore-product-quantity">
                      <input defaultValue={1} type="number" />
                    </td>
                    <td className="product-subtotal"><span className="amount">$60.50</span></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                  <tr>
                    <td className="plantmore-product-thumbnail"><a href="#"><img src="frontend_assets/images/other/03.jpg" alt /></a></td>
                    <td className="plantmore-product-name"><a href="#">suscip dictum magna</a></td>
                    <td className="plantmore-product-price"><span className="amount">$40.50</span></td>
                    <td className="plantmore-product-quantity">
                      <input defaultValue={1} type="number" />
                    </td>
                    <td className="product-subtotal"><span className="amount">$40.50</span></td>
                    <td className="plantmore-product-remove"><a href="#"><i className="icon-x" /></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div className="row">
              <div className="col-md-8">
                <div className="coupon-all">
                  <div className="coupon2">
                    <input className="submit" name="update_cart" defaultValue="Update cart" type="submit" />
                    <a href="shop.html" className=" continue-btn">Continue Shopping</a>
                  </div>
                  <div className="coupon">
                    <h3>Coupon</h3>
                    <p>Enter your coupon code if you have one.</p>
                    <input id="coupon_code" className="input-text" name="coupon_code" defaultValue placeholder="Coupon code" type="text" />
                    <input className="button" name="apply_coupon" defaultValue="Apply coupon" type="submit" />
                  </div>
                </div>
              </div>
              <div className="col-md-4 ml-auto">
                <div className="cart-page-total">
                  <h2>Cart totals</h2>
                  <ul>
                    <li>Subtotal <span>$170.00</span></li>
                    <li>Total <span>$170.00</span></li>
                  </ul>
                  <a href="#" className="proceed-checkout-btn">Proceed to checkout</a>
                </div>
              </div>
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

export default CartPage

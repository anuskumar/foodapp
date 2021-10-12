import React from 'react'

function CheckoutPage() {
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
            <li className="breadcrumb-item active">Checkout Page</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap section-ptb checkout-page">
    <div className="container">
      <div className="row">
        <div className="col">
          <div className="coupon-area">
            {/* coupon-accordion start */}
            <div className="coupon-accordion">
              <h3>Returning customer? <span className="coupon" id="showlogin">Click here to login</span></h3>
              <div className="coupon-content" id="checkout-login">
                <div className="coupon-info">
                  <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                  <form action="#">
                    <p className="coupon-input form-row-first">
                      <label>Username or email <span className="required">*</span></label>
                      <input type="text" name="email" />
                    </p>
                    <p className="coupon-input form-row-last">
                      <label>password <span className="required">*</span></label>
                      <input type="password" name="password" />
                    </p>
                    <div className="clear" />
                    <p>
                      <button type="submit" className="button-login btn" name="login" value="Login">Login</button>
                      <label className="remember"><input type="checkbox" defaultValue={1} /><span>Remember</span></label>
                    </p>
                    <p className="lost-password">
                      <a href="#">Lost your password?</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
            {/* coupon-accordion end */}
            {/* coupon-accordion start */}
            <div className="coupon-accordion">
              <h3>Have a coupon? <span className="coupon" id="showcoupon">Click here to enter your code</span></h3>
              <div className="coupon-content" id="checkout-coupon">
                <div className="coupon-info">
                  <form action="#">
                    <p className="checkout-coupon">
                      <input type="text" placeholder="Coupon code" />
                      <button type="submit" className="btn button-apply-coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                    </p>
                  </form>
                </div>
              </div>
            </div>
            {/* coupon-accordion end */}
          </div>
        </div>
      </div>
      {/* checkout-details-wrapper start */}
      <div className="checkout-details-wrapper">
        <div className="row">
          <div className="col-lg-6 col-md-6">
            {/* billing-details-wrap start */}
            <div className="billing-details-wrap">
              <form action="#">
                <h3 className="shoping-checkboxt-title">Billing Details</h3>
                <div className="row">
                  <div className="col-lg-6">
                    <p className="single-form-row">
                      <label>First name <span className="required">*</span></label>
                      <input type="text" name="First name" />
                    </p>
                  </div>
                  <div className="col-lg-6">
                    <p className="single-form-row">
                      <label>Username or email <span className="required">*</span></label>
                      <input type="text" name="Last name" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Company name</label>
                      <input type="text" name="email" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <div className="single-form-row">
                      <label>Country <span className="required">*</span></label>
                      <div className="nice-select wide">
                        <select>
                          <option>Select Country...</option>
                          <option>Albania</option>
                          <option>Angola</option>
                          <option>Argentina</option>
                          <option>Austria</option>
                          <option>Azerbaijan</option>
                          <option>Bangladesh</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Street address <span className="required">*</span></label>
                      <input type="text" placeholder="House number and street name" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Town / City <span className="required">*</span></label>
                      <input type="text" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>State / County</label>
                      <input type="text" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Postcode / ZIP <span className="required">*</span></label>
                      <input type="text" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Phone</label>
                      <input type="text" name="address" />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row">
                      <label>Email address <span className="required">*</span></label>
                      <input type="text" name="Email address " />
                    </p>
                  </div>
                  <div className="col-lg-12">
                    <div className="checkout-box-wrap">
                      <label><input type="checkbox" id="chekout-box" /> Create an account?</label>
                      <div className="account-create single-form-row">
                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                        <label className="creat-pass">Create account password <span>*</span></label>
                        <input type="password" className="input-text" />
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-12">
                    <div className="checkout-box-wrap">
                      <label id="chekout-box-2"><input type="checkbox" /> Ship to a different address?</label>
                      <div className="ship-box-info">
                        <div className="row">
                          <div className="col-lg-6">
                            <p className="single-form-row">
                              <label>First name <span className="required">*</span></label>
                              <input type="text" name="First name" />
                            </p>
                          </div>
                          <div className="col-lg-6">
                            <p className="single-form-row">
                              <label>Username or email <span className="required">*</span></label>
                              <input type="text" name="Last name " />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <label>Company name</label>
                              <input type="text" name="email" />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <div className="single-form-row">
                              <label>Country <span className="required">*</span></label>
                              <div className="nice-select wide">
                                <select>
                                  <option>Select Country...</option>
                                  <option>Albania</option>
                                  <option>Angola</option>
                                  <option>Argentina</option>
                                  <option>Austria</option>
                                  <option>Azerbaijan</option>
                                  <option>Bangladesh</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <label>Street address <span className="required">*</span></label>
                              <input type="text" placeholder="House number and street name" name="address" />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address" />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <label>Town / City <span className="required">*</span></label>
                              <input type="text" name="address" />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <label>State / County</label>
                              <input type="text" name="address" />
                            </p>
                          </div>
                          <div className="col-lg-12">
                            <p className="single-form-row">
                              <label>Postcode / ZIP <span className="required">*</span></label>
                              <input type="text" name="address" />
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="col-lg-12">
                    <p className="single-form-row m-0">
                      <label>Order notes</label>
                      <textarea placeholder="Notes about your order, e.g. special notes for delivery." className="checkout-mess" rows={2} cols={5} defaultValue={""} />
                    </p>
                  </div>
                </div>
              </form>
            </div>
            {/* billing-details-wrap end */}
          </div>
          <div className="col-lg-6 col-md-6">
            {/* your-order-wrapper start */}
            <div className="your-order-wrapper">
              <h3 className="shoping-checkboxt-title">Your Order</h3>
              {/* your-order-wrap start*/}
              <div className="your-order-wrap">
                {/* your-order-table start */}
                <div className="your-order-table table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th className="product-name">Product</th>
                        <th className="product-total">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr className="cart_item">
                        <td className="product-name">
                          Vestibulum suscipit <strong className="product-quantity"> × 1</strong>
                        </td>
                        <td className="product-total">
                          <span className="amount">£165.00</span>
                        </td>
                      </tr>
                      <tr className="cart_item">
                        <td className="product-name">
                          Vestibulum magna <strong className="product-quantity"> × 1</strong>
                        </td>
                        <td className="product-total">
                          <span className="amount">£50.00</span>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr className="cart-subtotal">
                        <th>Cart Subtotal</th>
                        <td><span className="amount">£215.00</span></td>
                      </tr>
                      <tr className="shipping">
                        <th>Shipping</th>
                        <td>
                          <ul>
                            <li>
                              <input type="radio" />
                              <label>
                                Flat Rate: <span className="amount">£7.00</span>
                              </label>
                            </li>
                            <li>
                              <input type="radio" />
                              <label>Free Shipping:</label>
                            </li>
                            <li />
                          </ul>
                        </td>
                      </tr>
                      <tr className="order-total">
                        <th>Order Total</th>
                        <td><strong><span className="amount">£215.00</span></strong>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                {/* your-order-table end */}
                {/* your-order-wrap end */}
                <div className="payment-method">
                  <div className="payment-accordion">
                    {/* ACCORDION START */}
                    <h5>Direct Bank Transfer</h5>
                    <div className="payment-content">
                      <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                    {/* ACCORDION END */}
                    {/* ACCORDION START */}
                    <h5>Cheque Payment</h5>
                    <div className="payment-content">
                      <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                    </div>
                    {/* ACCORDION END */}
                    {/* ACCORDION START */}
                    <h5>PayPal</h5>
                    <div className="payment-content">
                      <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                    </div>
                    {/* ACCORDION END */}
                  </div>
                  <div className="order-button-payment">
                    <input type="submit" defaultValue="Place order" />
                  </div>
                </div>
                {/* your-order-wrapper start */}
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* checkout-details-wrapper end */}
    </div>
  </div>
  {/* main-content-wrap end */}
</div>



        </div>
    )
}

export default CheckoutPage

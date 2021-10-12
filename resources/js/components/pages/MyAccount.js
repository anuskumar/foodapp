import React from 'react'

function MyAccount() {
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
  <div className="main-content-wrap section-ptb my-account-page">
    <div className="container">
      <div className="row">
        <div className="col-12">
          <div className="account-dashboard">
            <div className="dashboard-upper-info">
              <div className="row align-items-center no-gutters">
                <div className="col-lg-3 col-md-12">
                  <div className="d-single-info">
                    <p className="user-name">Hello <span>Yourmail@info</span></p>
                    <p>(not yourmail@info? <a href="#">Log Out</a>)</p>
                  </div>
                </div>
                <div className="col-lg-4 col-md-12">
                  <div className="d-single-info">
                    <p>Need Assistance? Customer service at.</p>
                    <p>demo@example.com</p>
                  </div>
                </div>
                <div className="col-lg-3 col-md-12">
                  <div className="d-single-info">
                    <p>E-mail them at </p>
                    <p>support@yoursite.com</p>
                  </div>
                </div>
                <div className="col-lg-2 col-md-12">
                  <div className="d-single-info text-lg-center">
                    <a href="cart.html" className="view-cart"><i className="fa fa-cart-plus" />view cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div className="row">
              <div className="col-md-12 col-lg-2">
                {/* Nav tabs */}
                <ul role="tablist" className="nav flex-column dashboard-list">
                  <li><a href="#dashboard" data-toggle="tab" className="nav-link active">Dashboard</a></li>
                  <li> <a href="#orders" data-toggle="tab" className="nav-link">Orders</a></li>
                  <li><a href="#downloads" data-toggle="tab" className="nav-link">Downloads</a></li>
                  <li><a href="#address" data-toggle="tab" className="nav-link">Addresses</a></li>
                  <li><a href="#account-details" data-toggle="tab" className="nav-link">Account details</a></li>
                  <li><a href="login-register.html" className="nav-link">logout</a></li>
                </ul>
              </div>
              <div className="col-md-12 col-lg-10">
                {/* Tab panes */}
                <div className="tab-content dashboard-content">
                  <div className="tab-pane active" id="dashboard">
                    <h3>Dashboard </h3>
                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                  </div>
                  <div className="tab-pane fade" id="orders">
                    <h3>Orders</h3>
                    <div className="table-responsive">
                      <table className="table">
                        <thead>
                          <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>May 10, 2018</td>
                            <td>Processing</td>
                            <td>$25.00 for 1 item </td>
                            <td><a href="cart.html" className="view">view</a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>May 10, 2018</td>
                            <td>Processing</td>
                            <td>$17.00 for 1 item </td>
                            <td><a href="cart.html" className="view">view</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div className="tab-pane fade" id="downloads">
                    <h3>Downloads</h3>
                    <div className="table-responsive">
                      <table className="table">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Downloads</th>
                            <th>Expires</th>
                            <th>Download</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Haven - Free Real Estate PSD Template</td>
                            <td>May 10, 2018</td>
                            <td>never</td>
                            <td><a href="#" className="view">Click Here To Download Your File</a></td>
                          </tr>
                          <tr>
                            <td>Nevara - ecommerce html template</td>
                            <td>Sep 11, 2018</td>
                            <td>never</td>
                            <td><a href="#" className="view">Click Here To Download Your File</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div className="tab-pane" id="address">
                    <p>The following addresses will be used on the checkout page by default.</p>
                    <h4 className="billing-address">Billing address</h4>
                    <a href="#" className="view">edit</a>
                    <p className="biller-name">Johan Don</p>
                    <p>Bangladesh</p>
                  </div>
                  <div className="tab-pane fade" id="account-details">
                    <h3>Account details </h3>
                    <div className="login">
                      <div className="login-form-container">
                        <div className="account-login-form">
                          <form action="#">
                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                            <label>Social title</label>
                            <div className="input-radio">
                              <span className="custom-radio"><input type="radio" defaultValue={1} name="id_gender" /> Mr.</span>
                              <span className="custom-radio"><input type="radio" defaultValue={1} name="id_gender" /> Mrs.</span>
                            </div>
                            <div className="account-input-box">
                              <label>First Name</label>
                              <input type="text" name="first-name" />
                              <label>Last Name</label>
                              <input type="text" name="last-name" />
                              <label>Email</label>
                              <input type="text" name="email-name" />
                              <label>Password</label>
                              <input type="password" name="user-password" />
                              <label>Birthdate</label>
                              <input type="text" placeholder="MM/DD/YYYY" defaultValue name="birthday" />
                            </div>
                            <div className="example">
                              (E.g.: 05/31/1970)
                            </div>
                            <div className="custom-checkbox">
                              <input type="checkbox" defaultValue={1} name="optin" />
                              <label>Receive offers from our partners</label>
                            </div>
                            <div className="custom-checkbox">
                              <input type="checkbox" defaultValue={1} name="newsletter" />
                              <label>Sign up for our newsletter<br /><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                            </div>
                            <div className="button-box">
                              <button className="btn default-btn" type="submit">Save</button>
                            </div>
                          </form>
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
  {/* main-content-wrap end */}
</div>

        </div>
    )
}

export default MyAccount

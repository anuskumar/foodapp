import React from 'react'

function LoginPage() {
    return (
        <div><div>
  {/* breadcrumb-area start */}
  <div className="breadcrumb-area">
    <div className="container">
      <div className="row">
        <div className="col-12">
          {/* breadcrumb-list start */}
          <ul className="breadcrumb-list">
            <li className="breadcrumb-item"><a href="index.html">Home</a></li>
            <li className="breadcrumb-item active">login &amp; register</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap section-ptb lagin-and-register-page">
    <div className="container">
      <div className="row">
        <div className="col-lg-7 col-md-12 ml-auto mr-auto">
          <div className="login-register-wrapper">
            {/* login-register-tab-list start */}
            <div className="login-register-tab-list nav">
              <a className="active" data-toggle="tab" href="#lg1">
                <h4> login </h4>
              </a>
              <a data-toggle="tab" href="#lg2">
                <h4> register </h4>
              </a>
            </div>
            {/* login-register-tab-list end */}
            <div className="tab-content">
              <div id="lg1" className="tab-pane active">
                <div className="login-form-container">
                  <div className="login-register-form">
                    <form action="#" method="post">
                      <div className="login-input-box">
                        <input type="text" name="user-name" placeholder="User Name" />
                        <input type="password" name="user-password" placeholder="Password" />
                      </div>
                      <div className="button-box">
                        <div className="login-toggle-btn">
                          <input type="checkbox" />
                          <label>Remember me</label>
                          <a href="#">Forgot Password?</a>
                        </div>
                        <div className="button-box">
                          <button className="login-btn btn" type="submit"><span>Login</span></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div id="lg2" className="tab-pane">
                <div className="login-form-container">
                  <div className="login-register-form">
                    <form action="#" method="post">
                      <div className="login-input-box">
                        <input type="text" name="user-name" placeholder="User Name" />
                        <input type="password" name="user-password" placeholder="Password" />
                        <input name="user-email" placeholder="Email" type="email" />
                      </div>
                      <div className="button-box">
                        <button className="register-btn btn" type="submit"><span>Register</span></button>
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
  {/* main-content-wrap end */}
</div>

        </div>
    )
}

export default LoginPage

import React from 'react'

function Footer() {
    return (
        <div>
           <footer>
  <div className="footer-top section-pb section-pt-60">
    <div className="container">
      <div className="row">
        <div className="col-lg-4 col-md-6">
          <div className="widget-footer mt-40">
            <h6 className="title-widget">Contact Info</h6>
            <div className="contact-call-wrap">
              <img src="frontend_assets/images/logo/i-logo.png" alt />
              <div className="footer-call">
                {/* <p>Hotline Free 24/24:</p>
                                  <h6>(+800) 123 456 789</h6> */}
              </div>
            </div>
            <div className="footer-addres">
              <p>Address and contact details</p>
              <p>itrends.in</p>
            </div>
            <ul className="social-icons">
              <li>
                <a className="facebook social-icon" href="#" title="Facebook" target="_blank"><i className="fa fa-facebook" /></a>
              </li>
              <li>
                <a className="twitter social-icon" href="#" title="Twitter" target="_blank"><i className="fa fa-twitter" /></a>
              </li>
              <li>
                <a className="instagram social-icon" href="#" title="Instagram" target="_blank"><i className="fa fa-instagram" /></a>
              </li>
              <li>
                <a className="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i className="fa fa-linkedin" /></a>
              </li>
              <li>
                <a className="rss social-icon" href="#" title="Rss" target="_blank"><i className="fa fa-rss" /></a>
              </li>
            </ul>
          </div>
        </div>
        <div className="col-lg-2 col-md-6 col-sm-6">
          <div className="widget-footer mt-40">
            <h6 className="title-widget">Information</h6>
            <ul className="footer-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Quick Contact</a></li>
              <li><a href="#">Blog Pages</a></li>
              <li><a href="#">Concord History</a></li>
              <li><a href="#">Client Feed</a></li>
            </ul>
          </div>
        </div>
        <div className="col-lg-2 col-md-6 col-sm-6">
          <div className="widget-footer mt-40">
            <h6 className="title-widget">Extras</h6>
            <ul className="footer-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Quick Contact</a></li>
              <li><a href="#">Blog Pages</a></li>
              <li><a href="#">Concord History</a></li>
              <li><a href="#">Client Feed</a></li>
            </ul>
          </div>
        </div>
        <div className="col-lg-4 col-md-6">
          <div className="widget-footer mt-40">
            <h6 className="title-widget">Get the app</h6>
            <p>GreenLife App is now available on Google Play &amp; App Store. Get it now.</p>
            <ul className="footer-list">
              <li><img src="frontend_assets/images/brand/img-googleplay.jpg" alt /></li>
              <li><img src="frontend_assets/images/brand/img-appstore.jpg" alt /></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div className="newletter-area">
    <div className="container">
      <div className="row">
        <div className="col-lg-12">
          <div className="newletter-wrap">
            <div className="row align-items-center">
              <div className="col-lg-3 col-md-12">
                <div className="newsletter-title mb-30">
                  <h3>Join Our <br /><span>Newsletter Now</span></h3>
                </div>
              </div>
              <div className="col-lg-4 col-md-5">
                <div className="newsletter-dec mb-30">
                  <p>Join 60.000+ subscribers and get a new discount coupon on every Wednesday.</p>
                </div>
              </div>
              <div className="col-lg-5 col-md-7">
                <div className="newsletter-footer mb-30">
                  <input type="text" placeholder="Your email address..." />
                  <div className="subscribe-button">
                    <button className="subscribe-btn">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div className="footer-bottom">
    <div className="container">
      <div className="row align-items-center">
        <div className="col-lg-6 col-md-6">
          <div className="copy-left-text">
            <p className="copyright-text">©  2021 <strong> Template </strong> Made by Itrends Technosys <a href="#" target="_blank" /> </p>
          </div>
        </div>
        <div className="col-lg-6 col-md-6">
          <div className="copy-right-image">
            <img src="frontend_assets/images/icon/img-payment.png" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

        </div>
    )
}

export default Footer

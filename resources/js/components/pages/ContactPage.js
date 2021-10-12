import React from 'react'

function ContactPage() {
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
            <li className="breadcrumb-item active">Contact Us</li>
          </ul>
          {/* breadcrumb-list end */}
        </div>
      </div>
    </div>
  </div>
  {/* breadcrumb-area end */}
  {/* main-content-wrap start */}
  <div className="main-content-wrap contact-wrap">
    <div className="contact-form-area section-ptb">
      <div className="container">
        <div className="row">
          <div className="col-lg-4">
            <div className="contact-info-wrap">
              <div className="contact-title mb-30">
                <h3>Contact Us</h3>
              </div>
              <div className="contact-info-text">
                <ul>
                  <li>
                    <div className="contact-title">
                      <i className="fa fa-home" />
                      <h4>Address</h4>
                    </div>
                    <p>123 Main Street, Anytown, CA 12345 – USA</p>
                  </li>
                  <li>
                    <div className="contact-title">
                      <i className="fa fa-envelope-open-o" />
                      <h4>Phone</h4>
                    </div>
                    <p>Mobile: (08) 123 456 789<br />
                      Hotline: 1009 678 456</p>
                  </li>
                  <li>
                    <div className="contact-title">
                      <i className="fa fa-phone" />
                      <h4>Email</h4>
                    </div>
                    <p>yourmail@domain.com<br />
                      support@roadthemes.com</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div className="col-lg-7 offset-lg-1">
            <div className="contact-info-wrap">
              <div className="contact-title mb-30">
                <h3>Tell Us Your Message</h3>
              </div>
              <div className="contact-us-from-wrap">
                <form id="contact-form" className="contact-us-box" action="http://hasthemes.com/file/mail.php" method="post">
                  <div className="row">
                    <div className="col-lg-12">
                      <div className="single-input">
                        <label> Your Name (required)</label>
                        <input name="con_name" type="text" />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="single-input">
                        <label> Your Email (required)</label>
                        <input name="con_email" type="email" />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="single-input">
                        <label>Subject</label>
                        <input name="con_subject" type="text" />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="single-input">
                        <label>Your Meassage</label>
                        <textarea name="con_message" defaultValue={""} />
                      </div>
                    </div>
                    <div className="col-lg-12">
                      <div className="single-input">
                        <button className="submit-button submit-btn" type="submit">Send</button>
                        <p className="form-messege" />
                      </div>
                    </div>
                  </div>
                </form>
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

export default ContactPage

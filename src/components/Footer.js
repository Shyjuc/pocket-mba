import React from 'react'

function Footer() {
  return (
    <>
    <footer id="footer">
<div className="footer-top">
  <div className="container">
    <div className="row">

      <div className="col-lg-3 col-md-6 footer-contact">
        <h3>Pocket MBA</h3>
        <h4>How it works?</h4>
        <p>
        Set up your Startup Journey with Pocket MBA worksheets and Presentations. Follow our communities in Facebook and Instagram. Get updated on trending business models.
        </p>
        <small>Email : info@pocketmba.in</small>
      </div>

      <div className="col-lg-3 col-md-6 footer-links">
        <h4>Connect us for</h4>
        <ul>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Pitch Deck Consulting</a></li>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Company Profile</a></li>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Brand Package</a></li>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Presentation Templates</a></li>
        </ul>
      </div>

      <div className="col-lg-3 col-md-6 footer-links">
        <h4>About us</h4>
        <ul>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Home - Join Community</a></li>
          <li><i className="bx bx-chevron-right"></i> <a href="/Home">Get Founder's Kit</a></li>
        </ul>
      </div>

      <div className="col-lg-3 col-md-6 footer-links">
        <h4>Socials</h4>
        <p>Follow us in</p>
        <div className="social-links mt-3">
          <a href="/Home" className="facebook"><i className="bx bxl-facebook"></i></a>
          <a href="/Home" className="instagram"><i className="bx bxl-instagram"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div className="container footer-bottom clearfix">
  <div className="copyright">
    &copy; Copyright 2022 <strong><span>Pocket MBA</span></strong>. All Rights Reserved
  </div>
</div>

    </footer>
    </>
  )
}

export default Footer
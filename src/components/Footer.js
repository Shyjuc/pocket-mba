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
        Knowledge Exchange Program with Exclusive Membership for Business Owners and MBA Students. All you need is to register yourself on our social communities.
        </p>
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
          <a href="/Home" className="linkedin"><i className="bx bxl-linkedin"></i></a>
          <a href="/Home" className="twitter"><i className="bx bxl-twitter"></i></a>
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
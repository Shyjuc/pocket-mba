import React from 'react'
import hero from '../assets/img/hero-img2.png';

function HeroFounder() {
  return (
    <section id="hero" className="d-flex align-items-center">

    <div className="container">
      <div className="row">
        <div className="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Download Founder's Kit</h1>
          <h2>Businesss Spreadsheets, Pitch decks, Worksheets, Checklists and Marketing Campaigns. </h2>
          <div className="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" className="btn-get-started scrollto">Buy Now</a>
            <a href="#about" className="btn-watch-video">Download Free Demo</a>
          </div>
        </div>
        <div className="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src={hero} className="img-fluid animated" alt="" />
        </div>
      </div>
    </div>

  </section>
  )
}

export default HeroFounder
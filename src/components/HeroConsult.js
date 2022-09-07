import React from 'react'
import hero from '../assets/img/hero-img.png';

function HeroSection() {
  return (
    <section id="hero" className="d-flex align-items-center">

    <div className="container">
      <div className="row">
        <div className="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Create Your Winning Pitch Deck</h1>
          <h2>Need help to convert your Business Plan and Vision to a convincing Pitch Deck?</h2>
          <div className="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" className="btn-get-started scrollto"><i aria-hidden="true" class="whatsapp icon"></i> WhatsApp us</a>
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

export default HeroSection
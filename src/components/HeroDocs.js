import React from 'react'
import hero from '../assets/img/hero-img2.png';

function HeroFounder() {
  return (
    <section id="heroplane" className="d-flex align-items-center">
    <div className="container">
      <div className="row">
        <div className="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Pitch deck'23 Documentation</h1>
          <h2>Learn how to create a convincing Pitch Deck through Slide-by-Slide guidelines and examples. It’s for anyone at the early stages of building a startup seeking investment, preparing for a startup competition, or anyone in the planning stage to become a founder.  </h2>
            <div className="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" className="btn-get-started scrollto">Download Pocket MBA Pitch Deck Template</a>
          </div>
        </div>
        <div className="col-lg-6 order-1 order-lg-2 hero-img lg:hidden" data-aos="zoom-in" data-aos-delay="200">
          <img src={hero} className="img-fluid animated" alt="" />
        </div>
      </div>
    </div>

  </section>
  )
}

export default HeroFounder
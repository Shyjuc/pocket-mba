import React from 'react'

function Pricing() {
  return (
    <>
        <section id="pricing" className="pricing">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Pricing</h2>
        </div>

        <div className="row">

          <div className="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div className="box">
              <h3>Founder's Kit 1.0</h3>
              <h4><sup>₹</sup>599</h4>
              <ul>
                <li><i className="bx bx-check"></i> Pitch Deck set(5)</li>
                <li><i className="bx bx-check"></i> Sales Worksheet(3)</li>
                <li><i className="bx bx-check"></i> Social Media Calender</li>
                <li><i className="bx bx-check"></i> E-Books</li>
                <li className="na"><i className="bx bx-x"></i> Marketing Work Sheets(4)</li>
                <li className="na"><i className="bx bx-x"></i> Marketing Posts(100+)</li>
                <li className="na"><i className="bx bx-x"></i> Check Lists</li>
              </ul>
              <a href="#" className="buy-btn">Download Now</a>
            </div>
          </div>

          <div className="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div className="box featured">
              <h3>Founder's Kit 2.0</h3>
              <h4><sup>₹</sup>1,999</h4>
              <ul>
                <li><i className="bx bx-check"></i> Pitch Deck set(10)</li>
                <li><i className="bx bx-check"></i> Marketing Work Sheets(4)</li>
                <li><i className="bx bx-check"></i> Marketing Posts(100+)</li>
                <li><i className="bx bx-check"></i> Sales Worksheet(3)</li>
                <li><i className="bx bx-check"></i> Check Lists</li>
                <li><i className="bx bx-check"></i> Social Media Calender</li>
                <li><i className="bx bx-check"></i> E-Books</li>
              </ul>
              <a href="#" className="buy-btn">Download Now</a>
            </div>
          </div>

          <div className="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div className="box">
              <h3>Free Pitch Deck Kit</h3>
              <h4><sup>₹</sup>0</h4>
              <ul>
                <li><i className="bx bx-check"></i> Pitch Deck set(3)</li>
                <li><i className="bx bx-check"></i> E-Books</li>
                <li className="na"><i className="bx bx-x"></i> Sales Worksheet(3)</li>
                <li className="na"><i className="bx bx-x"></i> Social Media Calender</li>
                <li className="na"><i className="bx bx-x"></i> Marketing Work Sheets(4)</li>
                <li className="na"><i className="bx bx-x"></i> Marketing Posts(100+)</li>
                <li className="na"><i className="bx bx-x"></i> Check Lists</li>
              </ul>
              <a href="#" className="buy-btn">Download now</a>
            </div>
          </div>

        </div>

      </div>
    </section>
    </>
  )
}

export default Pricing
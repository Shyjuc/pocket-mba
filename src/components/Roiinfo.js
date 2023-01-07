import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {

  const info = "roi";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>How to speak about Business Return?</h2>
          <h3>An investor can distinguish between low-performing and high-performing investments using a ROI calculation</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>A financial ratio called return on investment (ROI) is used to determine how much an investor will profit relative to the cost of their investment.</p>
              <p>The simplest method to understand the ROI formula is to divide some kind of "benefit" by the "expense." Asking someone to specify precisely how they measure a ROI is vital whether they claim something has a good or poor ROI.</p>
              <ul>
                <li>Return on investment (ROI) is a rough indicator of how profitable an investment is.</li>
                <li>ROI has several applications. It can be used to gauge the profitability of stock shares, make a decision on whether to buy a company, or assess how well a deal went.</li>
                <li>ROI is determined by deducting the investment's original cost from its end value, dividing the result by the investment's cost, and then multiplying the result by 100.</li>
              </ul>
              <p>ROI is determined by deducting the investment's original cost from its end value, dividing the result by the investment's cost, and then multiplying the result by 100.</p>
            </div>
          </div>
            
        </div>
        </div>
        </div>
    </section>
    </>
  )
}

export default Probleminfo
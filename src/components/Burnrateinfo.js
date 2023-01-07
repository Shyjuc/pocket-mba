import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {
  const [info,useInfo] = useState("burnrate");
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>What is Burn Rate?</h2>
          <h3>The burn rate offers insights into how much capital a start-up will need and when it will need that funding</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>The term "burn rate" is often used to indicate how quickly a startup business uses its venture money to pay for overhead before starting to see a positive cash flow from operations.</p>
              <p>The implied cash runway, or the number of months a business can continue operating before it runs out of cash, may be calculated using the burn rate.</p>
              <p>The burn rate offers insights into how much capital a start-up will need and when it will need that funding because it may take the start-up several years to become profitable. Hence the founding team can calculate the number of months they have left to either turn their cash flow positive or get more equity or debt financing by watching the indicator.</p>
              <h3>Gross burn rate and Net burn rate</h3>
              <p>Your gross burn rate is a measure of your monthly operational costs, excluding revenue. However, net burn rate takes revenue into account when calculating how much money you spend each month.</p>
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
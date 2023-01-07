import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {

  const info = "exitstrategy";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>How to Design Your Exit Strategy Slide?</h2>
          <h3>You can find and negotiate for an offer that is in line with the true value of your firm by having a solid understanding of spending, assets, and business performance..</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>The exit information does not always need to be included in your pitch deck slide. However, you must consider your growth up to this point in the future. Making a business strategy shouldn't be as simple as putting all of your pleasant expectations and presumably confident tactics together. Realistic thought should be given to all aspects of your organisation, especially the shifting market conditions and consumer demand.</p>
              <h3>Outside investors want to exit</h3>
              <p>Investors are seldom interested in accompanying you on every step of your future growth. It's an alternative to the stock market for them. In this instance, their expectations are largely the same. But there is a far bigger expectation of reward. Timeframe is therefore crucial in this procedure when you are asking for a suitable investment. What will occur in your business in a few years? A merger, acquisition, IPO, buyback, or any other favourable or unfavourable event that would allow investors to safely arrange a respectable exit</p>
              <h3>There is a life cycle you need to consider</h3>
              <p>In this age of automation, the business life cycle is crucial. Future-oriented growth, coupled with market demand and technological disruption, is never a granted. There will eventually be more rivals, product alternatives, and a decline in demand for your business. Your ability for forecasting similar events and concluding a merger or acquisition deal is crucial for a secure exit.</p>
              <p>Actually, planning how to improve a good position rather than leaving a poor one is the ideal rationale for an exit strategy. Your goals should determine the type of firm you start, and how you expand it should be consistent with your exit strategy.</p>
              <p>The type of business you choose should depend on your goals, and the way you grow it should be aligned with your exit strategy.</p>
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
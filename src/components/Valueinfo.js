import React from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {

  const info = "vop";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>How to Design Your Value Proposition Slide?</h2>
          <h3>An effective value proposition speaks directly to your target audience and succinctly explains why your business is superior to that of the competition.</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>A value proposition is the value you promise to deliver to your customers post-purchase. It clearly identifies the benefits a company's products and services will deliver to its customers.</p>
              <p>It is worthwhile to spend the time creating a compelling yet straightforward value proposition rather than cutting corners and drafting a meaningless phrase. This will make it simpler and more affordable to draw in and retain the clients you want.</p>
              <p>An effective value proposition speaks directly to your target audience and succinctly explains why your business, service, or product is superior to that of the competition and the best way to address their issue. It gets right to the point and explains why they should choose you.</p>
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
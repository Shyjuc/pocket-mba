import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {

  const info = "gtm";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Launch your product to the right audience, with the right messaging, at the right time</h2>
          <h3>Go-to-Market strategy is a way to ensure you’re considering everything that matters and avoid costly mistakes—like launching your product to the wrong customers or in a market that’s already filled with similar offerings</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>A company's go-to-market strategy is its plan for gaining a competitive advantage. It turns around by utilizing resources with the goal of delivering a distinct value proposition. This is done to offer a superior product at competitive pricing, thereby enhancing the customer experience.</p>
              <p>Go-to-market or go-to-market strategy is the plan of an organization, utilizing their outside resources, to deliver their unique value proposition to customers and achieve competitive advantage. The end goal is to enhance the overall customer experience by offering a superior product and/or more competitive pricing.</p>
              <p>These strategies provide the information companies need to effectively position themselves against competitors, create scalable inbound and outbound models, and leverage appropriate tactics to achieve their goals.</p>
              <p>Move towards an effective position against competitors, create scalable models both inbound and outbound, and leverage appropriate tactics to achieve your marketing goals.</p>
              <p>A well defined strategy often involves following components</p>
              <ul>
                <li>targeted market to sell products or services</li>
                <li>Targeted audience</li>
                <li>Delivery of products or services</li>
                <li>Comparison with the competitors</li>
                <li>Cost of the product or service</li>

              </ul>
                
            </div>
          </div>
            
        </div>
        </div>
      </div>
    </section>
    </>
  )
}

export default Tractioninfo
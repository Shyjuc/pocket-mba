import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {

  const info = "competition";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Competition influences companies to focus more on innovation and strategic marketing practices </h2>
          <h3>With more competition, businesses can potentially create a niche in their market, which might increase customer attention, loyalty and revenue </h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>This slide will ask for a product comparison in a visually engaging mode. It must show the effect on the industry, market share distribution, and who your competitors are.</p>
              <p>Investors need confirmation that founders know their stuff. In other way, Investors are not just validating the viability of your idea, they need to trust you and make sure that investment is going into safe hands. The Competition slide should prove that founders are self-aware, mindful of what sets them apart from the rest of the crowd. They must be sold on that vision and believe that this team has a real chance to become a key player in the so pictured market.</p>
              <p>This slide is a confirmation of your mindfulness toward your business idea. It helps the investors generate trust in your venture. This competition slide is an overview of your self-awareness and vision towards creating an example in the business world.</p>
              <h4>In Competition slide, Include these things in General:</h4>
                <ul>
                <li>Your top competitors and their weaknesses</li>
                <li>unique sales proposition</li>
                <li>Your startup's differentiation point</li>
                </ul>
                <h4>Competition Landscape</h4>
                <p>In general, it is an analysis model that lists your direct and indirect competitors and products and provides a list of options for the customers to choose from. It includes details such as competitors’ mission, vision, core values, niche market, strengths, and weaknesses.</p>
                <p>Its primary goal is to clear the road so that customers can communicate in a new and improved way. This analysis helps in targeting the market and sales with the purpose of outperforming the competition.</p>
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
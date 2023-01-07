import React from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {

  const info = "product";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>How to Design Your Product Slide?</h2>
          <h3>It must correspond to your solution slide. How your product has been designed to implement your solution.</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>Its not necessary to display every aspects of your product. One of the important mistakes every founders commit is that they use this slide to represent the effort they put in. Most of the beginners are consciously concerned about their time and effort they spend to develop the product, and naturally it would be a priority to indirectly reflect those endeavor in slides. Product slide might feel like an apt destination to get it done. That practice might be helpful when you are seeking a seed level fund or when you are trying to raise fund in the bootstrapping stage. However, its not appreciated in the serious second level investor meeting</p>
              <h4>Mobile Apps. Web Applications</h4>
              <ul>
                <li>Don’t use some random screenshots. Show them the process or the flow, if possible the exact user level journey including the sales funnel</li>
                <li>In this case, a product demo means you are displaying your front-end technology. Hence it provides a greater insights into the imperfect aspects in user experience.</li>
                <li>Never show random dummy values in your demo. You shouldn’t compromise to provide a convincing demo like a qualified end user experiencing that product</li>
              </ul>
              <h4>Link to a Video</h4>
                <p>Video is the most powerful thing that can communicate your Value Proposition. In this case also avoid screen-to-screen navigation include the most important process only in the flow. It can be your on-boarding process, key feature of the app and its user experience, sales funnel etc</p>
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
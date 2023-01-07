import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {

  const info = "investment";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Study about the investors, their investment profile and how they structure each deal</h2>
          <h3>How much you want? What you are going to exchange? Then, how will you use that money? </h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>AT the end od every pitch deck it's your turn to ask for what you are expecting from the investors and how much share you are willing to dilute in exchange of that deal. You need to consider various factors while reacing to this figure. Even if you are asking for a short term cash burn, you need to cnonsider overall position of your company minimum 5-10years forward.</p>
              <p>Investors need confirmation that founders know their stuff. In other way, Investors are not just validating the viability of your idea, they need to trust you and make sure that investment is going into safe hands. The Competition slide should prove that founders are self-aware, mindful of what sets them apart from the rest of the crowd. They must be sold on that vision and believe that this team has a real chance to become a key player in the so pictured market.</p>
              <p>Here comes the end of the pitch deck that displays your call from the investors. In this slide, you will outline your expectations from the investors and mention the share that can dilute the deal. To reach out to a figure, you need to work on various factors. Even if there’s a need for short-term cash burn, you should consider the company’s position 5–10 years from now.</p>
              <p>This slide is about asking for investment by creating trust in the investors that their money is in safe hands. Investors look for confirmation that founders are mindful of their stuff. They react to the vision and proceed by looking at the probable chances showcased by the team in the context of the key player in the market.</p>
              <ul>
                <li>A stage of investment is undertaken. Analyze whether it’s bootstrapping or next-level.</li>
                <li>value of investment, including efforts and intellectual properties</li>
                <li>Current distribution share in the company</li>
                <li>Future role prospects in your company</li>
              </ul>
              <p>While handling the share dilution, the above factors are good to consider.</p>
              <h4>While considering the amount you need, these factors are important.</h4>
                <ul>
                <li>What’s the price range you are seeking?</li>
                <li>For how long will the money last?</li>
                <li>Milestones that you cover with the money</li>
                <li>How will the funds be used?</li>
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
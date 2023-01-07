import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {
  const [info,useInfo] = useState("market");
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Your investor knows the market much better than you</h2>
          <h3>Address your market and define your niche clearly! </h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
                <h4>Identify your market with clarity!</h4>
                <p>Check out the gap that your product can fill. In other words, find the market that is interested in filling the gap. Make a slide for that.</p>
                <p>While making the slide, be sure to consider customer needs. It forms the market. Thus, identify the market by asking yourself these questions:</p>
                <ul>
                <li>Does my solution serve the customer’s perspective?</li>
                <li>This problem is affecting how many people?</li>
                <li>Will my solution be paid?</li>
                </ul>
                
                <p>For this reason, your work involves visiting more business entities and collecting insightful data.</p>
                <p>Keep validating your business idea with the questions. If you discover that fewer people are affected by the problem, do you investigate whether the demographic or the problem is correct?</p>
                <p>Before presenting the business idea to investors, make sure you are well-versed with the market, customer segments, and consumer behavior.</p>
                <p>Before heading to explain the market, be specific about the following terms:</p>

              <p>Everyday People Come up with needs , For Example if you are Hungry you will search for Food. If you have a family function you will search for new clothings. Customer Needs are the Market.</p>
              <p>So How can your identify your market? Just ask these three questions...</p>
              <ul>
                <li>Am I solving a problem from customer's perspective?</li>
                <li>How many people are seriously annoyed with this problem?</li>
                <li>Would they pay me if I solve this problem?</li>
              </ul>
              <p>Visit more business entities. Talk to more customers and intelligently collect insightful data. That’s how you find out if you have market for your startup or not.</p>
              <p>It is really important to validate your business idea with these questions. Because, If not enough people are facing the problem, then you’re either looking at the wrong demographic or you’re not solving the right problem.</p>
              <p>Finally, when you are presenting your business idea before investors, it is important to convince them that you are well aware of the market, it's customer segments and consumer behaviour.</p>
              <p>When you are explainig about your market. You must understand these terms</p>
              <h4>Total Addressable Market, or TAM</h4>
              <p>It is defined as the number of customers ready to use your product along with the maximum amount of money used by the customers. This number aids in getting an insight into what you can expect from your product or service in the market. TAM, due to its size, is unconcerned about competition or sales teams.</p>
              <h4>Serviceable Available Market, or SAM</h4>
              <p>It is a realistic market that takes your competition and your resources into account. It is calculated by taking into account the total market and the competitors you are going to face.</p>
              <h4>Serviceable Obtainable Market, or SOM</h4>
              <p>It brings a realistic picture of the market area that you can capture in the coming 3–5 years. It is calculated taking into account the competition, market strategy, pricing plans, and other variables.</p>
              <h4>Usual Practices</h4>
                <ul>
                    <li>Define your niche by filtering your SOM. Keep in mind geographic, demographic, customer preference, customer base, choices, and hobbies in the filter.</li>
                    <li>Forecast that indicates reaching the target group being cost-effective.</li>
                    <li>Focus on your initial customers and how to reach them.</li>

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
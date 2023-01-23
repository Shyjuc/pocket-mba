import React from 'react'
import LeftPanel from './LeftPanel'
import problemslide from "../assets/img/problem_slide.png";

function Probleminfo() {

  const info = "problem";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>Market Opportunities are identified on Clearly defined problems</h2>
          <h3>An intelligent investor can understand about your market awareness from the way you understand and present customer's headache</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
            <img src={problemslide} class="img-fluid article_cover" alt="Problem Slide"/>
              <p style = {{ marginTop : 50 }}>How do you identify a customer problem, When you are planning to go ahead with a potential business idea?</p>
              <p>This is the real starting point. Successful businessmen identify this scenario and respond quickly with their solution. Everything you build up as a strategic business plan is originated at this critical stage. So don’t rush to identify a market opportunity with a minimal understanding about your customer problem and its available solutions.</p>
              <p>Your problem slide should express deep understanding about customer’s pain points and its existing solutions. It should be easily relatable, anyone could understand in simple words. </p>
              <p>That's what the problem-solving slide does: it directs you to your true starting point. This is where you develop a strategic business plan that turns around the root cause of the problem faced by the customers along with the prospective solution in the form of your product. The problem stage should be built around the customer’s pain points in collaboration with the existing solutions. Keep it easy to read and understand by using simple words.</p>
              <h2>Best practices</h2>
              <ul>
                <li><b>Tell your story. But why?</b> To begin with, build up a story. Make the transition from formal to friendly, making the investors relatable and connected to your content. Use visual cues to help them imagine the problem and the solutions. </li>
                <li>Put your investors in the customer’s shoes. Be clear on defining and targeting customers, and bring investors' attention to what you have available as a possible and effective solution.</li>
                <li>Summarize the problem in 2–3 bullet points.</li>
                <li>Visualize your research efforts in exploring and validating the problem.</li>
                <li>Validate your statement with relevant data.</li>
              </ul>
              <h2>Don't do this</h2>
                <p>Bring in the customer’s problem areas and perspectives in your pitch desk presentation. Focus on making it relatable and convincing to the investors.</p>
                <ul>
                    <li>Remember, you do not need to explain the features of the product. Concentrate on the issues and solutions that customers are looking for.</li>
                    <li>Clarify your point using crisp language. Don't go into it in detail. Keep it brief and to the point, with no more than three bullet points.</li>
                    <li>Focus on the real-problem scenario. Don’t shift your concentration to providing the solution on this slide.</li>
                    <li>Showcase the buyer’s problem effectively. If you don’t find it significant, avoid taking it further.</li>
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

export default Probleminfo
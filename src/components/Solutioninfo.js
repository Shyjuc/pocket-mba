import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Solutioninfo() {

  const info = "solution";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Its not just about solution, It’s about You and Your Team!</h2>
          <h3>An intelligent investor can analyze 90% of your knowledge, market awareness, team strength and preparedness through the way you prepare your solution slide</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>In a practical real life scenario, an investor learn more about you in this slide. They observe how intelligent you are, your knowledge background, technical skills, confidence level; everything that want to understand as an investor. This slide gives a key insight about it. From this slide, they decide whether they should remain passive or attentive for the remaining slides</p>
              <p>Most founders don’t get this. They are blind to it. The solution slide is the most important part of not only your pitch, but your business as well. Identifying and presenting the solution can make a world of difference in developing a business concept.</p>
              <p>Once the problem is solved, it’s high time for a viable solution. This slide is meant to make the investor learn about the solution to the problem stated and why you and your team are the best choice for this. On this slide, you need to elaborate yourself. Simply wow your audience, i.e., investors, and make them believe in your business. This slide will decide whether the investors will stay back for further slides or remove it</p>
              <p>Through this slide, your knowledge, business approach, and confidence will be observed. How you identify the solution and how you present it will create a lasting impact on the investors.</p>
              <h4>Best practices</h4>
              <ul>
              <li>Make it clear how you will solve the problem.</li>
              <li>Elaborate in a few sentences how you worked on the solution.</li>
              <li>In a few sentences, describe the steps involved.</li>
              <li>Instead of labeling the features, discuss the benefits of the features of the solution.</li>
              </ul>
              <h4>Don't do this</h4>
                <p>Make the content relatable and convincing. Instead of promoting your product, talk about how it is related to the problem stated. Focus on highlighting the benefits of the solutions. Be strict about what and how much you explain about features.</p>
                <ul>
                    <li>Don’t make the mistake of speaking of a solution that is not relevant to the problem.</li>
                    <li>Keep it short. Less is more when it comes to persuasion.</li>
                    <li>Don’t say something irrelevant to the case.</li>
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

export default Solutioninfo
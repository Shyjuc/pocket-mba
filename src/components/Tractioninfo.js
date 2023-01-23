import React from 'react'
import LeftPanel from './LeftPanel'
import tractionslide from "../assets/img/traction_slide.png";

function Tractioninfo() {

  const info = "traction";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Numbers are the most important indicator of performance </h2>
          <h3>Most of the investors pause in the traction slide! They look at the numbers and decide whether they should invest or not in this company. Because traction slide speaks everything about progress and momentum of your company</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <img src={tractionslide} class="img-fluid article_cover" alt="Traction Slide"/>
              <p style = {{ marginTop : 50 }}>Known as the "killer slide" in your pitch deck, it shows the investors what you have achieved so far. This makes a significant difference when displayed as a line graph. Remember that the larger, the steeper, the better option for displaying the metrics. Thus, visualize it thoroughly.</p>
              <p>Traction implies consistent users and the opportunity to make money. Generally, a company gets traction when it gets customers and revenue. Running a business works like an engine that, when in gear, creates forward momentum. When there is no traction, there is no momentum.</p>
              <h2>How to gain traction?</h2>
              <p>Initial traction means working on relationships. A face-to-face meeting is best for this. Also, Zoom meetings, Google Meet, or phone calls work accordingly. Traction comes in when you move ahead and engage in live events, share guides and helpful contents, and do a common hangout through social groups such as WhatsApp, LinkedIn, etc.</p>
              <h2>Best practices</h2>
              <ul>
              <li>Identify your market with clarity!</li>
              <li>Target your hyper-niche initial customers and display how your product is worthy.</li>
              <li>Cover up all the metrics collected by now.</li>
              <li>Focus on convertible or paying customers.</li>
              <li>Use a relevant number to highlight the growth.</li>
              <li>Notify conversion percentages based on various matrices, such as registered users, subscribers, free trail subscribers, etc.</li>
              </ul>
              <h2>What all you can include?</h2>
                <ul>
                    <li>Paying users</li>
                    <li>Annual/Monthly revenue.</li>
                    <li>Margin</li>
                    <li>Growth per month</li>
                    <li>Subscriptions</li>
                    <li>User engagement time</li>
                    <li>Average monthly views/downloads/signups etc</li>
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
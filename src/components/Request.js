import React from 'react'
import RequestCard from './RequestCard'

function request() {
  return (
    <div>
        <section id="community" className="services">
      <div className="container" data-aos="fade-up">
      <div className="section-title" style = {{ marginTop : 100 }}>
          <h2>CONTACT US</h2>
          <h3>#Business Plan #Investor Meeting #Startup Events</h3>
        </div>
        <div class="ui link cards">

            <RequestCard img='assets/img/deck_design.png'  name="Get Your Custom Pitch deck" download="Download a Sample" info="Get your company's custom designed Pitchdeck template with 100+ unique Slides" />
            <RequestCard img='assets/img/deck_kit.png'  name="Request Your Pitch deck Kit" download="View more" info="Collection of Pitch deck template with layouts designed for a range of business circumstances" />
            <RequestCard img='assets/img/founder_kit.png'  name="Request Your Founder's Kit" download="View more" info="Collection of ready-to-use worksheets, check lists and pitch decks and campaign templates to kick start your new business"/>
            <RequestCard img='assets/img/launch_kit.png'  name="Get Your Business Launch Kit" download="View more" info="Planning to start an E-Business or Online Side hustle? Get the Founder kit with your website and marketing creatives" />
            

        </div>
        </div>
    </section>
    </div>

    
  )
}

export default request
import React from 'react'
import PitchItem from './PitchItem'

function Pitch() {
  return (
    <>
    <section id="services" className="services section-bg">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>PITCH DECK  PRESENTATIONS</h2>
          <p>Built for Seed, VC meeting, Govt Grants, Startup meet, acceleration program with proper guidelines. <br/>Ready-to-use PowerPoint templates with custom business model fields. Include better infographics and market insights. </p>
        </div>

        <div className="row">
            <PitchItem
            name='Simple Pitch Deck'
            detail='Use while your 10-15 minutes meeting opportunity with a potential investor.'
            aim='Create interest in your startup and make sure an appointment for detailed discussion'
            />
            <PitchItem
            name='Startup Events'
            detail='Apply for seed stage funding events, acceleration programs and funding challenges.'
            aim='Create excitement and Get selected from thousands of appicants'
            />
            <PitchItem
            name='Business Model Deck'
            detail='Use while your 10-15 minutes meeting opportunity with a potential investor.'
            aim='Present every aspects of your startup business plan'
            />
            <PitchItem
            name='Raise Quick'
            detail='When your startup perform well with high traction and you need immediate fund to scale.'
            aim='Highlight your success and future plans'
            />
        </div>

        <p style={{ textAlign:'center' }} >
        <a href="/Home" id="pitch-more" className="btn-learn-more">+8 More...</a>
        </p>

      </div>
    </section>
    </>
  )
}

export default Pitch
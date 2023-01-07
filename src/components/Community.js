import React from 'react'
import CommunityItem from './CommunityItem'

function Community() {
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>GET TOOLS TO BUILD YOUR STARTUP</h2>
          <h3>Pitch deck | Work sheets | SPAs | Social Media </h3>
        </div>

        <div className="row content">
            <CommunityItem 
            img='assets/img/founder-kit.png'
            name='Get Your Custom Founder’s Kit'
            detail='Industry specific plan of action with Ready-to-Use Business templates, worksheets, Checklists and pitch decks for various stages of your startup journey.'
            cta='Write to us'
            />
            <CommunityItem
            img='assets/img/pitchdeck.png'
            name='Design your Pitch Deck'
            detail='Forget traditional format templates and Get your custom professional pitch deck. We help to include unique slides highlighting the competitive advantage of your startup.'
            cta='Write to us'
            />
            <CommunityItem
            img='assets/img/launchkit.png' 
            name='Get your Business Launch Kit'
            detail='Industry specific plan of action with a Professional Website, Ready-to-Use Business templates, worksheets, Checklists and social media marketing templates'
            cta='Write to us'
            />
            
        </div>

      </div>
    </section>
    </>
  )
}

export default Community
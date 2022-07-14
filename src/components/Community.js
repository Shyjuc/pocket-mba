import React from 'react'
import CommunityItem from './CommunityItem'

function Community() {
  return (
    <>
    <section id="community" className="services">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>CREATING LEARNING SPACE FOR</h2>
          <h3>Startup Founders and MBA's</h3>
        </div>

        <div className="row content">
            <CommunityItem 
            img='assets/img/founder-kit.png'
            name='Founder Kit & Brand Package'
            detail='Ready to Use Startup Templates, Lessons, Market Insights to run your business. Collection of 200+ marketing campaign posters.'
            />
            <CommunityItem
            img='assets/img/industry.png'
            name='Industry Awareness Program'
            detail='Insightful database and quizzes for employee engagement and training to understand the competitive dynamics of your industry.'
            />
            <CommunityItem
            img='assets/img/techno.png' 
            name='Follow Successful Startups & Trends'
            detail='Enhance digital awareness and get updated on market. Follow the Trends, Sectors and Technology shitf worth watching .'
            />
            
        </div>

      </div>
    </section>
    </>
  )
}

export default Community
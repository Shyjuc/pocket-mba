import React from 'react'
import SheetItem from './SheetItem'

function Sheet() {
  return (
    <>
    <section id="team" className="team">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>STARTUP MANAGEMENT TEMPLATES</h2>
          <p>Evaluate your business decisions and plan your startup journey. Delegate tasks effectively with your Marketing/Sales Team. Collect meaningul datas in relation with market research, lead management and sales.</p>
        </div>

        <div className="row">

          <SheetItem 
            img='assets/img/sheets/business_plan.png'
            title='Startup Business Plan'
            purpose='Prepare your detailed startup plan'
            detail='Summarizing your major financial objectives and operational goals'
          />
          <SheetItem 
            img='assets/img/sheets/competition.png'
            title='Competition Analysis'
            purpose='Understand competition in target market'
            detail='Research your major competitors to gain insight into their products, sales, and marketing'
          />
          <SheetItem 
            img='assets/img/sheets/competitive_advantage.png'
            title='Competitive Advantage'
            purpose='Study market competition'
            detail='Distinguishes your company from competitors and highlights the benefits'
          />
          <SheetItem 
            img='assets/img/sheets/lead_management.png'
            title='Lead Management'
            purpose='Track your leads and tele-calls'
            detail='Track your prospective customers and manage interactions with them'
          />

        </div>

        <p style={{ textAlign:'center' }} >
        <a href="/Home" id="pitch-more" className="btn-learn-more">View all</a>
        </p>
        
      </div>
    </section>
    </>
  )
}

export default Sheet
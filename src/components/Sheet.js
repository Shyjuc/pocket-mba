import React from 'react'
import SheetItem from './SheetItem'

function Sheet() {
  return (
    <>
      <section id="about" className="about" style = {{ marginTop : -50 }}>
      <div className="container" data-aos="fade-up">
      <div className="section-title">
          <h2>STARTUP WORKSHEETS</h2>
          <h3>What all You can Access?</h3>
        </div>

        <div className="row content">
          <div className="col-lg-6">
          <ul>
              <li><h4><i className="ri-file-excel-2-fill"></i> Competition Analysis Template</h4>
              <b>Purpose: </b> Compare your company with competitors. Focus on your weak areas Constantly analyze where you need to improve</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Competitive advantage Template</h4>
              <b>Purpose: </b> Delegate to marketing executive or hire an intern and Study competition in the market - Study about the market share distribution - Customer segments they are focusing.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Lead management</h4>
              <b>Purpose: </b> Delegate to Sales team, or tele-calling executive. Note down objections, objection handling methods, reasons of rejection, reasons behind successful conversion.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Market research Worksheet</h4>
              <b>Purpose: </b>  Study about the market, customers and existing products before launching your business. - Collect relevant structured data helpful for better decision making.</li>
              <div class="ui divider"></div>
            </ul>
            
          </div>
          <div className="col-lg-6 pt-4 pt-lg-0">
          <ul>
              <li><h4><i className="ri-file-excel-2-fill"></i> Marketing budget Template</h4>
              <b>Purpose: </b> Delegate to your marketing manager. Get things prioritized after going through his report. Evaluate his/her suggestions in relation with your business goal</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Marketing calendar</h4>
              <b>Purpose: </b> Delegate to Marketing team - Schedule all marketing activities - Track and evaluate result.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Marketing Campaign Planner</h4>
              <b>Purpose: </b> Delegate to Marketing team Conduct brain storming sessions Note down back up plans. Evaluate suggestions in relation with your business goal</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-excel-2-fill"></i> Company Profile</h4>
              <b>Purpose: </b> Win more projects - Tell your story and milestones - Highlight your vision, mission and role in the industry</li>
              <div class="ui divider"></div>
            </ul>
           
          </div>
        </div>

      </div>
    </section>
    <section id="team" className="team" style = {{ marginTop : -100 }}>
      <div className="container" data-aos="fade-up">
        
        <div className="row">

          <SheetItem 
            img='assets/img/sheets/business_plan.png'
            title='Marketing Plan'
            purpose='Brainstorm complete marketing plan with your team'
            detail='Conduct market research, study competition, brainstorm opportunities and build up your plan'
          />
          <SheetItem 
            img='assets/img/sheets/competition.png'
            title='Sales Progress Tracker'
            purpose='Track your sales activities and contacts'
            detail='Find potential customers. Obtain contact list and manage your meetings, follow up, closing etc'
          />
          <SheetItem 
            img='assets/img/sheets/competitive_advantage.png'
            title='Social Media Calendar'
            purpose='Plan Your Social Media Campaign'
            detail='Plan and Schedule weekly promo activities in multiple social media platforms'
          />
          <SheetItem 
            img='assets/img/sheets/lead_management.png'
            title='Startup Expense Forecast'
            purpose='Compare expense Vs Funding possibilities'
            detail='A simple worksheet to prepare an unofficial startup expense calculation'
          />

        </div>
        
      </div>
    </section>

    </>
  )
}

export default Sheet
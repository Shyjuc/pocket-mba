import React from 'react'

function Checklist() {
  return (
    <>
    <section id="about" className="about" style = {{ marginTop : -50 }}>
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Founder's Checklist</h2>
          <h3>What all You can Access?</h3>
        </div>

        <div className="row content">
          <div className="col-lg-6">
          <ul>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Business Idea Validation Checklist</h4>
              <b>Purpose: </b> Validate your business idea during initial planning and data collection.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Branding Checklist</h4>
              <b>Purpose: </b> To delegate and track work to a professional graphic designer or freelancers.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Business Plan Checklist</h4>
              <b>Purpose: </b> To plan out complete road map of your business with an effective strategy for growth.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Funding Checklist</h4>
              <b>Purpose: </b> To raise fund for your business. Source of fund, Stages of funding, Investor’s priority, funding requirement etc considered</li>
              <div class="ui divider"></div>
            </ul>
            
          </div>
          <div className="col-lg-6 pt-4 pt-lg-0">
          <ul>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Marketing Checklist</h4>
              <b>Purpose: </b> Before marketing plan out all activities and strategies.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Product Launch Checklist</h4>
              <b>Purpose: </b> Prepare for new product launch and design proper plan of actions.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> SEO Checklist</h4>
              <b>Purpose: </b> After website launch. Personally track all analytics and bring more users to website.</li>
              <div class="ui divider"></div>
              <li><h4><i className="ri-file-ppt-2-fill"></i> Social Media Checklist</h4>
              <b>Purpose: </b> To plan and track social media promotion and online presence. Schedule activities, Delegate with team and track progress</li>
              <div class="ui divider"></div>
            </ul>
           
          </div>
        </div>

      </div>
    </section>
    </>
  )
}

export default Checklist
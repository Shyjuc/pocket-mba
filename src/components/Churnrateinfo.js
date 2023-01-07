import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Probleminfo() {

  const info = "churnrate";
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-start  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-baseline order-2 order-lg-1">
        <div className="section-title">
          <h2>What is Churn Rate?</h2>
          <h3>Changes in a company's churn rate can offer insightful information about the performance of the firm</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>Studies show that acquiring new consumers is five to seven times more expensive than keeping the ones you already have. A commonly used metric places the likelihood of selling to a current client at 60% to 70% vs merely a 5% to 20% possibility for a new customer.</p>
              <p>The rate at which consumers stop doing business with a company during a predetermined time period is known as the churn rate, often referred to as the attrition rate. The amount of subscribers that discontinue their subscriptions or do not renew them may also be considered churn.</p>
              <p>Current customers are also considerably more likely to make purchases than new customers. The costs usually associated with onboarding new customers can be reduced by tracking customer turnover rates in e-commerce and using that information to develop tactics to improve and retain customers.</p>
              <p>Changes in a company's churn rate might offer insightful information about the firm. The customer churn rate may show how customers feel about an organization's services, pricing, competition, and customer satisfaction; it may also reflect on employee morale; or it may give information about the typical length of time a person stays a customer or employee.</p>
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
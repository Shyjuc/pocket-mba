import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {
  //const [info,useInfo] = useState("bmodel");

  const info = "bmodel";

  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2> A business model is a strategic plan of how a company will make money</h2>
          <h3>Its about the process. Understanding the business model helps the investors to have a better sense of financial data and competitive edge. </h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>This slide will notify the investors about your idea to make a profit. It will include information like products and services your company plans to sell, targeted markets, pricing strategies, and estimated expenses. A business model is based on the value proposition, which focuses on the goods and services provided by the company in comparison to competitors, as well as the reason for demand among customers or clients.
</p>
              <p>The term business model refers to a company's plan for making a profit. It identifies the products or services the business plans to sell, its identified target market, and any anticipated expenses.</p>
              <p>Business Models generally include information like products or services the business plans to sell, target markets, pricing strategies and any anticipated expenses. There are dozens of types of business models including retailers, manufacturers, fee-for-service, or freemium providers.</p>
              <h4>In general, a business model explains four things:</h4>
                <ul>
                <li>What are the products and services offered by the company?</li>
                <li>How about the marketing strategy?</li>
                <li>What expenses will it require?</li>
                <li>How does the company intend to make money?</li>
                </ul>
                <h4>How to design a business model?</h4>
                <ul>
                <li>Outline the revenue streams through which your company plans to generate revenue.</li>
                <li>Identify the ways to measure success. Note down the costs to acquire a customer or how many times customers have repurchased.</li>
                <li>Make an attractive and clear value proposition.</li>
                <li>Consider both fixed and variable expenses. Set the chargeable price that covers the expenses.</li>
                <li>This slide is the key slide in your pitch deck. Make it clear using a few words.</li>

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
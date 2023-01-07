import React,{useState} from 'react'
import LeftPanel from './LeftPanel'

function Tractioninfo() {
  const [info,useInfo] = useState("metrics");
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
        <div className="section-title">
          <h2>Business metrics are used to track performance across all areas of the business</h2>
          <h3>There are key metrics attached to every part of a business, including sales, marketing and finance. Choosing which metrics to track depends on a business's needs, objectives and its industry.</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>As a starting point, if you want to know which startup metrics you should be tracking, ask yourself — what’s my business model? The industry vertical in which you operate, whether that’s fintech, AI, life sciences or otherwise, is irrelevant at this stage. The way in which you charge your users will identify what metrics are most important to your startup.</p>
              <p>Here are some of the key metrics you could incorporate into your business plan</p>
              <h4>Net profit margin</h4>
              <p>The net profit margin, or simply net margin, measures how much net income or profit is generated as a percentage of revenue.</p>
              <h4>Gross margin</h4>
              <p>Gross margin is the difference between revenue and cost of goods sold, divided by revenue. Gross margin is expressed as a percentage. Generally, it is calculated as the selling price of an item, less the cost of goods sold, then divided by the same selling price.</p>
              <h4>Lead conversion rates</h4>
              <p>This metric helps you determine how many of your leads, or potential customers, decide to purchase your product or service. Leads can be converted by a combination of several variables, such as: Quality products, An excellent sales staff and a well-designed website</p>
              <h4>Website traffic</h4>
              <p>Website traffic refers to web users who visit a website. Web traffic is measured in visits, sometimes called sessions, and is a common way to measure an online business effectiveness at attracting an audience.</p>
              <h4>Sales revenue</h4>
              <p>Perhaps one of the most informative business metrics is revenue. By evaluating your company's sales, you can gauge how its products or services are performing in the marketplace and whether your marketing efforts are successful</p>
              <h4>Retention rate</h4>
              <p>Retention rate is an important metric that calculates the percentage of users who continue using your product or service over a given time period. A high retention rate means your current customers value your product and are providing a sustainable source of revenue. A low retention rate means you have a leaky bucket.</p>
              <h4>Customer acquisition cost</h4>
              <p>Customer Acquisition Cost is the cost of winning a customer to purchase a product or service. As an important unit economic, customer acquisition costs are often related to customer lifetime value. With CAC, any company can gauge how much they’re spending on acquiring each customer.</p>
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
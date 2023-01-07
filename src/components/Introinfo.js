import React,{useState} from 'react'
import LeftPanel from './LeftPanel'



function Introinfo() {
  const [info,useInfo] = useState("intro");
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      <div className="section-title">
          <h2>Yes, You need something more than a company logo</h2>
          <h3>Market Opportunities are identified on Clearly defined problems</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div>
              <p>Every now and then, a recurring nature had been observed among the people in context with brewing up their passion. Since hybrid work scenario and work automation are on the rise, those who are interested in turning their passion into reality must start somewhere. Whoever is willing to start a business venture, set up a personal brand, work towards creating an influential space, or look ahead to fuel the self-employment journey must utilize the time to get things on track. Whatever the purpose, there’s a need to push the stuff in the coming year.</p>
              <p>In today’s creative world, unlike some pre-defined careers, youth are moving on to explore new age opportunities such as writers, content creators, influencers, performers, artist, etc. Modern day individuals want to give a try to new challenges every day. Present time is calling upon the individuals who are scrolling the possibilities that allow them to build up a personal brand and enthrall to reach up more connectivity and revenue in exchange.</p>
              <p>Post-COVID, things have changed to a great extent for aspiring people. Issues like the ongoing recession, side-hustle culture, and growing internal competition have created turmoil around an employee to think something different. On the other side, entrepreneurs are no exception to these challenges. They roam around various stages, from ideation to product launch to funding, including planning several activities.</p>
              <p>For them, here comes a set of documents that help with everything from idea validation to product launch to managing funding. It also processes pitch deck presentations that include ready-to-use templates with proper guidelines.</p>
              <p>How do you identify a customer problem, When you are planning to go ahead with a potential business idea?</p>
              <p>This is the real starting point. Successful businessmen identify this scenario and respond quickly with their solution. Everything you build up as a strategic business plan is originated at this critical stage. So don’t rush to identify a market opportunity with a minimal understanding about your customer problem and its available solutions.</p>
              <p>Your problem slide should express deep understanding about customer’s pain points and its existing solutions. It should be easily relatable, anyone could understand in simple words. </p>
              <h4>Best practices</h4>
              <ul>
                <li><b>Tell your story. But why?</b> When you are communicating with a new investor, you are a perfect stranger. You start everything in a formal way. It is really important upto what extend will you be able to go beyond the formal space and converse things in a friendly space! Make them relatable. Make them emotionally connected. Make them imagine things while you are explaining. </li>
                <li>Address your target customers. This is a powerful hack to bring investor’s attention to the crust of the problem. Define your target customers clearly to convince the context of the problem</li>
                <li>A sentence with maximum 10-15 words or three bullet points</li>
                <li>It is a great idea to describe how you have initially invested time and energy in exploring and verifying this problem.</li>
                <li>Try to address the available alternatives or how customer’s find an imperfect solution</li>
                <li>Share any relevant statistics, social proof or market numbers to validate your statement</li>
              </ul>
              <h4>Don't do this</h4>
                <p>Remember you are addressing customer’s pain points here and you should bring their perspective here. That’s how you can make it more relatable and convincing to your investors. However, One possible mistake happens when you concentrate more on product features. Whatever you feel as a limitation in the features of a product might not be a painful customer problem. Or whatever you feel as a void in the market might not be a thing that addresses a customer problem</p>
                <ul>
                    <li>If your problem needs a detailed explanation, you should rethink that scenario! One simple sentence you can express with minimum 10 words or 3 bullet points. That’s the limit. Whenever your explanation doubles these limits, please understand one thing. There is lack of clarity from your side</li>
                    <li>Don’t try to explain the scenario with technical terms and business jargons.</li>
                    <li>Don’t jump into solution in this slide. Let your investors understand the real problem scenario</li>
                    <li>Don’t go ahead if you are not addressing a significant problem! In that case, either your concerned problem would be too small or users might not be willing to pay to solve that problem</li>
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

export default Introinfo
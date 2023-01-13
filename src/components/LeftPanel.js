import React from 'react'
import LeftLinks from './LeftLinks'

function LeftPanel({panel}) {
  return (
    <div>
      <h4>GETTING STARTED</h4>
      <ul style = {{ listStyle : 'none' }}>
                {panel=== "download" ?
              <LeftLinks name='Download Pitch deck' path='/download-pitchdeck' active='true' />
              :
              <LeftLinks name='Download Pitch deck' path='/download-pitchdeck' />
                }

              
      </ul>          
      <h4>MAIN SLIDES</h4>
        <ul style = {{ listStyle : 'none' }}>
                {panel=== "intro" ?
              <LeftLinks name='Introduction Slide' path='/how-to-design-intro-slide' active='true' />
              :
              <LeftLinks name='Introduction Slide' path='/how-to-design-intro-slide' />
                }

              {panel=== "problem" ?
              <LeftLinks name='Problem Slide' path='/how-to-design-problem-slide' active='true' />
              :
              <LeftLinks name='Problem Slide' path='/how-to-design-problem-slide' />
                }

              {panel=== "solution" ?
              <LeftLinks name='Solution Slide' path='/how-to-design-solution-slide' active='true' />
              :
              <LeftLinks name='Solution Slide' path='/how-to-design-solution-slide' />
                }

              {panel=== "market" ?
              <LeftLinks name='Market Slide' path='/how-to-explain-your-market' active='true' />
              :
              <LeftLinks name='Market Slide' path='/how-to-explain-your-market' />
                }

              {panel=== "traction" ?
              <LeftLinks name='Traction Slide' path='/how-to-speak-about-traction' active='true' />
              :
              <LeftLinks name='Traction Slide' path='/how-to-speak-about-traction' />
                }

              {panel=== "bmodel" ?
              <LeftLinks name='Business Model Slide' path='/what-is-your-business-model' active='true' />
              :
              <LeftLinks name='Business Model Slide' path='/what-is-your-business-model' />
                }

              {panel=== "competition" ?
              <LeftLinks name='Competition Slide' path='/how-to-describe-competition-in-your-market' active='true' />
              :
              <LeftLinks name='Competition Slide' path='/how-to-describe-competition-in-your-market' />
                }

              {panel=== "investment" ?
              <LeftLinks name='Investment Slide' path='/how-to-make-a-deal-in-pitchdeck' active='true' />
              :
              <LeftLinks name='Investment Slide' path='/how-to-make-a-deal-in-pitchdeck' />
                }

              {panel=== "gtm" ?
              <LeftLinks name='Go-to-Market Strategy Slide' path='/go-to-market-strategy' active='true' />
              :
              <LeftLinks name='Go-to-Market Strategy Slide' path='/go-to-market-strategy' />
                }

              {panel=== "metrics" ?
              <LeftLinks name='Key Metrics Slide' path='/startup-key-metrics' active='true' />
              :
              <LeftLinks name='Key Metrics Slide' path='/startup-key-metrics' />
                }

            </ul>

            <h4>UNIQUE SLIDES</h4>
        <ul style = {{ listStyle : 'none' }}>
                {panel=== "product" ?
              <LeftLinks name='Product slide' path='/design-your-product-slide' active='true' />
              :
              <LeftLinks name='Product Slide' path='/design-your-product-slide' />
                }

              {panel=== "vop" ?
              <LeftLinks name='Value Proposition' path='/design-your-value-proposition-slide' active='true' />
              :
              <LeftLinks name='Value Proposition' path='/design-your-value-proposition-slide' />
                }


              {panel=== "exitstrategy" ?
              <LeftLinks name='Exit Strategy' path='/design-your-exit-strategy-slide' active='true' />
              :
              <LeftLinks name='Exit Strategy' path='/design-your-exit-strategy-slide' />
                }

              {panel=== "roi" ?
              <LeftLinks name='Return on Investment' path='/what-is-return-on-investment' active='true' />
              :
              <LeftLinks name='Return on Investment' path='/what-is-return-on-investment' />
                }

              {panel=== "burnrate" ?
              <LeftLinks name='Burn Rate Slide' path='/what-is-burn-rate' active='true' />
              :
              <LeftLinks name='Burn Rate Slide' path='/what-is-burn-rate' />
                }

              {panel=== "churnrate" ?
              <LeftLinks name='Churn Rate Slide' path='/what-is-churn-rate' active='true' />
              :
              <LeftLinks name='Churn Rate Slide' path='/what-is-churn-rate' />
                }


            </ul>
    </div>
  )
}

export default LeftPanel
import React from 'react'
import PricingItems from './PricingItems'

function Pricing() {
  return (
    <>
        <section id="pricing" className="pricing">
      <div className="container" data-aos="fade-up">

        <div className="section-title">
          <h2>Pricing</h2>
        </div>

        <div className="row">
          <PricingItems
            img='assets/img/ed-tech.png'
            title = "Ed-Tech Brand Package"
            amount = "2499"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />
          <PricingItems
            img='assets/img/health-tech.png'
            title = "Healthcare Brand Package"
            amount = "2499"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />
          <PricingItems
            img='assets/img/consultant-kit.png'
            title = "Consultant's Brand Package"
            amount = "2499"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />
          <PricingItems
            img='assets/img/hiring_ads.png'
            title = "Hiring Ads Kit for Startups"
            amount = "999"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />
          <PricingItems
            img='assets/img/sales_offers.png'
            title = "Sales Offers"
            amount = "999"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />
          <PricingItems
            img='assets/img/wishes_kit.png'
            title = "Festival wishes"
            amount = "999"
            info1 = "Social Media Posters"
            info2 = "Marketing Camaigns"
            info3 = "Hiring Ads"
            info4 = "Promo Ofers"
          />

        </div>

      </div>
    </section>
    </>
  )
}

export default Pricing
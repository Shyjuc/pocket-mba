import React from 'react'
import FounderKit from '../FounderKit'
import HeroFounder from '../HeroFounder'
import Pitch from '../Pitch'
import Faq from '../Faq'
import WhySection from '../WhySection'
import Pricing from '../Pricing'
import Footer from '../Footer'

function Home() {
  return (
    <>
         <HeroFounder />
         <main id="main">
          <FounderKit />
          <Pitch />
          <Faq />
          <WhySection />
          <Pricing />
          <Footer />
         </main>
    </>
  )
}

export default Home
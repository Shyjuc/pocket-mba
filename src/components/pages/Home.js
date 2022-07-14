import React from 'react'
import FounderKit from '../FounderKit'
import HeroSection from '../HeroSection'
import Pitch from '../Pitch'
import Sheet from '../Sheet'
import Faq from '../Faq'
import Cta from '../Cta'
import WhySection from '../WhySection'
import Pricing from '../Pricing'
import Footer from '../Footer'
import Community from '../Community'

function Home() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Community />
          <Cta />
          <Footer />
         </main>
    </>
  )
}

export default Home
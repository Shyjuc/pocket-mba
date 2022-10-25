import React from 'react'
import FounderKit from '../FounderKit'
import HeroFounder from '../HeroFounder'
import Pitch from '../Pitch'
import Sheet from '../Sheet'
import Faq from '../Faq'
import WhySection from '../WhySection'
import Footer from '../Footer'

function Home() {
  return (
    <>
         <HeroFounder />
         <main id="main">
          <FounderKit />
          <Pitch />
          <Sheet />
          <WhySection />
          <Faq />
          <Footer />
         </main>
    </>
  )
}

export default Home
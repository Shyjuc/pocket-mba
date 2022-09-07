import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Community from '../Community'

function Founder() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Community />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Founder
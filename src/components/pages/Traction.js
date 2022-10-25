import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Tractioninfo from '../Tractioninfo'

function Traction() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Tractioninfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Traction
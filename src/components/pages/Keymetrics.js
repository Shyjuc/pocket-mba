import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Keymetricsinfo from '../Keymetricsinfo'

function Keymetrics() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Keymetricsinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Keymetrics
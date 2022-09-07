import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Probleminfo from '../Probleminfo'

function Problem() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Probleminfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Problem
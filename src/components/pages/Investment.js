import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Investmentinfo from '../Investmentinfo'

function Investment() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Investmentinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Investment
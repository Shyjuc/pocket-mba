import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Marketinfo from '../Marketinfo'

function Market() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Marketinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Market
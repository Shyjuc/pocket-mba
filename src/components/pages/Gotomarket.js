import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Gotomarketinfo from '../Gotomarketinfo'

function Gotomarket() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Gotomarketinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Gotomarket
import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Bmodelinfo from '../Bmodelinfo'

function Bmodel() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Bmodelinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Bmodel
import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Solutioninfo from '../Solutioninfo'

function Solution() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Solutioninfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Solution
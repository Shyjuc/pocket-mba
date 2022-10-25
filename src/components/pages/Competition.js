import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Competitioninfo from '../Competitioninfo'

function Competition() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Competitioninfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Competition
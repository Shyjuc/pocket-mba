import React from 'react'
import HeroSection from '../HeroSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Introinfo from '../Introinfo'

function Intro() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Introinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Intro
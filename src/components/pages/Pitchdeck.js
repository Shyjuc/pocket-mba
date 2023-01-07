import React from 'react'
import HeroBlogSection from '../HeroBlogSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Pitchinfo from '../Pitchinfo'

function Intro() {
  return (
    <>
         <main id="main">
          <Pitchinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Intro
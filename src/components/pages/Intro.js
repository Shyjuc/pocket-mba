import React from 'react'
import HeroBlogSection from '../HeroBlogSection'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import Introinfo from '../Introinfo'

function Intro() {
  return (
    <>
         <main id="main">
          <Introinfo />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Intro
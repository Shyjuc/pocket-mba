import React from 'react'
import FounderKit from '../FounderKit'
import HeroDocs from '../HeroDocs'
import Pitch from '../Pitch'
import Sheet from '../Sheet'
import Faq from '../Faq'
import WhySection from '../WhySection'
import Pricing from '../Pricing'
import Footer from '../Footer'
import Article from '../Articles'

function Docs() {
  return (
    <>
         <HeroDocs />
         <main id="main">
          <Article />
          <Faq />
          <Footer />
         </main>
    </>
  )
}

export default Docs
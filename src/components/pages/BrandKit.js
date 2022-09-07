import React from 'react'
import HeroFounder from '../HeroFounder'
import Faq from '../Faq'
import Footer from '../Footer'
import Pricing from '../Pricing'

function BrandKit() {
  return (
    <>
         <HeroFounder />
         <main id="main">
          <Pricing />
          <Footer />
         </main>
    </>
  )
}

export default BrandKit
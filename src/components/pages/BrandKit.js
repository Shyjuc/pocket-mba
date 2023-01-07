import React from 'react'
import FounderKit from '../FounderKit'
import HeroFounder from '../HeroFounder'
import Pitch from '../Pitch'
import Sheet from '../Sheet'
import Faq from '../Faq'
import Access from '../Access'
import Footer from '../Footer'
import Checklist from '../Checklist'

function BrandKit() {
  return (
    <>
         <HeroFounder />
         <main id="main">
          <Access />
          <Sheet />
          <Checklist />
          <Faq />
          <Footer />
         </main>
    </>
  )
}

export default BrandKit
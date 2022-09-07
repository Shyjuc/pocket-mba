import React from 'react'
import HeroDocs from '../HeroDocs'
import Faq from '../Faq'
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
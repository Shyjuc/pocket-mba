import React from 'react'
import HeroConsult from '../HeroConsult'
import CtaCommunity from '../CtaCommunity'
import Footer from '../Footer'
import ContactForm from '../ContactForm';

function Founder() {
  return (
    <>
         <HeroConsult />
         <main id="main">
          <ContactForm />
          <CtaCommunity />
          <Footer />
         </main>
    </>
  )
}

export default Founder
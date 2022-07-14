import React from 'react'
import HeroSection from '../HeroSection'
import Cta from '../Cta'
import Footer from '../Footer'
import Community from '../Community'

function Home() {
  return (
    <>
         <HeroSection />
         <main id="main">
          <Community />
          <Cta />
          <Footer />
         </main>
    </>
  )
}

export default Home
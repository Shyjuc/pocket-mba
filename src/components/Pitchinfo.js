import React,{useState} from 'react'
import LeftPanel from './LeftPanel';
import Install from './Install';
import Downloadinfo from './Downloadinfo';



function Introinfo() {
  const [info,useInfo] = useState("download");
  return (
    <>
    <section id="community" className="services" style = {{ marginTop : 100 }}>
      <div className="container d-flex align-items-start" data-aos="fade-up">
      <div className="col-lg-3 d-flex justify-content-left align-items-top  order-2 order-lg-1">
        <LeftPanel panel={info}/>
      </div>
      <div className="col-lg-9 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
      <div className="section-title">
          <h2>Download Pitch deck Template</h2>
          <h3>Create your Business Plan Pitch Deck from our Standard Pitch deck template. e</h3>
        </div>

        <div className="row content">
        <div className="col-xl-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div className="col-xl-12 col-md-12 align-items-stretch">
            <Install />
            <Downloadinfo />
            </div>
          </div>
            
        </div>
        </div>
      </div>
    </section>
    </>
  )
}

export default Introinfo
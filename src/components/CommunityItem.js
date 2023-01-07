import React from 'react'

function CommunityItem(props) {
  return (
    <div className="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div className="icon-box">
            <div className="card-pic"><img src={props.img} className="img-fluid" alt="" /></div>
              <h4>{props.name}</h4>
              <p>{props.detail}</p>
              <div className="d-flex justify-content-center justify-content-lg-start" style = {{ marginTop : 10 }}>
              <a href="#about" className="btn btn-primary btn-outline btn-lg">{props.cta}</a>
              </div>
            </div>
          </div>
  )
}

export default CommunityItem
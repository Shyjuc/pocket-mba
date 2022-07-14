import React from 'react'

function PitchItem(props) {
  return (
    <div className="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div className="icon-box">
              <div className="icon"><i className="bx bxl-dribbble"></i></div>
              <h4><a href="/Home">{props.name}</a></h4>
              <p>{props.detail}<br/><small>Aim: {props.aim}</small></p>
            </div>
          </div>
  )
}

export default PitchItem
import React from 'react'

function CommunityItem(props) {
  return (
    <div className="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div className="icon-box">
            <div className="card-pic"><img src={props.img} className="img-fluid" alt="" /></div>
              <h4><a href="">{props.name}</a></h4>
              <p>{props.detail}</p>
            </div>
          </div>
  )
}

export default CommunityItem
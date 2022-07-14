import React from 'react'

function SheetItem(props) {
  return (
    <div className="col-lg-6">
            <div className="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div className="pic"><img src={props.img} className="img-fluid" alt="" /></div>
              <div className="member-info">
                <h4>{props.title}</h4>
                <span>{props.purpose}</span>
                <p>{props.detail}</p>
              </div>
            </div>
          </div>
  )
}

export default SheetItem
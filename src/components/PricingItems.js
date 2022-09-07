import React from 'react'

function PricingItems(props) {
  return (
    <div className="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div className="box">
             <div className="card-pic">
                <img src={props.img} className="img-fluid" alt="" />
                </div>
              <h3>{props.title}</h3>
              <h4><sup>₹</sup>{props.amount}</h4>
              <ul>
              {props.info1 ? <li><i className="bx bx-check"></i> {props.info1}</li> : null}
              {props.info2 ? <li><i className="bx bx-check"></i> {props.info2}</li> : null}
              {props.info3 ?  <li><i className="bx bx-check"></i> {props.info3}</li> : null}
              {props.info4 ?  <li><i className="bx bx-check"></i> {props.info4}</li> : null}
              </ul>
              <a href="/Home" className="buy-btn">Buy Now</a>
            </div>
          </div>
  )
}

export default PricingItems
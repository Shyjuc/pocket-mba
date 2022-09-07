import React from 'react'
import {Link} from 'react-router-dom'

function ArticleItem(props) {
  return (
    <div className="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div className="icon-box">
            <div className="card-pic"><img src={props.img} className="img-fluid" alt="" /></div>
              <h4>{props.name}</h4>
              <p>{props.detail}</p>
              <Link to={props.path} className='download-btn'>Read more</Link>
            </div>
          </div>
  )
}

export default ArticleItem
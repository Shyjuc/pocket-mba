import React from 'react'

function RequestCard(props) {
  return (
        <div class="card" style = {{ margin : 15 }}>
    <div class="image">
      <img alt={props.name} src={props.img} />
    </div>
    <div class="content">
      <div class="header">{props.name}</div>
      <div class="description">
        {props.info}
      </div>
    </div>
    <div class="extra content">
      <span>
        <i class="download icon"></i>
        {props.download}
      </span>
    </div>
  </div>
  )
}

export default RequestCard
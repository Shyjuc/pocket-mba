import React from 'react'
import { Link } from 'react-router-dom'

function LeftLinks({name,path,active}) {
  return (
    <div>
        <li>
            { active ? 
            <h4 style = {{ color : '#1c7262' }}><i className="ri-file-ppt-2-fill"></i> <Link style = {{ color : '#1c7262', marginLeft:'5px' }} to={path} >{name}</Link></h4>
            :
            <h4 style = {{ color : '#030106' }}><i className="ri-file-ppt-2-fill"></i> 
            <Link style = {{ color : '#030106', marginLeft:'5px' }} to={path}>{name}</Link>
            </h4>
            }
            </li>
            <div class="ui divider"></div>
    </div>
  )
}

export default LeftLinks
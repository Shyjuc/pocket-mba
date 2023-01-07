import React from 'react'
import { Link } from 'react-router-dom'

function MenuLeftLinks({name,path,active}) {
  return (
    <div>
        <li>
            { active ? 
            <h4 style = {{ color : '#1c7262' }}> <Link style = {{ color : '#1c7262', marginLeft:'5px' }} to={path} >{name}</Link></h4>
            :
            <h4 style = {{ color : '#030106' }}> 
            <Link style = {{ color : '#030106', marginLeft:'5px' }} to={path}>{name}</Link>
            </h4>
            }
            </li>
            <div class="ui divider"></div>
    </div>
  )
}

export default MenuLeftLinks
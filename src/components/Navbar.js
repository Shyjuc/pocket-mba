import React, {useState} from 'react'
import logo from '../assets/img/logo.png';
import { AiOutlineClose, AiOutlineMenu } from 'react-icons/ai';
import MenuLeftLinks from './MenuLeftLinks'
import {Link} from 'react-router-dom'


function Navbar() {
  const [nav, setNav] = useState(false);

  const handleNav = () => {
    setNav(!nav);
  };

  const [click,setClick] = useState(false);

  const closeMobileMenu = () =>setClick(false);
  return (
    <>
    <header id="header" className="fixed-top">
    <div className="container d-flex align-items-center full-width" style={{ justifyContent : 'flex-end', width: '100%' }}>
      
    <img src={logo} className="img-fluid animated left floated" alt="Pocket MBA" />
    <div onClick={handleNav} className='d-block d-lg-none' style={{ float:'right', marginLeft:'10px' }}>
        {nav ? <AiOutlineClose color="white" size={20}/> : <AiOutlineMenu color="white" size={20} />}
        </div>  
  

    <div>
    {nav ? 
      <div style = {{ position : 'fixed', padding: '20px', left : '0', top: '0', zIndex:'10000', width:'200px', backgroundColor: '#1c7262', height:'100%', transitionDelay : '2s'  }}>  
      <ul style={{ listStyle : 'none',  marginTop: '10px', marginLeft: '-20px', }}>
      <MenuLeftLinks name='Home' path='/' />
      <MenuLeftLinks name='Resources' path='/resources' />
      <MenuLeftLinks name="Founder's Kit" path='/download' />
      <MenuLeftLinks name='Services' path='/services' />
      <MenuLeftLinks name='Contact' path='/consult' />
      </ul> 
      </div>
      : 
      <nav id="navbar" className="navbar" >
        <ul>
          <li>
          <Link to="/" className='nav-link scrollto active' onClick={closeMobileMenu}>Home</Link>
          </li>
          <li>
          <Link to="/resources" className='nav-link scrollto' onClick={closeMobileMenu}>Resources</Link>
          </li>
          <li>
          <Link to="/download" className='nav-link scrollto' onClick={closeMobileMenu}>Founder's Kit</Link>
          </li>
          <li>
          <Link to="/services" className='nav-link scrollto' onClick={closeMobileMenu}>Services</Link>
          </li>
          <li>
          <Link to="/consult" className='getstarted scrollto'>Consult Us</Link>
          </li>
        </ul>
        
        
      </nav> }
    </div>

  </div>


    
      

  </header>
    </>
  )
}

export default Navbar
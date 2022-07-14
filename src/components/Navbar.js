import React, {useState,useEfect} from 'react'
import logo from '../assets/img/logo.png';
import {Link} from 'react-router-dom'


function Navbar() {
  const [click,setClick] = useState(false);

  const closeMobileMenu = () =>setClick(false);
  const handleClick = () => setClick(!click);
  return (
    <>
    <header id="header" className="fixed-top ">
    <div className="container d-flex align-items-center">
      <img src={logo} className="img-fluid animated" alt="Pocket MBA" />
      
      <nav id="navbar" className="navbar">
        <ul>
          <li>
          <Link to="/" className='nav-link scrollto active' onClick={closeMobileMenu}>Home</Link>
          </li>
          <li>
          <Link to="/founder-kit" className='nav-link scrollto' onClick={closeMobileMenu}>Founder's Kit</Link>
          </li>
          <li className="dropdown"><a href="#"><span>Pocket MBA</span> <i className="bi bi-chevron-down"></i></a>
            <ul>
              <li>
              <Link to="/community" className='nav-link scrollto' onClick={closeMobileMenu}>Community</Link>
              </li>
              <li>
              <Link to="/contact" className='nav-link scrollto' onClick={closeMobileMenu}>Contact</Link>
              </li>
            </ul>
          </li>
          <li>
          <Link to="/kit" className='getstarted scrollto'>Get Started</Link>
          </li>
        </ul>
        <i onClick={handleClick} className="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
    </>
  )
}

export default Navbar
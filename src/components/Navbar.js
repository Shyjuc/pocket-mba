import React, {useState} from 'react'
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
          <Link to="/community" className='nav-link scrollto' onClick={closeMobileMenu}>Community</Link>
          </li>
          <li>
          <Link to="/docs" className='nav-link scrollto' onClick={closeMobileMenu}>Docs</Link>
          </li>
          <li>
          <Link to="/consult" className='getstarted scrollto'>Consult Us</Link>
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
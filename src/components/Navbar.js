import React, { useState } from 'react';
import Logo from "../assets/logo.png";
import Logotxt from "../assets/logo_texto.png";
import Menu from "../assets/menu.png";
import { Link } from "react-router-dom";
import '../styles/Navbar.css'

function Navbar() {
  const [openLinks, setOpenLinks] = useState(false);

  const toggleNavbar = () => {
    setOpenLinks(!openLinks);
  }

  const closeNavbar = () => {
    setOpenLinks(false);
  }

  return (
    <>
      <div className="navbar">
        {/* Contenedor visible de los logos */}
        <div className="visibleLogos">
          <img src={Logo} className="logo" alt="Logo" />
          <img src={Logotxt} className="logotxt" alt="Logo texto" />
        </div>

        <button onClick={toggleNavbar}>
          <img src={Menu} className="Menu" alt="Menu" />
        </button>

        {/* Muestra las opciones del menú fuera del Navbar cuando el menú está abierto */}
        {openLinks && (
          <div className="hiddenLinks">
            <Link to="/" onClick={closeNavbar}>Home</Link>
            <Link to="/sobrenosotros" onClick={closeNavbar}>Sobre nosotros</Link>
            <Link to="/nuestrosanimales" onClick={closeNavbar}>Nuestros animales</Link>
            <Link to="/contacto" onClick={closeNavbar}>Contacto</Link>
          </div>
        )}
      </div>
    </>
  )
}

export default Navbar;

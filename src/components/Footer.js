import React from 'react'
import Instagram from "../assets/icons/instagram.png";
import Facebook from "../assets/icons/facebook.png";
import Equis from "../assets/icons/equis.png";
import Tiktok from "../assets/icons/tik-tok.png";
import '../styles/Footer.css';

function Footer() {
  return (
    <div className="footer">
      <div className="socialMediaContainer">
        <img src={Instagram} className="socialmedia" alt="Logo instagram" />
        <img src={Facebook} className="socialmedia" alt="Logo facebook" />
        <img src={Equis} className="socialmedia" alt="Logo equis" />
        <img src={Tiktok} className="socialmedia" alt="Logo tiktok" />

      </div>
      <p >Copyright &copy; 2024 by Lunna & Ángel, Inc. </p>
    </div>
  )
}

export default Footer

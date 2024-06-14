import React from 'react'
import '../styles/Contacto.css';
import ImgContacto from "../assets/img_contacto.jpg"

function Contacto() {
  return (
    <div className="contacto">
      <div className="contacto1" style={{ backgroundImage: `url(${ImgContacto})` }}></div>
      <div className="contacto2">
        <h2 className="contactTitle">Contacto</h2>
        <form id="contact-form"method="POST">
          <label htmlFor="name">Nombre completo</label>
          <input id="name" type="text" required/>
          <br/>
          <label htmlFor="email">Correo electrónico</label>
          <input id="email" type="email" required/>
          <br/>
          <label htmlFor="message">Mensaje</label>
          <textarea rows="10" id="message" required></textarea>
          <button type="submit">Enviar</button>

        </form>
      </div>
      
    </div>
  )
}

export default Contacto

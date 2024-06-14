import React from 'react'
import '../styles/Home.css';

function Home() {
  return (
    <div className="home">
        <div className="homeOptions">
          <h2 className="homeTitle">Adoptar</h2>
          <p className="homeDescrip">Al adoptar, no solo estás salvando una vida, sino que también estás ganando un compañero fiel que te brindará alegría y compañía incondicional. Los animales adoptados son increíblemente agradecidos y llenarán tu hogar de amor y gratitud.
            Cada mascota tiene una historia única y merece una segunda oportunidad. Visita tu refugio local y descubre a tu nuevo mejor amigo. ¡Adopta, no compres! Juntos podemos hacer una gran diferencia.</p>
        </div>
        <div className="homeOptions">
          <h2 className="homeTitle">Hacerse voluntario</h2>
          <p className="homeDescrip">¡Únete a nuestro equipo de voluntarios y marca la diferencia en las vidas de
          nuestros amigos de cuatro patas! Ya sea paseando perros, jugando con gatitos o ayudando en eventos de
          adopción,
          tu tiempo y energía son invaluables para nosotros. No se requiere experiencia previa, solo un amor genuino por
          los animales y el deseo de ayudar. Únete a nuestra familia voluntaria hoy mismo y experimenta la alegría de
          hacer una diferencia.</p>
        </div>
        <div className="homeOptions">
          <h2 className="homeTitle">Casa de acogida</h2>
          <p className="homeDescrip">¡Conviértete en un salvavidas temporal para un animal necesitado! Como casa de
          acogida, brindarás un hogar amoroso y seguro a un perro o gato mientras esperan su hogar para siempre. Ya sea
          que estés dispuesto a cuidar de un cachorro necesitado de socialización o de un gato herido en proceso de
          recuperación, tu apoyo es crucial para salvar vidas. ¡Únete a nuestro equipo de hogares de acogida y sé parte
          del puente entre el pasado difícil y el futuro brillante de estos animales!</p>
        </div>
        <div className="homeOptions">
          <h2 className="homeTitle">Hacerse asociado</h2>
          <p className="homeDescrip">Únete a nuestra familia de apoyo mensual y ayuda a cambiar vidas todos los días.
          Como asociado, tu generosa contribución mensual garantiza que podamos continuar brindando refugio,
          alimentación,
          atención veterinaria y amor a los animales necesitados. Cada pequeña ayuda hace una gran diferencia. ¡Hazte
          asociado hoy y sé parte de nuestro compromiso continuo con el bienestar animal!</p>
        </div>

      </div>
    
  )
}

export default Home

import React from 'react'
import ImgSobreNosotros from '../assets/imgsobrenosotros.jpg'
import '../styles/SobreNosotros.css';

function SobreNosotros() {
  return (
    <div className="sobreNosotros">
      <div className="sobreNosotros1" style={{ backgroundImage: `url(${ImgSobreNosotros})` }}></div>
      <div className="sobreNosotros2">
        <h2 className="sobrenosotrosTitle">Sobre nosotros</h2>
        <p className="sobrenosotrosDescrip">En Manada de Pan nos dedicamos con pasión y compromiso a la protección y cuidado de los animales más vulnerables. Desde nuestro inicio, nos hemos esforzado por brindar un refugio seguro y amoroso para perros y gatos que han sido abandonados o maltratados, ofreciéndoles una segunda oportunidad para encontrar un hogar lleno de cariño.

          Nuestro equipo está formado por personas apasionadas por los animales, dedicadas a proporcionarles atención médica, alimentación adecuada y el amor que merecen. Nos esforzamos por educar a la comunidad sobre la importancia de la adopción responsable y el respeto hacia todos los seres vivos.

          Únete a nosotros en nuestra misión de construir un futuro donde cada animal tenga la oportunidad de vivir una vida plena y feliz. Juntos, podemos hacer una diferencia significativa en el bienestar animal y crear un mundo más compasivo.

          ¡Gracias por apoyar a Manada de Pan!</p>
      </div>
    </div>
  )
}

export default SobreNosotros

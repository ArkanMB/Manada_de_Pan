import React from 'react'

function NuestrosanimalesItem({image, name, description}) {
  return (
    <div className="nuestrosanimalesItem">
      <div style={{ backgroundImage: `url(${image})` }}> </div>
      <h2> {name} </h2>
      <p> {description} </p>
      
    </div>
  )
}

export default NuestrosanimalesItem

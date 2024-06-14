import React from 'react';
import { nuestrosanimalesList } from '../helpers/NuestrosanimalesList';
import NuestrosanimalesItem from '../components/NuestrosanimalesItem';
import '../styles/NuestrosAnimales.css';

function NuestrosAnimales() {
  return (
    <div className="nuestrosanimales">
      <h1 className="nuestrosanimalesTitle">Nuestros animales</h1>
      <div className="nuestrosanimalesList">
        {nuestrosanimalesList.map((nuestrosanimalesItem, key) => {
          return (<NuestrosanimalesItem key={key} image={nuestrosanimalesItem.image} name={nuestrosanimalesItem.name} description={nuestrosanimalesItem.description} />
          )
        }
        )}

      </div>

    </div>
  )
}

export default NuestrosAnimales

import React from 'react';
import './App.css';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Home from './pages/Home';
import SobreNosotros from './pages/SobreNosotros';
import NuestrosAnimales from './pages/NuestrosAnimales';
import Contacto from './pages/Contacto';
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import './styles/fonts.css';


function App() {
  return (
    <div className="App">
      <Router>
        <Navbar />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/nuestrosanimales" element={<NuestrosAnimales />} />
          <Route path="/sobrenosotros" element={<SobreNosotros />} />
          <Route path="/contacto" element={<Contacto />} />
        </Routes>
        <Footer/>
      </Router>
    </div>
  );
}
export default App;

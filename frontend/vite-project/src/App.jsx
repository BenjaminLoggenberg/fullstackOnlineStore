import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Home from './components/home/home'
import { Route, Routes } from 'react-router-dom'

function App() {


  return (
    <>
<Routes>
  <Route path="/" element= {<Home />} />
  <Route path="/shop"/>
  <Route path="/cart"/>
  <Route path="/contact"/>
</Routes>
    </>
  )
}

export default App

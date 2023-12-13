import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Home from './components/home/home'
import ShopPage from './components/shop/shopPage'
import ShoppingCart from './components/shop/shoppingCart'
import ContactPage from './components/contact/contactPage'
import { Link, Route, Routes } from 'react-router-dom'


function App() {


  return (
    <>
    <nav>
      <ul>
        <li><Link to="/">Home</Link></li>
        <li><Link to="/shop">Shop</Link></li>
        <li><Link to="/cart">Cart</Link></li>
        <li><Link to="/contact">Contact Us</Link></li>
      
      </ul>
    </nav>
<Routes>
  <Route path="/" element={<Home />} />
  <Route path="/shop" element={<ShopPage /> } />
  <Route path="/cart" element={<ShoppingCart />} />
  <Route path="/contact" element={<ContactPage />} />
</Routes>
    </>
  )
}

export default App

// Header.js

import React from 'react';
import { Link } from 'react-router-dom'; // If you're using React Router

const Header = () => {
  return (
    <header>
      <div className="logo">
        <Link to="/">Your Logo</Link>
      </div>
      <nav>
        <ul>
          <li><Link to="/">Home</Link></li>
          <li><Link to="/about">About</Link></li>
          <li><Link to="/lookbook">Lookbook</Link></li>
          <li><Link to="/shop">Shop</Link></li>
          <li><Link to="/contact">Contact</Link></li>
        </ul>
      </nav>
    </header>
  );
};

export default Header;

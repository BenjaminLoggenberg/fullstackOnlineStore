// ShopPage.js

import React from 'react';
import Api from '../services/api.js';
import { Link } from 'react-router-dom';


const ShopPage = () => {
  return (
    <section className="shop">
      <h2>Shop</h2>
   <Link to="/shop/item/1">item 1</Link>
   <Link to="/shop/item/2">item 2</Link>
   <Link to="/shop/item/3">item 3</Link>
    </section>
  );
};

export default ShopPage;

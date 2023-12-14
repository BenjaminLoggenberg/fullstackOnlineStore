// ProductPage.js

import React from 'react';
import Api from '../services/api.js';
import { useParams } from 'react-router-dom';

const Product = () => {
  // Fetch product details from API based on the selected product
const { id } = useParams()
  return (
    <section className="product">
      <h2> Product {id} </h2>
    </section>
  );
};

export default Product;

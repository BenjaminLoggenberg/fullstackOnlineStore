import { Router, Routes, Route } from "react-router-dom";
import Home from "../components/home/home";
import ShopPage from "../components/shop/shopPage";
import ShoppingCart from "../components/shop/shoppingCart";
import ContactPage from "../components/contact/contactPage";

const Router = () => {
    return (
        <>
        <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/shop" element={<ShopPage /> } />
        {/* <Route path="/shop/item/:id" element={< /> } /> */}
        <Route path="/cart" element={<ShoppingCart />} />
        <Route path="/contact" element={<ContactPage />} />
      </Routes>
      </>
    )

};

export default Router
import React from 'react';
import ReactDOM from 'react-dom';
import IndexPage from './pages/IndexPage';
import { HashRouter as Router, Switch, Route } from "react-router-dom";
import AboutusPage from './pages/AboutusPage';
import Header from './common_components/Header';
import Footer from './common_components/Footer';
import ShopPage from './pages/ShopPage';
import ContactPage from './pages/ContactPage';
import LoginPage from './pages/LoginPage';
import MyAccount from './pages/MyAccount';
import CartPage from './pages/CartPage';
import WishlistPage from './pages/WishlistPage';
import CheckoutPage from './pages/CheckoutPage';

function Example() {
    return (
        <div className="container-fluid" >

        <div className="main-wrapper">

            <Router>
            <Header/>

            <Switch>
            <Route exact path="/" component={IndexPage} />
             <Route exact path="/about" component={AboutusPage} />
             <Route path="/login" component={LoginPage} />
             <Route path="/shop" component={ShopPage} />
             <Route path="/contact-us" component={ContactPage} />
             <Route path="/myaccount" component={MyAccount} />
             <Route path="/cart" component={CartPage} />
             <Route path="/wishlist" component={WishlistPage} />
             <Route path="/checkout" component={CheckoutPage} />

            </Switch>

            <Footer/>
             </Router>

        </div>

</div>

    );
}

export default Example;

if (document.getElementById('app')) {
    ReactDOM.render(<Example />, document.getElementById('app'));
}

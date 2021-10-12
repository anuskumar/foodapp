import React from 'react'
import Footer from '../common_components/Footer';
import Header from '../common_components/Header';
import BannerArea from '../mainpage_components/BannerArea';
import BannerAreaSecond from '../mainpage_components/BannerAreaSecond';
import Categories from '../mainpage_components/Categories';
import DealsArea from '../mainpage_components/DealsArea';
import ModalProduct from '../mainpage_components/ModalProduct';
import ProductAreaSecond from '../mainpage_components/ProductAreaSecond';
import ProductAreaThird from '../mainpage_components/ProductAreaThird';
import ProductsArea from '../mainpage_components/ProductsArea';
import SlideArea from '../mainpage_components/SlideArea';
import Testimonials from '../mainpage_components/Testimonials';


function IndexPage() {
    return (
        <div>
        {/* <Header/> */}
        <SlideArea/>
        <Categories/>
        <BannerArea/>
        <ModalProduct/>
        <ProductsArea/>
        <DealsArea/>
        <ProductAreaSecond/>
        <BannerAreaSecond/>
        <Testimonials/>
        <ProductAreaThird/>
        {/* <Footer/> */}
        </div>
    )
}

export default IndexPage

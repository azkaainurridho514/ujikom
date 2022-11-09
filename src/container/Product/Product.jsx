import React, {Component, Fragment} from "react";
import './Product.css';
import CardProduct from '../CardProduct/CardProduct';

class Product extends Component{
    state = {
        order: 0
    }
    changeCart = (newValue) => {
        this.setState({
            order: newValue
        })
    }
    
    render(){
        return(
            <Fragment>
                <div className="card">
                    <div className="cart">{this.state.order}</div>
                    <CardProduct onChangeCart={(value) => this.changeCart(value)}/>
                </div>
            </Fragment>
        )
    }
}

export default Product;
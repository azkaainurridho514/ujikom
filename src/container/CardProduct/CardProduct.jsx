import React, {Component} from "react";

class CardProduct extends Component{

    state = {
        order: 0
    }

    changeCart = (val) => {
        this.props.onChangeCart(val)
    }

    buttonPlus = () => {
        if(this.state.order < 10){
            this.setState({
                order: this.state.order + 1
            }, () => {
                this.changeCart(this.state.order)
            })
        }
        
    }

    buttonMins = () => {
        if(this.state.order > 0){
            this.setState({
                order: this.state.order - 1
            }, () => {
                this.changeCart(this.state.order)
            })
        }
        
    }

    render(){
        return(
            <div>
                <button onClick={this.buttonMins}>kurang</button>
                <p>{this.state.order}</p>
                <button onClick={this.buttonPlus}>tambah</button>
            </div>
        )
    }

}

export default CardProduct;
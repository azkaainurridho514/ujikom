import React from "react";
import './Card.css';

const Card = (props) => {
    return(
        <div className="card">
            <img src="https://www.youtube.com/watch?v=HCq1OcAEAm0&list=RDr7qovpFAGrQ&index=5" alt="" />
            <h3>{props.title}</h3>
            <p>{props.hour}</p>
        </div>
    )
}

Card.defaultProps = {
    title: 'not title',
    hour: '00.00'
}
export default Card;
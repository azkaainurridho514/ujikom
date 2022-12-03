import logo from './logo.svg';
import './App.css';
import React, {Component} from 'react';

class Time extends Component {

  constructor(props) {
    super(props)
    this.state = {
      time: props.start
    }
  }

  componentDidMount() {
    this.addInterval = setInterval(() => this.increase(), 1000)
  }

  componentWillUnmount() {
    clearInterval(this.addInterval)
  }

  increase(){
    this.setState((state) => ({
      time: parseInt(state.time) + 1
    }))
  }

  render(){
    return(
      <div>{this.state.time} - detik</div>
    )
  }

}

class App extends Component {
  render(){
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <p><Time start="1"/></p>
        </header>
      </div>
    );
  }
}

export default App;

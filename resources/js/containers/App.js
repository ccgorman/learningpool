import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from '../components/Header'
import Courses from './Courses'

class App extends Component {
    render () {
        return (
            <BrowserRouter>
            <div>
                <Header />
                <Courses />
            </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

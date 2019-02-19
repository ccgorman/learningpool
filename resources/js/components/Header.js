import React from 'react'
import { Link } from 'react-router-dom'

const Header = () => (
    <nav className='navbar navbar-expand-md navbar-light navbar-laravel'>
        <div className='container'>
            <Link className='navbar-brand' to='/'>Learning Pool</Link>
            <Link className='navbar-brand align-right' to='/login'>Login</Link>
        </div>
    </nav>
)

export default Header
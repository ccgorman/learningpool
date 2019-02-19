import React, { Component } from 'react'
import axios from 'axios'
import { Link } from 'react-router-dom'

class Courses extends Component {
    constructor () {
        super()
        this.state = {
            courses: []
        }
    }

    componentDidMount () {
        axios.get('/api/courses').then(response => {
            this.setState({
                courses: response.data.data
            })
        })
    }

    render () {
        const { courses } = this.state
        return (
            <div className='container py-4'>
            <div className='row justify-content-center'>
                <div className='col-md-8'>
                <div className='card'>
                    <div className='card-header'>All Courses</div>
                    <div className='card-body'>
                    <Link className='btn btn-primary btn-sm mb-3' to='/create'>
                        Create new course
                    </Link>
                    <ul className='list-group list-group-flush'>
                        { this.state.courses.map(course => (
                        <Link
                            className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                            to={`/${course.id}`}
                            key={course.id}
                        >
                            {course.title}
                            <span className='badge badge-primary badge-pill'>
                            {course.users}
                            </span>
                        </Link>
                        ))}
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        )
        }
}

export default Courses
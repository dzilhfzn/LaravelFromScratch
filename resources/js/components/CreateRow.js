import React, { Component } from 'react'

export default class CreateRow extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <tr>
                {
                    Object.keys(this.props.data).map((key, index) => {

                        if (key === "created_at" || key === "updated_at") return

                        return <td key={index}>
                            { this.props.data[key] }
                        </td>
                    })
                }
            </tr>
        )
    }
}

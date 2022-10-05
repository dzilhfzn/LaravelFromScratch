import axios from "axios";
import React, {Component} from "react";
import { Table } from "reactstrap";
import CreateRow from "./CreateRow";

export default class CreateTable extends Component {
    
    constructor(props) {
        super(props);

        this.state = {
            student: [],
        };
    };

    componentDidMount = () => {
        this.getStudentList();
    }

    getStudentList = () => {
        axios.get('/get/student/list').then((response) => {
            // console.log(response.data[0].student_ic);
            this.setState({
                student: response.data,
            })
        })
    }

    render() {
        console.log(this.state.student[0])
        return (
            <Table bordered striped hover responsive>
                <thead>
                    <tr>
                        {
                            this.props.tableHeader.map((element, index) => {
                                return <th key={index}>
                                    {element}
                                </th>
                            })
                        }
                    </tr>
                </thead>
                <tbody>
                    {
                        this.state.student.map((element, index) => <CreateRow key={index} data={element}/>)
                    }
                </tbody>
            </Table>
        );
    }
}
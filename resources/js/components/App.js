import React from "react";
import CreateTable from "./CreateTable";

function App() {
    return (
        <div className="container">
            <CreateTable
                tableHeader = {[
                    '#', 
                    'Student ID', 
                    'Student IC', 
                    'Student Name',
                ]}
            />
        </div>
    );
}

export default App;
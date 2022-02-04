import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom";
import Spinner from "./Spinner";
import Table from "./Table";
import { THead } from "./THead";

function Index() {
    const columns = ["S.No", "ID", "Name", "Age", "Email"];

    return (
        <>
            <div className="container">
                <div className="row">
                    <h1>HOMEPAGE</h1>
                </div>
            </div>
            <div className="container-table100">
                <div className="wrap-table100">
                    <div className="table100">
                        <h1 className="">
                            <i>USERS LIST</i>
                        </h1>
                        <Table columns={columns} />
                    </div>
                </div>
            </div>
        </>
    );
}

export default Index;

if (document.getElementById("react_app")) {
    ReactDOM.render(<Index />, document.getElementById("react_app"));
}

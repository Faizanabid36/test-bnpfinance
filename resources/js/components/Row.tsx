import React from "react";
import { UserType } from "./types";

type RowPropsType = {
    rowNum: number;
};
export default function Row({
    name,
    age,
    email,
    id,
    rowNum,
}: UserType & RowPropsType): JSX.Element {
    return (
        <tr key={id} className="row">
            <td>{rowNum + 1}</td>
            <td>{id}</td>
            <td>{name}</td>
            <td>{age}</td>
            <td>{email}</td>
        </tr>
    );
}

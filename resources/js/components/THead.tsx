import React from "react";

type ColumnsType = {
    columns: Array<string>;
};
export function THead({ columns }: ColumnsType): JSX.Element {
    return (
        <thead className="table100-head">
            <tr>
                {columns.map((col: string, index: number) => (
                    <th key={index}>{col}</th>
                ))}
            </tr>
        </thead>
    );
}

import React from "react";
import Row from "./Row";
import { UserType } from "./types";

type ListPropsType = {
    users: Array<UserType>;
};

export default function TableBody({ users }: ListPropsType): JSX.Element {
    return (
        <tbody>
            {users.map((item: UserType, index: number) => (
                <Row
                    rowNum={index}
                    key={item.id}
                    id={item.id}
                    name={item.name}
                    email={item.email}
                    age={item.age}
                />
            ))}
        </tbody>
    );
}

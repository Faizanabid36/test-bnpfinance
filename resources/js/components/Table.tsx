import axios from "axios";
import React, { useEffect, useState } from "react";
import Spinner from "./Spinner";
import List from "./TableBody";
import { THead } from "./THead";
import { UserType } from "./types";

type TablePropsType = {
    columns: Array<string>;
};

export default function Table({ columns }: TablePropsType): JSX.Element {
    const [users, setUsers] = useState<UserType[]>([]);
    const [loading, setLoading] = useState<boolean>(true);
    useEffect(() => {
        // setLoading(true);
        axios
            .get("/users")
            .then((e) => {
                setUsers(e.data.users);
                setLoading(false);
            })
            .catch((err) => console.log(err));
    }, []);

    return (
        <>
            {!loading ? (
                <table className="">
                    <THead columns={columns} />
                    <List users={users} />
                </table>
            ) : (
                <Spinner />
            )}
        </>
    );
}

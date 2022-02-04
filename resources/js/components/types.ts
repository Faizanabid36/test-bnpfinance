export type UserType = {
    id: number;
    name: string;
    email: string;
    age?: number;
    created_at?: string;
    updated_at?: string;
    loans?: Array<LoanType>;
};

export type LoanType = {
    id: number;
    user?: UserType;
    loan_type: string;
    created_at?: string;
    updated_at?: string;
    payments?: Array<PaymentType>;
};

export type PaymentType = {
    id: number;
    loan?: LoanType;
    payment_method: string;
    payment_date: string;
    created_at?: string;
    updated_at?: string;
};

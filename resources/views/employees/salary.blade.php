<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salary Report</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            padding: 4rem 3rem;
        }

        header {
            border-bottom: 1px solid black;
            margin-bottom: 16px;
            padding: 8px 16px;
        }

        .header__company {
            display: inline-block;
            color: #080808;
        }

        h4.company__name {}

        p.company__address,
        p.company__phoneNumber {
            font-size: 14px;
        }

        .header__title {
            display: inline-block;
            color: #242424;
            margin: auto 32px;
            font-size: 24px;
            font-weight: 700;
        }

        .header__information {
            display: inline-block;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .header__information>ul {
            list-style: none;
        }

        .employeeInformation>ul>li {
            line-height: 1.5rem;
        }

        table {
            width: 100%;
        }

        table.salary {
            padding: 16px auto;
        }

        table.salary thead, table.salary tfoot {
            border-top: 1px solid #242424;
            border-bottom: 1px solid #242424;
        }

        table.salary th.total,
        table.salary td.total {
            text-align: right;
            padding-right: 16px;
        }

        tr {
            padding: 4px;
        }

        th,
        td {
            padding: 8px 0px 8px 16px;
            text-align: left;
            font-size: 14px;
        }

    </style>
</head>

<body>
    <header>
        <div class="header__company">
            <h4 class="company__name">Workshop & Riset Informatika</h4>
            <p class="company__address">Jl. Soekarno Hatta No. 9</p>
            <p class="company__phoneNumber">(+62) 858-3423-2343</p>
        </div>
        <div class="header__title">Salary Report</div>
        <div class="header__information">
            <ul>
                <li>Date: {{ date('d F Y') }}</li>
                <li>Reference Code: {{ 'SLR' . date('dmis') }}</li>
            </ul>
        </div>
    </header>
    <section class="employeeInformation">
        <table class="employee">
            <tr>
                <th>Name: </th>
                <td>{{ $employee->name }}</td>
                <th>Employee ID Number: </th>
                <td>{{ $employee->employee_id_number }}</td>
            </tr>
            <tr>
                <th>Division: </th>
                <td>{{ $employee->division->name }}</td>
                <th>Position: </th>
                <td>{{ $employee->position }}</td>
            </tr>
        </table>
    </section>
    <section class="salaryDetail">
        <table class="salary">
            <thead>
                <tr>
                    <th>#</th>
                    <th>DESCRIPTION</th>
                    <th class="total">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Basic Salary</td>
                    <td class="total">Rp 8.000.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Etc</td>
                    <td class="total">Rp 300.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">TOTAL</th>
                    <th class="total">Rp 8.300.000</th>
                </tr>
            </tfoot>
        </table>
    </section>
</body>
</html>

@extends('layouts.general_layout')

@section('title', 'Data Flows')

@section('content')

@if($value == 1)
    <p>Welcome to the Data Flows</p>

    <p>!! Under Construction !!</p>

    <img src="img/sample_data_flow.png" alt="Sample Data Flow" width="600" height="300">

    <p><em>Figure 1. Information flow of personal information can be visualized in a work flow diagram on personal information processing.</em></p>

    <ul>
        <li>
            <strong>Objective:</strong> To identify information flows of personal information under assessment.
        </li><br>
        <li>
            <strong>Input:</strong> Description of the process and information system to be assessed.
        </li><br>
        <li>
            <strong>Expected output:</strong> Summary of findings on the information flow of personal information within the process.
        </li><br>
        <li>
            <strong>Actions:</strong> The person responsible for conducting a PIA should consult with others in the organization and perhaps external to the organization to describe the personal information flows and specifically:
        </li>
                <p>– how personal information is collected and the related source;
                    <br>– who is accountable and who is responsible within the organization for the personal information processing;
                    <br>– for what purpose personal information is processed;
                    <br>– how personal information will be processed;
                    <br>– personal information retention and disposal policy;
                    <br>– how personal information will be managed and modified;
                    <br>– how will personal information processors and application developers protect personal information;
                    <br>– identify any personal information transfer to jurisdictions where lower levels of personal information protection apply;
                    <br>– whether applicable, notify the relevant authorities of any new personal information processing and seek the necessary approvals.
                </p>
    </Ul>
    
    <p>Output of this process in terms of the information flow of personal information should be documented in the PIA report</p>
    
    <ul>
        <li>Implementation Guidance:</li><br>
        <p>
            Use of personal information (or transfer of personal information) may include approved data sharing flows of personal information to other parties. 
        </p>
        <p>
            As an input to the PIA, the organization should describe the information flow in as detailed a manner as possible to help identify potential privacy risks. The assessor should consider the impacts not only on information privacy, privacy related regulations, e.g. telecommunications acts. The whole personal information life cycle should be considered.
        </p>
    </ul>

    <p><em>Identify the personal data involved and describe the data flow from collection to disposal by answering the following questions below:</em></p>

    <li></li>


    <form action="proceed_to_privacy_impact_analysis" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" value="1" name="value">Proceed</button>
    </form>

@else
    <p>You have to agree.</p>
    <a href="{{ url('system_description') }}" class="btn btn-primary">Start Again</a>
@endif

@stop

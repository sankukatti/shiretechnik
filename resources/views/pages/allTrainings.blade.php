@extends('layouts.app')

@section('title', 'Trainings')

@section('content')
<div class="page">
<section class="imformation-text all-trainings-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="title-text bold blue title-spacing">
                    Trainings
                </p>

                <p class="block text justify">
                    Shiretechnik is an engineering design analysis firm uniquely positioned to provide clients with superior results. Our experienced personnel, abundant resources, and state-of-the-art engineering analysis tools, labs and equipment with focus on clients' demands help us to achieve a unique place in the dynamic market that exists today.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="all-trainings-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Cost</th>
                                <th>Register</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="/trainings/thermalManagement">Thermal Management of Electronic Systems</a></td>
                                <td>2021/01/25</td>
                                <td>Bangaluru</td>
                                <td>TBA</td>
                                <td><a href="/contact" target="_blank">Contact us</a></td>
                            </tr>
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</section>
</div>
@endsection

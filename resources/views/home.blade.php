@extends('layouts.app')
@section('title')
    Home | Toolkit
@endsection
@section('content')
    <div class="ui grid">
        <div class="sixteen wide column">
            <div class="ui two cards">
                <div class="card">
                    <div class="image"></div>
                    <div class="content">
                        <div class="header">Inventory</div>
                        <div class="description">
                            <p>Inventory of all hardware supplies in the IT Department.</p>
                        </div>
                    </div>
                    <div class="extra content">
                        <a href="{{ route('inventory') }}" class="ui fluid blue icon button"><i class="ion-ios-arrow-right icon"></i> Launch</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image"></div>
                    <div class="content">
                        <div class="header">Documents</div>
                        <div class="description">
                            <p>List of Important Documents issued by the IT Department.</p>
                        </div>
                    </div>
                    <div class="extra content">
                        <a href="" class="ui fluid blue icon button"><i class="ion-ios-arrow-right icon"></i> Launch</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image"></div>
                    <div class="content">
                        <div class="header">Purchase Request Tracker</div>
                        <div class="description">
                            <p>Status Tracker of requested supplies.</p>
                        </div>
                    </div>
                    <div class="extra content">
                        <a href="" class="ui fluid blue icon button"><i class="ion-ios-arrow-right icon"></i> Launch</a>
                    </div>
                </div>
                <div class="card">
                    <div class="image"></div>
                    <div class="content">
                        <div class="header">Trouble Ticket</div>
                        <div class="description">
                            <p>Paperless records of Trouble Ticket.</p>
                        </div>
                    </div>
                    <div class="extra content">
                        <a href="" class="ui fluid blue icon button"><i class="ion-ios-arrow-right icon"></i> Launch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

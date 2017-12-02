<div class="ui vertical borderless fixed menu">
  <a class="ui large header item">
    I.T. Inventory
  </a>
  <div class="item">
    <div class="ui left icon input"><input type="text" placeholder="Search..."><i class="search icon"></i></div>
  </div>
  <a href="{{ route('home') }}" class="item">
    <i class="ion-ios-speedometer icon"></i>Dashboard
  </a>
  <div class="ui dropdown item">
    <i class="dropdown icon"></i>
    Build Files
    <div class="menu">
      <a href="{{ route('type') }}" class="item">Item Type</a>
      <a href="{{ route('department') }}" class="item">Departments</a>
      <a href="{{ route('supplier') }}" class="item">Suppliers</a>
      <a href="{{ route('manufacturer') }}" class="item">Manufacturers</a>
      <a href="{{ route('ownership') }}" class="item">Ownerships</a>
      <a href="{{ route('state') }}" class="item">States</a>
    </div>
  </div>
  <div class="ui dropdown item">
    <i class="dropdown icon"></i>
    Reports
    <div class="menu">
      <a class="item">All Items</a>
      <a class="item">Deployed</a>
      <a class="item">For Replacement</a>
      <a class="item">Retired</a>
    </div>
  </div>
  <div class="ui dropdown item">
    <i class="dropdown icon"></i>
    Utilities
    <div class="menu">
      <a class="item">Retire Item</a>
      <a class="item">Generate Barcode</a>
    </div>
  </div>
  <a class="item">
    <i class="ion-ios-settings-strong icon"></i>Settings
  </a>
  <a class="item" id="logout">
    <i class="ion-ios-redo icon"></i>Logout
  </a>
  <div class="item">
    <a href="" class="ui blue fluid icon button"><i class="add circle icon"></i> Add Consumables</a>
  </div>
  <div class="item">
    <a href="{{ route('newItem') }}" class="ui blue fluid icon button"><i class="add circle icon"></i> Add New Item</a>
  </div>
  <div class="item">
    <a href="" class="ui blue fluid icon button"><i class="add circle icon"></i> Create Sets</a>
  </div>
</div>

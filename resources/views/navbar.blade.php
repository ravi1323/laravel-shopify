{{-- <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="@if(Request::path() == '/') bg-gray-900 text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Shop Metafield</a>
  
              <a href="/products-metafield" class="@if(Request::path() == 'products') bg-gray-900 text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products Metafields</a>
  
              <a href="/customers-metafield" class="@if(Request::path() == 'customers') bg-gray-900 text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Customers Metafields</a>
  
              <a href="/collection-metafield" class="@if(Request::path() == 'settings') bg-gray-900 text-white @endif text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Collections Metafield</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav> --}}

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if(Request::path() == '/') active @endif" href="/">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::path() == 'products-metafield') active @endif" href="/products-metafield">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::path() == 'customers-metafield') active @endif" href="/customers-metafield">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::path() == 'collection-metafield') active @endif" href="/collection-metafield">Collections</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
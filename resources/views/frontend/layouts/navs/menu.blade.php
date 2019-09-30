<!--Nav-->
<nav class="horizontalMenu clearfix d-md-flex ml-auto">
    <ul class="horizontalMenu-list">
        <li aria-haspopup="true"><a href="javascript:void(0)">For Buyer<span class="fa fa-caret-down m-0"></span></a>
            <ul class="sub-menu link-list">
                <li aria-haspopup="true"><a href="{{ url('category-list') }}">Category List</a></li>
                <li aria-haspopup="true"><a href="{{ url('categories') }}">Product Directory</a></li>
                <li aria-haspopup="true"><a href="{{ url('suppliers') }}">Supplier Discovery</a></li>
                <li aria-haspopup="true"><a href="{{ url('post-request') }}">Post Sourcing Request</a></li>
            </ul>
        </li>
        <li aria-haspopup="true"><a href="javascript:void(0)">For Supplier<span class="fa fa-caret-down m-0"></span></a>
            <ul class="sub-menu">
                <li aria-haspopup="true"><a href="{{ url('supplier/join-us') }}">Join Us</a></li>
                <li aria-haspopup="true"><a href="{{ url('suppliers') }}">Chinese Market</a></li>
                <li aria-haspopup="true"><a href="{{ url('pricing') }}">Price and Plan</a></li>
                <li aria-haspopup="true"><a href="{{ url('source-list') }}">Search Sourcing Requests</a></li>
                <li aria-haspopup="true"><a href="{{ url('supplier-login') }}">Login</a></li>
            </ul>
        </li>
        <li aria-haspopup="true"><a href="{{ url('about') }}">About Us</a></li>
        <li aria-haspopup="true"><a href="{{ url('contact') }}">Contact Us</a></li>
        <li aria-haspopup="true"><a href="{{ url('industry') }}">Industry Channel</a></li>
        <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
            <span><a class="btn btn-pink" href="{{ url('post-request') }}">Post Free Ad</a></span>
        </li>
    </ul>
    <ul class="mb-0">
        <li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
            <span><a class="btn btn-danger" href="{{ url('post-request') }}">Post Free Ad</a></span>
        </li>
    </ul>
</nav>
<!--Nav-->

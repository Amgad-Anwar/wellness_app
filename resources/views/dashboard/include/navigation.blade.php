<style>
    .sidebar-wrapper::-webkit-scrollbar {
        width: 7px;

    }

    .sidebar-wrapper::-webkit-scrollbar-thumb {
        background-color: #ffffff;
        border-radius: 5px;
        display: inline-block;
    }

    .sidebar-wrapper:hover::-webkit-scrollbar-thumb {
        background-color: #888;
        transition: all 1s ease;
    }


    .sidebar-wrapper::-webkit-scrollbar-track {
        background: #ffffff;
    }

    li {
        margin-top: 0px !important;
    }

    li.menu-label {
        padding: 5px
    }
</style>


<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('dashboard') }}">
            <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
            </div>
            <div class="menu-title">{{ __('Dashboard') }}</div>
        </a>
    </li>



    <li class="menu-label">Customers Control</li>


    <li>
    
        <ul>
           
       
            @if (PerUser('customer_packages.index'))
                <li @if (request()->segment(2) == 'customer_packages') class="mm-active" @endif>
                    <a href="{{ route('customer_packages.index') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bxl-product-hunt'></i>
                        </div>
                        <div class="menu-title">{{ __('Customer Package') }}</div>
                    </a>
                </li>
            @endif

      

            @if (PerUser('customer_lists.index'))
                <li @if (request()->segment(2) == 'customer_lists') class="mm-active" @endif>
                    <a href="{{ route('customer_lists.index') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bxl-product-hunt'></i>
                        </div>
                        <div class="menu-title">{{ __('Customer List') }}</div>
                    </a>
                </li>
            @endif
         
        </ul>
    </li>

   




 



    <li class="menu-label"> Financial </li>
    <li>
        @if (true)
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">{{ __('Financial ') }}</div>
            </a>
        @endif
        <ul>



            @if (PerUser('subscription_transaction.index'))
                <li @if (request()->segment(2) == 'subscription_transaction') class="mm-active" @endif>
                    <a href="{{ route('subscription_transaction.index') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bx-server'></i>
                        </div>
                        <div class="menu-title">{{ __('Subscription') }}</div>
                    </a>
                </li>
            @endif

   


        </ul>
    </li>

 



    <li>
        @if (true)
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">{{ __('Control') }}</div>
            </a>
        @endif
        <ul>
     
            @if (PerUser('users.index'))
                <li @if (request()->segment(2) == 'users') class="mm-active" @endif>
                    <a href="{{ route('users.index') }}">
                        <div class="parent-icon icon-color-3"> <i class="lni lni-users"></i>
                        </div>
                        <div class="menu-title">{{ __('Users') }}</div>
                    </a>
                </li>
            @endif


            @if (PerUser('states.index'))
                <li @if (request()->segment(2) == 'states') class="mm-active" @endif>
                    <a href="{{ route('states.index') }}">
                        <div class="parent-icon icon-color-3">
                            <i class="bx bx-globe"></i>
                        </div>
                        <div class="menu-title">{{ __('States') }}</div>
                    </a>
                </li>
            @endif
            @if (PerUser('cities.index'))
                <li @if (request()->segment(2) == 'cities') class="mm-active" @endif>
                    <a href="{{ route('cities.index') }}">
                        <div class="parent-icon icon-color-3">
                            <i class="bx bx-globe"></i>
                        </div>
                        <div class="menu-title">{{ __('Cities') }}</div>
                    </a>
                </li>
            @endif




        </ul>
    </li>


    <hr />

    @if (PerUser('meals.index'))
    <li @if (request()->segment(2) == 'meals') class="mm-active" @endif>
        <a href="{{ route('meals.index') }}">
            <div class="parent-icon icon-color-3">
                <i class="bx bx-globe"></i>
            </div>
            <div class="menu-title">{{ __('Meals') }}</div>
        </a>
    </li>
    @endif


    @if (PerUser('packages.index'))
    <li @if (request()->segment(2) == 'packages') class="mm-active" @endif>
        <a href="{{ route('packages.index') }}">
            <div class="parent-icon icon-color-3">
                <i class="bx bx-globe"></i>
            </div>
            <div class="menu-title">{{ __('Packages') }}</div>
        </a>
    </li>
    @endif


    @if (PerUser('package_prices.index'))
    <li @if (request()->segment(2) == 'package_prices') class="mm-active" @endif>
        <a href="{{ route('package_prices.index') }}">
            <div class="parent-icon icon-color-3">
                <i class="bx bx-globe"></i>
            </div>
            <div class="menu-title">{{ __('Package Prices') }}</div>
        </a>
    </li>
    @endif




    <li>
        @if (true)
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">{{ __('Medicine') }}</div>
            </a>
        @endif
        <ul>
            {{-- @if (PerUser('medicines.index'))
                <li @if (request()->segment(2) == 'medicines') class="mm-active" @endif>
                    <a href="{{ route('medicines.index') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bxl-product-hunt'></i>
                        </div>
                        <div class="menu-title">{{ __('Medicines List') }}</div>
                    </a>
                </li>
            @endif
            @if (PerUser('medicine_categories.index'))
                <li @if (request()->segment(2) == 'medicine_categories') class="mm-active" @endif>
                    <a href="{{ route('medicine_categories.index') }}">
                        <div class="parent-icon icon-color-2">
                            <i class='bx bxl-product-hunt'></i>
                        </div>
                        <div class="menu-title">{{ __('Medicine Categories') }}</div>
                    </a>
                </li>
            @endif --}}
         



        </ul>
    </li>






</ul>

<script>
    const element = document.querySelector('.mm-active');
    console.log(element.parentElement);
    if (element) {

        element.parentElement.scrollIntoView({
            behavior: 'smooth'
        });
    } else {
        console.error('Element not found.');
    }
</script>

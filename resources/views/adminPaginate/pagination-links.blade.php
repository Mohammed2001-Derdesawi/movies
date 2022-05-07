<style>
    .paginator-wrap {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin-top: 30px;
    }

    .paginator-wrap span {
        display: none;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-color: #28282d;
        height: 40px;
        padding: 0 15px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        font-family: 'Open Sans', sans-serif;
        border-radius: 4px;
    }

    @media (min-width: 576px) {
        .paginator-wrap {
            justify-content: space-between;
        }

        .paginator-wrap span {
            display: flex;
        }
    }

    .paginator {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-color: #28282d;
        height: 40px;
        width: auto;
        border-radius: 4px;
    }

    .paginator__item {
        margin: 0;
    }

    .paginator__item a {
        font-size: 14px;
        height: 40px;
        width: 40px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        color: rgba(255, 255, 255, 0.5);
        text-align: center;
        border-radius: 4px;
    }

    .paginator__item:hover a {
        color: #fff;
    }


    .paginator__item--prev,
    .paginator__item--next {
        position: relative;
        height: 40px;
        transition: 0.4s ease;
    }

    .paginator__item--prev svg,
    .paginator__item--next svg {
        width: 18px;
        height: auto;
        fill: rgba(255, 255, 255, 0.5);
        transition: 0.4s ease;
    }

    .paginator__item--prev:hover svg,
    .paginator__item--next:hover svg {
        fill: #fff;
    }

    .paginator__item--active a {
        color: #fff;
        cursor: default;
        font-weight: 500;
        background-image: linear-gradient(90deg, #ff55a5 0%, #ff5860 100%);
        box-shadow: 0 0 15px 0 rgba(255, 88, 96, 0.5);
    }

    .paginator__item--active a:hover {
        color: #fff;
    }

    a {
        cursor: pointer;
    }
</style>

<!-- paginator -->
{{-- <div class="col-12"> --}}
    {{-- <div class="paginator-wrap"> --}}
        {{-- <span>10 from 21 356</span> --}}

        @if($paginator->hasPages())
        <ul class="paginator">


            @if ($paginator->onFirstPage())
            <li class="paginator__item paginator__item--prev">
                <a href="" style="cursor: not-allowed"><svg xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path
                            d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z">
                        </path>
                    </svg></a>
            </li>
            @else
            <li class="paginator__item paginator__item--prev">
                <a wire:click='previousPage'><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        viewBox="0 0 24 24">
                        <path
                            d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z">
                        </path>
                    </svg></a>
            </li>
            @endif

            @foreach ($elements as $element)


            {{-- @if (is_string($element))
            <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span class="page-link">{{ $element
                    }}</span></li>
            @endif --}}


            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if($page == $paginator->currentPage())
            <li class="paginator__item paginator__item--active"><a href="" wire:click='gotoPage({{ $page }})'>{{ $page
                    }}</a></li>

            @else
            <li class="paginator__item"><a wire:click='gotoPage({{ $page }})' style="color: white">{{ $page }}</a></li>
            @endif
            @endforeach
            @endif

            @endforeach

            @if ($paginator->hasMorePages())

            <li class="paginator__item paginator__item--next">
                <a wire:click='nextPage'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z">
                        </path>
                    </svg>
                </a>
            </li>

            @else

            <li class="paginator__item paginator__item--next">
                <a href="" style="cursor: not-allowed">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z">
                        </path>
                    </svg>
                </a>
            </li>

            @endif
        </ul>
        @endif

    {{-- </div> --}}
{{-- </div> --}}
<!-- end paginator -->
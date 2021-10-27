<div class="footer-container">
    <div class="float-left">
        <ul>
            @foreach ($footerList as $key => $listItem)
            <div class="list">
                <h3>
                    {{$key}}
                </h3>
                    @foreach ($listItem as $item)
                        <li>
                            {{$item}}
                        </li>
                    @endforeach
            </div>
            @endforeach
        </ul>
        <p>
            All site content &#8482; and &#169; 2020 DC Entertainment, unless otherwise <span> noted here </span>. All rights reserved. <br> 
            <span> Cookies Settings </span>
        </p>
    </div>
    <div class="float-left my-image">
        <img src="/img/dc-logo-bg.png" alt="">
    </div>
</div>
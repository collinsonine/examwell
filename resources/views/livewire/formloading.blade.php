    <style>
        .movie--isloading {
        height: 252px;
        border-radius: 4px;
        overflow: hidden;
        margin-bottom: 15px;
        }

        .movie--isloading .loading-image {
        height: 190px;
        background-image: -webkit-linear-gradient(left, #ececec 0px, #f4f4f4 40px, #ececec 80px);
        background-image: -o-linear-gradient(left, #ececec 0px, #f4f4f4 40px, #ececec 80px);
        background-image: linear-gradient(90deg, #ececec 0px, #f4f4f4 40px, #ececec 80px);
        background-size: 250px;
        -webkit-animation: shine-loading-image 2s infinite ease-out;
                animation: shine-loading-image 2s infinite ease-out;
        }

        .movie--isloading .loading-content {
        background: #f7f7f7;
        padding: 15px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: center;
            -ms-flex-pack: center;
                justify-content: center;
        }

        .movie--isloading .loading-content .loading-text-container {
        -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
        }

        .movie--isloading .loading-content .loading-main-text {
        height: 10px;
        width: 65%;
        margin-bottom: 10px;
        background: #ececec;
        background-image: -webkit-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: -o-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: linear-gradient(90deg, #ececec 0px, #ddd 40px, #ececec 80px);
        background-size: 250px;
        border-radius: 10px;
        -webkit-animation: shine-loading-container-items 2s infinite ease-out;
                animation: shine-loading-container-items 2s infinite ease-out;
        }

        .movie--isloading .loading-content .loading-sub-text {
        height: 10px;
        width: 50%;
        background: #ececec;
        background-image: -webkit-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: -o-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: linear-gradient(90deg, #ececec 0px, #ddd 40px, #ececec 80px);
        background-size: 250px;
        border-radius: 10px;
        -webkit-animation: shine-loading-container-items 2s infinite ease-out;
                animation: shine-loading-container-items 2s infinite ease-out;
        }

        .movie--isloading .loading-content .loading-btn {
        width: 60px;
        height: 25px;
        background: #ececec;
        background-image: -webkit-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: -o-linear-gradient(left, #ececec 0px, #ddd 40px, #ececec 80px);
        background-image: linear-gradient(90deg, #ececec 0px, #ddd 40px, #ececec 80px);
        background-size: 250px;
        border-radius: 3px;
        -webkit-animation: shine-loading-container-items 2s infinite ease-out;
                animation: shine-loading-container-items 2s infinite ease-out;
        }


        @-webkit-keyframes shine-loading-image {
        0% {
            background-position: -32px;
        }
        40%, 100% {
            background-position: 208px;
        }
        }


        @keyframes shine-loading-image {
        0% {
            background-position: -32px;
        }
        40%, 100% {
            background-position: 208px;
        }
        }

        @-webkit-keyframes shine-loading-container-items {
        0% {
            background-position: -100px;
        }
        40%, 100% {
            background-position: 140px;
        }
        }

        @keyframes shine-loading-container-items {
        0% {
            background-position: -100px;
        }
        40%, 100% {
            background-position: 140px;
        }
        }
    </style>
    <div class="">
        <div class="col-12" style="height: 100%">
          <div class="movie--isloading">
            <div class="loading-image"></div>
            <div class="loading-content">
              <div class="loading-text-container">
                <div class="loading-main-text"></div>
                <div class="loading-sub-text"></div>
              </div>
              <div class="loading-btn"></div>
            </div>
          </div>
        </div>
        {{-- <div class="col-sm-6 col-md-3">
          <div class="movie--isloading">
            <div class="loading-image"></div>
            <div class="loading-content">
              <div class="loading-text-container">
                <div class="loading-main-text"></div>
                <div class="loading-sub-text"></div>
              </div>
              <div class="loading-btn"></div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-sm-6 col-md-3">
          <div class="movie--isloading">
            <div class="loading-image"></div>
            <div class="loading-content">
              <div class="loading-text-container">
                <div class="loading-main-text"></div>
                <div class="loading-sub-text"></div>
              </div>
              <div class="loading-btn"></div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-sm-6 col-md-3">
          <div class="movie--isloading">
            <div class="loading-image"></div>
            <div class="loading-content">
              <div class="loading-text-container">
                <div class="loading-main-text"></div>
                <div class="loading-sub-text"></div>
              </div>
              <div class="loading-btn"></div>
            </div>
          </div>
        </div> --}}
      </div>

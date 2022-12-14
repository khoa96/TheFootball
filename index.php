<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="countdown-timer-wrapper">
    <div class="container">
      <div class="countdown-timer-content">
        <h3 class="countdown-title">Countdown timer</h3>
        <div class="countdown-wrapper">
          <div class="countdown countdown-container container">

            <div class="clock-item-wrapper">
              <div class="clock-item clock-days countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-days" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="type-hours type-time">DAYS</p>
            </div>

            <div class="clock-item-wrapper">
              <div class="clock-item clock-hours countdown-time-value">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-hours" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="type-hours type-time">HOURS</p>
            </div>

            <div class="clock-item-wrapper">
              <div class="clock-item clock-minutes countdown-time-valu">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-minutes" class="clock-canvas"></div>
                    <div class="text">
                      <p class="val">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="type-minutes type-time">MINUTES</p>
            </div>

            <div class="clock-item-wrapper">
              <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                <div class="wrap">
                  <div class="inner">
                    <div id="canvas-seconds" class="clock-canvas"></div>

                    <div class="text">
                      <p class="val">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="type-seconds type-time">SECONDS</p>
            </div>
          </div>
        </div>
      </div>
      <div class="timeline-wrapper">
        <div class="timeline-item">
          <span class="time-label">15/09</span>
          <div class="icon-square-wrapper">
            <span class="icon-square"></span>
            <div class="timeline-dash-wrapper">
              <div class="dash-mask-wrapper">
                <div class="dash-solid"></div>
                <span class="circle"></span>
              </div>
            </div>
          </div>
          <div class="timeline-detail">
            Discount 20%
          </div>
        </div>
        <div class="timeline-item">
          <span class="time-label">25/10</span>
          <div class="icon-square-wrapper">
            <span class="icon-square"></span>
            <div class="timeline-dash-wrapper"></div>
          </div>
          <div class="timeline-detail">
            Discount 20%
          </div>
        </div>
        <div class="timeline-item">
          <span class="time-label">05/11</span>
          <div class="icon-square-wrapper">
            <span class="icon-square"></span>
            <div class="timeline-dash-wrapper"></div>
          </div>
          <div class="timeline-detail">
            Discount 20%
          </div>
        </div>
        <div class="timeline-item">
          <span class="time-label">20/11</span>
          <div class="icon-square-wrapper">
            <span class="icon-square"></span>
            <div class="timeline-dash-wrapper"></div>
          </div>
          <div class="timeline-detail">
            Start WC
          </div>
        </div>
      </div>
      <div class="control-group-list-wrapper">
        <button class="btn-control-group-list">
          <span class="icon-arrow arrow-down">
            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8.44 0.995554L8.44 4.18155L4.408 8.10555L0.376 4.18155L0.376 0.995554L4.408 4.93755L8.44 0.995554Z"
                fill="white" />
            </svg>
          </span>
          <span class="icon-arrow arrow-up">
            <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.559999 8.00445V4.81845L4.592 0.894445L8.624 4.81845V8.00445L4.592 4.06244L0.559999 8.00445Z"
                fill="white" />
            </svg>
          </span>
          <span>World Cup Standings</span>
        </button>
      </div>
    </div>
    <img src="./images/ghost.png" alt="" class="ghost-image">
  </div>
  <div class="football-page-wrapper">

    <!-- list group -->
    <div class="list-group-wrapper">
      <div class="container">
        <div class="list-group">
          <div class="group-item">
            <span class="group-name">Group A</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>
          <div class="group-item">
            <span class="group-name">Group B</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>
          <div class="group-item">
            <span class="group-name">Group C</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>
          <div class="group-item">
            <span class="group-name">Group D</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>
          <div class="group-item">
            <span class="group-name">Group E</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>

          <div class="group-item">
            <span class="group-name">Group F</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>

          <div class="group-item">
            <span class="group-name">Group G</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>

          <div class="group-item">
            <span class="group-name">Group H</span>
            <hr class="dash-solid">
            <div class="list-country">
              <div class="country-item">
                <img src="./images/country-1.png" alt="">
                <span class="country-name">Qatar</span>
              </div>
              <div class="country-item">
                <img src="./images/country-2.png" alt="">
                <span class="country-name">Ecuador</span>
              </div>
              <div class="country-item">
                <img src="./images/country-3.png" alt="">
                <span class="country-name">Senegal</span>
              </div>
              <div class="country-item">
                <img src="./images/country-4.png" alt="">
                <span class="country-name">Netherlands</span>
              </div>
            </div>
            <img src="./images/dash-horizontal.png" alt="" class="dash-horizontal">
          </div>
        </div>
      </div>
    </div>

    <!-- list group -->
    <!-- Top Matches Today -->
    <div class="list-top-match-today-wrapper">
      <div class="container">
        <div class="list-top-match-today-content">
          <h3 class="top-match-title">Top Matches Today</h3>
          <div class="list-top-match-today-slide-wrapper">
            <button class="btn-slide btn-prev">
              <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.2 1L1.60001 9.96L11.2 17.8" stroke="#800C3C" stroke-width="2" />
              </svg>
            </button>
            <div class="list-top-match-today">
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">-</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">-</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
              <div class="top-match-today-item">
                <div class="top-match-today-content-wrapper">
                  <div class="top-match-today-header">
                    <div class="league-info">
                      <div class="league-info-head">
                        <span class="time">20:45</span>
                        <span class="date">Jun 8</span>
                      </div>
                      <div class="league-info-bottom">
                        <img src="./images/league.png" alt="" class="league-image">
                        <span class="league-name">Premier League</span>
                      </div>
                    </div>
                    <div class="list-league-image">
                      <img src="./images/mu-club.png" alt="" class="club-image">
                      <img src="./images/chesea-club.png" alt="" class="club-image">
                    </div>
                  </div>
                  <div class="top-match-today-content">
                    <div class="club-info">
                      <span class="club-name">Brighton & Hove Albion</span>
                      <span class="score">1</span>
                    </div>
                    <div class="club-info">
                      <span class="club-name">Manchester United</span>
                      <span class="score">0</span>
                    </div>
                  </div>
                </div>
                <button class="btn-watch">Watch</button>
              </div>
            </div>
            <button class="btn-slide btn-next">
              <svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.798315 18L10.3983 9.04L0.798315 1.2" stroke="#800C3C" stroke-width="2" />
              </svg>

            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Matches Today -->
    <div class="container">
      <div class="main-content-page-football">
        <div class="left-content">
          <!-- left sidebar only for pc-->
          <div class="left-sidebar-tabs left-sidebar-pc">
            <div class="tab main-tabs">
              <button class="tablinks" onclick="openTab(event, 'all')" id="defaultOpen">
                <img src="./images/all.png" alt="">
                <span>All League</span>
              </button>
              <button class="tablinks" onclick="openTab(event, 'champions')">
                <img src="./images/champions.png" alt="">
                <span>Champions League</span>

              </button>
              <button class="tablinks" onclick="openTab(event, 'europa')">
                <img src="./images/europa.png" alt="">
                <span>UEFA Europa League</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'premier')">
                <img src="./images/premier.png" alt="">
                <span>Premier League</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'la-liga')">
                <img src="./images/la-liga.png" alt="">
                <span>La Liga</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'bundesliga')">
                <img src="./images/bundesliga.png" alt="">
                <span>Bundesliga</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'seria')">
                <img src="./images/seria.png" alt="">
                <span>Serie A</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'ligue-1')">
                <img src="./images/ligue-1.png" alt="">
                <span>Ligue 1</span>
              </button>

              <button class="tablinks" onclick="openTab(event, 'worldcup')">
                <img src="./images/worldcup.png" alt="">
                <span>World Cup</span>
              </button>
            </div>
          </div>
          <!-- left sidebar only for pc-->

          <!-- left sidebar only for mobile-->
          <div class="left-sidebar-mobile">
            <div class="league-info">
              <img src="./images/all.png" alt="" class="league-image" id="league-image-mobile">
              <span class="league-name" id="league-name-mobile">All League</span>
            </div>
            <button class="btn-league-dropdown" id="btn-league-dropdown">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_6031)">
                  <path d="M8 10L12 14L16 10" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </g>
                <defs>
                  <clipPath id="clip0_1_6031">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </button>
            <div class="list-league-dropdown">
              <button class="league-dropdown-item">
                <img src="./images/all.png" alt="">
                <span>All League</span>
              </button>
              <button class="league-dropdown-item">
                <img src="./images/champions.png" alt="">
                <span>Champions League</span>

              </button>
              <button class="league-dropdown-item">
                <img src="./images/europa.png" alt="">
                <span>UEFA Europa League</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/premier.png" alt="">
                <span>Premier League</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/la-liga.png" alt="">
                <span>La Liga</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/bundesliga.png" alt="">
                <span>Bundesliga</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/seria.png" alt="">
                <span>Serie A</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/ligue-1.png" alt="">
                <span>Ligue 1</span>
              </button>

              <button class="league-dropdown-item">
                <img src="./images/worldcup.png" alt="">
                <span>World Cup</span>
              </button>
            </div>
          </div>
          <!-- left sidebar only for mobile-->
        </div>
        <div class="middle-content">
          <div id="all" class="tabcontent">
            <div id="all-league-tabs">
              <ul class="sub-tabs-nav">
                <li><a href="#tabs-1">Shedule</a></li>
                <li><a href="#tabs-2">Hot Match</a></li>
                <li><a href="#tabs-3">Result</a></li>
              </ul>
              <div id="tabs-1">
                <!-- Shedule tab content  -->
                <div class="league-content-wrapper">
                  <div id="shedule-league-tabs">
                    <ul class="day-tabs-nav">
                      <li>
                        <a href="#sub-tabs-1" class="live-status">LIVE</a>
                      </li>
                      <li>
                        <a href="#sub-tabs-2">
                          <span class="day-of-week">tue</span>
                          <span class="day-of-month">23 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-3">
                          <span class="day-of-week">today</span>
                          <span class="day-of-month">24 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-4">
                          <span class="day-of-week">thu</span>
                          <span class="day-of-month">25 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-5">
                          <span class="day-of-week">fri</span>
                          <span class="day-of-month">26 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sat</span>
                          <span class="day-of-month">27 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sun</span>
                          <span class="day-of-month">28 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-7">
                          <span class="day-of-week">mon</span>
                          <span class="day-of-month">29 aug</span>
                        </a>
                      </li>
                      <div class="date-picker-wrapper">
                        <div class="calender-wrapper">
                          <button class="btn-calender btn-show" id="btn-show-calender">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z"
                                fill="#A52457" />
                              <path
                                d="M20 9.83997H4C3.45 9.83997 3 10.29 3 10.84V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V10.84C21 10.29 20.55 9.83997 20 9.83997ZM9.21 18.21C9.16 18.25 9.11 18.3 9.06 18.33C9 18.37 8.94 18.4 8.88 18.42C8.82 18.45 8.76 18.47 8.7 18.48C8.63 18.49 8.57 18.5 8.5 18.5C8.37 18.5 8.24 18.47 8.12 18.42C7.99 18.37 7.89 18.3 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 7.99 16.63 8.12 16.58C8.3 16.5 8.5 16.48 8.7 16.52C8.76 16.53 8.82 16.55 8.88 16.58C8.94 16.6 9 16.63 9.06 16.67C9.11 16.71 9.16 16.75 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.21 14.71C9.02 14.89 8.76 15 8.5 15C8.24 15 7.98 14.89 7.79 14.71C7.61 14.52 7.5 14.26 7.5 14C7.5 13.74 7.61 13.48 7.79 13.29C8.07 13.01 8.51 12.92 8.88 13.08C9.01 13.13 9.12 13.2 9.21 13.29C9.39 13.48 9.5 13.74 9.5 14C9.5 14.26 9.39 14.52 9.21 14.71ZM12.71 18.21C12.52 18.39 12.26 18.5 12 18.5C11.74 18.5 11.48 18.39 11.29 18.21C11.11 18.02 11 17.76 11 17.5C11 17.24 11.11 16.98 11.29 16.79C11.66 16.42 12.34 16.42 12.71 16.79C12.89 16.98 13 17.24 13 17.5C13 17.76 12.89 18.02 12.71 18.21ZM12.71 14.71C12.66 14.75 12.61 14.79 12.56 14.83C12.5 14.87 12.44 14.9 12.38 14.92C12.32 14.95 12.26 14.97 12.2 14.98C12.13 14.99 12.07 15 12 15C11.74 15 11.48 14.89 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.38 13.2 11.49 13.13 11.62 13.08C11.99 12.92 12.43 13.01 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71ZM16.21 18.21C16.02 18.39 15.76 18.5 15.5 18.5C15.24 18.5 14.98 18.39 14.79 18.21C14.61 18.02 14.5 17.76 14.5 17.5C14.5 17.24 14.61 16.98 14.79 16.79C15.16 16.42 15.84 16.42 16.21 16.79C16.39 16.98 16.5 17.24 16.5 17.5C16.5 17.76 16.39 18.02 16.21 18.21ZM16.21 14.71C16.16 14.75 16.11 14.79 16.06 14.83C16 14.87 15.94 14.9 15.88 14.92C15.82 14.95 15.76 14.97 15.7 14.98C15.63 14.99 15.56 15 15.5 15C15.24 15 14.98 14.89 14.79 14.71C14.61 14.52 14.5 14.26 14.5 14C14.5 13.74 14.61 13.48 14.79 13.29C14.89 13.2 14.99 13.13 15.12 13.08C15.3 13 15.5 12.98 15.7 13.02C15.76 13.03 15.82 13.05 15.88 13.08C15.94 13.1 16 13.13 16.06 13.17C16.11 13.21 16.16 13.25 16.21 13.29C16.39 13.48 16.5 13.74 16.5 14C16.5 14.26 16.39 14.52 16.21 14.71Z"
                                fill="#A52457" />
                            </svg>
                          </button>
                          <div class="calendar datepicker-mobile"></div>
                        </div>
                      </div>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Tottenham Hostspur</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Brighton & Hove Albion</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool Brighton & Hove Albion</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">UEFA Europa League</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-3">3</div>
                    <div id="sub-tabs-4">4</div>
                    <div id="sub-tabs-5">5</div>
                    <div id="sub-tabs-6">6</div>
                    <div id="sub-tabs-7">7</div>
                  </div>
                </div>
                <!-- Shedule tab content  -->
              </div>
              <div id="tabs-2">
                <!-- Hot Match tab content -->
                <div class="league-content-wrapper">
                  <div id="hot-match-league-tabs">
                    <ul class="day-tabs-nav">
                      <li>
                        <a href="#sub-tabs-1" class="live-status">LIVE</a>
                      </li>
                      <li>
                        <a href="#sub-tabs-2">
                          <span class="day-of-week">tue</span>
                          <span class="day-of-month">23 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-3">
                          <span class="day-of-week">today</span>
                          <span class="day-of-month">24 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-4">
                          <span class="day-of-week">thu</span>
                          <span class="day-of-month">25 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-5">
                          <span class="day-of-week">fri</span>
                          <span class="day-of-month">26 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sat</span>
                          <span class="day-of-month">27 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sun</span>
                          <span class="day-of-month">28 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-7">
                          <span class="day-of-week">mon</span>
                          <span class="day-of-month">29 aug</span>
                        </a>
                      </li>
                      <div class="date-picker-wrapper">
                        <div class="calender-wrapper">
                          <button class="btn-calender btn-show" id="btn-show-calender">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z"
                                fill="#A52457" />
                              <path
                                d="M20 9.83997H4C3.45 9.83997 3 10.29 3 10.84V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V10.84C21 10.29 20.55 9.83997 20 9.83997ZM9.21 18.21C9.16 18.25 9.11 18.3 9.06 18.33C9 18.37 8.94 18.4 8.88 18.42C8.82 18.45 8.76 18.47 8.7 18.48C8.63 18.49 8.57 18.5 8.5 18.5C8.37 18.5 8.24 18.47 8.12 18.42C7.99 18.37 7.89 18.3 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 7.99 16.63 8.12 16.58C8.3 16.5 8.5 16.48 8.7 16.52C8.76 16.53 8.82 16.55 8.88 16.58C8.94 16.6 9 16.63 9.06 16.67C9.11 16.71 9.16 16.75 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.21 14.71C9.02 14.89 8.76 15 8.5 15C8.24 15 7.98 14.89 7.79 14.71C7.61 14.52 7.5 14.26 7.5 14C7.5 13.74 7.61 13.48 7.79 13.29C8.07 13.01 8.51 12.92 8.88 13.08C9.01 13.13 9.12 13.2 9.21 13.29C9.39 13.48 9.5 13.74 9.5 14C9.5 14.26 9.39 14.52 9.21 14.71ZM12.71 18.21C12.52 18.39 12.26 18.5 12 18.5C11.74 18.5 11.48 18.39 11.29 18.21C11.11 18.02 11 17.76 11 17.5C11 17.24 11.11 16.98 11.29 16.79C11.66 16.42 12.34 16.42 12.71 16.79C12.89 16.98 13 17.24 13 17.5C13 17.76 12.89 18.02 12.71 18.21ZM12.71 14.71C12.66 14.75 12.61 14.79 12.56 14.83C12.5 14.87 12.44 14.9 12.38 14.92C12.32 14.95 12.26 14.97 12.2 14.98C12.13 14.99 12.07 15 12 15C11.74 15 11.48 14.89 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.38 13.2 11.49 13.13 11.62 13.08C11.99 12.92 12.43 13.01 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71ZM16.21 18.21C16.02 18.39 15.76 18.5 15.5 18.5C15.24 18.5 14.98 18.39 14.79 18.21C14.61 18.02 14.5 17.76 14.5 17.5C14.5 17.24 14.61 16.98 14.79 16.79C15.16 16.42 15.84 16.42 16.21 16.79C16.39 16.98 16.5 17.24 16.5 17.5C16.5 17.76 16.39 18.02 16.21 18.21ZM16.21 14.71C16.16 14.75 16.11 14.79 16.06 14.83C16 14.87 15.94 14.9 15.88 14.92C15.82 14.95 15.76 14.97 15.7 14.98C15.63 14.99 15.56 15 15.5 15C15.24 15 14.98 14.89 14.79 14.71C14.61 14.52 14.5 14.26 14.5 14C14.5 13.74 14.61 13.48 14.79 13.29C14.89 13.2 14.99 13.13 15.12 13.08C15.3 13 15.5 12.98 15.7 13.02C15.76 13.03 15.82 13.05 15.88 13.08C15.94 13.1 16 13.13 16.06 13.17C16.11 13.21 16.16 13.25 16.21 13.29C16.39 13.48 16.5 13.74 16.5 14C16.5 14.26 16.39 14.52 16.21 14.71Z"
                                fill="#A52457" />
                            </svg>
                          </button>
                          <div class="calendar datepicker-mobile"></div>
                        </div>
                      </div>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">UEFA Europa League</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">UEFA Europa League</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-3">3</div>
                    <div id="sub-tabs-4">4</div>
                    <div id="sub-tabs-5">5</div>
                    <div id="sub-tabs-6">6</div>
                    <div id="sub-tabs-7">7</div>
                  </div>
                </div>
                <!-- Hot Match tab content -->
              </div>
              <div id="tabs-3">
                <!-- Result tab content -->
                <div class="league-content-wrapper">
                  <div id="result-league-tabs">
                    <ul class="day-tabs-nav">
                      <li>
                        <a href="#sub-tabs-1" class="live-status">LIVE</a>
                      </li>
                      <li>
                        <a href="#sub-tabs-2">
                          <span class="day-of-week">tue</span>
                          <span class="day-of-month">23 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-3">
                          <span class="day-of-week">today</span>
                          <span class="day-of-month">24 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-4">
                          <span class="day-of-week">thu</span>
                          <span class="day-of-month">25 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-5">
                          <span class="day-of-week">fri</span>
                          <span class="day-of-month">26 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sat</span>
                          <span class="day-of-month">27 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-6">
                          <span class="day-of-week">sun</span>
                          <span class="day-of-month">28 aug</span>
                        </a>
                      </li>
                      <li>
                        <a href="#sub-tabs-7">
                          <span class="day-of-week">mon</span>
                          <span class="day-of-month">29 aug</span>
                        </a>
                      </li>
                      <div class="date-picker-wrapper">
                        <div class="calender-wrapper">
                          <button class="btn-calender btn-show" id="btn-show-calender">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z"
                                fill="#A52457" />
                              <path
                                d="M20 9.83997H4C3.45 9.83997 3 10.29 3 10.84V17C3 20 4.5 22 8 22H16C19.5 22 21 20 21 17V10.84C21 10.29 20.55 9.83997 20 9.83997ZM9.21 18.21C9.16 18.25 9.11 18.3 9.06 18.33C9 18.37 8.94 18.4 8.88 18.42C8.82 18.45 8.76 18.47 8.7 18.48C8.63 18.49 8.57 18.5 8.5 18.5C8.37 18.5 8.24 18.47 8.12 18.42C7.99 18.37 7.89 18.3 7.79 18.21C7.61 18.02 7.5 17.76 7.5 17.5C7.5 17.24 7.61 16.98 7.79 16.79C7.89 16.7 7.99 16.63 8.12 16.58C8.3 16.5 8.5 16.48 8.7 16.52C8.76 16.53 8.82 16.55 8.88 16.58C8.94 16.6 9 16.63 9.06 16.67C9.11 16.71 9.16 16.75 9.21 16.79C9.39 16.98 9.5 17.24 9.5 17.5C9.5 17.76 9.39 18.02 9.21 18.21ZM9.21 14.71C9.02 14.89 8.76 15 8.5 15C8.24 15 7.98 14.89 7.79 14.71C7.61 14.52 7.5 14.26 7.5 14C7.5 13.74 7.61 13.48 7.79 13.29C8.07 13.01 8.51 12.92 8.88 13.08C9.01 13.13 9.12 13.2 9.21 13.29C9.39 13.48 9.5 13.74 9.5 14C9.5 14.26 9.39 14.52 9.21 14.71ZM12.71 18.21C12.52 18.39 12.26 18.5 12 18.5C11.74 18.5 11.48 18.39 11.29 18.21C11.11 18.02 11 17.76 11 17.5C11 17.24 11.11 16.98 11.29 16.79C11.66 16.42 12.34 16.42 12.71 16.79C12.89 16.98 13 17.24 13 17.5C13 17.76 12.89 18.02 12.71 18.21ZM12.71 14.71C12.66 14.75 12.61 14.79 12.56 14.83C12.5 14.87 12.44 14.9 12.38 14.92C12.32 14.95 12.26 14.97 12.2 14.98C12.13 14.99 12.07 15 12 15C11.74 15 11.48 14.89 11.29 14.71C11.11 14.52 11 14.26 11 14C11 13.74 11.11 13.48 11.29 13.29C11.38 13.2 11.49 13.13 11.62 13.08C11.99 12.92 12.43 13.01 12.71 13.29C12.89 13.48 13 13.74 13 14C13 14.26 12.89 14.52 12.71 14.71ZM16.21 18.21C16.02 18.39 15.76 18.5 15.5 18.5C15.24 18.5 14.98 18.39 14.79 18.21C14.61 18.02 14.5 17.76 14.5 17.5C14.5 17.24 14.61 16.98 14.79 16.79C15.16 16.42 15.84 16.42 16.21 16.79C16.39 16.98 16.5 17.24 16.5 17.5C16.5 17.76 16.39 18.02 16.21 18.21ZM16.21 14.71C16.16 14.75 16.11 14.79 16.06 14.83C16 14.87 15.94 14.9 15.88 14.92C15.82 14.95 15.76 14.97 15.7 14.98C15.63 14.99 15.56 15 15.5 15C15.24 15 14.98 14.89 14.79 14.71C14.61 14.52 14.5 14.26 14.5 14C14.5 13.74 14.61 13.48 14.79 13.29C14.89 13.2 14.99 13.13 15.12 13.08C15.3 13 15.5 12.98 15.7 13.02C15.76 13.03 15.82 13.05 15.88 13.08C15.94 13.1 16 13.13 16.06 13.17C16.11 13.21 16.16 13.25 16.21 13.29C16.39 13.48 16.5 13.74 16.5 14C16.5 14.26 16.39 14.52 16.21 14.71Z"
                                fill="#A52457" />
                            </svg>
                          </button>
                          <div class="calendar datepicker-mobile"></div>
                        </div>
                      </div>
                    </ul>
                    <div id="sub-tabs-1">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">UEFA Europa League</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-2">
                      <div class="list-league-match">
                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">England</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="league-match-item">
                          <div class="league-info">
                            <img src="./images/league.png" alt="" class="league-image" />
                            <span class="league-name">UEFA Europa League</span>
                          </div>
                          <div class="list-match">
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status live-status">Live</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                                <span class="sign">HT</span>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                    <span class="status upcoming-status">Up Coming</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">5 : 0</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                            <div class="match-item">
                              <div class="left-row">
                                <div class="match-info">
                                  <div class="match-time">
                                    <span class="time">13:30</span>
                                  </div>
                                  <span class="league-match-name">Premier League</span>
                                </div>
                              </div>
                              <div class="right-row">
                                <div class="list-club-wrapper">
                                  <div class="club-item first-club">
                                    <span class="club-name">Liverpool</span>
                                    <img src="./images/mu-club.png" alt="" class="club-image">
                                  </div>
                                  <span class="score">-</span>
                                  <div class="club-item">
                                    <img src="./images/chesea-club.png" alt="" class="club-image">
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                                <button class="btn-watch">Watch Now</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="sub-tabs-3">3</div>
                    <div id="sub-tabs-4">4</div>
                    <div id="sub-tabs-5">5</div>
                    <div id="sub-tabs-6">6</div>
                    <div id="sub-tabs-7">7</div>
                  </div>
                </div>
                <!-- Result tab content -->
              </div>
            </div>
          </div>

          <div id="champions" class="tabcontent">
            champions content
          </div>

          <div id="europa" class="tabcontent">
            europa content
          </div>

          <div id="premier" class="tabcontent">
            premier content
          </div>
          <div id="la-liga" class="tabcontent">
            la liga content
          </div>
          <div id="bundesliga" class="tabcontent">
            bundesliga content
          </div>
          <div id="seria" class="tabcontent">
            seria content
          </div>
          <div id="ligue-1" class="tabcontent">
            ligue-1 content
          </div>
          <div id="worldcup" class="tabcontent">
            worldcup content
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script type="text/javascript">
  $('document').ready(function () {
    $('.countdown').final_countdown({
      start: toTimestamp('2022-10-20'),
      end: toTimestamp('2022-11-29'),
      now: (new Date().getTime()) / 1000,
      seconds: {
        borderColor: '#50FFEE',
        borderWidth: '3'
      },
      minutes: {
        borderColor: '#50FFEE',
        borderWidth: '3'
      },
      hours: {
        borderColor: '#50FFEE',
        borderWidth: '3'
      },
      days: {
        borderColor: '#50FFEE',
        borderWidth: '3'
      }
    }, function () {
      // call back when finish
    });
  });

  $("#all-league-tabs").tabs({
    active: 0,
  });

  $("#shedule-league-tabs").tabs({
    active: 1
  })

  $("#hot-match-league-tabs").tabs({
    active: 1
  })

  $("#result-league-tabs").tabs({
    active: 1
  })

  function toTimestamp(strDate) {
    var datum = (new Date(strDate)).getTime()
    return datum / 1000;
  }

  const topMatchTodaySlider = $('.list-top-match-today').slick({
    speed: 500,
    autoplaySpeed: 2000,
    // autoplay: true,
    infinite: true,
    swipe: true,
    fade: false,
    dots: false,
    arrows: false,
    slidesToShow: 5,
    centerMode: true,
    variableWidth: true,
    slidesToScroll: 2,
    responsive: [{
      // breakpoint: 1400,
      // settings: {
      //   slidesToShow: 3
      // }
    },
    // {
    //   breakpoint: 992,
    //   settings: {
    //     slidesToShow: 2
    //   }
    // },
    {
      breakpoint: 768,
      settings: {
        speed: 500,
        autoplaySpeed: 2000,
        autoplay: true,
        infinite: true,
        swipe: true,
        slidesToScroll: 2,
        centerMode: false
      }
    }
    ]
  });
  $(".list-top-match-today-slide-wrapper .btn-prev").on("click", function () {
    topMatchTodaySlider.slick("prev");
  });
  $(".list-top-match-today-slide-wrapper .btn-next").on("click", function () {
    topMatchTodaySlider.slick("next");
  });

  $(".list-group-wrapper").hide()
  $(".arrow-up").hide()
  $(".btn-control-group-list").on('click', function () {
    const listGroupElement = $(".list-group-wrapper")
    listGroupElement.slideToggle(300)
    $(".arrow-up").toggle()
    $(".arrow-down").toggle()
  })
</script>

</html>
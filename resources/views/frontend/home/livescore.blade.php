<style>
    .owl-prev:after,
    .owl-next:after {
        content: "";
        font-family: "FontAwesome";
        position: absolute;
        font-size: 17px;
        color: #fff !important;
        padding: 13px 19px;
        background: #2bb679;
        border-radius: 50%;
    }

    .owl-nav {
        display: flex;
        position: absolute;
        width: 100%;
        top: 36%;
    }
</style>
<div id="matchCards" class="score_carousel owl-carousel owl-theme mt-0 py-2">
   
</div>



<script>
    let matches = [
        {
            "id": "e35f8bd6-36f8-4cf4-b736-6a74fa5cf34c",
            "name": "Pakistan vs South Africa, 2nd Test",
            "matchType": "test",
            "status": "Day 3: Lunch Break - South Africa trail by 48 runs",
            "venue": "Rawalpindi Cricket Stadium, Rawalpindi",
            "date": "2025-10-20",
            "dateTimeGMT": "2025-10-20T04:30:00",
            "teams": [
                "Pakistan",
                "South Africa"
            ],
            "teamInfo": [
                {
                    "name": "Pakistan",
                    "shortname": "PAK",
                    "img": "https://g.cricapi.com/iapi/66-637877075103236690.webp?w=48"
                },
                {
                    "name": "South Africa",
                    "shortname": "RSA",
                    "img": "https://g.cricapi.com/iapi/82-637877071839088912.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 333,
                    "w": 10,
                    "o": 113.4,
                    "inning": "Pakistan Inning 1"
                },
                {
                    "r": 285,
                    "w": 8,
                    "o": 94,
                    "inning": "South Africa Inning 1"
                }
            ],
            "series_id": "6dbe4015-9930-44cd-ac38-7107c8342834",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "21496b85-f00c-4ae1-b345-986b3e61966a",
            "name": "Zimbabwe vs Afghanistan, One-off Test",
            "matchType": "test",
            "status": "Day 2: Stumps - Afghanistan trail by 198 runs",
            "venue": "Harare Sports Club, Harare",
            "date": "2025-10-20",
            "dateTimeGMT": "2025-10-20T08:00:00",
            "teams": [
                "Zimbabwe",
                "Afghanistan"
            ],
            "teamInfo": [
                {
                    "name": "Afghanistan",
                    "shortname": "AFG",
                    "img": "https://g.cricapi.com/iapi/1-637877075587179422.webp?w=48"
                },
                {
                    "name": "Zimbabwe",
                    "shortname": "ZIM",
                    "img": "https://g.cricapi.com/iapi/575-637877079629985215.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 127,
                    "w": 10,
                    "o": 32.3,
                    "inning": "Afghanistan Inning 1"
                },
                {
                    "r": 359,
                    "w": 10,
                    "o": 103,
                    "inning": "Zimbabwe Inning 1"
                },
                {
                    "r": 34,
                    "w": 1,
                    "o": 12,
                    "inning": "Afghanistan Inning 2"
                }
            ],
            "series_id": "44159a47-99f5-4ed7-b394-8663be093a05",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "4988cc5d-d610-4bdc-9f26-d6a756d3b57d",
            "name": "Western Province vs Dolphins, 13th Match",
            "matchType": "test",
            "status": "Day 1: Stumps - Dolphins opt to bowl",
            "venue": "Newlands, Cape Town",
            "date": "2025-10-21",
            "dateTimeGMT": "2025-10-21T08:00:00",
            "teams": [
                "Western Province",
                "Dolphins"
            ],
            "teamInfo": [
                {
                    "name": "Dolphins",
                    "shortname": "DOL",
                    "img": "https://g.cricapi.com/iapi/20-637993514627926036.webp?w=48"
                },
                {
                    "name": "Western Province",
                    "shortname": "WPR",
                    "img": "https://g.cricapi.com/iapi/104-637987555401464222.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 324,
                    "w": 6,
                    "o": 95,
                    "inning": "Western Province Inning 1"
                }
            ],
            "series_id": "cd7b042c-8de3-49c6-a000-b082e2d4508d",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "76322b16-cc99-4b7a-a56b-f2687ff9da19",
            "name": "Lions vs North West, 15th Match",
            "matchType": "test",
            "status": "Day 1: Stumps - North West trail by 216 runs",
            "venue": "The Wanderers Stadium, Johannesburg",
            "date": "2025-10-21",
            "dateTimeGMT": "2025-10-21T08:00:00",
            "teams": [
                "Lions",
                "North West"
            ],
            "teamInfo": [
                {
                    "name": "Lions",
                    "shortname": "LIONS",
                    "img": "https://g.cricapi.com/iapi/43-638016114998237773.webp?w=48"
                },
                {
                    "name": "North West",
                    "shortname": "NWEST",
                    "img": "https://g.cricapi.com/iapi/60-637991981808951763.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 239,
                    "w": 10,
                    "o": 79.5,
                    "inning": "Lions Inning 1"
                },
                {
                    "r": 23,
                    "w": 2,
                    "o": 9,
                    "inning": "North West Inning 1"
                }
            ],
            "series_id": "cd7b042c-8de3-49c6-a000-b082e2d4508d",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "5543e876-5b70-464a-a515-b317cf4e51fb",
            "name": "Titans vs Warriors, 16th Match",
            "matchType": "test",
            "status": "Day 1: Stumps - Titans trail by 236 runs",
            "venue": "SuperSport Park, Centurion",
            "date": "2025-10-21",
            "dateTimeGMT": "2025-10-21T08:00:00",
            "teams": [
                "Titans",
                "Warriors"
            ],
            "teamInfo": [
                {
                    "name": "Titans",
                    "shortname": "TITNS",
                    "img": "https://g.cricapi.com/iapi/89-637987557693726758.webp?w=48"
                },
                {
                    "name": "Warriors",
                    "shortname": "WAR",
                    "img": "https://g.cricapi.com/iapi/98-637987556857963180.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 244,
                    "w": 10,
                    "o": 76.1,
                    "inning": "Warriors Inning 1"
                },
                {
                    "r": 8,
                    "w": 0,
                    "o": 5,
                    "inning": "Titans Inning 1"
                }
            ],
            "series_id": "cd7b042c-8de3-49c6-a000-b082e2d4508d",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "d81a57c2-6b74-48db-bee9-513ca52d5af1",
            "name": "KwaZulu-Natal Inland vs Boland, 14th Match",
            "matchType": "test",
            "status": "Day 1: Stumps - Boland trail by 284 runs",
            "venue": "City Oval, Pietermaritzburg",
            "date": "2025-10-21",
            "dateTimeGMT": "2025-10-21T07:00:00",
            "teams": [
                "KwaZulu-Natal Inland",
                "Boland"
            ],
            "teamInfo": [
                {
                    "name": "Boland",
                    "shortname": "BL",
                    "img": "https://h.cricapi.com/img/icon512.png"
                },
                {
                    "name": "KwaZulu-Natal Inland",
                    "shortname": "KZ",
                    "img": "https://h.cricapi.com/img/icon512.png"
                }
            ],
            "score": [
                {
                    "r": 298,
                    "w": 10,
                    "o": 94,
                    "inning": "Boland Inning 1"
                },
                {
                    "r": 14,
                    "w": 0,
                    "o": 2,
                    "inning": "KwaZulu-Natal Inland Inning 1"
                }
            ],
            "series_id": "cd7b042c-8de3-49c6-a000-b082e2d4508d",
            "fantasyEnabled": true,
            "bbbEnabled": false,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": false
        },
        {
            "id": "ea479cff-ddbe-48e0-9e4a-528f61a8a175",
            "name": "Hobart Hurricanes Women vs Sydney Thunder Women, 6th Match",
            "matchType": "t20",
            "status": "Hobart Hurricanes Women won by 5 wkts",
            "venue": "Cricket Central, Sydney",
            "date": "2025-10-22",
            "dateTimeGMT": "2025-10-22T03:30:00",
            "teams": [
                "Hobart Hurricanes Women",
                "Sydney Thunder Women"
            ],
            "teamInfo": [
                {
                    "name": "Hobart Hurricanes Women",
                    "shortname": "HB-W",
                    "img": "https://g.cricapi.com/iapi/2635-638040172943294988.webp?w=48"
                },
                {
                    "name": "Sydney Thunder Women",
                    "shortname": "ST-W",
                    "img": "https://g.cricapi.com/iapi/2636-638040169751591741.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 92,
                    "w": 10,
                    "o": 17.4,
                    "inning": "Sydney Thunder Women Inning 1"
                },
                {
                    "r": 95,
                    "w": 5,
                    "o": 16,
                    "inning": "Hobart Hurricanes Women Inning 1"
                }
            ],
            "series_id": "f6f07506-8226-4882-8b03-fadb1e696826",
            "fantasyEnabled": true,
            "bbbEnabled": true,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": true
        },
        {
            "id": "e2d6acf3-19ad-4deb-8124-69faa696f4a7",
            "name": "Perth Scorchers Women vs Sydney Sixers Women, 5th Match",
            "matchType": "t20",
            "status": "Perth Scorchers Women won by 5 wkts",
            "venue": "Cricket Central, Sydney",
            "date": "2025-10-21",
            "dateTimeGMT": "2025-10-21T23:00:00",
            "teams": [
                "Perth Scorchers Women",
                "Sydney Sixers Women"
            ],
            "teamInfo": [
                {
                    "name": "Perth Scorchers Women",
                    "shortname": "PS-W",
                    "img": "https://g.cricapi.com/iapi/2656-638040167042932787.webp?w=48"
                },
                {
                    "name": "Sydney Sixers Women",
                    "shortname": "SS-W",
                    "img": "https://g.cricapi.com/iapi/2626-638040170781201689.webp?w=48"
                }
            ],
            "score": [
                {
                    "r": 127,
                    "w": 10,
                    "o": 20,
                    "inning": "Sydney Sixers Women Inning 1"
                },
                {
                    "r": 128,
                    "w": 5,
                    "o": 18.3,
                    "inning": "Perth Scorchers Women Inning 1"
                }
            ],
            "series_id": "f6f07506-8226-4882-8b03-fadb1e696826",
            "fantasyEnabled": true,
            "bbbEnabled": true,
            "hasSquad": true,
            "matchStarted": true,
            "matchEnded": true
        }
    ]



    const container = document.getElementById("matchCards");
    container.innerHTML = matches.map(match => createCard(match)).join("");

    function createCard(match) {
        const team1 = match.teamInfo[0];
        const team2 = match.teamInfo[1];
        const score = match.score || [];

        const score1 = getScoreByTeam(team1.name, score);
        const score2 = getScoreByTeam(team2.name, score);

        return `
  <div class="item"> <!-- Owl Carousel item -->
    <div class="card shadow">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <p class="text-truncate f-11">${match.name}</p>
          <span class="f-12 text-uppercase">${match.matchType}</span>
        </div>

        <div>
          <div class="first-team d-flex justify-content-between align-items-center mt-2">
            <div class="f-12 d-flex align-items-center">
              <div class="card"><div class="card-body p-0">
                <img class="liveCardImgSize" src="${team1.img}" alt="">
              </div></div>
              <span class="f-12 pl-2">${team1.shortname}</span>
            </div>
            <div class="f-12">${score1}</div>
          </div>
          <div class="second-team d-flex justify-content-between align-items-center mt-2">
            <div class="d-flex align-items-center">
              <div class="card"><div class="card-body p-0">
                <img class="liveCardImgSize" src="${team2.img}" alt="">
              </div></div>
              <span class="f-12 pl-2">${team2.shortname}</span>
            </div>
            <div class="f-12">${score2}</div>
          </div>
        </div>

        <div class="mt-2">
          <p class="text-truncate f-11">${match.status}</p>
        </div>
      </div>
    </div>
  </div>
  `;
    }

    function getScoreByTeam(teamName, scores) {
        const teamScores = scores.filter(s =>
            s.inning.toLowerCase().includes(teamName.toLowerCase())
        );
        if (teamScores.length === 0) return "-";
        if (teamScores.length === 1) {
            const s = teamScores[0];
            return `${s.r}-${s.w} (${s.o})`;
        }
        const firstInning = teamScores[0];
        const lastInning = teamScores[teamScores.length - 1];
        return `${firstInning.r} & ${lastInning.r}-${lastInning.w} (${lastInning.o})`;
    }





</script>
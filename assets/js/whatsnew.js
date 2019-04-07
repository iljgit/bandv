var WNew = {
    data: [
        {
            date: '07 Apr 2019',
            target: 'news.php?select=41',
            title: 'Burnside Volunteering Day',
            detail: 'A gloomy day - but many hands did make light work'
        },
        {
            date: '03 Apr 2019',
            target: 'news.php?select=40',
            title: 'Trevor Taylor Pavilion re-dedication',
            detail: 'A special day commemorating a special person'
        },
        {
            date: '23 Mar 2019',
            target: 'slug-pellets.php',
            title: 'Important news about the use of non-organic pest control',
            detail: 'Changes in the law come into effect in 2020 - are you prepared?'
        },
        {
            date: '24 Feb 2019',
            target: 'burnsideorchard.php',
            title: 'The Community Orchard at Burnside',
            detail: 'There have been some exciting new developments'
        },
        {
            date: '11 Jan 2019',
            target: 'quiz3.php',
            title: 'Christmas quiz',
            detail: 'Here are the answers to our festive quiz.'
        },
        {
            date: '15 Nov 2018',
            target: 'digest/trevortaylor.php',
            title: 'Trevor Taylor',
            detail: 'As a tribute to Trevor Taylor, our Honorary President, we have set up a Weeder\s Digest page dedicated to the enduring impact he had on the Society'
        },
        {
            date: '15 Nov 2018',
            target: 'videos.php',
            title: 'When Radio 105 visited Vinery Road',
            detail: 'It has taken a while for us to catch up, but here is a really interesting interview with the chicken co-op (coop?) at Vinery Road'
        },
        {
            date: '09 Nov 2018',
            target: 'burnside.php',
            title: 'Burnside orchard',
            detail: 'A list of the trees to be found in the orchard (near the Store)'
        },
        {
            date: '09 Nov 2018',
            target: 'documents.php',
            title: 'Latest accounts',
            detail: 'The accounts for the year ending September 2017 are now available'
        },
        {
            date: '08 Nov 2018',
            target: 'news.php?select=38',
            title: 'Vinery Road Burn Bin - 3<sup>rd</sup> November 2018',
            detail: 'A good opportunity to clear the site of woody waste - now with more pictures'
        },
        {
            date: '28 Oct 2018',
            target: 'news.php?select=39',
            title: 'Burnside Volunteering Day - October 2018',
            detail: 'Cold, wet, hard work, good food and a chat - just what the volunteers at Burnside on Saturday 27<sup>th</sup> were after'
        },
        {
            date: '17 Oct 2018',
            target: 'digest/annual2018.php',
            title: 'Annual experiments',
            detail: 'Joan from Burnside has chronicled her year on year assaults on the vegetable world'
        },
        {
            date: '05 Oct 2018',
            target: 'news.php?select=36',
            title: 'The first Burnside Allotment href="news.php?select=38"children\'s gathering',
            detail: 'A really fun get-together for children of all ages'
        },
        {
            date: '01 Oct 2018',
            target: 'recipes/quince.php',
            title: 'Quince paste recipe',
            detail: 'Joan from Burnside has a great recipe for quince paste'
        },
        {
            date: '29 Sep 2018',
            target: 'news.php?select=7',
            title: 'Sad news of our Honorary President, Trevor Taylor',
            detail: 'Trevor passed away on 19th September 2018'
        },
        {
            date: '22 Sep 2018',
            target: 'documents.php',
            title: 'AGM',
            detail: 'The minutes of the 2018 AGM are now available'
        },
        {
            date: '21 Sep 2018',
            target: 'news.php',
            title: 'Burnside Summer Party',
            detail: 'New pictures and a report of the Burnside summer party'
        },
        {
            date: '10 Sep 2018',
            target: 'news.php',
            title: 'Vinery Summer Party',
            detail: 'Pictures and a report of the Vinery Road summer party'
        },
        {
            date: '13 Sep 2018',
            target: 'news.php',
            title: 'Burnside Flag Week',
            detail: 'Pictures of Burnside Flag Week'
        },
        {
            date: '07 Sep 2018',
            target: 'quiz2.php',
            title: 'Summer 2018 Quiz',
            detail: 'Answers to our quiz'
        },
        {
            date: '02 Sep 2018',
            target: 'news.php',
            title: 'Burnside Volunteering Day',
            detail: 'September 2<sup>nd</sup> was a huge success and really enoyable'
        },
        {
            date: '25 Aug 2018',
            target: 'index.php',
            title: 'Home page',
            detail: 'New photo'
        },
        {
            date: '13 Aug 2018',
            target: 'notices.php',
            title: 'Noticeboard',
            detail: 'There are still some items for sale thorugh the store'
        },
        {
            date: '06 Aug 2018',
            target: 'calendar.php?select=01-Sep-2018',
            title: 'New dates for your diary',
            detail: 'Burnside volunteering day, flag week and party.  Vinery party'
        },
        {
            date: '16 Aug 2018',
            target: 'committee.php',
            title: 'Committee changes',
            detail: 'New committee members'
        },
        {
            date: '25 Jul 2018',
            target: 'quiz2.php',
            title: 'Summer quiz',
            detail: 'A short quiz to tax your horticultural mental muscles'
        },
        {
            date: '25 Jul 2018',
            target: 'recipes/chillijam.php',
            title: 'Chilli and tomato jam',
            detail: 'A quick, foolproof recipe for using surplus tomatoes'
        },
        {
            date: '22 Jul 2018',
            target: 'notices.php',
            title: 'Noticeboard',
            detail: 'New items for sale'
        }
    ],
    tgt: undefined,

    display: function() {
        var data = [], i, datum, now = new Date(), d, op = '';

        function sort (a, b) {
            return b._date - a._date;
        }

        this.tgt = document.getElementById('whatsnew');

        now.setDate(now.getDate() - 14);
        now.setHours(0, 0, 0, 0);
        now = now.valueOf();

        for (i = 0; i < this.data.length; i++) {
            datum = this.data[i];
            d = new Date(datum.date);
            d = d.valueOf();

            if (d >= now) {
                datum._date = d;
                data.push(datum);
            }
        }

        if (data.length === 0) {
            this.tgt.innerHTML = 'Nothing to look at here - move along now...<br>Better still, why not write an article for the web site?';
            return;
        }

        data.sort(sort);

        for (i = 0; i < data.length; i++) {
            datum = data[i];

            if (datum.target) {
                op += `<li style="padding-bottom: 10px;"><a class="text-primary" href="${datum.target}">${datum.title} - <i style="font-size: 0.8em">Posted ${datum.date}</i><p style="padding-top: 10px;" class="text-secondary">
                ${datum.detail} ...
                </p></a></li>`;
            }
            else {
                op += `<li>${datum.title} - <i>${datum.date}</i><p>
                ${datum.detail}
                </p></li>`;   
            }
        }

        this.tgt.innerHTML = op;
    }
};

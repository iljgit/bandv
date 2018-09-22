var WNew = {
    data: [
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
                op += `<li><a href="${datum.target}">${datum.title} - <i>${datum.date}</i><p>
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

var WNew = {
    data: [
        {
            date: '29 Jul 2018',
            target: 'committee.php',
            title: 'Committee changes',
            detail: 'Barry South leaves and Jason Daff joins'
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
            this.tgt.innerHTML = 'Nothing to look at here - move along now...';
            return;
        }

        data.sort(sort);

        for (i = 0; i < data.length; i++) {
            datum = data[i];

            op += `<a href="${datum.target}">${datum.title} - <i>${datum.date}</i><p>
            ${datum.detail}
            </p></a>`;
        }

        this.tgt.innerHTML = op;
    }
};

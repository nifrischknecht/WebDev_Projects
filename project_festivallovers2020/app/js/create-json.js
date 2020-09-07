console.log('initial JSON are beeing created');

const genresStored = [
    {
        genre: "jazz",
        sumOfFestivals: 20,
        selected: ''
    },{
        genre: "hiphop",
        sumOfFestivals: 12,
        selected: ''
    },{
        genre: "indie",
        sumOfFestivals: 33,
        selected: ''
    },{
        genre: "poprock",
        sumOfFestivals: 13,
        selected: ''
    },{
        genre: "electronic",
        sumOfFestivals: 4,
        selected: ''
    },{
        genre: "country",
        sumOfFestivals: 13,
        selected: ''
    },{
        genre: "blues",
        sumOfFestivals: 13,
        selected: ''
    },{
        genre: "reggae",
        sumOfFestivals: 13,
        selected: ''
    },{
        genre: "punk",
        sumOfFestivals: 13,
        selected: ''
    },
];

const festivalsStored = [
    {
        id: 1,
        name:   'Sur Le Lac',
        genre:  'indie',
        place:  'Eggersriet',
        canton: 'SG',
        latitude: '47.4372399',
        longitude: '9.3795058',
        date:   '25. Sept. - 26. Sept. 2020',
        description:   'Das Festival präsentiert Künstler, welche sich im Spannungsfeld zwischen verschiedensten musikalischen Strömungen und Einflüssen …',
        image:  'img/overview_indie_surlelac.png'
    },{
        id: 2,
        name:   'Diplomfeier «Web Developer»',
        genre:  'poprock',
        place:  'St. Gallen',
        canton: 'SG',
        date:   '25. Sep 2020',
        description:   'Schon bald ist es soweit … ob bestanden oder nicht, egal wir feiern unser Abschluss bis zum Umfallen!',
        image:  'img/overview_poprock_diplomfeier.png'
    },{
        id: 3,
        name:   'Stars of Sounds',
        genre:  'hiphop',
        place:  'Aarberg',
        canton: 'BE',
        date:   '08. Juli - 09. Juli 2021',
        description:   'Im Juli verwendelt sich der Stadtplatz von Aarberg wieder in die einzigartige Kulisse des Stars of Sounds. Erlebe magische …',
        image:  'img/overview_hiphop_starsofsounds.png'
    },{
        id: 4,
        name: 'Paléo Festival',
        genre: 'electronic',
        place: 'Nyon',
        canton: 'VD',
        date: '19. Juli - 24. Juli 2021',
        description: 'Bienvenue! In Nyon treffen sich jedes Jahr die ganze Grossen aus der Electronic Szene. Die Tickets sind sehr begehrt und schnell …',
        image: 'img/overview_jazz_paleo.png'
    },{
        id: 5,
        name: 'Blues & Jazz Festival',
        genre: 'jazz',
        place: 'Rapperswil',
        canton: 'SG',
        date: '29. Juni - 02. Juli 2021',
        description: 'Alles ist schön beim blues’n’jazz – sogar der Regen. Es werden neun Konzerte am Rapperswiler Hafen auf drei Bühnen …',
        image: 'img/overview_indie_surlelac.png'
    },{
        id: 6,
        name: 'Openair Basel',
        genre: 'indie',
        place: 'Basel',
        canton: 'BS',
        date: '14. Aug. - 15. Aug. 2021',
        description: 'Eine Bühne, zwei Tage und sechs Bands, kulinarische Köstlichkeiten und eine riesige Aftershowparty das alles erwartet euch … ',
        image: 'img/overview_indie_surlelac.png'
    },{
        id: 7,
        name: 'Openair St. Gallen',
        genre: 'poprock',
        place: 'St.Gallen',
        canton: 'SG',
        date: '30. Juni - 03. Juli 2021',
        description: 'Das Open Air St. Gallen hat Tradition denn es geht dieses Jahr bereits die 40. Edition über die Bühne. Nicht verpassen denn zum …',
        image: 'img/overview_indie_surlelac.png'
    },{
        id: 8,
        name: 'Open Ear Festival',
        genre: 'hiphop',
        place: 'Brunnadern',
        canton: 'SG',
        date: '16. Juli 2021',
        description: 'Das wohl kleinste Openair im Toggenburg kann sich durchaus sehen lassen. Die Devise “klein aber fein” trifft hier absolut zu und …',
        image: 'img/overview_indie_surlelac.png'
    },{
        id: 9,
        name: 'Gurten Festival',
        genre: 'poprock',
        place: 'Bern',
        canton: 'BE',
        date: '14. Juli - 17. Juli 2021',
        description: 'Party auf dem Berner Hausberg mit guter Stimmungen und legendären Auftritten. Freut euch auf fette Beats, rockige Riffs …',
        image: 'img/overview_indie_surlelac.png'
    },{
        id: 10,
        name: 'Montreux Jazz',
        genre: 'jazz',
        place: 'Montreux',
        canton: 'VD',
        date: '16. Juli 2021',
        description: 'Ein grosser See, Berge und ganz viel Jazz Musik. Bereits seit 50 Jahren wird in Montreux Musikgeschichte geschrieben …',
        image: 'img/overview_indie_surlelac.png'
    }
];

const festival_surlelac = {
    dateStart: '2020-09-25',
    cntngLeft: 43,
    cntngTotal: 12000,
    weather: 28
};

function saveLocal() {
    localStorage.setItem('genresStored', JSON.stringify(genresStored));
    console.log('genresStored localy stored');
    localStorage.setItem('festivalsStored', JSON.stringify(festivalsStored));
    console.log('festivalsStored localy stored');
    localStorage.setItem('festival_1_meta', JSON.stringify(festival_1_meta));
    console.log('festival_1_meta localy stored');
}

saveLocal();
module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            width: {
                '1/10': '10%',
                '2/10': '20%',
                '3/10': '30%',
                '4/10': '40%',
                '5/10': '50%',
                '6/10': '60%',
                '7/10': '70%',
                '8/10': '80%',
                '9/10': '90%',
            },
            textColor: {
                'primary': '#4D5567',
                'second': '#56628C',
                'third': '#9A9CA2',
                'purple': '#7E3E97',
                'grey': '#AFAFAF',
                'grey-1': '#B2B5BD',
                'yellow': '#FABD02',
                'green': '#18A75A;',
                'black': '#020000',
                'darkgray': '#3b3b3a',
                'dark': '#121212',
            },

            backgroundColor: {
                'yellow': '#FABD02',
                'primary': '#56628C',
                'second': '#E0CBF6',
                'grey': '#F6F6F6',
                'grey-1': '#F9F9F9',
                'green': '#18A75A;',
                'whitegreen': '#f3fbf6',
                'whitepink': '#f7f7f7',
                'input': '#f5f5f4',
                'darkgray': '#3B3B3A',
                'lightgray': '#AFAFAE',
                'border': '#cecece',
                'lightlightgray': '#b0b0af'
            },

            borderColor: {
                'grey': '#888888',
                'underline': '#cecece',
                'green': '#18A75A',
                'lightergray': '#c3c3c3',
                'heavygray': '#e1e1e1',
                'lightgray': '#3B3B3A26',
                'dark': '#121212'
            },
            spacing: {
                '13': '13px',
                '19': '19px',
                '20px': '20px',
                '26': '26px',
                '29': '29px',
                '35px': '35px',
                '39': '39px',
                '50': '50px',
                '55': '55px',
                '70': '70px',
                '87': '87px',
                '105': '105px',
                '27': '108px',
                '30': '120px',
                '35': '140px',
                '562': '562px',
                'minus92': '-92px',
                'minus149': '-149px',
                'minus268': '-268px',
            },
            fontSize: {
                'sm': '0.875rem',
                'base': '15px',
                '15': '15px',
                '44': '44px',
            },
            translate: {
                '3/10': '30%',
            },
            width: {
                '474': '474px',
                '495': '495px',
                '560': '560px',
                '600': '600px',
                '608': '608px',
                '1004': '1004px',
                '1232': '1232px'
            },
            height: {
                'input': '52px',
                '690': '670px',
                '739': '739px',
                '1252': '1252px'
            },
            screens: {
                'xxl': '1420px'
            }
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ]
}
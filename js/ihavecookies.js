$('body').ihavecookies({
  title: "Cookies et confidentialité",
  message: "Ce site utilise des cookies pour vous assurer la meilleure expérience sur notre site.",
  link: "/privacy/"
  delay: 2000;
  expires: 30 // 30 days
});

$('body').ihavecookies({
  cookieTypes: [
      {
          type: 'Site Preferences',
          value: 'preferences',
          description: 'These are cookies that are related to your site preferences, e.g. remembering your username, site colours, etc.'
      },
      {
          type: 'Analytics',
          value: 'analytics',
          description: 'Cookies related to site visits, browser types, etc.'
      },
      {
          type: 'Marketing',
          value: 'marketing',
          description: 'Cookies related to marketing, e.g. newsletters, social media, etc'
      }
  ],
});

$('body').ihavecookies({
  onAccept: function(){}
});

$('body').ihavecookies({
  moreInfoLabel: 'More information',
  acceptBtnLabel: 'Accept Cookies',
  advancedBtnLabel: 'Customise Cookies',
  uncheckBoxes: false // Unchecks all checkboxes on page load that have class .ihavecookies
  cookieTypesTitle: 'Select cookies to accept',
  fixedCookieTypeLabel:'Necessary',
  fixedCookieTypeDesc: 'These are cookies that are essential for the website to work correctly.',
});

# channels.SponsoredMessageReportResult

**Description** : *Status of the method call used to report a sponsored message »*

**Layer** : 211

```tl
channels.sponsoredMessageReportResultChooseOption#846f9e42 title:string options:Vector<SponsoredMessageReportOption> = channels.SponsoredMessageReportResult;
channels.sponsoredMessageReportResultAdsHidden#3e3bcf2f = channels.SponsoredMessageReportResult;
channels.sponsoredMessageReportResultReported#ad798849 = channels.SponsoredMessageReportResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**channels.sponsoredMessageReportResultChooseOption**](constructor/channels.sponsoredMessageReportResultChooseOption) | The user must choose a report option from the localized options available in options, and after selection, channels.reportSponsoredMessage must be invoked again, passing the option's option field to the option param of the method |
| [**channels.sponsoredMessageReportResultAdsHidden**](constructor/channels.sponsoredMessageReportResultAdsHidden) | Sponsored messages were hidden for the user in all chats |
| [**channels.sponsoredMessageReportResultReported**](constructor/channels.sponsoredMessageReportResultReported) | The sponsored message was reported successfully |
# channels.sponsoredMessageReportResultChooseOption

**Description** : *The user must choose a report option from the localized options available in options, and after selection, messages\.reportSponsoredMessage must be invoked again, passing the option&#039;s option field to the option param of the method*

**Layer** : 233

```tl
channels.sponsoredMessageReportResultChooseOption#846f9e42 title:string options:Vector<SponsoredMessageReportOption> = channels.SponsoredMessageReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Title of the option selection popup |
| <mark>options</mark> | [`Vector<SponsoredMessageReportOption>`](type/SponsoredMessageReportOption) | Localized list of options |

---

## Type

[channels.SponsoredMessageReportResult](type/channels.SponsoredMessageReportResult)

---

## Example

```php
$channelsSponsoredMessageReportResult = $client->channels->sponsoredMessageReportResultChooseOption(
	title : '1z5YlEtJj79QORxy',
	options : array(
		$client->sponsoredMessageReportOption(
			text : '2umfEOFGNHZSotlb',
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```
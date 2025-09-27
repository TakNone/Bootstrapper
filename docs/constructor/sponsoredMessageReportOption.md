# sponsoredMessageReportOption

**Description** : *A report option for a sponsored message &raquo;*

**Layer** : 216

```tl
sponsoredMessageReportOption#430d3150 text:string option:bytes = SponsoredMessageReportOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Localized description of the option |
| <mark>option</mark> | [`bytes`](type/bytes) | Option identifier to pass to channels.reportSponsoredMessage |

---

## Type

[SponsoredMessageReportOption](type/SponsoredMessageReportOption)

---

## Example

```php
$sponsoredMessageReportOption = $client->sponsoredMessageReportOption(
	text : 'nWh8XEzGJkCFj6lv',
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
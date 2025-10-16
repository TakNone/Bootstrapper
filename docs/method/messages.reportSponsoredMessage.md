# messages.reportSponsoredMessage

**Description** : *Report a sponsored message &raquo;, see here &raquo; for more info on the full flow*

**Layer** : 216

```tl
messages.reportSponsoredMessage#12cbf0c4 random_id:bytes option:bytes = channels.SponsoredMessageReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random_id</mark> | [`bytes`](type/bytes) | The ad's unique ID |
| <mark>option</mark> | [`bytes`](type/bytes) | Chosen report option, initially an empty string, see here » for more info on the full flow |

---

## Result

[channels.SponsoredMessageReportResult](type/channels.SponsoredMessageReportResult)

---

## Example

```php
$channelsSponsoredMessageReportResult = $client->messages->reportSponsoredMessage(
	random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
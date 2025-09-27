# messageReportOption

**Description** : *Report menu option*

**Layer** : 214

```tl
messageReportOption#7903e3d9 text:string option:bytes = MessageReportOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Option title |
| <mark>option</mark> | [`bytes`](type/bytes) | Option identifier: if the user selects this option, re-invoke messages.report, passing this option to option |

---

## Type

[MessageReportOption](type/MessageReportOption)

---

## Example

```php
$messageReportOption = $client->messageReportOption(
	text : 'm1nIohP6EKcSAMaw',
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
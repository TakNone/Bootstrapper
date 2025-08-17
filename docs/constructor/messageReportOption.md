# messageReportOption

**Description** : *Report menu option*

**Layer** : 211

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
	text : 'bQ5CUqXBmpeoAuhE',
	option : '??д?LiveProtoB9O7',
);
```
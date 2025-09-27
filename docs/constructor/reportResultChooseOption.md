# reportResultChooseOption

**Description** : *The user must choose one of the following options, and then messages\.report must be re\-invoked, passing the option&#039;s option identifier to messages\.report\.option*

**Layer** : 216

```tl
reportResultChooseOption#f0e4e0b6 title:string options:Vector<MessageReportOption> = ReportResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>title</mark> | [`string`](type/string) | Title of the option popup |
| <mark>options</mark> | [`Vector<MessageReportOption>`](type/MessageReportOption) | Available options, rendered as menu entries |

---

## Type

[ReportResult](type/ReportResult)

---

## Example

```php
$reportResult = $client->reportResultChooseOption(
	title : 'zrQyOw6KSZf2h3gc',
	options : array(
		$client->messageReportOption(
			text : 'JnpWKaOvQV6mMSLl',
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
);
```
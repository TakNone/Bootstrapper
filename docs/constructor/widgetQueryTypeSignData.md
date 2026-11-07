# widgetQueryTypeSignData

**Layer** : 233

```tl
widgetQueryTypeSignData#192047dc wallet:UserWallet sign_data:DataJSON = WidgetQueryType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallet</mark> | [`UserWallet`](type/UserWallet) | NOTHING |
| <mark>sign_data</mark> | [`DataJSON`](type/DataJSON) | NOTHING |

---

## Type

[WidgetQueryType](type/WidgetQueryType)

---

## Example

```php
$widgetQueryType = $client->widgetQueryTypeSignData(
	wallet : $client->userWallet(
		address : 'hzmRsuLqnOa1VSo2',
		balance : 6278785220633721646,
		public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		state_init : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	sign_data : $client->dataJSON(
		data : 'VOZWXIGKBiLgCHj1',
	),
);
```
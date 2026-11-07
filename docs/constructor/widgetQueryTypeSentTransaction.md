# widgetQueryTypeSentTransaction

**Layer** : 233

```tl
widgetQueryTypeSentTransaction#ff3b33b4 wallet:UserWallet msg_hash:string = WidgetQueryType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>wallet</mark> | [`UserWallet`](type/UserWallet) | NOTHING |
| <mark>msg_hash</mark> | [`string`](type/string) | NOTHING |

---

## Type

[WidgetQueryType](type/WidgetQueryType)

---

## Example

```php
$widgetQueryType = $client->widgetQueryTypeSentTransaction(
	wallet : $client->userWallet(
		address : 'RfC4JUnY9bcGluBA',
		balance : -7342439525278528576,
		public_key : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		state_init : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	msg_hash : 'Imjuq9aF4nTh5D7z',
);
```
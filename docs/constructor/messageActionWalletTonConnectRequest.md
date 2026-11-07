# messageActionWalletTonConnectRequest

**Layer** : 233

```tl
messageActionWalletTonConnectRequest#69b8c4bf flags:# accepted:flags.2?true declined:flags.3?true session_id:long expires:int topic:flags.0?string trace_id:flags.1?string dapp_name:flags.4?string = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **accepted** | [`flags.2?true`](type/true) | NOTHING |
| **declined** | [`flags.3?true`](type/true) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>expires</mark> | [`int`](type/int) | NOTHING |
| **topic** | [`flags.0?string`](type/string) | NOTHING |
| **trace_id** | [`flags.1?string`](type/string) | NOTHING |
| **dapp_name** | [`flags.4?string`](type/string) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionWalletTonConnectRequest(
	accepted : true,
	declined : true,
	session_id : 4787179008758716161,
	expires : 5,
	topic : 'v7YNGKc8suVCeAlJ',
	trace_id : 'iItq7Uok6b58K92D',
	dapp_name : 'DdQqsbP8G3RexhcL',
);
```
# requestPeerTypeCreateBot

**Layer** : 227

```tl
requestPeerTypeCreateBot#3e81e078 flags:# bot_managed:flags.0?true suggested_name:flags.1?string suggested_username:flags.2?string = RequestPeerType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **bot_managed** | [`flags.0?true`](type/true) | NOTHING |
| **suggested_name** | [`flags.1?string`](type/string) | NOTHING |
| **suggested_username** | [`flags.2?string`](type/string) | NOTHING |

---

## Type

[RequestPeerType](type/RequestPeerType)

---

## Example

```php
$requestPeerType = $client->requestPeerTypeCreateBot(
	bot_managed : true,
	suggested_name : 'rMeaF9Xm0clx46Rk',
	suggested_username : 'TakNone',
);
```
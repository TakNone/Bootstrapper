# wallet.tonConnectCloseSession

**Layer** : 233

```tl
wallet.tonConnectCloseSession#d63f61ce flags:# session_id:long body:flags.0?bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| **body** | [`flags.0?bytes`](type/bytes) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->wallet->tonConnectCloseSession(
	session_id : 2279911813254101047,
	body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
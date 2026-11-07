# wallet.tonConnectSubmitResponse

**Layer** : 233

```tl
wallet.tonConnectSubmitResponse#fac67d3c flags:# session_id:long msg_id:int body:bytes trace_id:flags.0?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>body</mark> | [`bytes`](type/bytes) | NOTHING |
| **trace_id** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->wallet->tonConnectSubmitResponse(
	session_id : -8560296530167238351,
	msg_id : 85,
	body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	trace_id : 'byJk8XaPIwVecESo',
);
```
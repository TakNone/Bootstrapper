# tonConnectRequest

**Layer** : 233

```tl
tonConnectRequest#a15f8513 flags:# session_id:long msg_id:int body:bytes expires:int topic:flags.0?string trace_id:flags.1?string = TonConnectRequest;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>body</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>expires</mark> | [`int`](type/int) | NOTHING |
| **topic** | [`flags.0?string`](type/string) | NOTHING |
| **trace_id** | [`flags.1?string`](type/string) | NOTHING |

---

## Type

[TonConnectRequest](type/TonConnectRequest)

---

## Example

```php
$tonConnectRequest = $client->tonConnectRequest(
	session_id : 4003425324295943904,
	msg_id : 58,
	body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	expires : 61,
	topic : '8QkWLSzX9pZPCcsJ',
	trace_id : 'ordk9VcsFBCufj2J',
);
```
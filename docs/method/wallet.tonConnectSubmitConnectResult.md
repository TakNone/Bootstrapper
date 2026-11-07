# wallet.tonConnectSubmitConnectResult

**Layer** : 233

```tl
wallet.tonConnectSubmitConnectResult#c2c00779 flags:# error:flags.0?true session_id:long challenge_answer:bytes body:bytes trace_id:flags.1?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **error** | [`flags.0?true`](type/true) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>challenge_answer</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>body</mark> | [`bytes`](type/bytes) | NOTHING |
| **trace_id** | [`flags.1?string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->wallet->tonConnectSubmitConnectResult(
	error : true,
	session_id : 9159952611600607008,
	challenge_answer : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	trace_id : 'SgQBN7xckoDjE6A8',
);
```
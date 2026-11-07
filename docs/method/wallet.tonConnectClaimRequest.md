# wallet.tonConnectClaimRequest

**Layer** : 233

```tl
wallet.tonConnectClaimRequest#66b57b41 flags:# declined:flags.1?true session_id:long msg_id:int app_request_id:string challenge_answer:flags.0?bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **declined** | [`flags.1?true`](type/true) | NOTHING |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>app_request_id</mark> | [`string`](type/string) | NOTHING |
| **challenge_answer** | [`flags.0?bytes`](type/bytes) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->wallet->tonConnectClaimRequest(
	declined : true,
	session_id : -305056363746749796,
	msg_id : 16,
	app_request_id : '1rWL3SsfVwBb2mdP',
	challenge_answer : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
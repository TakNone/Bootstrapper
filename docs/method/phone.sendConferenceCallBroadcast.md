# phone.sendConferenceCallBroadcast

**Layer** : 211

```tl
phone.sendConferenceCallBroadcast#c6701900 call:InputGroupCall block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>block</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->sendConferenceCallBroadcast(
	call : $client->inputGroupCall(
		id : -2395449690432676761,
		access_hash : -6849670146040924475,
	),
	block : '?Wh?LiveProto??O?',
);
```
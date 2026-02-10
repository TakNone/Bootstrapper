# phone.sendGroupCallEncryptedMessage

**Layer** : 222

```tl
phone.sendGroupCallEncryptedMessage#e5afa56d call:InputGroupCall encrypted_message:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>encrypted_message</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->phone->sendGroupCallEncryptedMessage(
	call : $client->inputGroupCall(
		id : -234761560735826638,
		access_hash : 7148732615050702169,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
# phone.sendGroupCallEncryptedMessage

**Layer** : 227

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
		id : -152039944643175657,
		access_hash : -1864693670651856612,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
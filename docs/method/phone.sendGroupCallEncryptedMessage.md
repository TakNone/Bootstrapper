# phone.sendGroupCallEncryptedMessage

**Layer** : 218

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
		id : 3261747643790052460,
		access_hash : -6423640546732564967,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
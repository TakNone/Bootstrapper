# messages.sendGroupCallEncryptedMessage

**Layer** : 216

```tl
messages.sendGroupCallEncryptedMessage#e5afa56d call:InputGroupCall encrypted_message:bytes = Bool;
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
$bool = $client->messages->sendGroupCallEncryptedMessage(
	call : $client->inputGroupCall(
		id : -99386093522841394,
		access_hash : 6276713161243649219,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
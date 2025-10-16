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
		id : 1135985786283312517,
		access_hash : -2472044573639187615,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
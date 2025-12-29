# updateGroupCallEncryptedMessage

**Layer** : 218

```tl
updateGroupCallEncryptedMessage#c957a766 call:InputGroupCall from_id:Peer encrypted_message:bytes = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>from_id</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>encrypted_message</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallEncryptedMessage(
	call : $client->inputGroupCall(
		id : 7200228201970511895,
		access_hash : -4361126546525385887,
	),
	from_id : $client->peerUser(
		user_id : 7013719679265336237,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
# updateGroupCallEncryptedMessage

**Layer** : 222

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
		id : 1033651289181173458,
		access_hash : -751679404117059360,
	),
	from_id : $client->peerUser(
		user_id : -1744198916347436369,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
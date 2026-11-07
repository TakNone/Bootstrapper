# updateGroupCallEncryptedMessage

**Description** : *A new E2E\-encrypted message or emoji reaction was received in a conference call, see here &raquo; for the decryption process*

**Layer** : 233

```tl
updateGroupCallEncryptedMessage#c957a766 call:InputGroupCall from_id:Peer encrypted_message:bytes = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference call that received the encrypted message |
| <mark>from_id</mark> | [`Peer`](type/Peer) | Sender whose blockchain public key must be used to verify the encrypted packet |
| <mark>encrypted_message</mark> | [`bytes`](type/bytes) | Complete encrypted packet |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateGroupCallEncryptedMessage(
	call : $client->inputGroupCall(
		id : 4485680495513561041,
		access_hash : -6477340224260811187,
	),
	from_id : $client->peerUser(
		user_id : 4739038623841514000,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
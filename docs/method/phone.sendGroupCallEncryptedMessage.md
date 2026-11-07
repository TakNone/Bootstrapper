# phone.sendGroupCallEncryptedMessage

**Description** : *Send an E2E\-encrypted message or emoji reaction to all participants of a conference call\. This method can only be used with conferences; see here &raquo; for the serialization and encryption process*

**Layer** : 229

```tl
phone.sendGroupCallEncryptedMessage#e5afa56d call:InputGroupCall encrypted_message:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference call that should receive the encrypted message or reaction |
| <mark>encrypted_message</mark> | [`bytes`](type/bytes) | Complete encrypted message or reaction packet produced as specified here » |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$bool = $client->phone->sendGroupCallEncryptedMessage(
	call : $client->inputGroupCall(
		id : 5805163801621949370,
		access_hash : -5147348140960747207,
	),
	encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
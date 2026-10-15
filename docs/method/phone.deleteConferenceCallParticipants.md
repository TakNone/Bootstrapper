# phone.deleteConferenceCallParticipants

**Description** : *Remove participants from a conference call &raquo;*

**Layer** : 229

```tl
phone.deleteConferenceCallParticipants#8ca60525 flags:# only_left:flags.0?true kick:flags.1?true call:InputGroupCall ids:Vector<long> block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **only_left** | [`flags.0?true`](type/true) | Whether this is a removal of members that already left the conference call |
| **kick** | [`flags.1?true`](type/true) | Whether this is a forced removal of active members in a conference call |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Conference from which to remove participants |
| <mark>ids</mark> | [`Vector<long>`](type/long) | User IDs to remove from the conference and E2E blockchain |
| <mark>block</mark> | [`bytes`](type/bytes) | Main-chain block removing the specified users and establishing a new shared key, see removing a participant » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->deleteConferenceCallParticipants(
	only_left : true,
	kick : true,
	call : $client->inputGroupCall(
		id : 3738137151964120775,
		access_hash : -1704898916101849929,
	),
	ids : array(-3075585278195029374),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
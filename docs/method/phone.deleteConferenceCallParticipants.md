# phone.deleteConferenceCallParticipants

**Description** : *Remove participants from a conference call*

**Layer** : 218

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
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The conference call |
| <mark>ids</mark> | [`Vector<long>`](type/long) | IDs of users to remove |
| <mark>block</mark> | [`bytes`](type/bytes) | The block containing an appropriate e2e.chain.changeSetGroupState event |

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
		id : -1462402990828921864,
		access_hash : -4442230242590044306,
	),
	ids : array(-1533687694991031732),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
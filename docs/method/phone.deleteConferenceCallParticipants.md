# phone.deleteConferenceCallParticipants

**Layer** : 214

```tl
phone.deleteConferenceCallParticipants#8ca60525 flags:# only_left:flags.0?true kick:flags.1?true call:InputGroupCall ids:Vector<long> block:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **only_left** | [`flags.0?true`](type/true) | NOTHING |
| **kick** | [`flags.1?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>ids</mark> | [`Vector<long>`](type/long) | NOTHING |
| <mark>block</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->deleteConferenceCallParticipants(
	only_left : true,
	kick : true,
	call : $client->inputGroupCall(
		id : 230740792476313832,
		access_hash : 1410892928039517223,
	),
	ids : array(9057056373455071151),
	block : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
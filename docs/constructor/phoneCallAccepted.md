# phoneCallAccepted

**Description** : *An accepted phone call*

**Layer** : 216

```tl
phoneCallAccepted#3660c311 flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long g_b:bytes protocol:PhoneCallProtocol = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.6?true`](type/true) | Whether this is a video call |
| <mark>id</mark> | [`long`](type/long) | ID of accepted phone call |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of phone call |
| <mark>date</mark> | [`int`](type/int) | When was the call accepted |
| <mark>admin_id</mark> | [`long`](type/long) | ID of the call creator |
| <mark>participant_id</mark> | [`long`](type/long) | ID of the other user in the call |
| <mark>g_b</mark> | [`bytes`](type/bytes) | B parameter for secure E2E phone call key exchange |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Protocol to use for phone call |

---

## Type

[PhoneCall](type/PhoneCall)

---

## Example

```php
$phoneCall = $client->phoneCallAccepted(
	video : true,
	id : 4461766800000268984,
	access_hash : 1259279390364897251,
	date : 87,
	admin_id : 5108117591846661501,
	participant_id : -4209377435823012578,
	g_b : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 38,
		max_layer : 25,
		library_versions : array('kHnWoTMzsyE5qARg'),
	),
);
```
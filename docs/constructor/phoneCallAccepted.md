# phoneCallAccepted

**Description** : *An accepted phone call*

**Layer** : 222

```tl
phoneCallAccepted#3660c311 flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long g_b:bytes protocol:PhoneCallProtocol = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 2920535274789916448,
	access_hash : -4985853877852873296,
	date : 82,
	admin_id : 3993821861491487810,
	participant_id : 7559136534254220872,
	g_b : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 81,
		max_layer : 86,
		library_versions : array('Wx61zdwlNfcJ3iet'),
	),
);
```
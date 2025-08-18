# phoneCallAccepted

**Description** : *An accepted phone call*

**Layer** : 211

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
	id : 6572997328056285519,
	access_hash : 8640822694191035644,
	date : 58,
	admin_id : 3568810815247856621,
	participant_id : -5920218016187886190,
	g_b : '????LiveProtoaz?Q5',
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 79,
		max_layer : 89,
		library_versions : array('exJTwDYqzN0ME3CW'),
	),
);
```
# phoneCallRequested

**Description** : *Requested phone call*

**Layer** : 211

```tl
phoneCallRequested#14b0ed0c flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long g_a_hash:bytes protocol:PhoneCallProtocol = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.6?true`](type/true) | Whether this is a video call |
| <mark>id</mark> | [`long`](type/long) | Phone call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>date</mark> | [`int`](type/int) | When was the phone call created |
| <mark>admin_id</mark> | [`long`](type/long) | ID of the creator of the phone call |
| <mark>participant_id</mark> | [`long`](type/long) | ID of the other participant of the phone call |
| <mark>g_a_hash</mark> | [`bytes`](type/bytes) | Parameter for key exchange |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Call protocol info to be passed to libtgvoip |

---

## Type

[PhoneCall](type/PhoneCall)

---

## Example

```php
$phoneCall = $client->phoneCallRequested(
	video : true,
	id : 2614476402125614438,
	access_hash : -8262390979753359140,
	date : 96,
	admin_id : -7707189983500243544,
	participant_id : -8969862947845421098,
	g_a_hash : '??p?kLiveProto,???',
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 43,
		max_layer : 36,
		library_versions : array('YK9Oq3tJAhsNcw0B'),
	),
);
```
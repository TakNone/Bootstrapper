# phoneCallRequested

**Description** : *Requested phone call*

**Layer** : 222

```tl
phoneCallRequested#14b0ed0c flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long g_a_hash:bytes protocol:PhoneCallProtocol = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 1236418947402764975,
	access_hash : -1886041112914695065,
	date : 97,
	admin_id : 8520142175851922744,
	participant_id : -2370739871301756125,
	g_a_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 72,
		max_layer : 76,
		library_versions : array('JGM08hd4PmarigCF'),
	),
);
```
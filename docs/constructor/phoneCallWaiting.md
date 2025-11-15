# phoneCallWaiting

**Description** : *Incoming phone call*

**Layer** : 216

```tl
phoneCallWaiting#c5226f17 flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long protocol:PhoneCallProtocol receive_date:flags.0?int = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.6?true`](type/true) | Is this a video call |
| <mark>id</mark> | [`long`](type/long) | Call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>date</mark> | [`int`](type/int) | Date |
| <mark>admin_id</mark> | [`long`](type/long) | Admin ID |
| <mark>participant_id</mark> | [`long`](type/long) | Participant ID |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Phone call protocol info |
| **receive_date** | [`flags.0?int`](type/int) | When was the phone call received |

---

## Type

[PhoneCall](type/PhoneCall)

---

## Example

```php
$phoneCall = $client->phoneCallWaiting(
	video : true,
	id : -174347690839345707,
	access_hash : 81036584169552548,
	date : 38,
	admin_id : 3417431439857119456,
	participant_id : 6089676301520790167,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 41,
		max_layer : 22,
		library_versions : array('eZUqRiKWnPsmD3bv'),
	),
	receive_date : 60,
);
```
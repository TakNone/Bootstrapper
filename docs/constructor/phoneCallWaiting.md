# phoneCallWaiting

**Description** : *Incoming phone call*

**Layer** : 218

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
	id : 2979967486798882702,
	access_hash : -769077037490527749,
	date : 38,
	admin_id : 3101957886542826136,
	participant_id : 8820059669104168361,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 41,
		max_layer : 49,
		library_versions : array('JDZwA3tVmf84YypL'),
	),
	receive_date : 82,
);
```
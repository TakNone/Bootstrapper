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
	id : 4161445005230756479,
	access_hash : 6699820776663378969,
	date : 56,
	admin_id : 7265100712608051482,
	participant_id : -1097850306104864675,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 40,
		max_layer : 97,
		library_versions : array('chzi53DJEyxCPrG4'),
	),
	receive_date : 1,
);
```
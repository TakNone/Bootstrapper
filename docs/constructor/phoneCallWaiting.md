# phoneCallWaiting

**Description** : *Incoming phone call, see here &raquo; for more info on the full flow*

**Layer** : 229

```tl
phoneCallWaiting#c5226f17 flags:# video:flags.6?true id:long access_hash:long date:int admin_id:long participant_id:long protocol:PhoneCallProtocol receive_date:flags.0?int = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 6123843893418629309,
	access_hash : -1932314483877378402,
	date : 55,
	admin_id : 4040410808182177902,
	participant_id : 3086694533113495940,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 32,
		max_layer : 56,
		library_versions : array('JHoIpdaKs1Gx2XyT'),
	),
	receive_date : 27,
);
```
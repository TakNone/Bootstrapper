# phoneCallWaiting

**Description** : *Incoming phone call*

**Layer** : 227

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
	id : -94286199189472270,
	access_hash : -752267194807227020,
	date : 76,
	admin_id : 3137426584704723841,
	participant_id : -7920854303311390837,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 30,
		max_layer : 26,
		library_versions : array('dlJ1XcMgAx8rZLGh'),
	),
	receive_date : 15,
);
```
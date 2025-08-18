# phoneCall

**Description** : *Phone call*

**Layer** : 211

```tl
phoneCall#30535af5 flags:# p2p_allowed:flags.5?true video:flags.6?true conference_supported:flags.8?true id:long access_hash:long date:int admin_id:long participant_id:long g_a_or_b:bytes key_fingerprint:long protocol:PhoneCallProtocol connections:Vector<PhoneConnection> start_date:int custom_parameters:flags.7?DataJSON = PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **p2p_allowed** | [`flags.5?true`](type/true) | Whether P2P connection to the other peer is allowed |
| **video** | [`flags.6?true`](type/true) | Whether this is a video call |
| **conference_supported** | [`flags.8?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | Call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |
| <mark>date</mark> | [`int`](type/int) | Date of creation of the call |
| <mark>admin_id</mark> | [`long`](type/long) | User ID of the creator of the call |
| <mark>participant_id</mark> | [`long`](type/long) | User ID of the other participant in the call |
| <mark>g_a_or_b</mark> | [`bytes`](type/bytes) | Parameter for key exchange |
| <mark>key_fingerprint</mark> | [`long`](type/long) | Key fingerprint |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Call protocol info to be passed to libtgvoip |
| <mark>connections</mark> | [`Vector<PhoneConnection>`](type/PhoneConnection) | List of endpoints the user can connect to exchange call data |
| <mark>start_date</mark> | [`int`](type/int) | When was the call actually started |
| **custom_parameters** | [`flags.7?DataJSON`](type/DataJSON) | Custom JSON-encoded call parameters to be passed to tgcalls |

---

## Type

[PhoneCall](type/PhoneCall)

---

## Example

```php
$phoneCall = $client->phoneCall(
	p2p_allowed : true,
	video : true,
	conference_supported : true,
	id : -3596462772034790383,
	access_hash : -1520485685502458790,
	date : 70,
	admin_id : 8477330248266269106,
	participant_id : -999290554804044274,
	g_a_or_b : '??iLiveProto1ކߔ',
	key_fingerprint : -3910069714315900038,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 50,
		max_layer : 2,
		library_versions : array('gqC5UOLdwMmclASJ'),
	),
	connections : array(
		$client->phoneConnection(
			tcp : true,
			id : -1891218016783522086,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 25,
			peer_tag : '?p??LiveProto???m[',
		),
		$client->phoneConnectionWebrtc(
			turn : true,
			stun : true,
			id : -1422061382267110815,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 16,
			username : 'TakNone',
			password : 'fqjmF3sha8t1WH2N',
		),
	),
	start_date : 23,
	custom_parameters : $client->dataJSON(
		data : 'ne8S9CJv6rAh4XFH',
	),
);
```
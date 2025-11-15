# phoneCall

**Description** : *Phone call*

**Layer** : 216

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
| **conference_supported** | [`flags.8?true`](type/true) | If set, the other party supports upgrading of the call to a conference call |
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
	id : 2311318324793194558,
	access_hash : 5131490322399046386,
	date : 34,
	admin_id : -5842321630193401534,
	participant_id : -9170514531949543519,
	g_a_or_b : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	key_fingerprint : 334049560892283839,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 88,
		max_layer : 58,
		library_versions : array('lCE3WIugc4Y20yrN'),
	),
	connections : array(
		$client->phoneConnection(
			tcp : true,
			id : 1744562939799256198,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 61,
			peer_tag : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->phoneConnectionWebrtc(
			turn : true,
			stun : true,
			id : 2638899428368949436,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 92,
			username : 'TakNone',
			password : 'y4Y1eNiPC328WjXc',
		),
	),
	start_date : 51,
	custom_parameters : $client->dataJSON(
		data : 'wvszGdhLoHKgcF9U',
	),
);
```
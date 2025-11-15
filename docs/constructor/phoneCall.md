# phoneCall

**Description** : *Phone call*

**Layer** : 218

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
	id : 3877251858482890348,
	access_hash : -5899160268374305397,
	date : 4,
	admin_id : -9117756997058521480,
	participant_id : 461087204981915337,
	g_a_or_b : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	key_fingerprint : -6727445389820691990,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 43,
		max_layer : 1,
		library_versions : array('AkJfFhNYOpTM9cD8'),
	),
	connections : array(
		$client->phoneConnection(
			tcp : true,
			id : -6948187515850110903,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 61,
			peer_tag : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->phoneConnectionWebrtc(
			turn : true,
			stun : true,
			id : -3451387833874638949,
			ip : '127.0.0.1',
			ipv6 : '127.0.0.1',
			port : 80,
			username : 'TakNone',
			password : 'ajZKPQzhfYitXVnp',
		),
	),
	start_date : 94,
	custom_parameters : $client->dataJSON(
		data : 'bOyJA9j3SEt60Npr',
	),
);
```
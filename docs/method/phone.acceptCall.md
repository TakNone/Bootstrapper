# phone.acceptCall

**Description** : *Accept incoming call*

**Layer** : 211

```tl
phone.acceptCall#3bd2b4a0 peer:InputPhoneCall g_b:bytes protocol:PhoneCallProtocol = phone.PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | The call to accept |
| <mark>g_b</mark> | [`bytes`](type/bytes) | Parameter for E2E encryption key exchange » |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Phone call settings |

---

## Result

[phone.PhoneCall](type/phone.PhoneCall)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_ALREADY_ACCEPTED** | `400` | The call was already accepted |
| **CALL_ALREADY_DECLINED** | `400` | The call was already declined |
| **CALL_OCCUPY_FAILED** | `500` | The call failed because the user is already making another call |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |
| **CALL_PROTOCOL_COMPAT_LAYER_INVALID** | `406` | The other side of the call does not support any of the VoIP protocols supported by the local client, as specified by the protocol.layer and protocol.library_versions fields |
| **CALL_PROTOCOL_FLAGS_INVALID** | `400` | Call protocol flags invalid |

---

## Example

```php
$phonePhoneCall = $client->phone->acceptCall(
	peer : $client->inputPhoneCall(
		id : -7030696001706388237,
		access_hash : -4473003950657927740,
	),
	g_b : '???s?LiveProto???T?',
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 43,
		max_layer : 20,
		library_versions : array('MpNSscQPx1RrzaIJ'),
	),
);
```
# phone.confirmCall

**Description** : *Complete phone call E2E encryption key exchange &raquo;*

**Layer** : 218

```tl
phone.confirmCall#2efe1722 peer:InputPhoneCall g_a:bytes key_fingerprint:long protocol:PhoneCallProtocol = phone.PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | The phone call |
| <mark>g_a</mark> | [`bytes`](type/bytes) | Parameter for E2E encryption key exchange » |
| <mark>key_fingerprint</mark> | [`long`](type/long) | Key fingerprint |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Phone call settings |

---

## Result

[phone.PhoneCall](type/phone.PhoneCall)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_ALREADY_DECLINED** | `400` | The call was already declined |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$phonePhoneCall = $client->phone->confirmCall(
	peer : $client->inputPhoneCall(
		id : -9127717875337282723,
		access_hash : -313320300967444092,
	),
	g_a : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	key_fingerprint : 5221317481138139541,
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 27,
		max_layer : 62,
		library_versions : array('35T9SmRy72GjL0Yo'),
	),
);
```
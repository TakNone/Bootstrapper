# phone.requestCall

**Description** : *Start a telegram phone call*

**Layer** : 214

```tl
phone.requestCall#42ff96ed flags:# video:flags.0?true user_id:InputUser random_id:int g_a_hash:bytes protocol:PhoneCallProtocol = phone.PhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.0?true`](type/true) | Whether to start a video call |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | Destination of the phone call |
| <mark>random_id</mark> | [`int`](type/int) | Random ID to avoid resending the same object |
| <mark>g_a_hash</mark> | [`bytes`](type/bytes) | Parameter for E2E encryption key exchange » |
| <mark>protocol</mark> | [`PhoneCallProtocol`](type/PhoneCallProtocol) | Phone call settings |

---

## Result

[phone.PhoneCall](type/phone.PhoneCall)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_PROTOCOL_FLAGS_INVALID** | `400` | Call protocol flags invalid |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **PARTICIPANT_VERSION_OUTDATED** | `400` | The other participant does not use an up to date telegram client with support for calls |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |
| **USER_IS_BLOCKED** | `403` | You were blocked by this user |
| **USER_PRIVACY_RESTRICTED** | `403` | The user's privacy settings do not allow you to do this |

---

## Example

```php
$phonePhoneCall = $client->phone->requestCall(
	video : true,
	user_id : $client->inputUserEmpty(),
	random_id : 47,
	g_a_hash : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	protocol : $client->phoneCallProtocol(
		udp_p2p : true,
		udp_reflector : true,
		min_layer : 25,
		max_layer : 25,
		library_versions : array('vB9QcCsNTxezdnWU'),
	),
);
```
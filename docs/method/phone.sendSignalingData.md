# phone.sendSignalingData

**Description** : *Send VoIP signaling data*

**Layer** : 218

```tl
phone.sendSignalingData#ff7a9383 peer:InputPhoneCall data:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | Phone call |
| <mark>data</mark> | [`bytes`](type/bytes) | Signaling payload |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$bool = $client->phone->sendSignalingData(
	peer : $client->inputPhoneCall(
		id : -2190631361723411000,
		access_hash : -1787695990817050951,
	),
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```
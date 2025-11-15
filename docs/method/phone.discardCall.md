# phone.discardCall

**Description** : *Refuse or end running call*

**Layer** : 216

```tl
phone.discardCall#b2cbc1c0 flags:# video:flags.0?true peer:InputPhoneCall duration:int reason:PhoneCallDiscardReason connection_id:long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **video** | [`flags.0?true`](type/true) | Whether this is a video call |
| <mark>peer</mark> | [`InputPhoneCall`](type/InputPhoneCall) | The phone call |
| <mark>duration</mark> | [`int`](type/int) | Call duration |
| <mark>reason</mark> | [`PhoneCallDiscardReason`](type/PhoneCallDiscardReason) | Why was the call discarded |
| <mark>connection_id</mark> | [`long`](type/long) | Preferred libtgvoip relay ID |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CALL_ALREADY_ACCEPTED** | `400` | The call was already accepted |
| **CALL_OCCUPY_FAILED** | `500` | The call failed because the user is already making another call |
| **CALL_PEER_INVALID** | `400` | The provided call peer object is invalid |

---

## Example

```php
$updates = $client->phone->discardCall(
	video : true,
	peer : $client->inputPhoneCall(
		id : -7990009759961776587,
		access_hash : 146716844768984356,
	),
	duration : 97,
	reason : $client->phoneCallDiscardReasonMissed(),
	connection_id : 4570436473927530809,
);
```
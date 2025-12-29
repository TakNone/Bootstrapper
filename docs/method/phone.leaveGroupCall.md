# phone.leaveGroupCall

**Description** : *Leave a group call*

**Layer** : 218

```tl
phone.leaveGroupCall#500377f9 call:InputGroupCall source:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>source</mark> | [`int`](type/int) | Your source ID |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->leaveGroupCall(
	call : $client->inputGroupCall(
		id : 8510959229066398232,
		access_hash : -2380593451219619797,
	),
	source : 66,
);
```
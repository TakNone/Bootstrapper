# phone.leaveGroupCall

**Description** : *Leave a group call*

**Layer** : 211

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
		id : -5705768146509854217,
		access_hash : -1887686780632474595,
	),
	source : 24,
);
```
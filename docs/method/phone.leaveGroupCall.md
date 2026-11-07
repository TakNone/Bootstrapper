# phone.leaveGroupCall

**Description** : *Leave a group call without ending it for other participants\. This method can be used with all group call types, see here &raquo; for more info*

**Layer** : 233

```tl
phone.leaveGroupCall#500377f9 call:InputGroupCall source:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call to leave |
| <mark>source</mark> | [`int`](type/int) | Source ID of the main group call stream |

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
		id : 6645194350645455946,
		access_hash : -2476436203477715134,
	),
	source : 14,
);
```
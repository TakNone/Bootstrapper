# phone.leaveGroupCall

**Description** : *Leave a group call*

**Layer** : 225

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
		id : -5462557225446544188,
		access_hash : -4436424646255297244,
	),
	source : 34,
);
```
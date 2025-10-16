# phone.startScheduledGroupCall

**Description** : *Start a scheduled group call*

**Layer** : 216

```tl
phone.startScheduledGroupCall#5680e342 call:InputGroupCall = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The scheduled group call |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_ALREADY_STARTED** | `403` | The groupcall has already started, you can join directly using phone.joinGroupCall |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->startScheduledGroupCall(
	call : $client->inputGroupCall(
		id : 4527287576463670912,
		access_hash : 1952761832627981716,
	),
);
```
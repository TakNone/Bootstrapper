# phone.startScheduledGroupCall

**Description** : *Start a scheduled group call*

**Layer** : 233

```tl
phone.startScheduledGroupCall#5680e342 call:InputGroupCall = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Scheduled video chat/livestream to start, before or after its scheduled date |

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
		id : 5365281430198850854,
		access_hash : -5747517263268806314,
	),
);
```
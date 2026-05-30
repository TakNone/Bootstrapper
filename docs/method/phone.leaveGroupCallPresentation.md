# phone.leaveGroupCallPresentation

**Description** : *Stop screen sharing in a group call*

**Layer** : 225

```tl
phone.leaveGroupCallPresentation#1c50d144 call:InputGroupCall = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |

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
$updates = $client->phone->leaveGroupCallPresentation(
	call : $client->inputGroupCall(
		id : 8417025601339020741,
		access_hash : 4640326147340999173,
	),
);
```
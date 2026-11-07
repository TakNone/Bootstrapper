# phone.discardGroupCall

**Description** : *Terminate a group call, ending the room for all participants\. This method can be used with all group call types, see here &raquo; for more info*

**Layer** : 233

```tl
phone.discardGroupCall#7a777135 call:InputGroupCall = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call to terminate |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_ALREADY_DISCARDED** | `400` | The group call was already discarded |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$updates = $client->phone->discardGroupCall(
	call : $client->inputGroupCall(
		id : -1401193877489476976,
		access_hash : -7507981357499480053,
	),
);
```
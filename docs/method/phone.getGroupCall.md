# phone.getGroupCall

**Description** : *Get info about a group call*

**Layer** : 218

```tl
phone.getGroupCall#41845db call:InputGroupCall limit:int = phone.GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | The group call |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of results to return, see pagination |

---

## Result

[phone.GroupCall](type/phone.GroupCall)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The group call has already ended |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$phoneGroupCall = $client->phone->getGroupCall(
	call : $client->inputGroupCall(
		id : 104820858260971311,
		access_hash : 3743197115078150829,
	),
	limit : 79,
);
```
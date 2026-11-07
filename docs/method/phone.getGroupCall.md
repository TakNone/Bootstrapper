# phone.getGroupCall

**Description** : *Get info about a group call and its participants*

**Layer** : 233

```tl
phone.getGroupCall#41845db call:InputGroupCall limit:int = phone.GroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call of any type to fetch |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of participants to return in this call (0 to return a server-defined amount). If the number of returned participants is less than groupCall.participants_count, paginate through the remaining participants using phone.getGroupParticipants, passing to offset the phone.groupCall.participants_next_offset returned by this call. This parameter behaves in a different way compared to the limit of phone.getGroupParticipants, see here » for more info |

---

## Result

[phone.GroupCall](type/phone.GroupCall)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_FORBIDDEN** | `403` | The specified group call cannot be used in this context |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$phoneGroupCall = $client->phone->getGroupCall(
	call : $client->inputGroupCall(
		id : -79812536675903712,
		access_hash : 1450192175543465786,
	),
	limit : 91,
);
```
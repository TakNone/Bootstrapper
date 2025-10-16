# phone.checkGroupCall

**Description** : *Check whether the group call Server Forwarding Unit is currently receiving the streams with the specified WebRTC source IDs\.
Returns an intersection of the source IDs specified in sources, and the source IDs currently being forwarded by the SFU*

**Layer** : 216

```tl
phone.checkGroupCall#b59cf977 call:InputGroupCall sources:Vector<int> = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call |
| <mark>sources</mark> | [`Vector<int>`](type/int) | Source IDs |

---

## Result

[Vector<int>](type/int)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |
| **GROUPCALL_JOIN_MISSING** | `400` | You haven't joined this group call |

---

## Example

```php
$int = $client->phone->checkGroupCall(
	call : $client->inputGroupCall(
		id : -7812867456077881837,
		access_hash : 6940223607550328740,
	),
	sources : array(99),
);
```
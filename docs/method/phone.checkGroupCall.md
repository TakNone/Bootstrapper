# phone.checkGroupCall

**Description** : *Check which of the specified source IDs the server still recognizes as joined to a group call\. This method can be used with all group call types, see here &raquo; for more info*

**Layer** : 229

```tl
phone.checkGroupCall#b59cf977 call:InputGroupCall sources:Vector<int> = Vector<int>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Group call whose WebRTC connections should be checked |
| <mark>sources</mark> | [`Vector<int>`](type/int) | Non-zero SSRC/source IDs of the caller's main and presentation connections |

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
		id : -8431910752821714479,
		access_hash : -163482684952900241,
	),
	sources : array(73),
);
```
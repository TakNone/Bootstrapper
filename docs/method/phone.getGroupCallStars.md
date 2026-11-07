# phone.getGroupCallStars

**Description** : *Fetch a live story&#039;s total donations and top donors, see paid live story donations &raquo;*

**Layer** : 229

```tl
phone.getGroupCallStars#6f636302 call:InputGroupCall = phone.GroupCallStars;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | Live story group call |

---

## Result

[phone.GroupCallStars](type/phone.GroupCallStars)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GROUPCALL_INVALID** | `400` | The specified group call is invalid |

---

## Example

```php
$phoneGroupCallStars = $client->phone->getGroupCallStars(
	call : $client->inputGroupCall(
		id : 7460316284079669963,
		access_hash : 7935148257585335675,
	),
);
```
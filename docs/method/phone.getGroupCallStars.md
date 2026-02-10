# phone.getGroupCallStars

**Layer** : 222

```tl
phone.getGroupCallStars#6f636302 call:InputGroupCall = phone.GroupCallStars;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |

---

## Result

[phone.GroupCallStars](type/phone.GroupCallStars)

---

## Example

```php
$phoneGroupCallStars = $client->phone->getGroupCallStars(
	call : $client->inputGroupCall(
		id : -8522862626930624900,
		access_hash : -2319912002910123351,
	),
);
```
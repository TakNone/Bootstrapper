# phone.getGroupCallStars

**Layer** : 225

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
		id : 3336670251113079719,
		access_hash : 7641521487976076982,
	),
);
```
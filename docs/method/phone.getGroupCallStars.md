# phone.getGroupCallStars

**Layer** : 227

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
		id : -7607619720227715990,
		access_hash : -4657699627306783672,
	),
);
```
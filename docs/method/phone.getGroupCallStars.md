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
		id : 5137154936706215562,
		access_hash : 5248248101557890156,
	),
);
```
# messages.getGroupCallStars

**Layer** : 218

```tl
messages.getGroupCallStars#6f636302 call:InputGroupCall = GroupCallStars;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |

---

## Result

[GroupCallStars](type/GroupCallStars)

---

## Example

```php
$groupCallStars = $client->messages->getGroupCallStars(
	call : $client->inputGroupCall(
		id : 5458501160633586149,
		access_hash : -2882722951192316206,
	),
);
```
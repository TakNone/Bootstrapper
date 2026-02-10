# userEmpty

**Description** : *Empty constructor, non\-existent user*

**Layer** : 222

```tl
userEmpty#d3bc4b7a id:long = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | User identifier or 0 |

---

## Type

[User](type/User)

---

## Example

```php
$user = $client->userEmpty(
	id : 6403759075116168477,
);
```
# birthday

**Description** : *Birthday information for a user*

**Layer** : 216

```tl
birthday#6c8e1e06 flags:# day:int month:int year:flags.0?int = Birthday;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>day</mark> | [`int`](type/int) | Birth day |
| <mark>month</mark> | [`int`](type/int) | Birth month |
| **year** | [`flags.0?int`](type/int) | (Optional) birth year |

---

## Type

[Birthday](type/Birthday)

---

## Example

```php
$birthday = $client->birthday(
	day : 19,
	month : 67,
	year : 33,
);
```
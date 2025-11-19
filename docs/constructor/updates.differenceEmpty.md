# updates.differenceEmpty

**Description** : *No events*

**Layer** : 218

```tl
updates.differenceEmpty#5d75a138 date:int seq:int = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Number of sent updates |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceEmpty(
	date : 62,
	seq : 48,
);
```
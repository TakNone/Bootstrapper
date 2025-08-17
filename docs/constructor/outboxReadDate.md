# outboxReadDate

**Description** : *Exact read date of a private message we sent to another user*

**Layer** : 211

```tl
outboxReadDate#3bb842ac date:int = OutboxReadDate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | UNIX timestamp with the read date |

---

## Type

[OutboxReadDate](type/OutboxReadDate)

---

## Example

```php
$outboxReadDate = $client->outboxReadDate(
	date : 32,
);
```
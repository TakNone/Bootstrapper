# account.takeout

**Description** : *Takeout info*

**Layer** : 211

```tl
account.takeout#4dba4501 id:long = account.Takeout;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Takeout ID |

---

## Type

[account.Takeout](type/account.Takeout)

---

## Example

```php
$accountTakeout = $client->account->takeout(
	id : 1993199578290569883,
);
```
# account.takeout

**Description** : *Takeout info*

**Layer** : 216

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
	id : 6751798196182941988,
);
```
# account.getWallPapers

**Description** : *Returns a list of available wallpapers*

**Layer** : 211

```tl
account.getWallPapers#7967d36 hash:long = account.WallPapers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[account.WallPapers](type/account.WallPapers)

---

## Example

```php
$accountWallPapers = $client->account->getWallPapers(
	hash : 8672217353291578889,
);
```
# messages.getSavedGifs

**Description** : *Get saved GIFs*

**Layer** : 218

```tl
messages.getSavedGifs#5cf09635 hash:long = messages.SavedGifs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.SavedGifs](type/messages.SavedGifs)

---

## Example

```php
$messagesSavedGifs = $client->messages->getSavedGifs(
	hash : 0,
);
```
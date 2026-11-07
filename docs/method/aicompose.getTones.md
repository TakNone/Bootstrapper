# aicompose.getTones

**Description** : *Fetch the list of saved AI composer tones &raquo; of the current user*

**Layer** : 233

```tl
aicompose.getTones#abd59201 hash:long = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash from a previously cached aicompose.tones.hash to avoid refetching the list if it hasn't changed; initially 0 |

---

## Result

[aicompose.Tones](type/aicompose.Tones)

---

## Example

```php
$aicomposeTones = $client->aicompose->getTones(
	hash : 0,
);
```
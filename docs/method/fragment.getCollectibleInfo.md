# fragment.getCollectibleInfo

**Description** : *Fetch information about a fragment collectible, see here » for more info on the full flow*

**Layer** : 211

```tl
fragment.getCollectibleInfo#be1e85ba collectible:InputCollectible = fragment.CollectibleInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>collectible</mark> | [`InputCollectible`](type/InputCollectible) | Collectible to fetch info about |

---

## Result

[fragment.CollectibleInfo](type/fragment.CollectibleInfo)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **COLLECTIBLE_INVALID** | `400` | The specified collectible is invalid |
| **COLLECTIBLE_NOT_FOUND** | `400` | The specified collectible could not be found |

---

## Example

```php
$fragmentCollectibleInfo = $client->fragment->getCollectibleInfo(
	collectible : $client->inputCollectibleUsername(
		username : 'TakNone',
	),
);
```
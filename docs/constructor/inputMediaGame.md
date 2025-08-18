# inputMediaGame

**Description** : *A game*

**Layer** : 211

```tl
inputMediaGame#d33f43f3 id:InputGame = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputGame`](type/InputGame) | The game to forward |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaGame(
	id : $client->inputGameID(
		id : -6142452051647832230,
		access_hash : -1645241695537021522,
	),
);
```
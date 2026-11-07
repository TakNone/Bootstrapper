# inputMediaGame

**Description** : *A game*

**Layer** : 233

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
		id : -1195002466605791205,
		access_hash : 5392140427765275736,
	),
);
```
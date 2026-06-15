# inputMediaGame

**Description** : *A game*

**Layer** : 227

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
		id : 1208344585537970255,
		access_hash : -3193803976367130242,
	),
);
```
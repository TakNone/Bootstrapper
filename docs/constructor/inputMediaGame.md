# inputMediaGame

**Description** : *A game*

**Layer** : 218

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
		id : -3574309313973864034,
		access_hash : 1616607359043077010,
	),
);
```
# inputMediaGame

**Description** : *A game*

**Layer** : 214

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
		id : 1146596358358346479,
		access_hash : -4337278726937080444,
	),
);
```
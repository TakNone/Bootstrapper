# inputMediaDice

**Description** : *Send a dice\-based animated sticker*

**Layer** : 227

```tl
inputMediaDice#e66fbf7b emoticon:string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji, for now ,  and  are supported |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaDice(
	emoticon : 'p8UeX3P5gHxtoMqu',
);
```
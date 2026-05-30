# inputMediaDice

**Description** : *Send a dice\-based animated sticker*

**Layer** : 222

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
	emoticon : '7iaWu8l6d3HjMhQS',
);
```
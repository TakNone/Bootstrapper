# messageMediaDice

**Description** : *Dice\-based animated sticker*

**Layer** : 216

```tl
messageMediaDice#3f7ee58b value:int emoticon:string = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>value</mark> | [`int`](type/int) | Dice value |
| <mark>emoticon</mark> | [`string`](type/string) | The emoji, for now ,  and  are supported |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaDice(
	value : 85,
	emoticon : 'Y2s1J6HcMSGmClbP',
);
```
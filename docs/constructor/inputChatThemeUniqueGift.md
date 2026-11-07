# inputChatThemeUniqueGift

**Description** : *Set a theme based on an owned or hosted collectible gift &raquo;, returned by account\.getUniqueGiftChatThemes*

**Layer** : 233

```tl
inputChatThemeUniqueGift#87e5dfe4 slug:string = InputChatTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | The slug from starGiftUnique.slug |

---

## Type

[InputChatTheme](type/InputChatTheme)

---

## Example

```php
$inputChatTheme = $client->inputChatThemeUniqueGift(
	slug : 'lU150KnpxyIeQfSz',
);
```
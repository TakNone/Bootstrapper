# inputChatThemeUniqueGift

**Description** : *Set a theme based on an owned collectible gift &raquo;, returned by account\.getUniqueGiftChatThemes*

**Layer** : 216

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
	slug : 'HVpjk4yOeXm9rNA0',
);
```
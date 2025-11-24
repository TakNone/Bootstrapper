# inputSavedStarGiftSlug

**Description** : *Points to a collectible gift obtained from a collectible gift link &raquo;*

**Layer** : 218

```tl
inputSavedStarGiftSlug#2085c238 slug:string = InputSavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug from the link |

---

## Type

[InputSavedStarGift](type/InputSavedStarGift)

---

## Example

```php
$inputSavedStarGift = $client->inputSavedStarGiftSlug(
	slug : '2IN8dzwexHLhXuvP',
);
```
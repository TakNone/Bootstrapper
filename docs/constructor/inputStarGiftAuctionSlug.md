# inputStarGiftAuctionSlug

**Description** : *Used to fetch auctions using the slug of an auction deep link &raquo;*

**Layer** : 229

```tl
inputStarGiftAuctionSlug#7ab58308 slug:string = InputStarGiftAuction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Auction deep link slug » |

---

## Type

[InputStarGiftAuction](type/InputStarGiftAuction)

---

## Example

```php
$inputStarGiftAuction = $client->inputStarGiftAuctionSlug(
	slug : '9NxBSoc3wtz7rVjI',
);
```
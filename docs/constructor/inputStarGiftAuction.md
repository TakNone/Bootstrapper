# inputStarGiftAuction

**Description** : *Used to fetch auctions using the ID of the linked collectible gift*

**Layer** : 229

```tl
inputStarGiftAuction#2e16c98 gift_id:long = InputStarGiftAuction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift_id</mark> | [`long`](type/long) | Collectible gift ID |

---

## Type

[InputStarGiftAuction](type/InputStarGiftAuction)

---

## Example

```php
$inputStarGiftAuction = $client->inputStarGiftAuction(
	gift_id : -754203200620395436,
);
```
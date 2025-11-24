# messages.getStarGiftAuctionState

**Layer** : 218

```tl
messages.getStarGiftAuctionState#5c9ff4d6 auction:InputStarGiftAuction version:int = StarGiftAuctionState;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>auction</mark> | [`InputStarGiftAuction`](type/InputStarGiftAuction) | NOTHING |
| <mark>version</mark> | [`int`](type/int) | NOTHING |

---

## Result

[StarGiftAuctionState](type/StarGiftAuctionState)

---

## Example

```php
$starGiftAuctionState = $client->messages->getStarGiftAuctionState(
	auction : $client->inputStarGiftAuction(
		gift_id : -1222692149196811854,
	),
	version : 87,
);
```
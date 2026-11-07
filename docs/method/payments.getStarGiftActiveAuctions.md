# payments.getStarGiftActiveAuctions

**Description** : *Fetches all currently active gift auctions the user has ever bid on \(including auctions where the user was outbid and their bid was returned\), as long as the auction hasn&#039;t ended yet*

**Layer** : 233

```tl
payments.getStarGiftActiveAuctions#a5d0514d hash:long = payments.StarGiftActiveAuctions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash generated as specified here » |

---

## Result

[payments.StarGiftActiveAuctions](type/payments.StarGiftActiveAuctions)

---

## Example

```php
$paymentsStarGiftActiveAuctions = $client->payments->getStarGiftActiveAuctions(
	hash : 0,
);
```
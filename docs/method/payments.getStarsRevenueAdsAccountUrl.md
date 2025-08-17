# payments.getStarsRevenueAdsAccountUrl

**Description** : *Returns a URL for a Telegram Ad platform account that can be used to set up advertisements for channel/bot in peer, paid using the Telegram Stars owned by the specified peer, see here » for more info*

**Layer** : 211

```tl
payments.getStarsRevenueAdsAccountUrl#d1d7efc5 peer:InputPeer = payments.StarsRevenueAdsAccountUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel or bot that owns the stars |

---

## Result

[payments.StarsRevenueAdsAccountUrl](type/payments.StarsRevenueAdsAccountUrl)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$paymentsStarsRevenueAdsAccountUrl = $client->payments->getStarsRevenueAdsAccountUrl(
	peer : $client->inputPeerEmpty(),
);
```
# payments.launchPrepaidGiveaway

**Description** : *Launch a prepaid giveaway &raquo;*

**Layer** : 216

```tl
payments.launchPrepaidGiveaway#5ff58f20 peer:InputPeer giveaway_id:long purpose:InputStorePaymentPurpose = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where to launch the giveaway |
| <mark>giveaway_id</mark> | [`long`](type/long) | The prepaid giveaway ID |
| <mark>purpose</mark> | [`InputStorePaymentPurpose`](type/InputStorePaymentPurpose) | Giveway parameters |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->payments->launchPrepaidGiveaway(
	peer : $client->inputPeerEmpty(),
	giveaway_id : 465849961348087628,
	purpose : $client->inputStorePaymentPremiumSubscription(
		restore : true,
		upgrade : true,
	),
);
```
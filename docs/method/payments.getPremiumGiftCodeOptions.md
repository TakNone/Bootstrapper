# payments.getPremiumGiftCodeOptions

**Description** : *Obtain a list of Telegram Premium giveaway/gift code » options*

**Layer** : 211

```tl
payments.getPremiumGiftCodeOptions#2757ba54 flags:# boost_peer:flags.0?InputPeer = Vector<PremiumGiftCodeOption>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **boost_peer** | [`flags.0?InputPeer`](type/InputPeer) | The channel that will start the giveaway |

---

## Result

[Vector<PremiumGiftCodeOption>](type/PremiumGiftCodeOption)

---

## Example

```php
$premiumGiftCodeOption = $client->payments->getPremiumGiftCodeOptions(
	boost_peer : $client->inputPeerEmpty(),
);
```
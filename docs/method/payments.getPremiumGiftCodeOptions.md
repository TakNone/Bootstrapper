# payments.getPremiumGiftCodeOptions

**Description** : *Obtain a list of Telegram Premium giveaway/gift code &raquo; options*

**Layer** : 218

```tl
payments.getPremiumGiftCodeOptions#2757ba54 flags:# boost_peer:flags.0?InputPeer = Vector<PremiumGiftCodeOption>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **boost_peer** | [`flags.0?InputPeer`](type/InputPeer) | The channel that will start the giveaway |

---

## Result

[Vector<PremiumGiftCodeOption>](type/PremiumGiftCodeOption)

---

## Example

```php
$premiumGiftCodeOption = $client->payments->getPremiumGiftCodeOptions(
	boost_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```
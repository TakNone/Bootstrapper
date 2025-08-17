# payments.connectStarRefBot

**Description** : *Join a bot's affiliate program, becoming an affiliate »*

**Layer** : 211

```tl
payments.connectStarRefBot#7ed5348a peer:InputPeer bot:InputUser = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that will become the affiliate: star commissions will be transferred to this peer's star balance |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot that offers the affiliate program |

---

## Result

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->connectStarRefBot(
	peer : $client->inputPeerEmpty(),
	bot : $client->inputUserEmpty(),
);
```
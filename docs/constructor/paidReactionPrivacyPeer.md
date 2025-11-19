# paidReactionPrivacyPeer

**Description** : *Send paid reactions as the specified peer, fetched using channels\.getSendAs*

**Layer** : 218

```tl
paidReactionPrivacyPeer#dc6cfcf0 peer:InputPeer = PaidReactionPrivacy;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to send reactions as |

---

## Type

[PaidReactionPrivacy](type/PaidReactionPrivacy)

---

## Example

```php
$paidReactionPrivacy = $client->paidReactionPrivacyPeer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```
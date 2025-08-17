# paidReactionPrivacyPeer

**Layer** : 211

```tl
paidReactionPrivacyPeer#dc6cfcf0 peer:InputPeer = PaidReactionPrivacy;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Type

[PaidReactionPrivacy](type/PaidReactionPrivacy)

---

## Example

```php
$paidReactionPrivacy = $client->paidReactionPrivacyPeer(
	peer : $client->inputPeerEmpty(),
);
```
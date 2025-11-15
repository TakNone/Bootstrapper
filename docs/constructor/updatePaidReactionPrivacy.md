# updatePaidReactionPrivacy

**Description** : *Contains the current default paid reaction privacy, see here &raquo; for more info*

**Layer** : 216

```tl
updatePaidReactionPrivacy#8b725fce private:PaidReactionPrivacy = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>private</mark> | [`PaidReactionPrivacy`](type/PaidReactionPrivacy) | Paid reaction privacy settings |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updatePaidReactionPrivacy(
	private : $client->paidReactionPrivacyDefault(),
);
```
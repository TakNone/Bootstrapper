# updatePaidReactionPrivacy

**Description** : *Contains the current default paid reaction privacy, see here » for more info*

**Layer** : 211

```tl
updatePaidReactionPrivacy#8b725fce private:PaidReactionPrivacy = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>private</mark> | [`PaidReactionPrivacy`](type/PaidReactionPrivacy) | Whether paid reaction privacy is enabled or disabled |

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
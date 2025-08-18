# requirementToContactPaidMessages

**Layer** : 211

```tl
requirementToContactPaidMessages#b4f67e93 stars_amount:long = RequirementToContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stars_amount</mark> | [`long`](type/long) | NOTHING |

---

## Type

[RequirementToContact](type/RequirementToContact)

---

## Example

```php
$requirementToContact = $client->requirementToContactPaidMessages(
	stars_amount : -5473505715354261291,
);
```
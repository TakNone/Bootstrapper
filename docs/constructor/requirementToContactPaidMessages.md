# requirementToContactPaidMessages

**Description** : *This user requires us to pay the specified amount of Telegram Stars to send them a message, see here &raquo; for the full flow*

**Layer** : 218

```tl
requirementToContactPaidMessages#b4f67e93 stars_amount:long = RequirementToContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stars_amount</mark> | [`long`](type/long) | The required amount of Telegram Stars |

---

## Type

[RequirementToContact](type/RequirementToContact)

---

## Example

```php
$requirementToContact = $client->requirementToContactPaidMessages(
	stars_amount : 4860316301810392883,
);
```
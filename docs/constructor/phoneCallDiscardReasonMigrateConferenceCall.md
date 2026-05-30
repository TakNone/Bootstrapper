# phoneCallDiscardReasonMigrateConferenceCall

**Description** : *This phone call was migrated to a conference call*

**Layer** : 225

```tl
phoneCallDiscardReasonMigrateConferenceCall#9fbbf1f7 slug:string = PhoneCallDiscardReason;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Conference link » slug |

---

## Type

[PhoneCallDiscardReason](type/PhoneCallDiscardReason)

---

## Example

```php
$phoneCallDiscardReason = $client->phoneCallDiscardReasonMigrateConferenceCall(
	slug : 'PVdnpi58XxYIyf7A',
);
```
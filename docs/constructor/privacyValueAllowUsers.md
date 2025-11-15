# privacyValueAllowUsers

**Description** : *Allow only certain users*

**Layer** : 218

```tl
privacyValueAllowUsers#b8905fb2 users:Vector<long> = PrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<long>`](type/long) | Allowed users |

---

## Type

[PrivacyRule](type/PrivacyRule)

---

## Example

```php
$privacyRule = $client->privacyValueAllowUsers(
	users : array(4814509346645606427),
);
```
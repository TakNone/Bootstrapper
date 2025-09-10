# privacyValueDisallowUsers

**Description** : *Disallow only certain users*

**Layer** : 214

```tl
privacyValueDisallowUsers#e4621141 users:Vector<long> = PrivacyRule;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>users</mark> | [`Vector<long>`](type/long) | Disallowed users |

---

## Type

[PrivacyRule](type/PrivacyRule)

---

## Example

```php
$privacyRule = $client->privacyValueDisallowUsers(
	users : array(2830417479706951241),
);
```
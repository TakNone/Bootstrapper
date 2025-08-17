# account.getPrivacy

**Description** : *Get privacy settings of current account*

**Layer** : 211

```tl
account.getPrivacy#dadbc950 key:InputPrivacyKey = account.PrivacyRules;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>key</mark> | [`InputPrivacyKey`](type/InputPrivacyKey) | Peer category whose privacy settings should be fetched |

---

## Result

[account.PrivacyRules](type/account.PrivacyRules)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PRIVACY_KEY_INVALID** | `400` | The privacy key is invalid |

---

## Example

```php
$accountPrivacyRules = $client->account->getPrivacy(
	key : $client->inputPrivacyKeyStatusTimestamp(),
);
```
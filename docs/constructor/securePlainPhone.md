# securePlainPhone

**Description** : *Phone number to use in telegram passport: it must be verified, first »*

**Layer** : 211

```tl
securePlainPhone#7d6099dd phone:string = SecurePlainData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone</mark> | [`string`](type/string) | Phone number |

---

## Type

[SecurePlainData](type/SecurePlainData)

---

## Example

```php
$securePlainData = $client->securePlainPhone(
	phone : '+1234567890',
);
```
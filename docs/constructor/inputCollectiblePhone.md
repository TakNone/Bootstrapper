# inputCollectiblePhone

**Description** : *Represents a phone number fragment collectible*

**Layer** : 211

```tl
inputCollectiblePhone#a2e214a4 phone:string = InputCollectible;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone</mark> | [`string`](type/string) | Phone number |

---

## Type

[InputCollectible](type/InputCollectible)

---

## Example

```php
$inputCollectible = $client->inputCollectiblePhone(
	phone : '+1234567890',
);
```
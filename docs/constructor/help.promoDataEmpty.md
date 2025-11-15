# help.promoDataEmpty

**Description** : *No PSA/MTProxy info is available*

**Layer** : 218

```tl
help.promoDataEmpty#98f6ac75 expires:int = help.PromoData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | Re-fetch PSA/MTProxy info after the specified number of seconds |

---

## Type

[help.PromoData](type/help.PromoData)

---

## Example

```php
$helpPromoData = $client->help->promoDataEmpty(
	expires : 44,
);
```
# payments.getSavedInfo

**Description** : *Get saved payment information*

**Layer** : 211

```tl
payments.getSavedInfo#227d824b = payments.SavedInfo;
```

---

## Result

[payments.SavedInfo](type/payments.SavedInfo)

---

## Example

```php
$paymentsSavedInfo = $client->payments->getSavedInfo();
```
# payments.getStarsTopupOptions

**Description** : *Obtain a list of Telegram Stars topup options » as starsTopupOption constructors*

**Layer** : 211

```tl
payments.getStarsTopupOptions#c00ec7d3 = Vector<StarsTopupOption>;
```

---

## Result

[Vector<StarsTopupOption>](type/StarsTopupOption)

---

## Example

```php
$starsTopupOption = $client->payments->getStarsTopupOptions();
```
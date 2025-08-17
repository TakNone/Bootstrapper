# premium.getMyBoosts

**Description** : *Obtain which peers are we currently boosting, and how many boost slots we have left*

**Layer** : 211

```tl
premium.getMyBoosts#be77b4a = premium.MyBoosts;
```

---

## Result

[premium.MyBoosts](type/premium.MyBoosts)

---

## Example

```php
$premiumMyBoosts = $client->premium->getMyBoosts();
```
# bots.getAdminedBots

**Description** : *Get a list of bots owned by the current user*

**Layer** : 211

```tl
bots.getAdminedBots#b0711d83 = Vector<User>;
```

---

## Result

[Vector<User>](type/User)

---

## Example

```php
$user = $client->bots->getAdminedBots();
```
# account.getConnectedBots

**Description** : *List all currently connected business bots »*

**Layer** : 211

```tl
account.getConnectedBots#4ea4c80f = account.ConnectedBots;
```

---

## Result

[account.ConnectedBots](type/account.ConnectedBots)

---

## Example

```php
$accountConnectedBots = $client->account->getConnectedBots();
```
# channels.getInactiveChannels

**Description** : *Get inactive channels and supergroups*

**Layer** : 227

```tl
channels.getInactiveChannels#11e831ee = messages.InactiveChats;
```

---

## Result

[messages.InactiveChats](type/messages.InactiveChats)

---

## Example

```php
$messagesInactiveChats = $client->channels->getInactiveChannels();
```
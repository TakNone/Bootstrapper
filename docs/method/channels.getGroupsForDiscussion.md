# channels.getGroupsForDiscussion

**Description** : *Get all groups that can be used as discussion groups*

**Layer** : 211

```tl
channels.getGroupsForDiscussion#f5dad378 = messages.Chats;
```

---

## Result

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->channels->getGroupsForDiscussion();
```
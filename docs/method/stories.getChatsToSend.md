# stories.getChatsToSend

**Description** : *Obtain a list of channels where the user can post stories*

**Layer** : 211

```tl
stories.getChatsToSend#a56a8b60 = messages.Chats;
```

---

## Result

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->stories->getChatsToSend();
```
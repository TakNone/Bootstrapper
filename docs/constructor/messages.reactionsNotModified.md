# messages.reactionsNotModified

**Description** : *The server\-side list of message reactions hasn&#039;t changed*

**Layer** : 214

```tl
messages.reactionsNotModified#b06fdbdf = messages.Reactions;
```

---

## Type

[messages.Reactions](type/messages.Reactions)

---

## Example

```php
$messagesReactions = $client->messages->reactionsNotModified();
```
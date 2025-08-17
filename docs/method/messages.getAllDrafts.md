# messages.getAllDrafts

**Description** : *Return all message drafts.
Returns all the latest updateDraftMessage updates related to all chats with drafts*

**Layer** : 211

```tl
messages.getAllDrafts#6a3f8d65 = Updates;
```

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->getAllDrafts();
```
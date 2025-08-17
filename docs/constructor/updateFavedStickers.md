# updateFavedStickers

**Description** : *The list of favorited stickers was changed, the client should call messages.getFavedStickers to refetch the new list*

**Layer** : 211

```tl
updateFavedStickers#e511996d = Update;
```

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateFavedStickers();
```
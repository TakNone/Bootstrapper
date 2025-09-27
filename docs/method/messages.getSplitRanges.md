# messages.getSplitRanges

**Description** : *Get message ranges for saving the user&#039;s chat history*

**Layer** : 216

```tl
messages.getSplitRanges#1cff7e08 = Vector<MessageRange>;
```

---

## Result

[Vector<MessageRange>](type/MessageRange)

---

## Example

```php
$messageRange = $client->messages->getSplitRanges();
```
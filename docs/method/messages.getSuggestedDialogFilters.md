# messages.getSuggestedDialogFilters

**Description** : *Get suggested folders*

**Layer** : 211

```tl
messages.getSuggestedDialogFilters#a29cd42c = Vector<DialogFilterSuggested>;
```

---

## Result

[Vector<DialogFilterSuggested>](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->messages->getSuggestedDialogFilters();
```